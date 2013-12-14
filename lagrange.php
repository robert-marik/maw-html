
<span class="nadpis">
   <?php echo __("Lagrange polynomial");?>
</span>
<?php maw_before_form()?><form id="exampleform"
<?php echo $onsubmit;?>
<?php formmethod();?> action="<?php echo($server);?>/lagrange/lagrange.php">

<?php polejazyka($lang); ?>
<?php echo __('Data file'); ?>:
 <input size="70" name="body" value="1, 2 ; 2,3; 3,1 ">  

<br>
<?php echo $submitbutton;?>

</form><?php maw_after_form(); ?>

<?php history("lagrange",$server); 


echo __("MAW-lagr");


?>

