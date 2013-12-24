<span class="nadpis">
<?php echo __("Function grapher");?></span>

<?php maw_before_form()?><form name="exampleform" id="exampleform"
<?php echo $onsubmit;?>
<?php formmethod();?> action="<?php echo($server);?>/graf/graf.php">
<?php polejazyka($lang); ?>

<label for=funkce>
<?php  echo __("Function");?>
</label>
&nbsp;&nbsp;
<span style="font-style: italic;">y=</span> <input size="40" name="funkce" id="in-funkce" tooltip=""
						    value="1-1/2*(x-1)^2"> 
<input value="<?php echo(__("Preview")); ?>" title="<?php echo($previewmsg); ?>" onclick="previewb('funkce')" type="button"
class="tlacitko">

<div class="hint_preview">
<?php echo __("(the function must either a basic elementary function of a function which can be obtained from on of basic elementary functions by shifting and resizing graph)");?>
</div>

<fieldset class="vnitrni">
<legend class="podnadpis">
						    <?php echo __("Bounds for axes");?></legend>

<span style="font-style: italic;">xmin</span> = <input size="6" maxlength="6" name="xmin" id="in-xmin" value="-5"> &nbsp;
 <span style="font-style: italic;">xmax</span> = <input maxlength="6" size="6" name="xmax" id="in-xmax" value="5"> 

<br>
<span style="font-style: italic;">ymin =</span> <input maxlength="6" size="6" name="ymin" id="in-ymin" value="-10"> &nbsp;
 <span style="font-style: italic;">ymax</span> = <input maxlength="6" size="6" name="ymax" id="in-ymax" value="10">

<br>
<input name="mrizka" type="checkbox" value="on" id="ch" >

						    <?php echo __("show grid");?><br>

						    
</fieldset>

<fieldset class="vnitrni">
<legend class="podnadpis">
						    <?php echo __("Logarithm");?></legend>
						    <?php echo __("If the input contains logarithm, use");?>
						    <br>
<input checked="checked" name="naturallog" id="in-naturallog1" value="1" type="radio"> 
<?php echo __("natural log"); ?>
<br>
<input name="naturallog" id="in-naturallog0" value="0" type="radio"> 
	<?php echo __("log with base"); ?> 
<input name="logbase" id="in-logbase" value="3" size="3"  maxlength="3"> 



</fieldset>
<?php echo $submitbutton;?>
</form><?php maw_after_form(); ?>

<?php history("posun-grafu",$server);

?>
