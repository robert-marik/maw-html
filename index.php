<?php 

/*
Mathematical Assistant on Web - web interface for mathematical
coputations including step by step solutions
Copyright 2007-2010 Robert Marik, Miroslava Tihlarikova           
Copyright 2011-2012 Robert Marik

This file is part of Mathematical Assistant on Web.

Mathematical Assistant on Web is free software: you can
redistribute it and/or modify it under the terms of the GNU
General Public License as published by the Free Software
Foundation, either version 3 of the License, or
(at your option) any later version.

Mathematical Assistant on Web is distributed in the hope that it
will be useful, but WITHOUT ANY WARRANTY; without even the
implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR
PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Mathematical Assistant o Web.  If not, see 
<http://www.gnu.org/licenses/>.

*/

$server="/maw";
$lang = "en"; $locale_file = "en_US";
$lang_array=Array("cz","us","pl","ca","zh","fr","ru","de", "it");

$custom_between_flags="";

// is the submenu inside a menu or after?
$submenu_inside=false;

// all submenus? should be hidden with css
$submenu_all=false;

// do we use overlibmws?
$maw_overlib=true;

$maw_header="";

if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
{
  $maw_overlib=false;
}     

require_once("lib/streams.php");
require_once("lib/gettext.php");

$reqlang=$_REQUEST["lang"];

if ($reqlang == "")
  {
    $reqlang=explode(",",$_SERVER["HTTP_ACCEPT_LANGUAGE"]);
    $reqlang=substr($reqlang[0],0,2);
  }

if (($reqlang == "cs")||($reqlang == "cz")) { $lang = "cs"; $locale_file = "cs_CZ"; }

if ($reqlang == "pl") { $lang = "pl"; $locale_file = "pl_PL"; }
if ($reqlang == "ca") { $lang = "ca"; $locale_file = "ca_ES"; }
if ($reqlang == "fr") { $lang = "fr"; $locale_file = "fr_FR"; }
if ($reqlang == "zh") { $lang = "zh"; $locale_file = "zh_CN"; }
if ($reqlang == "ru") { $lang = "ru"; $locale_file = "ru_RU"; }
if ($reqlang == "de") { $lang = "de"; $locale_file = "de_DE"; }
if ($reqlang == "it") { $lang = "it"; $locale_file = "it_IT"; }

$locale_file_reader = new FileReader("locale/$locale_file.mo");
$locale_reader = new gettext_reader($locale_file_reader);

function __($text){
	global $locale_reader;
	return $locale_reader->translate($text);
}

$form=$_REQUEST["form"];
$maw_before_form_custom_string="";

if (file_exists('./mawconfightml.php')) {require ('./mawconfightml.php');}

function fixit($text)
{
  return str_replace("'","\'",$text);
}

if (preg_match("/[^3_2a-z]/",$form))
{
  header('Location:http://user.mendelu.cz/marik/maw');
  die();
}

$group2=array("graf","df","df3d","lagrange","mnc");
$group3=array("derivace","prubeh","taylor","minmax3d");
$group4=array("integral","integral2","geom","trap","lineintegral");
$group5=array("ode","lde2","autsyst");
$group6=array("banach","regula_falsi","bisection","ineq2d");
$group7=array("map");

$submenu=1;
if (in_array($form,$group2)) {$submenu=2;}
if (in_array($form,$group3)) {$submenu=3;}
if (in_array($form,$group4)) {$submenu=4;}
if (in_array($form,$group5)) {$submenu=5;}
if (in_array($form,$group6)) {$submenu=6;}
if (in_array($form,$group7)) {$submenu=7;}
if ($submenu==1) { $form="main";}

function hint_preview($a=""){
  if ($a!="")
    {
      echo ("\n".'<div class="hint_preview">');
      // echo __("Troubles with writing math? Clicking Preview you get how <a href=\"http://formconv.sourceforge.net/\">formconv</a> renders your expression and how you can enter this expression in Maxima notation (you can use copy and paste to transfer to the form.)");
      echo ($a);
      echo ('</div>');
    }
  echo ('<br>');
}

$previewmsg=__("Clicking this button you get how formconv renders your expression and how you can enter this expression in Maxima notation (you can use copy and paste to transfer to the form.)");

function maw_before_form() 
{
  global $maw_before_form_custom_string;
  echo $maw_before_form_custom_string."\n<div id='form' style='display:block;'>";
}

function maw_after_form() {
  echo "</div>\n<div id='after-form' style='display:none;'>".sprintf(__("Your input is being processed. Wait few seconds to see the output. Click %shere%s to reopen the form which has been submited."),"<a href=\"#\" onclick=\"document.getElementById('after-form').style.display='none';document.getElementById('form').style.display='block';\">","</a>")."</div>";
  echo "<script type=\"text/javascript\">document.getElementById('after-form').style.display='none';</script>";
}

