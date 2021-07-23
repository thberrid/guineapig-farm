<?php

$blender_state = shell_exec('ps cax | grep blender | wc -l');
$pid = intval(shell_exec('ps ax | grep blender | head -n 1'));
shell_exec("kill " . $pid);
echo $pid;
