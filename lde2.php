
<span class="nadpis">
<?php echo __("Second order linear differential equations");?>
</span>


<span style="font-weight: bold;"></span>
<?php maw_before_form()?><form method="get"
<?php echo $onsubmit;?>
 action="<?php echo($server);?>/lde2/ldr2.php"
name="exampleform">
<?php polejazyka($lang); ?>
 <?php echo __('Equation');?>:
&nbsp;
  <span style="font-style: italic;">
&nbsp;y'' +&nbsp;</span><input maxlength="3" size="3" name="p" value="2">&nbsp;<span style="font-style: italic;">y' +</span> <input maxlength="3" size="3" name="q" value="1">
  <span style="font-style: italic;">y</span> = <input size="30" name="f" value="x^2">
&nbsp; &nbsp; &nbsp;
<input value="<?php echo(__("Editor")); ?>" onclick="edit('f')" type="button" class="tlacitko">
<input value="<?php echo(__("Preview")); ?>" onclick="previewb('f')" type="button"
class="tlacitko">
<div class="hint_preview">
<?php echo __("You can use Preview and Edit buttons for entering the right hand side");
?>
</div>

<fieldset  class="vnitrni"><legend class="podnadpis">
<?php echo __('Method');?>

</legend>
<input checked="checked" name="akce" value="0" type="radio"> 
<?php echo __('variation of constants');?>

<br>
<input name="akce" value="1" type="radio"> 
<?php echo __('undetermined coefficients');?>

<br><hr>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="IVP" type="checkbox" value="on">
<?php echo __('solve also initial value problem');?>:
 <i>x</i>=<input maxlength="10" size="10" name="x0" value="0">
 <i>y</i>=<input maxlength="10" size="10" name="y0" value="1">
 <i>y'</i>=<input maxlength="10" size="10" name="y10" value="-1">
</fieldset>
<?php echo $submitbutton;?>

</form><?php maw_after_form(); ?>

<?php history("lde2",$server); 

echo __("MAW-lde2");

?>
