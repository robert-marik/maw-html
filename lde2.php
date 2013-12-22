
<span class="nadpis">
<?php echo __("Second order linear differential equations");?>
</span>


<span style="font-weight: bold;"></span>
<?php maw_before_form()?><form <?php formmethod();?>
<?php echo $onsubmit;?>
 action="<?php echo($server);?>/lde2/ldr2.php"
name="exampleform" id="exampleform">
<?php polejazyka($lang); ?>

<?php 
   $f=rawurldecode($_REQUEST["f"]);    if ($f=="")  { $f="x^2"; }
   $p=rawurldecode($_REQUEST["p"]);    if ($p=="")  { $p="2"; }
   $q=rawurldecode($_REQUEST["q"]);    if ($q=="")  { $q="1"; }
   $method=rawurldecode($_REQUEST["method"]);    if ($method=="0")  { $method=0; } else {$method=1;}
   $ivp=rawurldecode($_REQUEST["ivp"]);    
   $x0=rawurldecode($_REQUEST["x0"]);    if ($x0=="")  { $x0="0"; }
   $y0=rawurldecode($_REQUEST["y0"]);    if ($y0=="")  { $y0="1"; }
   $y10=rawurldecode($_REQUEST["y10"]);    if ($y10=="")  { $y10="-1"; }

?>


<?php echo __('Equation');?>:
&nbsp;
  <span style="font-style: italic;">
&nbsp;y'' +&nbsp;</span><input maxlength="3" size="3" name="p" id="in-p" title="" value="<?php echo $p; ?>">&nbsp;<span style="font-style: italic;">y' +</span> <input maxlength="3" size="3" name="q" id="in-q" title="" value="<?php echo $q; ?>">
  <span style="font-style: italic;">y</span> = <input size="30" name="f" id="in-f" title="" value="<?php echo $f; ?>">
&nbsp; &nbsp; &nbsp;
<input value="<?php echo(__("Editor")); ?>" onclick="edit('f')" type="button" class="tlacitko editor">
<input value="<?php echo(__("Preview")); ?>" title="<?php echo($previewmsg); ?>"  onclick="previewb('f')" type="button" class="tlacitko">
<div class="hint_preview">
<?php echo __("You can use Preview and Edit buttons for entering the right hand side");
?>
</div>

<fieldset  class="vnitrni"><legend class="podnadpis">
<?php echo __('Method');?>

</legend>
<input <?php if ($method==0) {echo 'checked="checked"';} ?> name="akce" value="0" type="radio" id="in-ch0"> 
<?php echo __('variation of constants');?>

<br>
<input <?php if ($method==1) {echo 'checked="checked"';} ?>name="akce" value="1" type="radio" id="in-ch1"> 
<?php echo __('undetermined coefficients');?>

<br><hr>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="IVP" type="checkbox" <?php if ($ivp!="") {echo 'checked="checked"';} ?> value="on" id="in-ch">
<?php echo __('solve also initial value problem');?>:
 <span style="display:inline-block"><i>x</i>=<input maxlength="10" size="10" name="x0" id="in-x0" title="" value="<?php echo $x0 ?>"></span>
 <span style="display:inline-block"><i>y</i>=<input maxlength="10" size="10" name="y0" id="in-y0" title="" value="<?php echo $y0 ?>"></span>
 <span style="display:inline-block"><i>y'</i>=<input maxlength="10" size="10" name="y10" id="in-y10" title="" value="<?php echo $y10 ?>"></span>
</fieldset>
<?php echo $submitbutton;?>

</form><?php maw_after_form(); ?>

<?php history("lde2",$server); 

echo __("MAW-lde2");

?>

