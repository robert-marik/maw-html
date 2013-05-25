<span class="nadpis">
<?php echo __("Function calculator");
$function=rawurldecode($_REQUEST["function"]);
$xmin=rawurldecode($_REQUEST["xmin"]);
$xmax=rawurldecode($_REQUEST["xmax"]);
$ymin=rawurldecode($_REQUEST["ymin"]);
$ymax=rawurldecode($_REQUEST["ymax"]);

if (str_replace(" ","",$function)=="")
  {
    $function="x^3/(x-1)";
    $xmin="-5";
    $xmax="5";
    $ymin="-10";
    $ymax="10";
  }

?>
</span>

<?php maw_before_form()?><form name="exampleform"
<?php echo $onsubmit;?>
<?php formmethod();?> action="<?php echo($server);?>/prubeh/zpracuj.php">

<label for="funkce">
  <?php echo __('Function'); ?>:
</label>
<?php polejazyka($lang); ?>
&nbsp;&nbsp;<span style="font-style:
italic;">y=</span> <input size="40" name="funkce"
value="<?php echo ($function); ?>">

<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkce')" type="button" class="tlacitko editor">
<input value="<?php echo(__("Preview")); ?>" title="<?php echo($previewmsg); ?>" onclick="previewb('funkce')" type="button"
class="tlacitko">

<?php hint_preview(); ?>

<fieldset class="vnitrni">
<legend class="podnadpis">
	<?php echo __('Axes'); ?>
</legend>
<span style="font-style: italic;">xmin</span> = <input size="6" maxlength="6" name="xmin" value="<?php echo $xmin; ?>"> &nbsp;
 <span style="font-style: italic;">xmax</span> = <input maxlength="6" size="6" name="xmax" value="<?php echo $xmax; ?>"> 

<br>
<span style="font-style: italic;">ymin =</span> <input maxlength="6" size="6" name="ymin" value="<?php echo $ymin; ?>"> &nbsp;
 <span style="font-style: italic;">ymax</span> = <input maxlength="6" size="6" name="ymax" value="<?php echo $ymax; ?>">

</fieldset>
<?php echo $submitbutton;?>

</form><?php maw_after_form(); ?>


<?php history("prubeh",$server); 
echo __("MAW-prub");
?>

