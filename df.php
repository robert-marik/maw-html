<span class="nadpis">
   <?php echo __("Domain of a function in one variable");?>
</span>

<?php maw_before_form()?><form <?php formmethod();?>
<?php echo $onsubmit;?>
action="<?php echo($server);?>/domf/domf.php" name="exampleform" id="exampleform">
<?php polejazyka($lang); ?>
<?php echo __('Function');?>
 &nbsp;
<span style="font-style: italic;">f(x) =</span> <input name="funkcef" id="in-funkcef" value="x*log(4-x^2)/(sqrt(x-1))" size="35">
<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkcef')" type="button" class="tlacitko editor">
<input value="<?php echo(__("Preview")); ?>" title="<?php echo($previewmsg); ?>" onclick="previewb('funkcef')" type="button" class="tlacitko">

<?php hint_preview(); ?>

<fieldset  class="vnitrni"><legend class="podnadpis">

   <?php echo __('Parameters');?>

  </legend>
  <input name="akce" value="5" type="hidden"> 
  <input name="onevar" value="1" type="hidden"> 

   <span style="font-style: italic;">xmin</span> = <input size="6" maxlength="6" name="xmin" id="in-xmin" value="-5"> &nbsp;
   <span style="font-style: italic;">xmax</span> = <input maxlength="6" size="6" name="xmax" id="in-xmax" value="5"> 

</fieldset>
<?php echo $submitbutton;?>
</form><?php maw_after_form(); ?>

<?php history("domf",$server); 
?>


<?php

?>
