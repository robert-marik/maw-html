 <span class="nadpis">
<?php echo __("Method of iterations");

$function=$_REQUEST["function"];
if ($function=="")
  {
    $function=rawurldecode("cos(x)");
    $a=0; $b=1; $c=0.5; $n=10;
  }



?>
</span>

<form name="exampleform"
<?php //echo $onsubmit;
?>
method="get" action="<?php echo($server);?>/banach/banach.php">
<?php polejazyka($lang); ?>
<input type="hidden" name="method" value="banach">
<fieldset class="main">
<br>
<label for="funkce">
  <?php { echo __("Enter function, interval containing  fixed point and number of steps.");} ?>
</label>
  
<br>
<?php echo __("Function")?>: <input size="60" name="funkce" 
value="<?php echo $function;?>">
<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkce')" type="button" class="tlacitko">
<input value="<?php echo(__("Preview")); ?>" onclick="previewb('funkce')" type="button" class="tlacitko">
<br>
<small><?php hint_preview();?>
</small>


<br><br>
<?php echo __("Interval from ")?> 
<input size="6" name="a" value="<?php echo $a;?>">
  &nbsp; <?php echo __("to")?>   &nbsp;
<input size="6" name="b" value="<?php echo $b;?>">
  &nbsp;<?php echo __("(integers or decimal numbers)")?> 
<br>


    <?php echo __("Number of steps ");?> 
<input size="4" name="n" value="<?php echo $n;?>">
  <?php echo __("(integer between 2  and 40)");?>
  <br><br>

  <?php echo __("Initial approximation");?> 
<input size="10" name="c" value="<?php echo $c;?>">
  <?php echo __("(integer or decimal number)");?> 
<br>
<?php echo $submitbutton;?>
<br>
</fieldset>
</form>

<?php history("banach",$server); 

echo __("MAW-banach");
?>


</body>
</html>

