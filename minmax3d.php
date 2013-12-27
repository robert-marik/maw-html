
<span class="nadpis">
<?php echo __("Local extrema in two variables");
$function=rawurldecode($_REQUEST["function"]);
$points=rawurldecode($_REQUEST["points"]);
$pointx=rawurldecode($_REQUEST["pointx"]);
$pointy=rawurldecode($_REQUEST["pointy"]);
$action=rawurldecode($_REQUEST["akce"]);

if ($function=="") {
  $function="x*y*(4-x-y)";
  $points="[0,0] ; [0,4] ; [4,0] ; [4/3,4/3]";
  $pointx="4/3";
  $pointy="4/3";
  $action=0;
}

$check0="";
$check1="";
$check2="";

if ($action==0) {$check0="checked=\"checked\"";}
if ($action==1) {$check1="checked=\"checked\"";}
if ($action==2) {$check2="checked=\"checked\"";}

?>
</span>

<?php maw_before_form()?><form <?php formmethod();?>
<?php echo $onsubmit;?>
action="<?php echo($server);?>/minmax3d/minmax3d.php" name="exampleform" id="exampleform">
<?php polejazyka($lang); ?>

<?php echo __('Function'); ?>
&nbsp;
<span style="font-style: italic;">f(x,y) =</span> <input name="funkcef" id="in-funkcef" value="<?php echo $function?>" size="35">
<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkcef')" type="button" class="tlacitko editor">
<input value="<?php echo(__("Preview")); ?>" title="<?php echo($previewmsg); ?>" onclick="previewb('funkcef')" type="button" class="tlacitko">

<?php hint_preview(); ?>

<fieldset  class="vnitrni"><legend class="podnadpis">

  <?php echo __('Task for computation');?>

  </legend>
  <input <?php echo $check0; ?> name="akce" in="in-ch0" value="0" type="radio"> 

  <?php echo __('Hessian at stationary point'); ?>

&nbsp;
<span style="font-style: italic;">x</span>= 
<input name="xs" id="in-xs" size="6" value="<?php echo $pointx; ?>"> &nbsp;
&nbsp; <span style="font-style: italic;">y</span>=
<input name="ys" id="in-ys" size="6" value="<?php echo $pointy; ?>"><br>

&nbsp;<br>

<input name="akce" value="2" in="in-ch2" type="radio" <?php echo $check2;?>> 

<?php echo __('Hessian at stationary points')?>

[x1,y1] ; [x2,y2] ; .... &nbsp;<input value="<?php echo $points; ?>" size="30" name="stacbody" id="in-stacbody"><br>

  <br>
  <input name="akce" value="1" in="in-ch1" type="radio" <?php echo $check1;?>> 

	    <?php echo __('use computer to find stationary points first (this may fail to find all stationary points, however)');?>

  <br>  <br>
</fieldset>

<?php echo $submitbutton;?>

</form><?php maw_after_form(); ?>

<?php history("minmax3d",$server); 



?>
