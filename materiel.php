<?php 
	
echo "lol";

// echo $_POST["date_debut"]." / ";
// echo $_POST["date retour"]." / ";
// echo $_POST["nom"]." / ";
// echo $_POST["prenom"]." / ";
// echo $_POST["groupe"]." / ";
// echo $_POST["annee"]." ";

 try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}

$requete="INSERT INTO materiel (nom,prenom,groupe,annee) VALUES ('herrgott','julien','TP12','2')";
$reponse=$id_connex->exec($requete);

if($reponse!=1){
    echo "L'ajout à échoué";
}
else{

    echo "vous êtes enregistrés";
}

$id_connex=null;
   
?>
