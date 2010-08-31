<span class="nadpis">
<?php echo __("Bisection");
;

$function=$_REQUEST["function"];
if ($function=="")
  {
    $function=rawurldecode("cos(x)-4/5");
    $a=0; $b=1; $c=0.5; $n=10;
  }



?>
</span>

<form name="exampleform"
<?php //echo $onsubmit;
?>
method="get" action="<?php echo($server);?>/banach/banach.php">
<?php polejazyka($lang); ?>
<input type="hidden" name="method" value="bisection">
<fieldset class="main">
<br>
<label for="funkce">
  <?php { echo __("Enter function, interval containing zero and number of steps.");} ?>
</label>
  
<br>
<?php echo __("Function")?>: <input size="60" name="funkce" 
value="<?php echo $function;?>">
<input value="Editor" onclick="edit('funkce')" type="button" class="tlacitko">
<input value="Preview" onclick="previewb('funkce')" type="button" class="tlacitko">
<br>
<small><?php hint_preview();?>
</small>


<br><br>
<?php echo __("Interval from")?> 
<input size="6" name="a" value="<?php echo $a;?>">
  <?php echo __("to")?> 
<input size="6" name="b" value="<?php echo $b;?>">
<?php echo __("(integers or decimal numbers)")?> 
<br>


<?php echo __("Number of steps ")?> 
<input size="4" name="n" value="<?php echo $n;?>">
<?php echo __("(integer between 2 and 40)")?>
  <br><br>

<?php echo $submitbutton;?>
<br>
</fieldset>
</form>

<?php history("bisection",$server); 



?>

<br>

<?php
echo __('MAW-bisection');
?>


</body>
</html>

