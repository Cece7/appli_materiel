<?php 
	

 try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}

$requete="INSERT INTO etudiant (nom, prenom, groupe, annee) VALUES ('".$_POST["nom"]."', '".$_POST["prenom"]."', '".$_POST["groupe"]."', '".$_POST["annee"]."')";
$reponse=$id_connex->exec($requete);
$requete="INSERT INTO reserver (date_debut, date_retour) VALUES ('".$_POST["date_debut"]."', '".$_POST["date_retour"]."')";
$reponse2=$id_connex->exec($requete);

if($reponse!="" && $reponse2!=""){
    echo "vous êtes enregistrés";
}
else{

    echo "L'ajout à échoué";
}

$id_connex=null;
   
?>
<input type="button" name="fermer" value="fermer" id="fermer">
