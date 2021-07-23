<?php

if ($_FILES['zipinput']['error'] != 0)
	exit("error: API FILES");

shell_exec("rm -f ./data/.log");
shell_exec("rm -f ./data/imgs/*");
shell_exec("rm -fr ./data/blender_input/*");
$file_dest = "./data/input.zip";
shell_exec("rm -f " . $file_dest);

$start = strrpos($_FILES['zipinput']['name'], ".");
$extension = substr($_FILES['zipinput']['name'], $start);

switch ($extension){
	case ".zip":
		$file_dest = "./data/input.zip";
		$is_move_ok = move_uploaded_file($_FILES['zipinput']['tmp_name'], $file_dest);
		if (!$is_move_ok)
			exit("unable to copy file");

		$zip_file = new ZipArchive;
		$is_zip_open = $zip_file->open($file_dest);
		if (!$is_zip_open)
			exit("unable to open zip");

		$is_zip_extracted = $zip_file->extractTo("./data/blender_input/");
		if (!$is_zip_extracted)
			exit("unable to extract zip");

		$zip_file->close();
		break;

	case ".blend":
		$file_dest = "./data/blender_input/" . $_FILES['zipinput']['name'];
		$is_move_ok = move_uploaded_file($_FILES['zipinput']['tmp_name'], $file_dest);
		if (!$is_move_ok)
			exit("unable to copy file");
		break;

	default:
		exit("wrong extension type");
		break;
}

shell_exec("rm -f " . $_FILES['zipinput']['tmp_name']);
$filename = "";
if (isset($_POST['outputname']))
	$filename = $_POST['outputname'];
$files = glob("./data/blender_input/*.blend");
touch('./data/.log');
shell_exec('blender -b ' . $files[0] . ' -o ./data/imgs/' . $filename . ' -a >> ./data/.log &');
