<?php

class DAOGallery
{
    function addPhoto($titrePhoto,$photo){
        $db = initDatabase();
        $desDir = "../../uploads/";
        $sth = $db->prepare("INSERT INTO Gallery(titrePhoto) 
                    VALUES(:titrePhoto)");
        $sth->bindValue(':titrePhoto', $titrePhoto, PDO::PARAM_STR);
        $res = $sth->execute();
        if ($res) {
            $id = $db->query('SELECT MAX(id) FROM Gallery');
            $data = $id -> fetchAll(PDO::FETCH_ASSOC);
            $id = $data[0]['MAX(id)'];


            // Déplacer le fichier upload en nommant par un nouveau nom unique pour fichier
            $path = $photo['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            $fileName = $id . $_POST['titrePhoto'] . "." . $ext;
            $file = $desDir . $fileName;
            move_uploaded_file($photo['tmp_name'], $file);

            // Mis à jour l'artiste créée avec nom de fichier
            $db->query("UPDATE Gallery SET photo = '" . $fileName . "' WHERE id = " . $id . ";");
            echo "reussir";
            //header("Location:../../View/Gallery/photoList.php");
            exit();
        } else {
            //die("Erreur SQLite (permission d'écriture sur le fichier et son répertoire ?) : $sql");
            echo "error d'ajouter une photo";
        }
    }
    function deletePhoto($idGallery){
        $db = initDatabase();

        $sth = $db->prepare("delete from Gallery where id=:id");
        $sth->bindValue(':id', $idGallery, PDO::PARAM_INT);
        $res = $sth->execute();

        if(!$res){
            return "La suppression a échoué";
        } else {
            return "La suppression a réussi";
        }
    }
    function updatePhoto($idGallery,$newTitrePhoto){
        $db = initDatabase();
        $sth = $db->prepare("UPDATE Gallery SET titrePhoto = :newTitrePhoto
               WHERE id = :idGallery");

        $sth->bindValue(':newTitrePhoto', $newTitrePhoto, PDO::PARAM_STR);
        $sth->bindValue(':idGallery', $idGallery, PDO::PARAM_INT);
//print_r($json);
        if(!$sth->execute()) {
            // Lever une exception si l'erreur
            http_response_code(403);
        }

    }
    function allPhotos(){
        $db = initDatabase();
        $photos = $db->query("SELECT * FROM Gallery")->fetchAll(PDO::FETCH_OBJ);
        return $photos;
    }
}