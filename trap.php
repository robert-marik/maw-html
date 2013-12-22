
<span class="nadpis">
<?php echo __("Trapezoidal rule (approximation for definite integral)");?>
</span>



<?php maw_before_form()?><form name="exampleform"  id="exampleform"
<?php echo $onsubmit;?>
<?php formmethod();?> action="<?php echo($server);?>/trap/trapezoidal.php">

    <?php polejazyka($lang); ?>
<span>
<?php echo __('Function'); ?>:

</span> &nbsp; &nbsp;<span style="font-style: italic;"> y=</span> <input size="40" name="funkce" id="in-funkce" value="x^3+2"> 
		 &nbsp;&nbsp;&nbsp;

<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkce')" type="button" class="tlacitko editor">
			       
<br>
<br>

<fieldset  class="vnitrni"><legend class="podnadpis">
<?php echo __('Limits for integration'); ?>:</legend>
  
  <span style="font-style: italic;">
    
<?php echo __('lower limit'); ?>
    &nbsp; =</span> <input size="12" maxlength="12" name="a" id="in-a" value="0">
  &nbsp;
  &nbsp; <span style="font-style: italic;">
    <?php echo __('upper limit'); ?>
 &nbsp; =</span> <input maxlength="12" size="12" name="b" id="in-b" value="2">
<br><br>
    <?php echo __('intervals in partition');?>: 
<input maxlength="6" size="6" name="n" id="in-n" value="4"> 
</fieldset>
<?php echo $submitbutton;?>

</form><?php maw_after_form(); ?>

 <?php history("trap",$server); 
?>
