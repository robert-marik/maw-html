<span class="nadpis">
<?php echo __("Definite integral and mean value");?>
 NOT YET AVAILABLE / ZATIM NEFUNGUJE
</span>



<?php maw_before_form()?><form name="exampleform"  id="exampleform"
<?php echo $onsubmit;?>
<?php formmethod();?> action="<?php echo($server);?>/definite/definite.php">

    <?php polejazyka($lang); ?>
<span>
<?php echo __('Function'); ?>:

</span> &nbsp; &nbsp;<span style="font-style: italic;"> y=</span> <input size="40" name="funkce" value="sin(x)/x"> 
		 &nbsp;&nbsp;&nbsp;

<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkce')" type="button" class="tlacitko editor">
			       
<br>
<br>

<fieldset  class="vnitrni"><legend class="podnadpis">
<?php echo __('Limits for integration'); ?>:</legend>
  
  <span style="font-style: italic;">
    
<?php echo __('lower limit'); ?>
    &nbsp; =</span> <input size="12" maxlength="12" name="a" value="1">
  &nbsp;
  &nbsp; <span style="font-style: italic;">
    <?php echo __('upper limit'); ?>
 &nbsp; =</span> <input maxlength="12" size="12" name="b" value="2">
</fieldset>
<?php echo $submitbutton;?>

</form><?php maw_after_form(); ?>

 <?php history("definite",$server); 
        echo __("MAW-definite");
?>
