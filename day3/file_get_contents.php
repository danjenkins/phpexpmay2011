<?php 
$data = file_get_contents("./file_get_contents.php");
echo $data;


$data = file_get_contents("ftp://user:password@www.yahoo.com/files/foobar.txt");
echo $data;

?>