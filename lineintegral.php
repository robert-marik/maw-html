<span class="nadpis">
<?php echo __("Line integral");?>
</span>

<?php maw_before_form()?><form name="exampleform" id="exampleform"
   <?php echo $onsubmit;?>
<?php formmethod();?> action="<?php echo($server);?>/lineintegral/lineintegral.php">
<?php polejazyka($lang); ?>

<br>
<fieldset class="vnitrni">

<?php 
  $kind=$_REQUEST["kind"];
  if ($kind!="2"){$kind=1;}
?>

<input type="radio" name="kind" value="1" id="ch-kind1" <?php if ($kind==1) {echo "checked=\"checked\"";}?> > 


<?php 
   echo __('Integral of a scalar field');
echo (sprintf(" (<a href=\"%s\">?</a>)",__("http://en.wikipedia.org/wiki/Line_integral#Line_integral_of_a_scalar_field")));

?>:

<span><img src="intC.gif" align="middle" alt="integral_sign" style="margin-bottom:10px;"></span> 
<span id="first_kind">
<input size="20" id="in-function"
name="function"
value="<?php
$function=$_REQUEST["function"];
if ($function==""){echo 'x^2';}
else {echo rawurldecode($function);}
?>">d<i>s</i>
</span>

<br>

<input type="radio" name="kind" id="ch-kind2" value="2" <?php if ($kind==2) {echo "checked=\"checked\"";}?> > 

<?php 
   echo __('Integral of a vector field');
echo (sprintf(" (<a href=\"%s\">?</a>)",__("http://en.wikipedia.org/wiki/Line_integral#Line_integral_of_a_vector_field")));

?>:


<span><img src="intC.gif" align="middle" alt="integral_sign"></span> 
<span id="second_kind">
<input size="6" id="in-fx"
name="fx"
value="<?php
$fx=$_REQUEST["fx"];
if ($fx==""){echo 'x+1';}
else {echo rawurldecode($fxn);}
?>">d<i>x</i>
+
<input size="6"
name="fy"  id="in-fy"
value="<?php
$fy=$_REQUEST["fx"];
if ($fy==""){echo 'x*y';}
else {echo rawurldecode($fy);}
?>">d<i>y</i>
+
<input size="6"
name="fz"  id="in-fz"
value="<?php
$fz=$_REQUEST["fz"];
if ($fz==""){echo '';}
else {echo rawurldecode($fz);}
?>">d<i>z</i>
<span class="submit_comment"><br>  &nbsp;<?php echo __("Leave the last field empty for integral in 2D plane."); ?></span>
</span>
</fieldset>

<?php hint_preview(); ?>

<fieldset  class="vnitrni"><legend class="podnadpis">
<?php echo __('Parameters'); ?>
</legend>
<div style="display:none;"><div class="vnitrni2">
<?php $dimension=$_REQUEST["dimension"]; if ($dimension !="3") {$dimension=2;} ?>
<input type="radio" id="ch-dim2" name="dimension" value="2" <?php if ($dimension=="2") {echo "checked=\"checked\"";}?> 
onclick="document.getElementById('z-coord').style.display='none';"
> <?php echo __("line integral in 2D"); ?>
<br>
<input type="radio" id="ch-dim3" name="dimension" value="3" <?php if ($dimension=="3") {echo "checked=\"checked\"";}?> 
onclick="document.getElementById('z-coord').style.display='inline';"
> <?php echo __("line integral in 3D"); ?>
</div>
</div>
<fieldset class="vnitrni2">
<legend class="podnadpis">
<?php echo __('Curve'); ?>
</legend>
   <i>x(t)</i>=<input size="20" name="x" id="in-x"
   value="<?php $x=$_REQUEST["x"]; if ($x==""){echo 'cos(t)';} else {echo rawurldecode($x);}?>">
   <br>
   <i>y(t)</i>=<input size="20" name="y" id="in-y"
   value="<?php $y=$_REQUEST["y"]; if ($y==""){echo 'sin(t)';} else {echo rawurldecode($y);}?>">
   <span id="z-coord"><br>
   <i>z(t)</i>=<input size="20" name="z" id="in-z"
   value="<?php $z=$_REQUEST["z"]; if ($z==""){echo '';} else {echo rawurldecode($z);}?>">
   <br>
   <span class="submit_comment"><?php echo __("Leave the last field empty for integral in 2D plane."); ?></span>
   </span>
</fieldset>
<fieldset class="vnitrni2"><legend class="podnadpis">
<?php echo __("Parameter bounds"); ?>
</legend>
tmin=<input size="10" id="in-tmin" name="tmin" value="<?php $tmin=$_REQUEST["tmin"]; if ($tmin==""){echo '0';} else {echo rawurldecode($tmin);}?>">
<br>
tmax=<input size="10" id="in-tmax" name="tmax" value="<?php $tmin=$_REQUEST["tmax"]; if ($tmax==""){echo 'pi';} else {echo rawurldecode($tmax);}?>">
<br>
<span id="preview_curve"><input value="<?php echo(__("Preview")); ?>" onclick="preview_curve()" type="button" class="tlacitko"></span>
</fieldset>
</fieldset>
  
<br>
<?php echo $submitbutton;?>

</form><?php maw_after_form(); ?>

<?php history("lineintegral",$server); 


?>

