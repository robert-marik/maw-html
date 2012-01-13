<span class="nadpis">
   <?php echo __("Double integral");

$function=$_REQUEST["function"];
if ($function=="")
  {
    $function=rawurldecode("(x^3+1)*y");
    $a=0; $b=1; $c=0; $d="x";
    $xmin=-0.5; $xmax=1.5;
    $ymin=-0.5; $ymax=1.5;
  }



?>
</span>

<?php maw_before_form()?><form name="exampleform"
<?php echo $onsubmit;?>
<?php formmethod();?> action="<?php echo($server);?>/integral2/integral2.php">
<?php polejazyka($lang); ?>

<label for="funkce">
  <?php echo __("Enter function and choose variables ond order for integration ");?>
</label>

<div id="dvojint">
<table>
<tbody>
<tr>
<td>&nbsp;&nbsp;&nbsp;<input size="6" name="b" value="<?php echo $b;?>"></td>
<td>&nbsp;&nbsp;&nbsp;<input size="10" name="d" value="<?php echo $d;?>"></td>
<td></td>
</tr>
<tr>
<td><img src="int.gif" alt="int"></td>
   <td><img src="int.gif" alt="int"></td>
   <td><input size="35" name="funkce" 
value="<?php echo $function;?>">
<select name="vars">
<option>dy dx</option>
<option>dx dy</option>
<option>r dr dphi</option>
<option>r dphi dr</option>
</select>
<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkce')" type="button" class="tlacitko">
<input value="<?php echo(__("Preview")); ?>" onclick="previewb_int2('funkce')" type="button" class="tlacitko">
</td>
   </tr>
   <tr>
<td><input size="6" name="a" value="<?php echo $a;?>">&nbsp;&nbsp;&nbsp;</td>
<td><input size="10" name="c" value="<?php echo $c;?>">&nbsp;&nbsp;&nbsp;</td>
   <td></td>
   </tr>
   </tbody>
   </table>
</div>   

<?php hint_preview(__(" The Jacobian in polar coordinates is added automatically. You can write <b>phi</b> for polar variable <img src=\"phi.png\" alt=\"phi\">."));?>

<fieldset class="vnitrni">
<legend class="podnadpis">
<?php echo __('Axes (decimal numbers)'); ?>
</legend>
<span style="font-style: italic;">xmin</span> = <input size="6" maxlength="6" name="xmin" value="<?php echo $xmin; ?>"> &nbsp;
 <span style="font-style: italic;">xmax</span> = <input maxlength="6" size="6" name="xmax" value="<?php echo $xmax; ?>"> 

<br>
<span style="font-style: italic;">ymin =</span> <input maxlength="6" size="6" name="ymin" value="<?php echo $ymin; ?>"> &nbsp;
 <span style="font-style: italic;">ymax</span> = <input maxlength="6" size="6" name="ymax" value="<?php echo $ymax; ?>">

</fieldset>
<input name="logarc" type="checkbox"  checked="checked"> 
<?php echo __('write acsinh and atanh in terms of log'); ?>
<br>
<?php echo $submitbutton;?>

</form><?php maw_after_form(); ?>

<?php history("integral2",$server); 



?>

<br>

<?php
echo __("MAW-int2");?>





