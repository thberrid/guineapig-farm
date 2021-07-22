<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8">
			<title>renders</title>
			<style>
				*{ font-family: arial; color: rgb(66,66,66) }
			</style>	
	</head>
	<body>
		<?php
			if (file_exists("data/.log"))
				include("templates/show_current_render.php");
			else
				include("templates/load_new_blend.php");
		?>
	</body>
</html>