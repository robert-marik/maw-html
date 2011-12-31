<span class="nadpis">
<?php echo __("Derivative and partial derivative");?>
</span>

<form name="exampleform"
<?php formmethod();?> action="<?php echo($server);?>/derivace/derivace.php">
<?php polejazyka($lang); ?>
<fieldset class="main">
<br>
<label for="funkce">
   <?php echo __('Function'); ?> :
</label>
&nbsp;&nbsp;<span style="font-style:
italic;">f=</span> <input size="60" name="funkce"
value="x^3*exp(x^2)">
  <input value="<?php echo(__("Editor")); ?>" onclick="edit('funkce')" type="button" class="tlacitko">
<input value="<?php echo(__("Preview")); ?>" onclick="previewb('funkce')" type="button" class="tlacitko">
	<br>
	<small><?php hint_preview(); ?>
</small>
<br>
<br>
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
<br>
<br>
<input value=
"<?php echo __('Submit'); ?>" 
name="tlacitko" type="submit" class="tlacitko">
</fieldset>
</form>

<?php history("derivace",$server); 

echo __("MAW-der")




?>

</body>
</html>

