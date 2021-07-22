<?php

if ($_FILES['zipinput']['error'] != 0)
	exit("error: API FILES");

$file_dest = "../data/input.zip";
shell_exec("rm -f " . $file_dest);
shell_exec("rm -f ../data/.log");
shell_exec("rm -fr ../data/blender_input/*");
$is_move_ok = move_uploaded_file($_FILES['zipinput']['tmp_name'], $file_dest);
if (!$is_move_ok)
	exit("unable to copy file");

$zip_file = new ZipArchive;
$is_zip_open = $zip_file->open($file_dest);
if (!$is_zip_open)
	exit("unable to open zip");

$is_zip_extracted = $zip_file->extractTo("../data/blender_input/");
if (!$is_zip_extracted)
	exit("unable to extract zip");

$zip_file->close();
shell_exec("rm -f " . $_FILES['zipinput']['tmp_name']);

$files = glob("../data/blender_input/*.blend");
var_dump($files);

touch('../.log');
shell_exec('blender -b ' . $files[0] . ' -o /var/www/render/data/imgs/ -a >> /var/www/render/data/.log &');

include("../templates/show_current_render.php");
