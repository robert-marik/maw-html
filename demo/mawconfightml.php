<?php

$server="/maw";

$maw_header="\n<script type=\"text/javascript\">\n function setmawcompact() \n{\n document.cookie=\"maw_design=compact;\"\n}\nfunction setmawfull() \n{\n document.cookie=\"maw_design=full;\"\n}\n</script>\n";

if ((isset($_COOKIE["maw_design"])) && ($_COOKIE['maw_design']=="compact"))
{
$custom_between_flags="\n<div id=\"design_button\"><input type=\"button\" name=\"design_button\" class=\"design_button\" onClick=\"setmawfull(); location.reload(true);\" value=\"".__("Switch to a full design")."\"></div>";
$maw_header=$maw_header."<link rel=\"stylesheet\" type=\"text/css\" href=\"two_column.css\" />";
$submenu_inside=true;
$submenu_all=true;
}
else
{
$custom_between_flags="\n<div id=\"design_button\"><input type=\"button\" name=\"design_button\" class=\"design_button\" onClick=\"setmawcompact(); location.reload(true);\" value=\"".__("Switch to a compact design")."\"></div>";
}

$maw_overlib=false;

//$maw_header="";
//$custom_between_flag="";

?>