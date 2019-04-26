<?php
echo "1. Enc\n2. Dec\n";
$w = trim(fgets(STDIN));
if($w == 1){
echo "String: ";
$re = trim(fgets(STDIN));
$rew = base64_encode($re);
echo $rew."\n";}
else{
echo "Base64: ";
$r = trim(fgets(STDIN));
$t = base64_decode($r);
echo $t."\n";}
?>