<span class="nadpis">
<?php echo __("Derivative and partial derivative");?>
</span>

<?php maw_before_form()?><form name="exampleform"
<?php echo $onsubmit;?>
<?php formmethod();?> action="<?php echo($server);?>/derivace/derivace.php">
<?php polejazyka($lang); ?>

<label for="funkce">
   <?php echo __('Function'); ?>
</label>
&nbsp;&nbsp;<span style="font-style:
italic;">f=</span> <input size="60" name="funkce"
value="x^3*exp(x^2)">
  <input value="<?php echo(__("Editor")); ?>" onclick="edit('funkce')" type="button" class="tlacitko">
<input value="<?php echo(__("Preview")); ?>" title="<?php echo($previewmsg); ?>" onclick="previewb('funkce')" type="button" class="tlacitko">

<?php hint_preview(); ?>

<input name="linear" type="checkbox" checked="on"> 
<?php echo __('automatically use linearity of derivative');?>
<br>
<input name="constants" type="checkbox"> 
<?php echo __('automatically differentiate constants');?>
<br>
<br>
<fieldset class="vnitrni">
<legend>
<?php echo __("The type of the derivative");?>
</legend>
<input name="akce" type="radio" checked="checked" value="0"> 
	<?php echo __("Ordinary derivative (function in one variable)");?>
<br>
<input name="akce" type="radio" value="1"> 
	<?php echo __("Partial derivative with respect to <i>x</i> (function in two variables)");?>
<br>
<input name="akce" type="radio" value="2"> 
	<?php echo __("Partial derivative with respect to <i>y</i> (function in two variables)");?>
</fieldset>
<?php echo $submitbutton;?>

</form><?php maw_after_form(); ?>

<?php history("derivace",$server); 

echo __("MAW-der")


?>




