 	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">

	<h1>Réservation :</h1>
</br>
     <b>Date Début: <b> <input type="text" name="date-debut" value="">
 </br></br>
     <b>Date Fin: <b> <input type="text" name="date-fin" value="">
 </br></br>
     <b>Nom du responsable: <b> <input type="text" name="nom" value="">
 </br></br>
     <b>Matériel: <b> 
 </br></br>
 <div class="displaywrap">
 	<div id="choix"><b>Vidéo</b>
 		<br>
 		Caméra 1: 
 			<select>
 				<option selected="selected">Nombre</option>
 				<option value="1">1</option>
 				<option value="2">2</option>
 			</select>
 		<br>
 		Caméra 2: 
 			<select>
 				<option selected="selected">Nombre</option>
 				<option value="1">1</option>
 				<option value="2">2</option>
 			</select>

 	</div>
 	<div id="choix"><b>Audio</b>
 		<br>
 		Micro 1: 
 		<select>
 				<option selected="selected">Nombre</option>
 				<option value="1">1</option>
 				<option value="2">2</option>
 		</select>
 		<br>
 		Micro 2: 
 		<select>
 				<option selected="selected">Nombre</option>
 				<option value="1">1</option>
 				<option value="2">2</option>
 		</select>
 	</div>
 	<div id="choix"><b>Accesoires</b>
 		<br>
 		Accessoire 1: 
 		<select>
 				<option selected="selected">Nombre</option>
 				<option value="1">1</option>
 				<option value="2">2</option>
 		</select>
 		<br>
 		Accessoire 2: 
 		<select>
 				<option selected="selected">Nombre</option>
 				<option value="1">1</option>
 				<option value="2">2</option>
 		</select>
 	</div>
 	<div id="choix"><b>Lumières</b>
 		<br>
 		Lumière 1: 
 		<select>
 				<option selected="selected">Nombre</option>
 				<option value="1">1</option>
 				<option value="2">2</option>
 		</select>
 		<br>
 		Lumière 2: 
 		<select>
 				<option selected="selected">Nombre</option>
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