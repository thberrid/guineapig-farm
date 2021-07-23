<?php

if (!file_exists("../data/.log")){
    echo "no log file";
    return ;
}
echo (shell_exec("tail -n 10 /var/www/render/data/.log"));
return ;
