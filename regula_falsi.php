<span class="nadpis">
<?php echo __("Regula falsi");
;

$function=$_REQUEST["function"];
if ($function=="")
  {
    $function=rawurldecode("cos(x)-4/5");
    $a=0; $b=1; $c=0.5; $n=10;
  }



?>
</span>

<?php maw_before_form()?><form name="exampleform"
<?php //echo $onsubmit;
?>
<?php formmethod();?> action="<?php echo($server);?>/banach/banach.php">
<?php polejazyka($lang); ?>
<input type="hidden" name="method" value="regula_falsi">
<label for="funkce">
  <?php { echo __("Enter function, interval containing zero and number of steps.");} ?>
</label>
  
<br>
<?php echo __("Function")?>: <input size="60" name="funkce" 
value="<?php echo $function;?>">
<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkce')" type="button" class="tlacitko editor">
<input value="<?php echo(__("Preview")); ?>" title="<?php echo($previewmsg); ?>" onclick="previewb('funkce')" type="button" class="tlacitko">

<?php hint_preview();?>

<?php echo __("Interval from")?> 
<input size="6" name="a" value="<?php echo $a;?>">
  <?php echo __("to")?> 
<input size="6" name="b" value="<?php echo $b;?>">
<?php echo __("(integers or decimal numbers)")?> 
<br>


<?php echo __("Number of steps ")?> 
<input size="4" name="n" value="<?php echo $n;?>">
<?php echo __("(integer between 2 and 40)")?>
<br>

<?php echo $submitbutton;?>
</form><?php maw_after_form(); ?>

<?php 
history("regula_falsi",$server); 

?>

<?php
echo __('MAW-regula_falsi');
?>





