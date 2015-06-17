<?php 

$sdeleni_cz="Úspěšný závěr školního roku a letního semestru všem uživatelům MAWu. Pěkné prázdniny a nashle v září.";
$sdeleni_en="Nice summer 2015 to all MAW users. Have a nice holidays.";

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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript" src="fancybox/video.js"></script>

<script src="masonry.pkgd.min.js"></script>

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
    display:none;
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

.polozka{margin-bottom:5px; display:inline-block; vertical-align:top;border:1px solid gray;
}


.thmbnail{background-color:#DDD; width:150px !important; padding:5px;}
.thmbnail imgdiv {margin: 0 auto; }
.href {height:auto;}

.double .polozka, .double .href, .double .thmbnail {width:320px !important;}
#one, .triple .polozka {width:320px !important;}

.ytbimg { position: absolute; top: 0; left: 0; width: 100%; }

.responsive-container { position: relative; padding-bottom: 65%; height: 0; overflow: hidden;}
.responsive-container .ytbimg { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
.cetered-div{ max-width:500px !important; margin-left:auto; margin-right:auto; display:inline-div;}
.border {border-width:1px; border-style: dashed; border-color: gray; padding:0px; background-color:#5fcc06;}
.popisek {margin-left:auto; margin-right:auto; margin-bottom:1px; font-size:75%; font-weight:normal; padding:3px;}

#one p {padding-right:5px; padding-bottom:3px;}

                              
@media screen and (max-width: 600px) {
     #one { 
           float: none;
           margin-right:0;
           width:auto;
           border:0;
           border-bottom:2px solid #000;    
   }
}

@media screen and (max-width: 700px) {
   .optimg {
      display: none;
  }
}

.mobilemenu, .maw_mobile_menu {padding:0px;}

.fb-like {margin-bottom:2px; margin-left:auto; margin-right:3px;}


.sdeleni {font-weight:500; background-color:#F5F5DC; border-top: 10px solid #5FCC06; padding:3px;}

.nopadding {background-color:#F5F5DC;}



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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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

<div class="support">
<?php
  if (__("http://sourceforge.net/apps/phpbb/mathassistant")!="http://sourceforge.net/apps/phpbb/mathassistant")
      { echo '<a href="'.__("http://sourceforge.net/apps/phpbb/mathassistant").'">'.__("Support from MAW forum").'</a><br>'; }
      ?>  

<div><a href="menu_old.php">Old menu (sorted by topic)</a></div></div>

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

?>
<div class="fb-like" data-href="http://user.mendelu.cz/marik/maw" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>


<?php
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


function nospaces ($a)
{
   global $submenu_inside;
   if (!($submenu_inside)) {return (str_replace(" ","&nbsp;",$a));}
   else {return ($a);}
}

function maw_submenu ($a,$b,$c,$d,$double="normal")
{
  $picture="";
  if (file_exists("$c.svg"))
    {$picture="<div class='imgdiv'><img src='$c.svg'></div>";} else {$picture="";}
  return "\n".'<div class="polozka '.$double.'"><a href="index.php?lang='.$b.'&amp;form='.$c.'"><div class="href">'.nospaces($d).'</div><div class="thmbnail">'.$picture.'</div></a></div>';
}


printf("\n<div class=\"maw_mobile_menu\">");


$calcs = array();

if (($reqlang == "cs")&&($sdeleni_cz!="")) {array_push($calcs, "<div class='polozka href nopadding'><div class='sdeleni'>$sdeleni_cz</div></div> ");}
if (($reqlang != "cs")&&($sdeleni_en!="")) {array_push($calcs, "<div class='polozka href nopadding'><div class='sdeleni'>$sdeleni_en</div></div> ");}

array_push($calcs, maw_submenu('integral',$lang,'integral',__('Antiderivative'),"double"));
array_push($calcs, maw_submenu('derivace',$lang,'derivace',__('Derivative and partial derivative'),'double'));
array_push($calcs, maw_submenu("prubeh",$lang,'prubeh',__('Investigating functions'),'double'));
array_push($calcs, maw_submenu('graf',$lang,'graf', __("Function grapher"),'double'));
array_push($calcs, maw_submenu('ode',$lang,'ode',__('First order ODE'),'double'));
array_push($calcs, maw_submenu('integral2',$lang,'integral2',__('Double integral')));
array_push($calcs, maw_submenu('definite',$lang,'definite',__('Definite integral and mean value')));

shuffle ($calcs);  foreach ($calcs as $value) {    echo $value; } $calcs = array();

array_push($calcs, maw_submenu('geom',$lang,'geom',__('Geometrical applications of definite integral')));
array_push($calcs, maw_submenu("minmax3d",$lang,"minmax3d", __('Local maxima and minima in two variables')));
array_push($calcs, maw_submenu('df',$lang,'df', __("Domain of functions (one variable)")));
array_push($calcs, maw_submenu('df3d',$lang,'df3d', __("Domain of functions (two variables)")));
array_push($calcs, maw_submenu('lagrange',$lang,'lagrange',__('Lagrange polynomial')));
array_push($calcs, maw_submenu('mnc',$lang,'mnc',__('Least squares method')));

shuffle ($calcs);  foreach ($calcs as $value) {    echo $value; } $calcs = array();

array_push($calcs, maw_submenu("taylor",$lang,'taylor', __('Taylor polynomial')));
array_push($calcs, maw_submenu('trap',$lang,'trap',__('Trapezoidal rule')));
array_push($calcs, maw_submenu('lineintegral',$lang,'lineintegral',__('Line integral')));
array_push($calcs, maw_submenu('lde2',$lang,'lde2',__('Second order LDE')));
array_push($calcs, maw_submenu('autsyst',$lang,'autsyst',__('Autonomous system')));
array_push($calcs, maw_submenu('bisection',$lang,'bisection',__('Bisection')));
array_push($calcs, maw_submenu('newton',$lang,'newton',__('Newton-Raphson method')));
array_push($calcs, maw_submenu('regula_falsi',$lang,'regula_falsi',__('Regula falsi')));
array_push($calcs, maw_submenu('banach',$lang,'banach',__('Method of iterations')));


 $youtubestring='<div class="wrapper polozka double"><div id="one" class="cetered-div border">';
 include("youtube.php");
 //$popisek='Division on meat grinder / dělení mlýnkem na maso';
 //$adresa='HecEOd2494k';
 $youtubestring = $youtubestring."<div class='popisek'>$popisek</div>";
 $youtubestring = $youtubestring.'<div class="responsive-container">';
 $imgadresa=preg_replace('/\?.*/', '', $adresa);;
if ($adresa==$imgadresa) {$adresa=$adresa."?fs=1&amp;autoplay=1";}
else {$adresa=$adresa."&amp;fs=1&amp;autoplay=1";}
 $youtubestring = $youtubestring."<a href='http://youtube.com/v/$adresa' title='' class='video'><img class='ytbimg' src='http://img.youtube.com/vi/$imgadresa/0.jpg'></a>";
 //$youtubestring = $youtubestring.'<iframe src="https://www.youtube.com/embed/';
 //$youtubestring = $youtubestring.$adresa;
 //$youtubestring = $youtubestring.'" frameborder="0" allowfullscreen></iframe>';
 $youtubestring = $youtubestring.'</div>';
 if ($reqlang=="cs")	
 {
 $youtubestring = $youtubestring.'<p style="text-align:right; margin:0pt; margin-top:5px; font-size:75%;">Celý <a href="https://www.youtube.com/user/KAJAMARIK1974/videos">Youtube kanál</a>';
 $youtubestring = $youtubestring.'<p style="text-align:right; margin:0pt; font-size:75%;">Web <a href="http://user.mendelu.cz/marik/mechmat">Mechanická matematika</a></p>';
}   
else
{
 $youtubestring = $youtubestring.'<p style="text-align:right;">The rest of the <a href="https://www.youtube.com/user/KAJAMARIK1974/videos">Youtube chanel</a>.</p>';
} 
 $youtubestring = $youtubestring.'</div></div>';


array_push($calcs, $youtubestring);

shuffle ($calcs);  foreach ($calcs as $value) {    echo $value; }


?>






</div>
</div>
</div>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41290718-1', 'mendelu.cz');
  ga('send', 'pageview');


$(window).load(function() {
//$(document).ready(function() {
$('.maw_mobile_menu').masonry({
  // options
  itemSelector: '.polozka',
  transitionDuration: '1s',
  columnWidth: 170
});
});

</script>



</body>
</html>
