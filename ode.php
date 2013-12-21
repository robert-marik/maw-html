
<span class="nadpis">
<?php 
$oderhs=rawurldecode($_REQUEST["oderhs"]);
$ode2=str_replace("y\'","y'",rawurldecode($_REQUEST["ode2"]));
$readonly1="";
$readonly2="readonly=''";
$checked1='checked="checked"';
$checked2='';

if (str_replace(" ","",$ode2)=="")
  {
    $ode2="x*y'+y-x=0";
  }
else
  {
    $readonly2="";
    $readonly1="readonly=''";
    $checked2='checked="checked"';
    $checked1='';
  }

if (str_replace(" ","",$oderhs)=="")
  {
    $oderhs="-2*y/x+x^4";
  }
else
  {
    $readonly1="";
    $readonly2="readonly=''";
    $checked1='checked="checked"';
    $checked2='';
  }

?>


<?php echo __("Ordinary differential equations");?>
</span>

<?php maw_before_form()?><form name="exampleform" id="exampleform"
<?php echo $onsubmit;?>
<?php formmethod();?> action="<?php echo($server);?>/ode/ode.php">
<?php polejazyka($lang); ?>
  <input <?php echo $checked1; ?> id="in-ch0" name="akce" value="0" title=""
type="radio">
   <span>
  <?php echo __('Equation solved wrt y\'');?>: 
   </span> <br>
&nbsp; &nbsp; <span style="font-style: italic;">y'=</span> 
<input size="40" name="ode" id="in-ode" value="<?php echo $oderhs;?>"  <?php echo $readonly1;?> title=""> &nbsp; &nbsp; &nbsp;
<input value="<?php echo(__("Editor")); ?>" onclick="edit('ode')" type="button" class="tlacitko editor">
<input value="<?php echo(__("Preview")); ?>" title="<?php echo($previewmsg); ?>" onclick="previewb('ode')" type="button"
class="tlacitko">
<br>
<input <?php echo $checked2; ?> id="in-ch1" name="akce" value="1" title=""
type="radio">&nbsp;
<?php echo __("Full equation");?>:<br> &nbsp; &nbsp;
<input size="60" name="ode2" id="in-ode2" value="<?php echo $ode2;?>" <?php echo $readonly2;?> title=""> &nbsp; &nbsp; &nbsp;
<input value="<?php echo(__("Preview")); ?>" onclick="previewb('ode2')" type="button"
class="tlacitko">

<br>
<?php echo $submitbutton;?>
</form><?php maw_after_form(); ?>



<?php history("ode",$server);

echo __("MAW-ode");

?>
