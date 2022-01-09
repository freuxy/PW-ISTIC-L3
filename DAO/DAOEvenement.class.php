<?php

class DAOEvenement{

    function addEvenement($titre, $dateDebutEvenement,$dateFinEvenement,$ville,$posteur,$contenu,$contact) {
        $db = initDatabase();
        if($titre!=null && $dateDebutEvenement!=null && $dateFinEvenement!= null){
            $desDir = "../../uploads/";
            $sth = $db->prepare("INSERT INTO evenement(titre,dateDebutEvenement,dateFinEvenement,ville,contenu,contact) 
                    VALUES(:titre,:dateDebutEvenement,:dateFinEvenement,:ville,:contenu,:contact) ");

            $sth->bindValue(':titre', $titre, PDO::PARAM_STR);
            $sth->bindValue(':dateDebutEvenement', $dateDebutEvenement, PDO::PARAM_STR);
            $sth->bindValue(':dateFinEvenement', $dateFinEvenement, PDO::PARAM_STR);
            $sth->bindValue(':ville', $ville, PDO::PARAM_STR);
            $sth->bindValue(':contenu', $contenu, PDO::PARAM_STR);
            $sth->bindValue(':contact', $contact, PDO::PARAM_STR);
            if ($sth->execute()) {
                // Récupérer l'id de l'artiste créée
                $id = $db->query('SELECT MAX(id) FROM evenement');
                $data = $id -> fetchAll(PDO::FETCH_ASSOC);
                $id = $data[0]['MAX(id)'];

                // Déplacer le fichier upload en nommant par un nouveau nom unique pour fichier
                $path = $posteur['name'];
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                $fileName = $id . $_POST['titre'] . "." . $ext;
                $file = $desDir . $fileName;
                move_uploaded_file($posteur['tmp_name'], $file);

                // Mis à jour l'artiste créée avec nom de fichier
                $db->query("UPDATE evenement SET posteur = '" . $fileName ."' WHERE id = " . $id . ";");

                echo "reussir";
                //header("Location:../../View/Events/evenementList.php");
                exit();
            } else {
                //die("Erreur SQLite (permission d'écriture sur le fichier et son répertoire ?) : $sql");
                echo "error d'ajouter une evenement";
            }
        }
    }
    function deleteEvenement($idEvenement){
        $db = initDatabase();
        $sth = $db->prepare("delete from evenement where id=:id");
        $sth->bindValue(':id', $idEvenement, PDO::PARAM_INT);
        if(!$sth->execute()){
            return "La suppression a échoué";
        } else {
            return "La suppression a réussi";
        }
    }
    function updteEvenement($idEvenement,$newTitre,$newdateDebutEvenement,
                            $newdateFinEvenement,$newVille,$newContenue,$newContact){
        $db = initDatabase();
        $sth = $db->prepare("UPDATE Evenement SET titre = :newTitre, dateDebutEvenement = :newdateDebutEvenement
               ,dateFinEvenement=:newdateFinEvenement, ville=:newVille,contenu=:newContenue,
               contact=:newContact
               WHERE id = :idEvenement");
        $sth->bindValue(':newTitre', $newTitre, PDO::PARAM_STR);
        $sth->bindValue(':newdateDebutEvenement', $newdateDebutEvenement, PDO::PARAM_STR);
        $sth->bindValue(':newdateFinEvenement', $newdateFinEvenement, PDO::PARAM_STR);
        $sth->bindValue(':newVille', $newVille, PDO::PARAM_STR);
        $sth->bindValue(':newContenue', $newContenue, PDO::PARAM_STR);
        $sth->bindValue(':newContact', $newContact, PDO::PARAM_STR);
        $sth->bindValue(':idEvenement', $idEvenement, PDO::PARAM_INT);

        if(!$sth->execute()) {
            // Lever une exception si l'erreur
            http_response_code(403);
        }

    }
    function  allEvenements(){
        $db = initDatabase();
        $evenements = $db->query("SELECT * FROM Evenement")->fetchAll(PDO::FETCH_OBJ);
        return $evenements;
    }



}


?>