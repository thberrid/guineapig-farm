<?php

function extract_name($str){
    $start = strrpos($str, "/") + 1;
    return (substr($str, $start));
}

function extract_url($str){
    $start = strpos($str, "/");
    return (substr($str, $start));
}

$imgs_array = array();

if (isset($_GET["index"]) && is_numeric($_GET["index"])){
    $imgs_glob = glob("../data/imgs/*");
    $index = intval($_GET["index"]);
    $max = count($imgs_glob);
    while ($index < $max){
        $new_line = array(
            "name" => extract_name($imgs_glob[$index]),
            "href" => extract_url($imgs_glob[$index])
        );
        array_push($imgs_array, $new_line);
        $index += 1;
    }
}

echo(json_encode($imgs_array));