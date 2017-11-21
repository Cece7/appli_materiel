
 <?php 
	
echo "lol";


 try
{
    $id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
$reponse=$id_connex->exec("INSERT INTO materiel (nom,prenom,groupe,annee) VALUES ('herrgott','julien','TP12','2')");

if($reponse!=1){
    echo "L'ajout à échoué";
}
else{

        echo "vous êtes enregistrés";
}


$id_connex=null;
   














 ?>
