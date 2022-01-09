<?php

class DAOArtiste
{

    function addArtiste($nom, $type_artiste,$intro,$contact,$profile_artiste,$oeuvres) {

        $db = initDatabase();
        if($nom!=null && $type_artiste!=null){
            $desDir = "../../uploads/";
            $sth = $db->prepare("INSERT INTO Artiste(nom,type_artiste,intro,contact) 
                    VALUES(:nom,:type_artiste,:intro,:contact)");
            $sth->bindValue(':nom', $nom, PDO::PARAM_STR);
            $sth->bindValue(':type_artiste', $type_artiste, PDO::PARAM_STR);
            $sth->bindValue(':intro', $intro, PDO::PARAM_STR);
            $sth->bindValue(':contact', $contact, PDO::PARAM_STR);

            if ($sth->execute()) {
                $id = $db->query('SELECT MAX(id) FROM Artiste');
                $data = $id -> fetchAll(PDO::FETCH_ASSOC);
                $id = $data[0]['MAX(id)'];
                // Déplacer le fichier upload en nommant par un nouveau nom unique pour fichier
                $path = $profile_artiste['name'];
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                $fileName = $id . $nom . "." . $ext;
                $file = $desDir . $fileName;
                move_uploaded_file($profile_artiste['tmp_name'], $file);

                // Mis à jour l'artiste créée avec nom de fichier
                $db->query("UPDATE Artiste SET profile_artiste = '" . $fileName ."' WHERE id = " . $id . ";");

                if($oeuvres!=null){
                    foreach ($oeuvres as $oeuvre){
                        if($oeuvre!=null && $oeuvre!=""){
                            DAOArtiste::addOeuvre($id,$oeuvre);
                            if(DAOArtiste::addOeuvre($id,$oeuvre)){
                                echo "reussir";
                            }else{
                                echo "error d'ajouter un oeuvre";
                            }
                        }
                    }
                }else{
                    echo "reussir";
                    exit();
                }

            } else {
                //die("Erreur SQLite (permission d'écriture sur le fichier et son répertoire ?) : $sql");
                echo "error d'ajouter un artiste";
            }

        }
    }
    function addOeuvre($artiste_id,$oeuvre){
        $db = initDatabase();
        $sql2 = "INSERT INTO artiste_oeuvre(lien_oeuvre,artiste_id) " .
            "VALUES ('". $oeuvre . "','". $artiste_id . "')";
        $res2= $db->query($sql2);
        if($res2){
            return true;
            exit();
        }
    }
    function deleteArtiste($idArtiste){
        $db = initDatabase();
        $sth2 = $db->prepare("delete from Artiste where id=:id");
        $sth2->bindValue(':id', $idArtiste, PDO::PARAM_INT);
        $res = $sth2->execute();
        if($res){
            return "La suppression a réussi";
        }


    }
    // car le contrainte de clé d'étrange, il faut d'abord supprimer des oeuvres de cette artiste
    function deleteOeuvre($idArtiste){
        $db = initDatabase();

        $sth1 = $db->prepare("delete from artiste_oeuvre where artiste_id=:id");
        $sth1->bindValue(':id', $idArtiste, PDO::PARAM_INT);
        $res = $sth1->execute();
        if($res){
            DAOArtiste::deleteArtiste($idArtiste);
        }else{
            return "La suppression a échoué";
        }
    }
    function updteArtiste($idArtiste,$newNom,$newType_artiste,$newIntro,$newContact){
        $db = initDatabase();
        $sth = $db->prepare("UPDATE Artiste SET nom = :newNom, type_artiste = :newType_artiste
               ,intro = :newIntro, contact = :newContact
               WHERE id = :idArtiste");
        $sth->bindValue(':newNom', $newNom, PDO::PARAM_STR);
        $sth->bindValue(':newType_artiste', $newType_artiste, PDO::PARAM_STR);
        $sth->bindValue(':newIntro', $newIntro, PDO::PARAM_STR);
        $sth->bindValue(':newContact', $newContact, PDO::PARAM_STR);
        $sth->bindValue(':idArtiste', $idArtiste, PDO::PARAM_INT);

        if($sth->execute()) {

        }else{
            // Lever une exception si l'erreur
            http_response_code(403);

        }
    }
    function allArtistes(){
        $db = initDatabase();
        $artistes = $db->query("SELECT * FROM Artiste")->fetchAll(PDO::FETCH_OBJ);
        return $artistes;
    }


}