<span class="nadpis">
<?php echo (__("Least squares method"));?>

</span>
<?php maw_before_form()?><form id="exampleform"
<?php echo $onsubmit;?>
<?php formmethod();?> action="<?php echo($server);?>/mnc/mnc.php">

<?php polejazyka($lang); ?>
<?php echo __('Data file')  ?>:
 <input size="70" name="body" id="in-body" value="1, 2 ; 3,4; 2,1 ; 5,8 ">  

<br>
<?php echo $submitbutton;?>

</form><?php maw_after_form(); ?>

<?php history("mnc",$server); 



?>

