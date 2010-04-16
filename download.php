<?php
$fp = fopen('log/log.dat', 'a');
fwrite($fp, date("d.M.Y, H:i:s, ")."server: ".$_SERVER['REMOTE_ADDR'].'  ref: '.$_SERVER['HTTP_REFERER']."\n");
fclose($fp);
header( 'Location: http://user.mendelu.cz/marik/maw/maw_virtual/maw.zip' ) ;
?>

