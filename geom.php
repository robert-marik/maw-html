


<span class="nadpis">
<?php echo __("Definite integral in geometry");?>
</span>

<?php maw_before_form()?><form name="exampleform" method="get"
<?php echo $onsubmit;?>
action="<?php
echo($server);?>/geom/geom.php">
<?php polejazyka($lang); ?>
<fieldset class="main">
<fieldset  class="vnitrni"><legend class="podnadpis">
   <?php echo __("Formulation of the problem"); ?>
</legend>
<?php echo __("Curves on boundary"); ?>:

<br>
<table><tr><td>
<?php echo __('Upper bound');?>:
</span>
</td><td><span style="font-style: italic;">f(x) =</td><td></span> 
<input name="funkcef" value="1-x^2">
<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkcef')" type="button" class="tlacitko">
<input value="<?php echo(__("Preview")); ?>" onclick="previewb('funkcef')" type="button"
class="tlacitko">
</td><tr>
<tr><td>
   <?php echo __('Lower bound'); ?>:
</td><td><span style="font-style: italic;">g(x) =</td><td></span> 
<input name="funkceg" value="(1-x)^2">
<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkceg')" type="button" class="tlacitko">
<input value="<?php echo(__("Preview")); ?>" onclick="previewb('funkceg')" type="button"
class="tlacitko">
</td></tr>
</table>
<br><small><?php hint_preview();?></small>
<br>
<br>
<?php echo __("Bounds on <i>x</i> axis: <small>(you can try to find the intercepts of both curves by choosing \"intercepts\" in parameters for computation)</small>");
?>
<br>

&nbsp; <span style="font-style: italic;">
   <?php echo __('lower bound') ?>
=</span>
<input name="meza" value="0"> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;<span style="font-style: italic;">
    <?php echo __('upper bound');?>
 =</span>
<input name="mezb" value="1"><br>

</fieldset>

<fieldset  class="vnitrni"><legend class="podnadpis">
    <?php echo __('Parameters'); ?>
</legend>
<?php echo __('Action');?>:
<br>
&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
<input checked="checked" name="akce" value="0"
type="radio">&nbsp;
						<?php printf(__('Find %s area %s between two curves and draw graph.'),'<b>','</b>'); ?>

<br>
&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
<input name="akce" value="2"
type="radio">&nbsp;
						<?php printf (__('Find %s volume %s of solid of revolution and draw graph'),'<b>','</b>');?>
<br>
&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
<input name="akce" value="3"
type="radio">&nbsp;
						<?php echo __('preview solid of revoultion');?>
<input name="colors" type="checkbox">&nbsp;
						<?php echo __('show colors, no mesh'); ?>
<input name="hidden" type="checkbox">&nbsp;
						<?php echo __('hide invisible parts'); ?>

<br> 
&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; 
<input name="akce" value="1"
type="radio">&nbsp;
						<?php echo __('Find intercepts of curves');?>
<br><br>
						<?php echo __('Bounds for the picture (decimal numbers)'); ?>

<br>

<span style="font-style: italic;">xmin =</span>
  <input name="xmin" value="-1"> &nbsp;
&nbsp; <span style="font-style: italic;">xmax =</span> 
<input name="xmax" value="3"><br>






&nbsp;<br>






<span style="font-style: italic;">ymin =</span>&nbsp;<input name="ymin" value="-1">
&nbsp;&nbsp; <span style="font-style: italic;">&nbsp;ymax =</span> <input name="ymax" value="3">
</fieldset>
<br>
<?php echo $submitbutton;?>

</fieldset>


</form><?php maw_after_form(); ?>
<?php history("geom",$server);
						echo __("MAW-geom");

 ?>



