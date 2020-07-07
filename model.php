<?php
    function getConnexion()
    {
        $host = 'localhost';
        $user = 'djine';
        $password = 'mosila21';
        $dbname = 'tpphpajax';
        $dsn = "mysql:host=$host;dbname=$dbname";

        try {
            $mydb = new PDO($dsn,$user,$password);
            $mydb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die('Erreur : '.$ex->getMessage());
        }
        return $mydb;
    }

    function searchPersonne($cni){

        $sql = "SELECT * FROM personne WHERE cni LIKE '".$cni."%'";
        $db = getConnexion();
        return $db->query($sql);
    }

    function insert($cni,$prenom,$nom,$age){
        $sql = "INSERT INTO personne VALUES(null,'$cni','$prenom','$nom',$age)";
        $db = getConnexion();
        return $db->exec($sql);
    }

?>