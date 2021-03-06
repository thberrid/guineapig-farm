<h1>renderer</h1>
<h2>notes :</h2>
<ol>
	<li>Noms de fichiers: pas de caractères spéciaux.</li>
	<li>Selectionner un fichier .blend (pas de .blend1) ou un .zip si des fichiers externes sont nécessaires.</li>
	<li>Les paramètres d'exports: extensions, durée de l'animation, résolution, etc... tous sauf le nom des images rendus, doivent être configurés dans blender avant le téléversement.</li>
</ol>

<h2>téléversement :</h2>
<form method="post" action="/" enctype="multipart/form-data">
	<input name="MAX_FILE_SIZE" value="104857600" type="hidden"/>
	<label for="outputname">Optionnel: indiquer un nom pour les images rendues</label><br>
	<input id="outputname" type="text" name="outputname"><br><br>
	<label for="zipinput">Choisir un .zip ou un .blend (100Mo max)</label><br>
	<input id="file-input" type="file" name="zipinput"><br><br>
	<input id="button-start-upload" type="submit" value="Téléverser et lancer le rendu">
</form><br>