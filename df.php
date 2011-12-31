<span class="nadpis">
   <?php echo __("Domain of a function in one variable");?>
</span>

<form <?php formmethod();?>
<?php echo $onsubmit;?>
action="<?php echo($server);?>/domf/domf.php"name="exampleform">
<?php polejazyka($lang); ?>
<br>
<fieldset class="main">
&nbsp;
<?php echo __('Function');?>
 &nbsp;
<span style="font-style: italic;">f(x) =</span> <input name="funkcef" value="x*log(4-x^2)/(sqrt(x-1))" size="35">
<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkcef')" type="button" 
class="tlacitko">
<input value="<?php echo(__("Preview")); ?>" onclick="previewb('funkcef')" type="button"
class="tlacitko">
	<br>
<small><?php hint_preview(); ?>
</small>
<br>
<br>


<fieldset  class="vnitrni"><legend class="podnadpis">

   <?php echo __('Parameters');?>

  </legend>
  <input name="akce" value="5" type="hidden"> 
  <input name="onevar" value="1" type="hidden"> 

   <span style="font-style: italic;">xmin</span> = <input size="6" maxlength="6" name="xmin" value="-5"> &nbsp;
   <span style="font-style: italic;">xmax</span> = <input maxlength="6" size="6" name="xmax" value="5"> 

</fieldset>
<br>


<br>
<?php echo $submitbutton;?>
</fieldset>
</form>

<?php history("domf",$server); 

echo __("MAW-df")

?>
