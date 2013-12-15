<span class="nadpis">
<?php echo __("Definite integral and mean value");?></span>



<?php maw_before_form()?><form name="exampleform"  id="exampleform"
<?php echo $onsubmit;?>
<?php formmethod();?> action="<?php echo($server);?>/definite/definite.php">

    <?php polejazyka($lang); ?>
<span>
<?php echo __('Function'); ?>:

</span> &nbsp; &nbsp;<span style="font-style: italic;"> y=</span> <input size="40" name="funkce" value="sin(x)^2" id="in-funkce" title=""> 
		 &nbsp;&nbsp;&nbsp;

<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkce')" type="button" class="tlacitko editor">
			       
<br>
<br>

<fieldset  class="vnitrni"><legend class="podnadpis">
<?php echo __('Limits for integration'); ?>:</legend>
  
  <span style="font-style: italic;">
    
<?php echo __('lower limit'); ?>
    &nbsp; =</span> <input size="12" maxlength="12" name="a" value="0" id="in-a" title="">
  &nbsp;
  &nbsp; <span style="font-style: italic;">
    <?php echo __('upper limit'); ?>
 &nbsp; =</span> <input maxlength="12" size="12" name="b" value="pi" id="in-b" title="">
</fieldset>
<?php echo $submitbutton;?>

</form><?php maw_after_form(); ?>

 <?php history("definite",$server); 
        echo __("MAW-definite");
?>

<script>
window.onload = function() {
$("#in-funkce").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?\\int_{a}^{b} {\\color{red}f(x)}\\,\\mathrm{d}x">' });
$("#in-a").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?\\int_{{\\color{red}a}}^{b} f(x)\\,\\mathrm{d}x">' });
$("#in-b").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?\\int_{a}^{{\\color{red}b}} f(x)\\,\\mathrm{d}x">' });
}
</script>