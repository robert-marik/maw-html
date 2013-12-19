<span class="nadpis"><?php echo __("Double integral");

$function=$_REQUEST["function"];
if ($function=="")
  {
    $function=rawurldecode("(x^3+1)*y");
    $a=0; $b=1; $c=0; $d="x";
    $xmin=-0.5; $xmax=1.5;
    $ymin=-0.5; $ymax=1.5;
    $insidevar="y";
    $outsidevar="x";
  }



?>
</span>

<?php maw_before_form()?><form name="exampleform" id="exampleform"
<?php echo $onsubmit;?>
<?php formmethod();?> action="<?php echo($server);?>/integral2/integral2.php">
<?php polejazyka($lang); ?>

<?php echo ""; ?>
<div id="accordion">


<h3>$\int_a^b\left[\int_c^d f(x,y) \mathrm{d}x\right]\mathrm{d}y$</h3>
<div>
<table>
<tbody>
<tr>
<td>&nbsp;&nbsp;&nbsp;<input size="6" name="b" id="b" value="<?php echo $b;?>"></td>
<td>&nbsp;&nbsp;&nbsp;<input size="6" name="d" id="d" value="<?php echo $d;?>"></td>
<td></td>
</tr>
<tr>
<td><img src="int.gif" alt="int"></td>
   <td><img src="int.gif" alt="int"></td>
   <td><input size="25" name="funkce" id="funkce" 
value="<?php echo $function;?>">
<select name="vars" id="vars">
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
<td><input size="6" name="a" id="a" value="<?php echo $a;?>">&nbsp;&nbsp;&nbsp;</td>
<td><input size="6" name="c" id="c" value="<?php echo $c;?>">&nbsp;&nbsp;&nbsp;</td>
   <td></td>
   </tr>
   </tbody>
   </table>
<?php 
//hint_preview(__(" The Jacobian in polar coordinates is added automatically. You can write <b>phi</b> for polar variable <img src=\"phi.png\" alt=\"phi\">."));
?>
<span id="preview_region"><input value="<?php echo(__("Preview region of integration")); ?>" onclick="preview_region()" type="button" class="tlacitko"></span>
</div>


<h3>$\iint_M f(x,y) \mathrm{d}x\mathrm{d}y$</h3>
<div>
<?php echo __("Function").": " ?>$f(x,y)=$<input size="25" id="funkce2" name="funkce2" value="<?php echo $function;?>">

<fieldset class="vnitrni"><legend>
<?php echo __("Region for integration").": " ?></legend>
<input size="6" name="a2" id="a2" value="<?php echo $a;?>">
$\leq$
<select name="outsidevar" id="outsidevar">
<option value="x">x</option>
<option value="y">y</option>
<option value="r">r</option>
<option value="phi">phi</option>
</select>
$\leq$
<input size="6" name="b2" id="b2" value="<?php echo $b;?>">
<?php printf("(%s)","bounds and variable for the outside integral");?>
<br>
<input size="6" name="c2" id="c2" value="<?php echo $c;?>">
&nbsp;&nbsp;$\leq$ &nbsp;&nbsp;<span id="vnitrni">y</span> &nbsp;&nbsp;$\leq$ &nbsp;&nbsp;
<input size="6" name="d2" id="d2" value="<?php echo $d;?>">
<?php printf("(%s)","bounds and variable for the inside integral");?>
<br><span id="preview_region"><input value="<?php echo(__("Preview region of integration")); ?>" onclick="preview_region()" type="button" class="tlacitko"></span>
</fieldset>

</div>

<h3><?php echo __('Axes (decimal numbers)'); ?></h3>
<div>
<span style="font-style: italic;">xmin</span> = <input size="6" maxlength="6" name="xmin" value="<?php echo $xmin; ?>"> &nbsp;
 <span style="font-style: italic;">xmax</span> = <input maxlength="6" size="6" name="xmax" value="<?php echo $xmax; ?>"> 

<br>
<span style="font-style: italic;">ymin =</span> <input maxlength="6" size="6" name="ymin" value="<?php echo $ymin; ?>"> &nbsp;
<span style="font-style: italic;">ymax</span> = <input maxlength="6" size="6" name="ymax" value="<?php echo $ymax; ?>">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="preview_region"><input value="<?php echo(__("Preview region of integration")); ?>" onclick="preview_region()" type="button" class="tlacitko"></span>
</div>

<h3><?php echo __('Additional computation'); ?> (<?php echo __("html only"); ?>)</h3>
<div>
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
</div>
</div>

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


<script>


function findInside(string)
{
    if (string=="dx dy") {return ("x");}
    if (string=="dy dx") {return ("y");}
    if (string=="r dr dphi") {return ("r");}
    if (string=="r dphi dr") {return ("phi");}

}

function findOutside(string)
{
    if (string=="dx dy") {return ("y");}
    if (string=="dy dx") {return ("x");}
    if (string=="r dr dphi") {return ("phi");}
    if (string=="r dphi dr") {return ("r");}
}

function findOther(string)
{
    if (string=="x") {return ("y");}
    if (string=="y") {return ("x");}
    if (string=="r") {return ("dphi");}
    if (string=="phi") {return ("r");}
}
function findBothFromOutside(string)
{
    if (string=="x") {return ("dy dx");}
    if (string=="y") {return ("dx dy");}
    if (string=="r") {return ("r dphi dr");}
    if (string=="phi") {return ("r dr dphi");}
}


$(window).load(function() {
$('#funkce').keyup(function() { $('#funkce2').val($(this).val()); });
$('#funkce2').keyup(function() { $('#funkce').val($(this).val()); });
$('#a').keyup(function() { $('#a2').val($(this).val()); });
$('#a2').keyup(function() { $('#a').val($(this).val()); });
$('#b').keyup(function() { $('#b2').val($(this).val()); });
$('#b2').keyup(function() { $('#b').val($(this).val()); });
$('#c').keyup(function() { $('#c2').val($(this).val()); });
$('#c2').keyup(function() { $('#c').val($(this).val()); });
$('#d').keyup(function() { $('#d2').val($(this).val()); });
$('#d2').keyup(function() { $('#d').val($(this).val()); });

$("#vars").change(function() {
  $('#vnitrni').text(findInside($(this).val()));
  $('#vnejsi').text(findOutside($(this).val()));
  $("#outsidevar").val(findOutside($(this).val()));
});

$( "#accordion" ).accordion({
event: "click hoverintent"
});

$("#outsidevar").change(function() {
  $('#vnitrni').text(findOther($(this).val()));
  $('#vnejsi').text($(this).val());
  $("#vars").val(findBothFromOutside($(this).val()));
});

});


</script>