function history($adresar,$server)
{
  echo ("\n<div id=\"history\"><a href=\"$server/common/tail.php?dir=$adresar\">");
  echo __("History");
  echo ("</a></div>\n<div id=\"comments\">");
}

function polejazyka($ret)
{
echo '<input type="hidden" name="lang" value="'.$ret.'">';
echo '<input type="hidden" name="ip" value="'.$_SERVER['REMOTE_ADDR'].'">';
$ref=$_SERVER['HTTP_REFERER'];
echo '<input type="hidden" name="referer" value="'.str_replace("&", "&amp;",$ref).'">';
}

function formmethod()
{
echo 'method="post"';
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta name="verify-v1" content="x3d1tCrhI9DFDDtCOx3kjZETBlj6CmnFT1YHhe3HBC8=" >
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <link rel="stylesheet" type="text/css" href="styl.css" >
  
<?php
if (file_exists('./custom.css')) 
{
  echo ("<link rel=\"stylesheet\" type=\"text/css\" href=\"custom.css\" >");
}
?>

  <title><?php echo __("Mathematical Assistant on Web");?></title>

  <script type="text/javascript">
var thedata;
var newwin;
var thenumber;
function edit(textarea)
{
thenumber = textarea;
thedata = document.forms['exampleform'].elements[textarea].value
newwin =
window.open("MAW_dragmath.html","","width=600,height=450,resizable")
}

function previewb(textarea)
{
<?php
    echo 'server="',$server,'";';
?>
thenumber = textarea;
thedata = document.forms['exampleform'].elements[textarea].value;
newwin =
window.open(server+"/common/formconv.php?lang=<?php echo $lang;?>&expr="+encodeURIComponent(document.forms['exampleform'].elements[textarea].value),"","width=565,height=150,resizable");
}

function previewb_int2(textarea)
{
<?php
    echo 'server="',$server,'";';
?>
  thedata = server+"/common/formconv.php?lang=<?php echo $lang;?>&expr="+encodeURIComponent(document.forms['exampleform'].elements[textarea].value)+"&a="+encodeURIComponent(document.forms['exampleform'].elements['a'].value)+"&b="+encodeURIComponent(document.forms['exampleform'].elements['b'].value)+"&c="+encodeURIComponent(document.forms['exampleform'].elements['c'].value)+"&d="+encodeURIComponent(document.forms['exampleform'].elements['d'].value)+"&vars="+encodeURIComponent(document.forms['exampleform'].elements['vars'].value);
newwin =
window.open(thedata,"","width=565,height=150,resizable");
}

function preview_region(textarea)
{
<?php
    echo 'server="',$server,'";';
?>
    thedata = server+"/common/formconv.php?lang=<?php echo $lang;?>&expr="+encodeURIComponent(document.forms['exampleform'].elements['funkce'].value)+"&xmin="+encodeURIComponent(document.forms['exampleform'].elements['xmin'].value)+"&xmax="+encodeURIComponent(document.forms['exampleform'].elements['xmax'].value)+"&ymin="+encodeURIComponent(document.forms['exampleform'].elements['ymin'].value)+"&ymax="+encodeURIComponent(document.forms['exampleform'].elements['ymax'].value)+"&a="+encodeURIComponent(document.forms['exampleform'].elements['a'].value)+"&b="+encodeURIComponent(document.forms['exampleform'].elements['b'].value)+"&c="+encodeURIComponent(document.forms['exampleform'].elements['c'].value)+"&d="+encodeURIComponent(document.forms['exampleform'].elements['d'].value)+"&vars="+encodeURIComponent(document.forms['exampleform'].elements['vars'].value)+"&region=1";
newwin =
window.open(thedata,"","width=565,height=500,resizable");
}

function preview_curve(textarea)
{
<?php
    echo 'server="',$server,'";';
?>
    thedata = server+"/gnuplot/curve.php?lang=<?php echo $lang;?>&x="+encodeURIComponent(document.forms['exampleform'].elements['x'].value)+"&y="+encodeURIComponent(document.forms['exampleform'].elements['y'].value)+"&z="+encodeURIComponent(document.forms['exampleform'].elements['z'].value)+"&tmin="+encodeURIComponent(document.forms['exampleform'].elements['tmin'].value)+"&tmax="+encodeURIComponent(document.forms['exampleform'].elements['tmax'].value);
newwin =
window.open(thedata,"","width=800,height=600,resizable=1,menubar=1,scrollbars=1");
}

function allow_preview(text)
{
  if ((text=='dx dy')||(text=='dy dx'))
    {document.getElementById('preview_region').style.display="inline";}
  else 
    {document.getElementById('preview_region').style.display="none";}
}
  </script>

<?php
echo $maw_header;
?>
</head>
<body>
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div> 

<noscript> <b style="color: rgb(255, 0, 0);">
<?php 
echo __("You should turn JavaScript on to see popup informations.");
?>
</b>  </noscript> 

<div id="main">
<div id="head">
<div id="flags">
<div id="flags-left">
<?php 
function lang_links()
{
global $form,$lang_array;
foreach ($lang_array as $i => $value)
  {
    echo '<a href="index.php?lang='.$value.'&amp;form='.$form.'" ><img src="'.$value.'.png" alt="'.$value.'" style="border: 0px solid ;" ></a>';
    if ($i<(count($lang_array)-1)) {echo ("&nbsp;");}
  }
}
lang_links();
echo ("&nbsp;<a href=\"http://user.mendelu.cz/marik/entrans/\">".__("More languages")."</a>");
?>
</div>



<div id="flags-right">
<?php lang_links(); ?>
</div>

<?php echo($custom_between_flags); ?>

</div>
<div class="support">
<?php
  if (__("http://sourceforge.net/apps/phpbb/mathassistant")!="http://sourceforge.net/apps/phpbb/mathassistant")
    { echo '<a href="'.__("http://sourceforge.net/apps/phpbb/mathassistant").'">'.__("Support from MAW forum").'</a><br>'; }
?>
<a href="changes.txt"><?php  echo __("Changelog");?></a>
<br>
<a href="bugs.txt"><?php  echo __("Known bugs");?></a>
</div>

<?php 

if (file_exists('./mawcustom_top.php')) 
{
  echo ("\n<div id=\"mawcustom\">");
  require ('./mawcustom_top.php');
  echo("</div>");
}

echo "\n".'<div id="title">'."\n".'<div id="main-title">';
echo __('Mathematical Assistant on Web');
echo '</div></div></div>';


if (file_exists('./mawcustom_aftertitle.php')) 
{
  echo ("\n<div id=\"mawcustom2\">");
  require ('./mawcustom_aftertitle.php');
  echo ("</div>");
}

?>

<div id="main_body">
<div id="odkaz_hlavicka">

<div class="mainmenu">
 
<?php 


$onsubmitA=<<<STR
onsubmit="aa=document.getElementById('myButton');
aa.disabled=true;
aa.value='%s';
bb='%s';
setTimeout('aa.disabled=false;aa.value=bb', 5000);"
STR;

$onsubmitA=<<<STR
onsubmit="aa=document.getElementById('myButton');
aa.disabled=true;
aa.value='%s';
bb='%s';"
STR;

// if ($form == "integral")
// {
// $onsubmit=sprintf($onsubmitA,__('Submitting, please wait ...'),__('Submit'));
// }
// else
// {
$onsubmit=" onSubmit=\"document.getElementById('form').style.display='none';document.getElementById('after-form').style.display='block';\" ";
// }

$submitbuttont=<<<SUB
<input value="%s" name="tlacitko" type="submit" class="tlacitko" id="myButton">
<span class="submit_comment">(%s)</span>
SUB;

$submitbutton=sprintf($submitbuttont,__('Submit'),__('Click only once and wait few seconds for the answer!'));


function aktivni_konec($cislo)
{
global $submenu_inside,$submenu,$submenu_all;
if ( ($submenu_inside) && (("$cislo"==$submenu) || ($submenu_all)) )
   {
   printsubmenu($cislo);
   }
echo ("</li>");
}

function aktivni($cislo){
    global $submenu;
    echo ("\n".'<li');
    if ($submenu==$cislo) echo ' class="maw_active">'; else echo ' class="maw_nonactive">';
  }

function aktivni_form($identifikace){
    global $form;
    $t="";
    if ($identifikace==$form) {$t="class=\"maw_active\"";}
    return($t);
  }

function nospaces ($a)
{
   global $submenu_inside;
   if (!($submenu_inside)) {return (str_replace(" ","&nbsp;",$a));}
   else {return ($a);}
}

function maw_submenu ($a,$b,$c,$d)
{
return "\n".'<li '.aktivni_form($a).'><a href="index.php?lang='.$b.'&amp;form='.$c.'">'.nospaces($d).'</a></li>';
}

function printsubmenu($i)
{
  global $lang;
  $proceed=false;
  if (in_array($i,array("2","3","4","5","6")))
    {
      echo ("\n<div class=\"submenu_container\">\n<ul class=\"submenu\">");
      $proceed=true;
    }
  if ($i=="2") {
    echo maw_submenu('graf',$lang,'graf', __("Graphs of elementary functions"));
    echo maw_submenu('df',$lang,'df', __("Domain of functions (one variable)"));
    echo maw_submenu('df3d',$lang,'df3d', __("Domain of functions (two variables)"));
    echo maw_submenu('lagrange',$lang,'lagrange',__('Lagrange polynomial'));
    echo maw_submenu('mnc',$lang,'mnc',__('Least squares method'));
  }
  elseif ($i=="3")
  {
    echo maw_submenu('derivace',$lang,'derivace',__('Derivative and partial derivative'));
    echo maw_submenu("prubeh",$lang,'prubeh',__('Investigating functions'));
    echo maw_submenu("taylor",$lang,'taylor', __('Taylor polynomial'));
    echo maw_submenu("minmax3d",$lang,"minmax3d", __('Local maxima and minima in two variables'));
  } 
  elseif ($i=="4")
  {
    echo maw_submenu('integral',$lang,'integral',__('Antiderivative'));
    echo maw_submenu('geom',$lang,'geom',__('Geometrical applications of definite integral'));
    echo maw_submenu('trap',$lang,'trap',__('Trapezoidal rule'));
    echo maw_submenu('integral2',$lang,'integral2',__('Double integral'));
    echo maw_submenu('lineintegral',$lang,'lineintegral',__('Line integral'));
  } 
  elseif ($i=="5")
  {
    echo maw_submenu('ode',$lang,'ode',__('First order ODE'));
    echo maw_submenu('lde2',$lang,'lde2',__('Second order LDE'));
    echo maw_submenu('autsyst',$lang,'autsyst',__('Autonomous system'));
  } 
  elseif ($i=="6")
  {
    echo maw_submenu('bisection',$lang,'bisection',__('Bisection'));
    echo maw_submenu('regula_falsi',$lang,'regula_falsi',__('Regula falsi'));
    echo maw_submenu('banach',$lang,'banach',__('Method of iterations'));
    echo maw_submenu('ineq2d',$lang,'ineq2d',__('System of inequalities (in one or two variables)'));
  }
  if ($proceed) {echo ("\n</ul>\n</div>\n");}
}

printf("\n<ul class=\"maw_menu\">");
aktivni(1);
echo('<a href="index.php?lang='.$lang.'">');
echo __('Introduction'); 
echo '</a>';
aktivni_konec(1);

aktivni(2);
echo('<a href="index.php?lang='.$lang.'&amp;form=graf">');
echo __("Precalculus"); echo '</a>';
aktivni_konec(2);

aktivni(3);
echo('<a href="index.php?lang='.$lang.'&amp;form=derivace">');
echo __("Calculus");
echo '</a>';	  
aktivni_konec(3);

aktivni(4);
echo('<a href="index.php?lang='.$lang.'&amp;form=integral" >');
echo __("Integral calculus");
echo '</a>';
  aktivni_konec(4);

  aktivni(5);
echo('<a href="index.php?lang='.$lang.'&amp;form=ode" >');
echo __("Differential equations");
echo '</a>';
  aktivni_konec(5);

  aktivni(6);
echo ('<a href="index.php?lang='.$lang.'&amp;form=bisection" >');
echo __("Equations and inequalities");
echo '</a>';
aktivni_konec(6);

//echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
  aktivni(7);
echo('<a href="index.php?lang='.$lang.'&amp;form=map" >');
echo __("Site map, support");
echo '</a>';
  aktivni_konec(7);

echo("\n</ul>");

if (!$submenu_inside)
{
  printsubmenu($submenu);
}

echo '</div>';

//echo '<script type="text/javascript">
//var browser=navigator.appName;
//if (browser=="Microsoft Internet Explorer")
//{
//document.write("<br><b><span style=\"color:#ff0000\">'.__('Tested on 
//Firefox, Opera and Konqueror.').' <br>'.__('Some features do not work 
//on Internet Explorer.').'" );
//document.write("</span></b><br>");
//}
//</script>';

echo "\n".'<div id="aftermenu">';
if (($submenu!="7")&&($submenu!="1")) {
echo __("Enter your data into the calculator and click Submit. You can also change the type of the caluclator in the second row of the menu. <br>The calculators are divided into several groups, the description is available if you move your mouse on the name of each group (the first row of the menu).");
}
else
  {echo __("Choose the field of your interest in the menu and then choose the particular calculator depending on the problem you wich to solve.<br>These calculators are able to solve the problems including step by step solution.<br>The calculators are divided into several groups, the description is available if you move your mouse on the name of each group (the first row of the menu).");}

?>
</div>
</div>

<div id="maw_calculator">

<?php
include($form.".php");
include("tail.php"); 
?>
