<?php
//$x = "file :///dsfdsfdsf.com";
$x = "http://yahoo.com.aidj.ad.asd.ad.sa";

$f = filter_var($x, FILTER_VALIDATE_URL);
if($f) { 
	echo $x.' is good';
}
