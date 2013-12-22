
<span class="nadpis">
<?php echo __("Domain of a function in two variables"); ?>
</span>

<?php maw_before_form()?><form <?php formmethod();?>
<?php echo $onsubmit;?>
action="<?php echo($server);?>/domf/domf.php" name="exampleform" id="exampleform">
<?php polejazyka($lang); ?>

<?php echo __('Function');?>
&nbsp;
<span style="font-style: italic;">f(x,y) =</span> <input name="funkcef" value="asin(x*y)+sqrt(4-x-y)" size="35">
<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkcef')" type="button" class="tlacitko editor">
<input value="<?php echo(__("Preview")); ?>" title="<?php echo($previewmsg); ?>" onclick="previewb('funkcef')" type="button" class="tlacitko">

<?php hint_preview(); ?>

<fieldset  class="vnitrni"><legend class="podnadpis">
   <?php echo __('limits for the picture with domain:'); ?>
</legend>
<input name="akce" value="5" type="hidden"> 
<?php 
   echo '<input name="df" value="5" type="radio" checked="checked"> '; 
echo __("draw domain on the set");
echo ' [-5,5]x[-5,5] <br><input name="df" value="10" type="radio"> ';
echo __("draw domain on the set");
echo ' [-10,10]x[-10,10] <br><input name="df" value="20" type="radio"> ';
echo __("draw domain on the set");
echo '[-20,20]x[-20,20] ';
?>


</fieldset>

<?php echo $submitbutton;?>

</form><?php maw_after_form(); ?>

<?php history("domf",$server); 



?>
