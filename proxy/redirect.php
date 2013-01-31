<?php

$form=$_REQUEST["form"];


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://um-bc107.mendelu.cz/maw/".$form);
//curl_setopt($ch, CURLOPT_HEADER, 0);
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
     //header("Content-Disposition: attachment; filename=\"MAW_output.pdf\";" );
     header("Content-Disposition: inline; filename=\"MAW_output.pdf\";" );
     header("Content-Transfer-Encoding: binary");
     //header("Content-Length: ".filesize($file));
     echo($a);
   }
 elseif  ($info['content_type'] == "image/png")
 {
 header("Content-Type: image/png");
 echo ($a);
  } 
 elseif  ($info['content_type'] == "image/gif")
 {
 header("Content-Type: image/gif");
 echo ($a);
  } 
else
   {
     $a=str_replace('action="http://um-bc107.mendelu.cz/maw/', 'action="http://user.mendelu.cz/marik/maw-new/redirect.php?form=',$a);
     $a=str_replace('href="autsyst.php?', 'href="http://user.mendelu.cz/marik/maw-new/redirect.php?form=autsyst/autsyst.php&',$a);
     $a=str_replace('href="minmax3d.php?', 'href="http://user.mendelu.cz/marik/maw-new/redirect.php?form=minmax3d/minmax3d.php&',$a);
     $a=str_replace('a href="http://um-bc107.mendelu.cz/maw/lde2/ldr2.php?', 'a href="http://user.mendelu.cz/marik/maw-new/redirect.php?form=lde2/ldr2.php&',$a);  
     $a=str_replace('a href="http://um-bc107.mendelu.cz/maw/geom/geom.php?', 'a href="http://user.mendelu.cz/marik/maw-new/redirect.php?form=geom/geom.php&',$a);
     $a=str_replace('a href="http://um-bc107.mendelu.cz/maw/../maw/geom/geom.php?', 'a href="http://user.mendelu.cz/marik/maw-new/redirect.php?form=geom/geom.php&',$a);
     $a=str_replace('http://um-bc107.mendelu.cz/maw/../maw/integral2/integral2.php?', 'http://user.mendelu.cz/marik/maw-new/redirect.php?form=integral2/integral2.php&',$a);

     $a=str_replace('server="http://um-bc107.mendelu.cz/maw"','server="http://user.mendelu.cz/maw-new/redirect.php?"',$a);
     $a=str_replace('server+"/common/formconv.php?','server+"form=common/formconv.php&',$a);

     $a=str_replace('../../overlibmws/overlibmws.js','overlibmws/overlibmws.js',$a);

     $a=str_replace('http://um-bc107.mendelu.cz/maw/../maw/banach/banach.php?', 'http://user.mendelu.cz/marik/maw-new/redirect.php?form=banach/banach.php&',$a);

     $a=str_replace('a href="solveode.php?','a href="http://user.mendelu.cz/marik/maw-new/redirect.php?form=ode/solveode.php&',$a);

     $a=str_replace('img src="graf.php?', 'img src="http://user.mendelu.cz/marik/maw-new/redirect.php?form=graf/graf.php&',$a);
     $a=str_replace('img src="../gnuplot/gnuplot_region.php?', 'img src="http://user.mendelu.cz/marik/maw-new/redirect.php?form=gnuplot/gnuplot_region.php&',$a);
     $a=str_replace('a href="graf.php?', 'a href="http://user.mendelu.cz/marik/maw-new/redirect.php?form=graf/graf.php&',$a);
     $a=str_replace('src="domf.php?', 'src="http://user.mendelu.cz/marik/maw-new/redirect.php?form=domf/domf.php&',$a);

     $a=str_replace('a href="http://um-bc107.mendelu.cz/maw-html/index.php?', 'a href="http://user.mendelu.cz/marik/maw-new/redirect-html.php?',$a);

     $a=str_replace('http://um-bc107.mendelu.cz/mathtex/mathtex.php', 'http://user.mendelu.cz/marik/maw-new/mathtex.php', $a);

     $a=str_replace('../common/', '',$a);

     $a=str_replace('src="./curve.php?','src="http://user.mendelu.cz/marik/maw-new/redirect.php?form=gnuplot/curve.php&',$a);
     $a=str_replace('src="solid.php?','src="http://user.mendelu.cz/marik/maw-new/redirect.php?form=geom/solid.php&',$a);
     $a=str_replace('"geom.php?','"http://user.mendelu.cz/marik/maw-new/redirect.php?form=geom/geom.php&',$a);


     $a=str_replace('img src="ineq2d.php?', 'img src="http:///user.mendelu.cz/marik/maw-new/redirect.php?form=ineq2d/ineq2d.php&',$a);

$odkud=array("../lde2/ldr2.php?", "../integral/integral.php?", "../prubeh/zpracuj.php?", "../graf/graf.php?", "../banach/banach.php?", "../ode/ode.php?", "../ode/solveode.php?", "../autsyst/autsyst.php?", "../minmax3d/minmax3d.php?", "../lagrange/lagrange.php?", "../domf/domf.php?", "../geom/geom.php?");
$kam=array("http://user.mendelu.cz/marik/maw-new/redirect.php?form=lde2/ldr2.php&", "http://user.mendelu.cz/marik/maw-new/redirect.php?form=integral/integral.php&", "http://user.mendelu.cz/marik/maw-new/redirect.php?form=prubeh/zpracuj.php&", "http://user.mendelu.cz/marik/maw-new/redirect.php?form=graf/graf.php&", "http://user.mendelu.cz/marik/maw-new/redirect.php?form=banach/banach.php&", "http://user.mendelu.cz/marik/maw-new/redirect.php?form=ode/ode.php&", "http://user.mendelu.cz/marik/maw-new/redirect.php?form=ode/solveode.php&", "http://user.mendelu.cz/marik/maw-new/redirect.php?form=autsyst/autsyst.php&", "http://user.mendelu.cz/marik/maw-new/redirect.php?form=minmax3d/minmax3d.php&", "http://user.mendelu.cz/marik/maw-new/redirect.php?form=lagrange/lagrange.php&", "http://user.mendelu.cz/marik/maw-new/redirect.php?form=domf/domf.php&", "http://user.mendelu.cz/marik/maw-new/redirect.php?form=geom/geom.php&");
     $a=str_replace($odkud, $kam, $a);
     $a=str_replace("<div id='after-form' style='display:none;'>","<div id='after-form' style='display:none;'><img src='loading.gif'> ",$a);

     echo $a;
     echo "<br><br>";
     echo "<center><img src='http://user.mendelu.cz/marik/akademie/OPVK.png' width=600></center>";

   }
}




//echo $a;


?>
