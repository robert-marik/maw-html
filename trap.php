
<span class="nadpis">
<?php echo __("Trapezoidal rule (approximation for definite integral)");?>
</span>



<form name="exampleform"  
<?php echo $onsubmit;?>
method="get" action="<?php echo($server);?>/trap/trapezoidal.php">
<fieldset class="main">
    <?php polejazyka($lang); ?>
<span>
<?php echo __('Function'); ?>:

</span> &nbsp; &nbsp;<span style="font-style: italic;"> y=</span> <input size="60" name="funkce" value="sin(x)/x"> 
		 &nbsp;&nbsp;&nbsp;

<input value="Editor" onclick="edit('funkce')" type="button" class="tlacitko">
			       
<br>
<br>

<fieldset  class="vnitrni"><legend class="podnadpis">
<?php echo __('Limits for integration'); ?>:</legend>
  
  <span style="font-style: italic;">
    
<?php echo __('lower limit'); ?>
    &nbsp; =</span> <input size="12" maxlength="12" name="a" value="1">
  &nbsp;
  &nbsp; <span style="font-style: italic;">
    <?php echo __('upper limit'); ?>
 &nbsp; =</span> <input maxlength="12" size="12" name="b" value="2">
<br><br>
    <?php echo __('intervals in partition');?>: 
<input maxlength="6" size="6" name="n" value="10"> 
</fieldset>
<br>
<?php echo $submitbutton;?>
</fieldset>
</form>

 <?php history("trap",$server); 
        echo __("MAW-trap");
?>
