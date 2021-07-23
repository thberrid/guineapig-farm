<?php

echo(json_encode(intval(shell_exec('ps cax | grep blender | wc -l'))));