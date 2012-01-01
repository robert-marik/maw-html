
<span class="nadpis">
<?php 
$oderhs=rawurldecode($_REQUEST["oderhs"]);
$ode2=str_replace("y\'","y'",rawurldecode($_REQUEST["ode2"]));

if (str_replace(" ","",$oderhs)=="")
  {
    $oderhs="-2*y/x+x^4";
  }

if (str_replace(" ","",$ode2)=="")
  {
    $ode2="x*y'+y-x=0";
  }

?>


<?php echo __("Ordinary differential equations");?>
</span>

<?php maw_before_form()?><form name="exampleform" 
<?php echo $onsubmit;?>
<?php formmethod();?> action="<?php echo($server);?>/ode/ode.php">
<?php polejazyka($lang); ?>

<br>
<fieldset class="main">
<input checked="checked" name="akce" value="0"
type="radio">
   <span>
  <?php echo __('Equation solved wrt y\'');?>: 
   </span> 
&nbsp; &nbsp; <span style="font-style: italic;">y'=</span> 
<input size="60" name="ode" value="<?php echo $oderhs;?>"> &nbsp; &nbsp; &nbsp;
<input value="<?php echo(__("Editor")); ?>" onclick="edit('ode')" type="button" class="tlacitko">
<input value="<?php echo(__("Preview")); ?>" onclick="previewb('ode')" type="button"
class="tlacitko">
<br>
<br>

<input name="akce" value="1"
type="radio">&nbsp;
<?php echo __("Full equation");?>: &nbsp; &nbsp;
<input size="60" name="ode2" value="<?php echo $ode2;?>"> &nbsp; &nbsp; &nbsp;
<input value="<?php echo(__("Preview")); ?>" onclick="previewb('ode2')" type="button"
class="tlacitko">

<br>
<br>
<?php echo $submitbutton;?>
<br>
</fieldset>
</form><?php maw_after_form(); ?>



<?php history("ode",$server);

echo __("MAW-ode");

?>