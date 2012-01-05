<span class="nadpis">
<?php echo __("Antiderivative");?>
</span>

<?php maw_before_form()?><form name="exampleform"
   <?php echo $onsubmit;?>
<?php formmethod();?> action="<?php echo($server);?>/integral/integral.php">
<?php polejazyka($lang); ?>
<fieldset class="main">
<br>
<label for="funkce">
   <?php echo __('Function');?>:
</label>
&nbsp;&nbsp;<span style="font-style:
italic;"><img src="int.gif" align="center"></span> <input size="60"
name="funkce"
value="<?php
$function=$_REQUEST["function"];
if ($function==""){echo 'x^3*exp(x*2)';}
else {echo rawurldecode($function);}
?>">dx&nbsp;
  <input value="<?php echo(__("Editor")); ?>" onclick="edit('funkce')" type="button" class="tlacitko">
<input value="<?php echo(__("Preview")); ?>" onclick="previewb('funkce')" type="button" class="tlacitko">
	<br>
	<small><?php hint_preview(); ?>
</small>
<br><br>

<input name="formconv" type="checkbox" checked="checked"> 
	<?php echo __('use <a href="http://formconv.sourceforge.net/">formconv</a> to convert mathematical expressions (this allows to write  2x instead of 2*x)');
?>

<br>
<input name="jsmath" type="checkbox"> 
	<?php echo __('use 
<a href="http://www.math.union.edu/~dpvc/jsmath/">jsMath</a> for writing formulas on html page instead of  
<a href="http://www.forkosh.com/mathtex.html">mathTeX</a> 
(the output is better but the rendering could be slower)
');
?>

<br>
<input name="pfeformat" type="checkbox"  checked="checked"> 
	<?php echo __('<a href="http://maxima.sourceforge.net/docs/manual/en/maxima_9.html#Item_003a-pfeformat">pfeformat</a> switch (uncheck this if you get composite fractions (with fraction in numerator))');
?>

<br>
<input name="logarc" type="checkbox"  checked="checked"> 
	<?php echo __('write acsinh and atanh in terms of log');

?>


<br>
<br>
<?php echo $submitbutton;?>
</fieldset>
</form><?php maw_after_form(); ?>

<?php history("integral",$server); 


echo __("MAW-int");
?>





