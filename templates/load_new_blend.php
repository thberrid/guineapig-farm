<h1>renderer</h1>
<h2>notes :</h2>
<ol>
	<li>Aucune contrainte sur les noms. </li>
	<li>Selectionner un fichier .blend ou un .zip si des fichiers externes sont nécessaires.</li>
	<li>Les paramètres d'exports (noms des images, extensions, durée de l'animation, résolution, etc) doivent être configurés dans blender avant le téléversement.</li>
</ol>

<h2>téléversement :</h2>
<form method="post" action="ctr/receive_zipfile.php" enctype="multipart/form-data">
	<input name="MAX_FILE_SIZE" value="104857600" type="hidden"/>
	<label for="zipinput">Choisir un .zip (100Mo max)</label><br>
	<input id="file-input" type="file" name="zipinput"><br><br>
	<input id="button-start-upload" type="submit" value="Téléverser et lancer le rendu">
</form><br>