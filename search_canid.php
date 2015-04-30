<?php

$cmd = "grep '14.96.206.2401' upload/ip_location.csv";
$value = shell_exec($cmd);
if(!empty($value)){
	echo $value;
}
?>
