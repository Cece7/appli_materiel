<?php
echo $_POST["day"];
echo $_POST["month"];
echo $_POST["year"];

try
{
	$id_connex=new PDO('mysql:host=localhost;dbname=ptut','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
$reponse=$id_connex->query('SELECT reference FROM materiel');



$nb_mat=$reponse->rowCount();
if($nb_mat==0){
	echo "Pas de matériel";
}
else{
	while($ligne=$reponse->fetch(PDO::FETCH_ASSOC))
	{
		echo $ligne['reference'];
	}
}


$reponse->closeCursor();
$id_connex=null;

?>
