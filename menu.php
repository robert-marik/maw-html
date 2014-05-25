<?php 

/*
Mathematical Assistant on Web - web interface for mathematical
coputations including step by step solutions
Copyright 2014 Robert Marik

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
$lang_array=Array("cs","en","pl","ca","zh","fr","ru","de", "it", "uk", "es");

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

$reqlang=$_REQUEST["lang"];

if ($reqlang == "")
  {
    $reqlang=explode(",",$_SERVER["HTTP_ACCEPT_LANGUAGE"]);
    $reqlang=substr($reqlang[0],0,2);
  }

if ($reqlang == "cz") { $reqlang = "cs";}
if ($reqlang == "ua") { $reqlang = "uk";}
if ($reqlang == "")  {$reqlang="en";}
$lang=$reqlang;

// gettext
if ($reqlang=="cs") {$langl="cs_CZ"; $locale_file = "cs_CZ";}
if ($reqlang=="en") {$langl="en_US"; $locale_file = "en_US";}
if ($reqlang=="pl") {$langl="pl_PL"; $locale_file = "pl_PL";}
if ($reqlang=="ca") {$langl="ca_ES"; $locale_file = "ca_ES";}
if ($reqlang=="fr") {$langl="fr_FR"; $locale_file = "fr_FR";}
if ($reqlang=="zh") {$langl="zh_CN"; $locale_file = "zh_CN";}
if ($reqlang=="ru") {$langl="ru_RU"; $locale_file = "ru_RU";}
if ($reqlang=="de") {$langl="de_DE"; $locale_file = "de_DE";}
if ($reqlang=="it") {$langl="it_IT"; $locale_file = "it_IT";}
if ($reqlang=="uk") {$langl="uk_UA"; $locale_file = "uk_UA";}
if ($reqlang=="es") {$langl="es_ES"; $locale_file = "es_ES";}
setlocale(LC_MESSAGES, $langl.".UTF-8");
bindtextdomain("messages", "locale");
textdomain("messages");
bind_textdomain_codeset  ( "messages" , "UTF-8" );
function __($text){return gettext($text);}

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
$group4=array("integral","definite","integral2","geom","trap","lineintegral");
$group5=array("ode","lde2","autsyst");
$group6=array("banach","newton","regula_falsi","bisection","ineq2d");
$group7=array("map");


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

if (file_exists('./menu_custom.css')) 
{
  echo ("<link rel=\"stylesheet\" type=\"text/css\" href=\"menu_custom.css\" >");
}
  

?>

<title><?php echo __("Mathematical Assistant on Web");?></title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


<style type="text/css">
.tlacitko {padding:2px; border: solid 1pt; margin-top:10px; margin-bottom:10px; display:inline-block; min-width:2em; text-align:center; background-color:#DDD;}
.open {color:gray; padding-left:3px; padding-right:3px; }
#calc {background-color:#EEE; padding:10px;     position:fixed;
    top:0;
    z-index:100; display:none;}

.editor {display:none;}
#vystup {color:green; font-size:125%; background-color:#CCC; padding:5px;}


.mobilemenu ul {
    list-style-type: none;
}

.mobilemenu, .submenu, .maw_mobile_menu {padding-left:10px;}

.href {padding:5px; align:center;}

.mobilemenu a {
  text-decoration: none; border:none;
}

.submenu li {
display : inline-block; }

.href {
  display : inline-block;
  width:150px;
  height:60px;
  background-color:#5FCC06;
  vertical-align:top;
  color: #222;
  font-size: 125%;
  text-align:center;
}

.submenu, .submenu_container {width:95%;}

</style>

<style>

#setting_title img, li img{
    width:40px;
    cursor: pointer; cursor: hand;
    vertical-align:middle;
}
#menu_current {
    display:block;
    margin-bottom:20px;
}
#setting_menu {
    position:absolute;
    zorder=10000;
    background-color: #DDD;
    border:solid;
    box-shadow:              black 4px 6px 20px;
-webkit-box-shadow: black 4px 6px 20px;
-moz-box-shadow:     black 4px 6px 20px; 
}
#setting_menu, #menu_cookies, #menu_nocookies {
    display:none;
}
#setting_div {
    display:inline-block;
}
#setting_menu {
    padding:10px;
}

#settings_list{padding-left:5px;}

#setting_div li {
    padding:10px;
    margin:4px;
    border: solid 1px gray;
    list-style-type: none;
    cursor: pointer; cursor: hand;
}
#menu_close {
    text-align:right;
}
</style>

<script>
jQuery(".menu_close").bind("click",

function () {
    jQuery("#setting_menu").hide();
});

$(document).ready(function() { 
jQuery("#setting_title").bind("click",

function () {
    if (navigator.cookieEnabled === true) {
        ans = getCookie("device")
        if ((ans == "") || (ans == "auto")) {
            jQuery("#menu_current").text("<?php echo (__("The device type (tablet/pc) will be determined automatically."));?>");
        }
        if (ans == "tablet") {
            $("#menu_current").text("<?php echo (__("The site will be shown as on the tablet."));?>");
        }
        if (ans == "computer") {
            $("#menu_current").text("<?php echo (__("The site will be shown as on the computer."))?>");
        }
        $("#menu_cookies").show();
        $("#setting_menu").show();
        $(".settings_list li").bind("click",

        function () {
            maw_nastavit($(this).data("device"));
        });
    } else {
        $("#menu_nocookies").show();
        $("#setting_menu").show();
    }
});
});


function maw_nastavit(text) {
    setCookie("device", text, 28);
    $("#setting_menu").hide();
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i].trim();
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}
</script>


<?php
echo $maw_header;
?>
</head>
<body>
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div> 

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
    echo '<a href="menu.php?lang='.$value.'&amp;form='.$form.'" ><img src="'.$value.'.png" alt="'.$value.'" style="border: 0px solid ;" ></a>';
    if ($i<(count($lang_array)-1)) {echo ("&nbsp;");}
  }
}
lang_links();
echo ("&nbsp;<a rel=\"facebox\" href=\"translators.html\">".__("More languages")."</a>");
?>
</div>



<div id="flags-right">
<?php lang_links(); ?>
</div>

<?php echo($custom_between_flags); ?>

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

<div id="setting_div"><span id="setting"><span id="setting_title"><img src="http://blog.ezofficeinventory.com/wp-content/uploads/2014/02/f02a62985cde.png"/></span>

    <div id="setting_menu"> <span id="menu_nocookies">
    <?php echo (__("Cookies are off. Your device will be detected automatically. Set cookies on to choose your own preference.")); ?>
    <div class="menu_close">Close</div></span> <span id="menu_cookies">
        <span id="menu_current"></span>
 <?php echo (__("Change the setting to")); ?>
        <ul class="settings_list">
            <li data-device="tablet"><img src="icons/tablet.png"> <?php echo (__("tablet"));?></li>
            <li data-device="computer"><img src="icons/computer.png"> <?php echo (__("computer"));?></li>
            <li data-device="auto"><?php echo (__("detect automatically"));?></li>
        </ul></span>
    </div>
    </span>
    </div>


<div class="mobilemenu">
<?php 


function aktivni_konec($cislo)
{
  printsubmenu($cislo);
  echo ("</li>");
}

function aktivni($cislo){
    global $submenu;
    echo ("\n".'<li');
    if ($submenu==$cislo) echo ' class="maw_active">'; else echo ' class="maw_nonactive">';
  }

function nospaces ($a)
{
   global $submenu_inside;
   if (!($submenu_inside)) {return (str_replace(" ","&nbsp;",$a));}
   else {return ($a);}
}

function maw_submenu ($a,$b,$c,$d)
{
return "\n".'<li><a href="index.php?lang='.$b.'&amp;form='.$c.'"><div class="href">'.nospaces($d).'</div></a></li>';
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
    echo maw_submenu('graf',$lang,'graf', __("Function grapher"));
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
    echo maw_submenu('definite',$lang,'definite',__('Definite integral and mean value'));
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
    echo maw_submenu('newton',$lang,'newton',__('Newton-Raphson method'));
    echo maw_submenu('regula_falsi',$lang,'regula_falsi',__('Regula falsi'));
    echo maw_submenu('banach',$lang,'banach',__('Method of iterations'));
    echo maw_submenu('ineq2d',$lang,'ineq2d',__('System of inequalities (in one or two variables)'));
  }
  if ($proceed) {echo ("\n</ul>\n</div>\n");}
}

printf("\n<ul class=\"maw_mobile_menu\">");
aktivni(2);
echo __("Precalculus");
aktivni_konec(2);

aktivni(3);
echo __("Calculus");
aktivni_konec(3);

aktivni(4);
echo __("Integral calculus");
  aktivni_konec(4);

aktivni(5);
echo __("Differential equations");
aktivni_konec(5);

aktivni(6);
echo __("Equations and inequalities");
aktivni_konec(6);

echo("\n</ul>");

if (!$submenu_inside)
{
  printsubmenu($submenu);
}

echo '</div>';

?>

</div>
</body>
</html>
