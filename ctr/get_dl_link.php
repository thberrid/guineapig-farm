<?php

function get_zipname($index){
    $zipdate = date('Ymdhi');
    if (file_exists('../data/past/' . $zipdate . '.zip'))
        return get_name($index + 1);
    return ($zipdate . $index . '.zip');
}

shell_exec("find ../data/past -mtime +7 -type f -delete");

$response = array(
    "href"      => "/",
    "filename"  => "pas d'image."
);

if (count(glob("../data/imgs/*")) > 0){
    $zipname = get_zipname(0);
    shell_exec('zip -r ../data/past/' . $zipname . ' ../data/imgs');
    $response = array(
        "href"      => "/data/past/" . $zipname,
        "filename"  => $zipname
    );
}

shell_exec('rm -fr ../data/imgs/*');
shell_exec('rm -f ../data/.log');

echo (json_encode($response));