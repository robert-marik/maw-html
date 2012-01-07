<?php 

/*
Mathematical Assistant on Web - web interface for mathematical
coputations including step by step solutions
Copyright 2007-2010 Robert Marik, Miroslava Tihlarikova           

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

$server="http://localhost/maw";
$lang = "en"; $locale_file = "en_US";

$custom_between_flags="";

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
    $reqlang=split(",",$_SERVER["HTTP_ACCEPT_LANGUAGE"]);
    $reqlang=substr($reqlang[0],0,2);
  }

if (($reqlang == "cs")||($reqlang == "cz")) { $lang = "cs"; $locale_file = "cs_CZ"; }

if ($reqlang == "pl") { $lang = "pl"; $locale_file = "pl_PL"; }

if ($reqlang == "ca") { $lang = "ca"; $locale_file = "ca_ES"; }

if ($reqlang == "fr") { $lang = "fr"; $locale_file = "fr_FR"; }

if ($reqlang == "zh") { $lang = "zh"; $locale_file = "zh_CN"; }

$locale_file_reader = new FileReader("locale/$locale_file.mo");
$locale_reader = new gettext_reader($locale_file_reader);

function __($text){
	global $locale_reader;
	return $locale_reader->translate($text);
}

if (file_exists('./mawconfightml.php')) {require ('./mawconfightml.php');}

function fixit($text)
{
  return str_replace("'","\'",$text);
}

$form=$_REQUEST["form"];

if (ereg("[^3_2a-z]",$form))
{
  header('Location:http://user.mendelu.cz/marik/maw');
  die();
}


if (($form!="banach")&&($form!="bisection")&&($form!="ineq2d")&&($form!="df3d")&&($form!="df")&&($form!="graf")&&($form!="derivace")&&($form!="prubeh")&&($form!="taylor")&&($form!="mnc")&&($form!="prubeh")&&($form!="trap")&&($form!="geom")&&($form!="minmax3d")&&($form!="ode")&&($form!="lde2")&&($form!="autsyst") && ($form!="lagrange")&& ($form!="integral")&& ($form!="map")&& ($form!="integral2")&& ($form!="regula_falsi"))
{
  $form="main";
}

if ($form=="main") {$submenu=1;}
if ($form=="map") {$submenu=7;}

if (($form=="graf")||($form=="df")||($form=="df3d")||($form=="lagrange")||($form=="mnc")) {$submenu=2;}
if (($form=="derivace")||($form=="prubeh")||($form=="taylor")||($form=="minmax3d")) {$submenu=3;}
if (($form=="integral")||($form=="integral2")||($form=="geom")||($form=="trap")) {$submenu=4;}
if (($form=="ode")||($form=="lde2")||($form=="autsyst")) {$submenu=5;}
if (($form=="banach")||($form=="regula_falsi")||($form=="bisection")||($form=="ineq2d")) {$submenu=6;}

function hint_preview(){
 echo __("Troubles with writing math? Clicking Preview you get how <a href=\"http://formconv.sourceforge.net/\">formconv</a> renders your expression and how you can enter this expression in Maxima notation (you can use copy and paste to transfer to the form.)");}

function maw_before_form() {echo "<div id='form' style='display:block;'>";}
function maw_after_form() {
  echo "</div><div id='after-form' style='display:none;'>".sprintf(__("Your input is being processed. Wait few seconds to see the output. Click %shere%s to reopen the form which has been submited."),"<a href=\"#\" onclick=\"document.getElementById('after-form').style.display='none';document.getElementById('form').style.display='block';\">","</a>")."</div>";
  echo "<script>document.getElementById('after-form').style.display='none';</script>";
}

function history($adresar,$server)
{
  echo ("<div id=\"history\"><a href=\"$server/common/tail.php?dir=$adresar\">");
  echo __("History");
  echo ("</a></div><div id=\"comments\">");
}

function polejazyka($ret)
{
echo '<input type="hidden" name="lang" value="'.$ret.'">';
echo '<input type="hidden" name="ip" value="'.$_SERVER['REMOTE_ADDR'].'">';
$ref=$_SERVER['HTTP_REFERER'];
echo '<input type="hidden" name="referer" value="'.$ref.'">';
}

function formmethod()
{
echo 'method="post"';
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta name="verify-v1" content="x3d1tCrhI9DFDDtCOx3kjZETBlj6CmnFT1YHhe3HBC8=" />
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <link rel="stylesheet" type="text/css" href="styl.css" />
  <link rel="stylesheet" type="text/css" href="navigace.css" />
  
<?php
if (file_exists('./custom.css')) 
{
  echo ("<link rel=\"stylesheet\" type=\"text/css\" href=\"custom.css\" />");
}
?>

  <title>Mathematical Assistant on Web (<?php echo $form ?>) </title>

  <script language="JavaScript">
var thedata;
var newwin;
var thenumber;
function edit(textarea)
{
thenumber = textarea;
thedata = document.forms['exampleform'].elements[textarea].value
newwin =
window.open("MAW_dragmath.html","","width=565,height=385,resizable")
}

function preview(textarea)
{
<?php
    echo 'server="',$server,'";';
?>
  if (document.forms['exampleform'].elements['formconv'].value=="on")
    {
thenumber = textarea;
thedata = document.forms['exampleform'].elements[textarea].value
newwin =
window.open(server+"/common/formconv.php?lang=<?php echo $lang;?>&expr="+encodeURIComponent(document.forms['exampleform'].elements[textarea].value),"","width=565,height=150,resizable")
	}
  else
    {
thenumber = textarea;
thedata = document.forms['exampleform'].elements[textarea].value
newwin =
window.open(server+"/common/maxima.php?lang=<?php echo $lang;?>&expr="+encodeURIComponent(document.forms['exampleform'].elements[textarea].value),"","width=565,height=150,resizable")
    }
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
  thedata = server+"/common/formconv.php?expr="+encodeURIComponent(document.forms['exampleform'].elements[textarea].value)+"&a="+encodeURIComponent(document.forms['exampleform'].elements['a'].value)+"&b="+encodeURIComponent(document.forms['exampleform'].elements['b'].value)+"&c="+encodeURIComponent(document.forms['exampleform'].elements['c'].value)+"&d="+encodeURIComponent(document.forms['exampleform'].elements['d'].value)+"&vars="+encodeURIComponent(document.forms['exampleform'].elements['vars'].value);
newwin =
window.open(thedata,"","width=565,height=150,resizable");
}

  </script>

<?php
if ($maw_overlib)
{
  echo '<script type="text/javascript" src="overlibmws/overlibmws.js"></script>';
}
else
{
echo '
  <script language="JavaScript">
    function nd()
      return null;
    function overlib()
      return null;
  </script>';
}

echo $maw_header;
?>
</head>
<body><div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div> 

<noscript> <b style="color: rgb(255, 0, 0);">
<?php 
echo __("You should turn JavaScript on to see popup informations.");
?>
</b>  </noscript> 

<div id="main">
<div id="head">
<div id="flags">
<div id="flags-left">
<?php echo '<a href="index.php?lang=cz&form='.$form.'">
<img src="cz.png" alt="cz" style="border: 0px solid ;" /></a>&nbsp;&nbsp;'; 
echo '<a href="index.php?lang=en&form='.$form.'" ><img src="us.png" alt="us" style="border: 0px solid ;" /></a>&nbsp;&nbsp;';
echo '<a href="index.php?lang=pl&form='.$form.'" ><img src="pl.png" alt="pl" style="border: 0px solid ;" /></a>&nbsp;&nbsp;';
echo '<a href="index.php?lang=ca&form='.$form.'" ><img src="ca.png" alt="ca" style="border: 0px solid ;" /></a>&nbsp;&nbsp;';
echo '<a href="index.php?lang=zh&form='.$form.'" ><img src="zh.png" alt="zh" style="border: 0px solid ;" /></a>&nbsp;&nbsp;';
echo '<a href="index.php?lang=fr&form='.$form.'" ><img src="fr.png" alt="fr" style="border: 0px solid ;" /></a>';
?>
</div>



<div id="flags-right">
<?php echo '<a href="index.php?lang=cz&form='.$form.'">
<img src="cz.png" alt="cz" style="border: 0px solid ;" /></a>&nbsp;&nbsp;'; 
echo '<a href="index.php?lang=en&form='.$form.'" ><img src="us.png" alt="us" style="border: 0px solid ;" /></a>&nbsp;&nbsp;';
echo '<a href="index.php?lang=pl&form='.$form.'" ><img src="pl.png" alt="pl" style="border: 0px solid ;" /></a>&nbsp;&nbsp;';
echo '<a href="index.php?lang=ca&form='.$form.'" ><img src="ca.png" alt="ca" style="border: 0px solid ;" /></a>&nbsp;&nbsp;';
echo '<a href="index.php?lang=zh&form='.$form.'" ><img src="zh.png" alt="zh" style="border: 0px solid ;" /></a>&nbsp;&nbsp;';
echo '<a href="index.php?lang=fr&form='.$form.'" ><img src="fr.png" alt="fr" style="border: 0px solid ;" /></a>';
?>
</div>

<?php echo($custom_between_flags); ?>

</div>
<div id="support">
<a href="
<?php echo __("http://sourceforge.net/apps/phpbb/mathassistant")?>
">
<?php  echo __("Support from MAW forum");?></a>
</a>
<br>
<a href="changes.txt">
<?php  echo __("Changelog");?></a>
<br>
<a href="bugs.txt">
<?php  echo __("Known bugs");?></a>
</div>

<?php 

if (file_exists('./mawcustom_top.php')) 
{
  echo ("<div id=\"mawcustom\">");
  require ('./mawcustom_top.php');
  echo("<div>");
}

echo '<div id="title"><div id="main-title">';
echo __('Mathematical Assistant on Web');
echo '</div><div id="subtitle">'; 
echo __('written by <a href="http://user.mendelu.cz/marik" target="_blank">Robert Mař&iacute;k</a> and <a href="http://user.mendelu.cz/tihlarik" target="_blank">Miroslava Tihlař&iacute;kov&aacute;</a>');
echo '</div><div id="subsubtitle">('.sprintf(__('%sOffline version%s is also available and translators are %s welcomed %s.'),'<a href="offline.php">','</a>','<a href="translators.html">','</a>').')</div></div></div>';

if (file_exists('./mawcustom_aftertitle.php')) 
{
  echo ("<div id=\"mawcustom2\">");
  require ('./mawcustom_aftertitle.php');
  echo ("</div>");
}

?>

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
<small>(%s)</small>
SUB;

$submitbutton=sprintf($submitbuttont,__('Submit'),__('Click only once and wait few seconds for the answer!'));


  function aktivni_konec($cislo){echo '</span></li>';}

  function aktivni($cislo){
    global $submenu;
    echo ('<li>');
    if ($submenu==$cislo) echo '<span class="aktivni">'; else echo '<span>';
  }

  function aktivni_form($identifikace){
    global $form;
    $t="<span>";
    if ($identifikace==$form) {$t="<span class=\"aktivni\">";}
    return($t);
  }

printf('<ul>');
aktivni(1);
printf('<a href="index.php?lang='.$lang.'" onmouseover="return overlib(\'%s\', FGCLASS,\'olfg\');" onmouseout="return nd();" >',fixit(__("Introduction, general remarks")));
echo __('Introduction'); 
echo '</a>';
aktivni_konec(1);
aktivni(2);
printf('<a href="index.php?lang='.$lang.'&form=graf" onmouseover="return overlib(\'<li>%s<li>%s<li>%s<li>%s\', FGCLASS,\'olfg\');" onmouseout="return nd();"">',fixit(__("Graphs of basic elementary functions")),fixit(__("Natural domains of function in one or two variables")),fixit(__("Lagrange polynomial")),fixit(__("Fitting data file using least squares method")));
echo __("Precalculus"); echo '</a>';
aktivni_konec(2);
aktivni(3);
printf('<a href="index.php?lang='.$lang.'&form=derivace" onmouseover="return overlib(\'<li>%s<li>%s<li>%s<li>%s<li>%s\', FGCLASS,\'olfg\');" onmouseout="return nd();"">',fixit(__("Investigating function")),fixit(__("Derivative in one variable")),fixit(__("Partial derivative in two variables")),fixit(__("Taylor polynomial")),fixit(__("Local maxima and minima for functions in two variables")));
echo __("Calculus");
echo '</a>';	  
aktivni_konec(3);
aktivni(4);
printf('<a href="index.php?lang='.$lang.'&form=integral" onmouseover="return overlib(\'<li>%s<li>%s<li>%s<li>%s\', FGCLASS,\'olfg\');" onmouseout="return nd();"">',fixit(__("Indefinite integral (anitiderivative)")),fixit(__("Geometrical applications of definite integral")),fixit(__("Double integral")),fixit(__("Approximation of definite integral by trapezoidal rule")));
echo __("Integral calculus");
echo '</a>';
  aktivni_konec(4);
  aktivni(5);
printf('<a href="index.php?lang='.$lang.'&form=ode" onmouseover="return overlib(\'<li>%s<li>%s<li>%s\', FGCLASS,\'olfg\');" onmouseout="return nd();"">',fixit(__("First order differerential equations")),fixit(__("Second order differential equations (linear, using variantion of constant and using guess of particular solution)")),fixit(__("Stationary points of autonomous system")));
echo __("Differential equations");
echo '</a>';
  aktivni_konec(5);
  aktivni(6);
printf ('<a href="index.php?lang='.$lang.'&form=bisection" onmouseover="return overlib(\'<li>%s<li>%s<li>%s<li>%s\', FGCLASS,\'olfg\');" onmouseout="return nd();"">',fixit(__("Nonlinear equations using bisection")),fixit(__("Nonlinear equations using regula falsi")),fixit(__("Nonlinear equations using method of iterations")),fixit(__("System of inequalities in one or two variables")));
echo __("Equations and inequalities");
echo '</a>';
aktivni_konec(6);
//echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
  aktivni(7);
printf('<a href="index.php?lang='.$lang.'&form=map" onmouseover="return overlib(\'<li>%s<li>%s\', FGCLASS,\'olfg\');" onmouseout="return nd();"">',fixit(__("Site map (what you can find on this site and where).")),fixit(__("Support")));
echo __("Site map, support");
echo '</a>';
  aktivni_konec(7);
printf('</ul>');

echo '<div id="submenu">';

function maw_submenu ($a,$b,$c,$d)
{
return '<li>'.aktivni_form($a).'<a href="index.php?lang='.$b.'&form='.$c.'">'.$d.'</a></span></li>';
}

echo '<ul>';	
if ($submenu=="2")
  {
    echo maw_submenu('graf',$lang,'graf', __("Graphs of elementary functions"));
    echo maw_submenu('df',$lang,'df', __("Domain of functions (one variable)"));
    echo maw_submenu('df3d',$lang,'df3d', __("Domain of functions (two variables)"));
    echo maw_submenu('lagrange',$lang,'lagrange',__('Lagrange polynomial'));
    echo maw_submenu('mnc',$lang,'mnc',__('Least squares method'));
  }
elseif ($submenu=="3")
{
  echo maw_submenu('derivace',$lang,'derivace',__('Derivative and partial derivative'));
  echo maw_submenu("prubeh",$lang,'prubeh',__('Investigating functions'));
  echo maw_submenu("taylor",$lang,'taylor', __('Taylor polynomial'));
//  echo maw_submenu("gaussprop",$lang,'gaussprop', __('Error propagation'));
  echo maw_submenu("minmax3d",$lang,"minmax3d", __('Local maxima and minima in two variables'));
}
elseif ($submenu=="4")
{
  echo maw_submenu('integral',$lang,'integral',__('Antiderivative'));
  echo maw_submenu('geom',$lang,'geom',__('Geometrical applications of definite integral'));
  echo maw_submenu('trap',$lang,'trap',__('Trapezoidal rule'));
  echo maw_submenu('integral2',$lang,'integral2',__('Double integral'));
}
elseif ($submenu=="5")
{
  echo maw_submenu('ode',$lang,'ode',__('First order ODE'));
  echo maw_submenu('lde2',$lang,'lde2',__('Second order LDE'));
  echo maw_submenu('autsyst',$lang,'autsyst',__('Autonomous system'));
}
elseif ($submenu=="6")
{
  echo maw_submenu('bisection',$lang,'bisection',__('Bisection'));
  echo maw_submenu('regula_falsi',$lang,'regula_falsi',__('Regula falsi'));
  echo maw_submenu('banach',$lang,'banach',__('Method of iterations'));
  echo maw_submenu('ineq2d',$lang,'ineq2d',__('System of inequalities (in one or two variables)'));
}
echo '</ul>';	


echo '</div></div>';

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

echo '<div id="aftermenu">';
if (($submenu!="7")&&($submenu!="1")) {
echo __("Enter your data into the calculator and click Submit. You can also change the type of the caluclator in the second row of the menu. <br>The calculators are divided into several groups, the description is available if you move your mouse on the name of each group (the first row of the menu).");
}
else
  {echo __("Choose the field of your interest in the menu and then choose the particular calculator depending on the problem you wich to solve.<br>These calculators are able to solve the problems including step by step solution.<br>The calculators are divided into several groups, the description is available if you move your mouse on the name of each group (the first row of the menu).");}

?>
</div>
</div>

<div id="kalkulator">

<?php
include($form.".php");
include("tail.php"); 
?>
