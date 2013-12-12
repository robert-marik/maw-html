<span class="nadpis"><?php echo __("Double integral");

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

<?php maw_before_form()?><form name="exampleform" id="exampleform"
<?php echo $onsubmit;?>
<?php formmethod();?> action="<?php echo($server);?>/integral2/integral2.php">
<?php polejazyka($lang); ?>

<label for="funkce">
  <?php echo __("Enter function and choose variables and order for integration ");?>
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
<select name="vars" onChange="allow_preview(this.value);">
<option value="dy dx">dy dx</option>
<option value="dx dy">dx dy</option>
<option value="r dr dphi">r dr dphi</option>
<option value="r dphi dr">r dphi dr</option>
</select>
<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkce')" type="button" class="tlacitko editor">
<input value="<?php echo(__("Preview")); ?>"  title="<?php echo($previewmsg); ?>" onclick="previewb_int2('funkce')" type="button" class="tlacitko">
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="preview_region"><input value="<?php echo(__("Preview region of integration")); ?>" onclick="preview_region()" type="button" class="tlacitko"></span>
</fieldset>
<fieldset class="vnitrni">
<legend class="podnadpis">
<?php echo __('Additional computation'); ?> (<?php echo __("html only"); ?>)
</legend>
<style>
.twocolumn img {margin-top:5px; margin-bottom:5px;}
</style>
<div class=twocolumn>
<?php printf (__("The calculator evaluates %s."),"<img src=\"/mathtex/mathtex.php?\\footnotesize\\iint_{M}f(x,y)\\mathrm{d}x\\mathrm{d}y\" align=center>"); ?><br>
<input name="f1" type="checkbox" > <?php printf (__('Evaluate also %s.'),"<img src=\"/mathtex/mathtex.php?\\footnotesize\\iint_{M} \\mathrm{d}x\\mathrm{d}y\" align=center>"); ?><br>
<input name="fx" type="checkbox" > <?php printf (__('Evaluate also %s.'),"<img src=\"/mathtex/mathtex.php?\\footnotesize\\iint_{M} xf(x,y)\\mathrm{d}x\\mathrm{d}y\" align=center>"); ?><br>
<input name="fy" type="checkbox" > <?php printf (__('Evaluate also %s.'),"<img src=\"/mathtex/mathtex.php?\\footnotesize\\iint_{M} yf(x,y)\\mathrm{d}x\\mathrm{d}y\" align=center>"); ?><br>
<input name="fxx" type="checkbox" > <?php printf (__('Evaluate also %s.'),"<img src=\"/mathtex/mathtex.php?\\footnotesize\\iint_{M} x^2f(x,y)\\mathrm{d}x\\mathrm{d}y\" align=center>"); ?><br>
<input name="fyy" type="checkbox" > <?php printf (__('Evaluate also %s.'),"<img src=\"/mathtex/mathtex.php?\\footnotesize\\iint_{M} y^2f(x,y)\\mathrm{d}x\\mathrm{d}y\" align=center>"); ?>
</div>
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





