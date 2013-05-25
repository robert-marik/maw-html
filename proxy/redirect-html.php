<?php

$form=$_REQUEST["form"];


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://um-bc107.mendelu.cz/maw-html/index.php");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, array_merge($_POST, $_GET,array('design' => 'compact')));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

$a=curl_exec($ch);

if(!curl_errno($ch))
{
 $info = curl_getinfo($ch);

 if ($info['content_type'] == "application/pdf") 
   {
     header("Pragma: public");
     header("Expires: 0");
     header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
     header("Cache-Control: public");
     header("Content-Type: application/pdf");
     //header("Content-Disposition: attachment; filename=".basename($file).";" );
     header("Content-Transfer-Encoding: binary");
     //header("Content-Length: ".filesize($file));
     echo($a);
   }
 else
   {
     $a=str_replace('action="http://um-bc107.mendelu.cz/maw/', 'action="http://user.mendelu.cz/marik/maw-new/redirect.php?form=',$a);
     $a=str_replace('href="autsyst.php?', 'href="http://user.mendelu.cz/marik/maw-new/redirect.php?form=autsyst/autsyst.php&',$a);
     $a=str_replace('img src="graf.php?', 'img src="http://user.mendelu.cz/marik/maw-new/redirect.php?form=graf/graf.php&',$a);
     $a=str_replace('a href="graf.php?', 'a href="http://user.mendelu.cz/marik/maw-new/redirect.php?form=graf/graf.php&',$a);
     $a=str_replace('src="domf.php?', 'src="http://user.mendelu.cz/marik/maw-new/redirect.php?form=domf/domf.php&',$a);

     $a=str_replace('a href="http://um-bc107.mendelu.cz/maw-html/index.php?', 'a href="http://user.mendelu.cz/marik/maw-new/redirect-html.php?',$a);

     $a=str_replace('http://um-bc107.mendelu.cz/mathtex/mathtex.php', 'http://is.mendelu.cz/teximg.pl', $a);
     echo $a;

     echo "<br><br>";
     echo "<center><img src='http://user.mendelu.cz/marik/akademie/OPVK.png' width=600></center>";

   }
}




//echo $a;


?>
