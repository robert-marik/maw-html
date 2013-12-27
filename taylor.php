<?php 
$function=rawurldecode($_REQUEST["function"]); 
if ($function=="")    {     $function="sin(x)";   }

$center=rawurldecode($_REQUEST["center"]); 
if ($center=="")   {     $center="0";   }

$degree=rawurldecode($_REQUEST["degree"]); 
if  ($degree=="")   {     $degree="5";   }
?>


<span class="nadpis">
<?php echo __("Taylor polynomial");?>
</span> 

<?php maw_before_form()?><form name="exampleform" id="exampleform" <?php formmethod();?>
<?php echo $onsubmit;?>
action="<?php echo($server);?>/taylor/taylor.php">

<?php polejazyka($lang); ?>
<?php echo __('Function'); ?>
<span style="font-style: italic;"> f(x)=</span> <input size="40"
name="funkce" id="in-funkce" value="<?php echo $function; ?>"> &nbsp; &nbsp; 
<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkce')" type="button" class="tlacitko editor"> 

<?php hint_preview(); ?>

<?php echo __('Degree of Taylor polynomial'); ?>: 
<input size="5" name="rad" id="in-rad" value="<?php echo $degree; ?>"> <br>
<br>
<?php echo __('Center of Taylor polynomial'); ?>: &nbsp; <input size="5" name="bod" id="in-bod" value="<?php echo $center; ?>"> 

<br>
<?php echo $submitbutton;?>

</form><?php maw_after_form(); ?>

<?php history("taylor",$server);?>


