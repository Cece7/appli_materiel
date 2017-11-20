 	<meta charset="utf-8">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">


    <legend><h1>Réservation :</h1></legend> 
 </br>
     <label for="date-debut"><b>Date de réservation: </b></label> <input type="date" name="date-debut" value=""> au <input type="date" name="date-fin" value="">
 </br></br>
     <label for="nom"><b>Nom: </b></label> <input type="text" name="nom" value="">
 </br></br>
    <label for="prenom"><b>Prénom: </b></label> <input type="text" name="prenom" value="">
 </br></br>
    <label for="groupe"><b>Groupe: </b></label> <select>
                                                    <option selected="selected" value="null">Groupe</option>
                                                    <option value="P11">P11</option>
                                                    <option value="P12">P12</option>
                                                    <option value="P21">P21</option>
                                                    <option value="P22">P22</option>
                                                </select>
                                                <select>
                                                    <option selected="selected" value="null">Année</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>

                                                </select>
 </br></br>
     <b>Matériel: <b> 
 </br></br>
 
 <div class="displaywrap">
 	<div id="choix"><b>Vidéo</b>

 		<br>
 		Caméra 1: 
 			<select>
 				<option selected="selected" value="null">Nombre</option>
 				<option value="1">1</option>
 				<option value="2">2</option>
 			</select>
 		<br>
 		Caméra 2: 
 			<select>
 				<option selected="selected" value="null">Nombre</option>
 				<option value="1">1</option>
 				<option value="2">2</option>
 			</select>

 	</div>
 	<div id="choix"><b>Audio</b>
 		<br>
 		Micro 1: 
 		<select>
 				<option selected="selected" value="null">Nombre</option>
 				<option value="1">1</option>
 				<option value="2">2</option>
 		</select>
 		<br>
 		Micro 2: 
 		<select>
 				<option selected="selected" value="null">Nombre</option>
 				<option value="1">1</option>
 				<option value="2">2</option>
 		</select>
 	</div>
 	<div id="choix"><b>Accesoires</b>
 		<br>
 		Accessoire 1: 
 		<select>
 				<option selected="selected" value="null">Nombre</option>
 				<option value="1">1</option>
 				<option value="2">2</option>
 		</select>
 		<br>
 		Accessoire 2: 
 		<select>
 				<option selected="selected" value="null">Nombre</option>
 				<option value="1">1</option>
 				<option value="2">2</option>
 		</select>
 	</div>
 	<div id="choix"><b>Lumières</b>
 		<br>
 		Lumière 1: 
 		<select>
 				<option selected="selected" value="null">Nombre</option>
 				<option value="1">1</option>
 				<option value="2">2</option>
 		</select>
 		<br>
 		Lumière 2: 
 		<select>
 				<option selected="selected" value="null">Nombre</option>
 				<option value="1">1</option>
 				<option value="2">2</option>
 		</select>

 	</div>
 </div>
<input type="submit" name="submit" id="submit" value="Valider">
 </form>

 <style type="text/css">
#choix{
	border: solid 1px black; 
	border-radius: 2px;
	display: wrap;

}
.displaywrap{
        display: flex;
        flex-wrap: wrap;
        margin: auto;
        
    }

 </style>
 <?php 
if (isset($_POST["submit"])) {
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
   
}












 ?>