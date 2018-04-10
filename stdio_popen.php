<?php
//fork a php process (second php process )
$cmd = 'php test.php';//used as a command

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    $handle = popen('start /B '. $cmd, 'r');
} else {//opening a process and a pipe
    $handle = popen($cmd, "r");//give only the reading mode
}

echo "'$handle'; " . gettype($handle) . PHP_EOL;//$handle is an resource type

$read = fread($handle, 2096);

echo $read . PHP_EOL;

pclose($handle);