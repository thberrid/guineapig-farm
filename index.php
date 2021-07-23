<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8">
			<title>renders</title>
			<style>
				* {
                    font-family: arial;
                    color: rgb(66,66,66);
                }
                #logdisplay	{
                    font-family: monospace;
                    white-space: pre-line;
                    padding-left: 3em;
				    border-left: 1px solid
                }
                .hidden { display: none }
			</style>	
	</head>
	<body>
		<?php
			if (isset($_FILES['zipinput']))
				include("ctr/post_file.php");
			if (file_exists("data/.log"))
				include("templates/show_current_render.php");
			else
				include("templates/load_new_blend.php");
			include("templates/past_renders.php");
		?>
	</body>
	<?php include("templates/jsfiles.php"); ?>
</html>