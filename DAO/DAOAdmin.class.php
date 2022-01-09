<?php

class DAOAdmin{

    function addAdmin($username, $mdp) {
        $db = initDatabase();
        if($username!=null && $mdp!=null){
            $sth = $db->prepare("INSERT INTO Admin(username,mdp)
                    VALUES(:username,:mdp)");

            $sth->bindValue(':username', $username, PDO::PARAM_STR);
            $sth->bindValue(':mdp', $mdp, PDO::PARAM_STR);
            $res = $sth->execute();

            if ($res) {
                echo "ressuir";
                exit();
            }else{
                echo "error d'ajouter une admin";
            }
        }
    }
    function deleteAdmin($idAdmin){
        $db = initDatabase();
        $sth = $db->prepare("delete from Admin where id=:id");
        $sth->bindValue(':id', $idAdmin, PDO::PARAM_INT);
        $res = $sth->execute();

        if(!$res){
            return "La suppression a échoué";
        } else {
            return "La suppression a réussi";
        }

    }

    function allAdmins(){
        $db = initDatabase();
        $admins = $db->query("SELECT * FROM Admin")->fetchAll(PDO::FETCH_OBJ);
        return $admins;
    }

}


?>