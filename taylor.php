
<span class="nadpis">
<?php echo __("Taylor polynomial");?>
</span> 

<?php maw_before_form()?><form name="exampleform" <?php formmethod();?>
<?php echo $onsubmit;?>
action="<?php echo($server);?>/taylor/taylor.php">

<?php polejazyka($lang); ?>
<?php echo __('Function'); ?>
<span style="font-style: italic;"> f(x)=</span> <input size="40"
name="funkce" value="sin(x)"> &nbsp; &nbsp; 
<input value="<?php echo(__("Editor")); ?>" onclick="edit('funkce')" type="button" class="tlacitko"> 

<?php hint_preview(); ?>

<?php echo __('Degree of Taylor polynomial'); ?>: 
<input size="5" name="rad" value="6"> <br>
<br>
<?php echo __('Center of Taylor polynomial'); ?>: &nbsp; <input size="5" name="bod" value="0"> 

<br>
<?php echo $submitbutton;?>

</form><?php maw_after_form(); ?>

<?php history("taylor",$server);?>


