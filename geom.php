<?php

$fcef=$_REQUEST["funkcef"];
$fceg=$_REQUEST["funkceg"];
$akce=$_REQUEST["akce"];
$meza=$_REQUEST["meza"];
$mezb=$_REQUEST["mezb"];
$colors=$_REQUEST["colors"];
$hidden=$_REQUEST["hidden"];
$xmin=$_REQUEST["xmin"];
$xmax=$_REQUEST["xmax"];
$ymin=$_REQUEST["ymin"];
$ymax=$_REQUEST["ymax"];
$action=rawurldecode($_REQUEST["akce"]);

if ($fceg=="") {$fceg="(1-x)^2";}
if ($fcef=="") {$fcef="1-x^2";}
if ($akce=="") {$akce=1;}
if ($meza=="") {$meza=0;}
if ($mezb=="") {$mezb=1;}
if ($xmin=="") {$xmin=-1;}
if ($xmax=="") {$xmax=3;}
if ($ymin=="") {$ymin=-1;}
if ($ymax=="") {$ymax=3;}

$check0="";
$check1="";
$check2="";
$check3="";

if ($action=="") {$action=0;}
if ($action==0) {$check0=" checked=\"checked\" ";}
if ($action==1) {$check1=" checked=\"checked\" ";}
if ($action==2) {$check2=" checked=\"checked\" ";}
if ($action==3) {$check3=" checked=\"checked\" ";}

?>

<span class="nadpis"><?php echo __("Definite integral in geometry");?>
</span>

<?php maw_before_form()?><form name="exampleform" id="exampleform" <?php formmethod();?>
<?php echo $onsubmit;?>
action="<?php
echo($server);?>/geom/geom.php">
<?php polejazyka($lang); ?>

<fieldset  class="vnitrni"><legend class="podnadpis">
   <?php echo __("Formulation of the problem"); ?>
</legend>
<?php echo __("Curves on boundary"); ?>:

<br>
<table><tr><td>
<?php echo __('Upper bound');?>:
</td><td><span style="font-style: italic;">f(x) =</span> </td><td>
<input name="funkcef" value="<?php echo $fcef; ?>" title="" id="in-funkcef">
<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkcef')" type="button" class="tlacitko editor">
<input value="<?php echo(__("Preview")); ?>" title="<?php echo($previewmsg); ?>" onclick="previewb('funkcef')" type="button"
class="tlacitko">
</td></tr>
<tr><td>
   <?php echo __('Lower bound'); ?>:
</td><td><span style="font-style: italic;">g(x) =</span></td><td>
<input name="funkceg" value="<?php echo $fceg; ?>" title="" id="in-funkceg">
<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkceg')" type="button" class="tlacitko editor">
<input value="<?php echo(__("Preview")); ?>" title="<?php echo($previewmsg); ?>" onclick="previewb('funkceg')" type="button" class="tlacitko">
</td></tr>
</table>

<?php hint_preview();?>

<?php echo __("Bounds on <i>x</i> axis: <small>(you can try to find the intercepts of both curves by choosing \"intercepts\" in parameters for computation)</small>");
?>
<br>

&nbsp; <span style="font-style: italic;">
   <?php echo __('lower bound') ?>
=</span>
<input name="meza" value="<?php echo $meza; ?>" size="15" title="" id="in-meza"> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;<span style="font-style: italic;">
    <?php echo __('upper bound');?>
 =</span>
<input name="mezb" value="<?php echo $mezb; ?>" size="15" title="" id="in-mezb"><br>

</fieldset>

<fieldset  class="vnitrni"><legend class="podnadpis">
    <?php echo __('Parameters'); ?>
</legend>
<?php echo __('Action');?>:
<br>
&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
<input <?php echo ($check0); ?> name="akce" value="0" title="" id="ch-0"
type="radio">&nbsp;
						<?php printf(__('Find %s area %s between two curves and draw graph.'),'<b>','</b>'); ?>

<br>
&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
<input  <?php echo ($check2); ?> name="akce" value="2" title="" id="ch-2"
type="radio">&nbsp;
						<?php printf (__('Find %s volume %s of solid of revolution and draw graph'),'<b>','</b>');?>
<br>
&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
<input  <?php echo ($check3); ?> name="akce" value="3" title="" id="ch-3"
type="radio">&nbsp;
						<?php echo __('preview solid of revolution');?>
<input name="colors" type="checkbox">&nbsp;
						<?php echo __('show colors, no mesh'); ?>
<input name="hidden" type="checkbox">&nbsp;
						<?php echo __('hide invisible parts'); ?>

<br> 
&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; 
<input  <?php echo ($check1); ?> name="akce" value="1" title="" id="ch-1"
type="radio">&nbsp;
						<?php echo __('Find intercepts of curves');?>
<br><br>
						<?php echo __('Bounds for the picture (decimal numbers)'); ?>

<br>

<span style="font-style: italic;">xmin =</span>
  <input name="xmin" value="<?php echo $xmin; ?>" size="15" title="" id="in-xmin"> &nbsp;
&nbsp; <span style="font-style: italic;">xmax =</span> 
<input name="xmax" value="<?php echo $xmax; ?>" size="15" title="" id="in-xmax"><br>

&nbsp;<br>

<span style="font-style: italic;">ymin =</span>&nbsp;<input name="ymin" value="<?php echo $ymin; ?>" size="15" title="" id="in-ymin">
&nbsp;&nbsp; <span style="font-style: italic;">&nbsp;ymax =</span> <input name="ymax" value="<?php echo $ymax; ?>" size="15" title="" id="in-xmax">
</fieldset>

<?php echo $submitbutton;?>

</form><?php maw_after_form(); ?>
<?php history("geom",$server);

?>

<script>
$(document).ready(function() {
$("#in-funkcef").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?\\int_{a}^{b} {\\color{red}f(x)}-g(x)\\,\\mathrm{d}x">' });
$("#in-funkceg").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?\\int_{a}^{b} f(x)-{\\color{red}g(x)}\\,\\mathrm{d}x">' });
$("#in-meza").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?\\int_{{\\color{red}a}}^{b} f(x)-g(x)\\,\\mathrm{d}x">' });
$("#in-mezb").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?\\int_{a}^{{\\color{red}b}} f(x)-g(x)\\,\\mathrm{d}x">' });
$("#ch-0").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?S=\\int_{a}^{{b}} f(x)-g(x)\\,\\mathrm{d}x">' });
$("#ch-2").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?V=\\pi\\int_{a}^{{b}} f^2(x)-g^2(x)\\,\\mathrm{d}x">' });
$("#ch-1").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?f(x)=g(x)\\implies x_{1,2}=\\cdots">' });
});
</script>