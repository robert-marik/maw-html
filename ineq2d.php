
<span class="nadpis">
<?php echo __("Inequalities");?>
</span>

<?php maw_before_form()?><form <?php formmethod();?>
<?php //echo $onsubmit;
?>
action="<?php echo($server);?>/ineq2d/ineq2d.php" name="exampleform"  id="exampleform">
<?php polejazyka($lang); ?>
<textarea name="nerovnice" rows="6" cols="50">
4*x-y>0
x+y-8<0
2*x+3*y<20</textarea>
<div class="hint_preview">   <?php echo __("Read the comments below the form to find out, which inequalities can be solved.");?> </div>
   <br>
<input name="podmnez" type="checkbox"> 
   <?php echo __('suppose x,y>0');
?>

<br><input name="axislabels" type="checkbox" checked="checked"> 
   <?php echo __('draw labels on axes, not on boundary');
?>

<br>
<input name="pdf" type="checkbox" style="display:none"> 

   <?php echo "";//__('use high quality output in PDF');
?>

<input name="square" type="checkbox" checked="checked">
   <?php echo __('and change bounds to get equal units on both axes');
?>



<br>
<fieldset class="vnitrni">
<legend class="podnadpis">
   <?php echo __('Axes'); ?>
</legend>
<span style="font-style: italic;">xmin</span> = <input size="6" maxlength="6" name="xmin" value="-1"> &nbsp;
 <span style="font-style: italic;">xmax</span> = <input maxlength="6" size="6" name="xmax" value="10"> 

<br>
<span style="font-style: italic;">ymin =</span> <input maxlength="6" size="6" name="ymin" value="-1"> &nbsp;
 <span style="font-style: italic;">ymax</span> = <input maxlength="6" size="6" name="ymax" value="10">

</fieldset>
<br>

<?php echo $submitbutton;?>
</form><?php maw_after_form(); ?>

<?php history("ineq2d",$server); 

echo __("MAW-ineq2d");

?>
