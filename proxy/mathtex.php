<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://um-bc107.mendelu.cz/mathtex/mathtex.cgi?".$_SERVER['QUERY_STRING']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 


header("Content-Type: image/gif");
header("Content-Transfer-Encoding: binary");

$a=curl_exec($ch);

echo ($a);

?>