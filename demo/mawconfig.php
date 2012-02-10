<?php

// mathtex or mimetex service (used to put math on html in integral, 
// inequlitites and domains)
// you should setup your own, to be sure that everything works

// $texrender="http://localhost/mathtex/mathtex.php?";
// $texrender="http://www.forkosh.dreamhost.com/mathtex.cgi?";
// $texrender="http://www.problem-solving.be/cgi-bin/mathtex.cgi?\large{}";

// home directory for maw
$mawhome="/var/www/maw";
$mawcat=$mawhome."/common/mawcat";

//pdflatex and latex formater and tex renderer
#$texpath="/opt/texlive2007/bin/i386-linux/";
$pdflatex=$texpath."pdflatex";
$latex=$texpath."latex";
$dvips=$texpath."dvips";
$epstopdf=$texpath."epstopdf";
$mpost=$texpath."mpost";
$ps2pdf="/usr/bin/ps2pdf";

//$maxima2="/root/maxima/maxima-5.17.1.cmucl/maxima-local";
$maxima2="/opt/maxima-5.21/bin/maxima";
$maxima="/usr/bin/maxima";

$maw_cache_directory="/var/www/maw_cache/integral/";

$TeX_rgbcolor="0.21,0.71,0.22";

function maw_after_flush()
{
for ($iiii = 1; $iiii <= 1000; $iiii++) { echo("       \n");}
ob_flush();
flush();
}

$load_limit=5;  // no computation if the server load exceeds this limit
$processes_limit=25;  // no computation if the number of processes on server exceeds this limit

$maw_html_custom_head="<link rel=\"shortcut icon\" href=\"http://wood.mendelu.cz/math/favicon.ico\" />";

if ($lang=="ru")
  {$TeX_language='\usepackage[utf8]{inputenc}\usepackage[russian]{babel}';}
elseif ($lang=="cs")
  {$TeX_language='\usepackage[utf8]{inputenc}\usepackage{lmodern}\usepackage[T1]{fontenc}\usepackage[czech]{babel}';}

?>
