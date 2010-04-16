
<span class="nadpis">
<?php echo __("Least squares method");?>

</span>
<form 
<?php echo $onsubmit;?>
method="get" action="<?php echo($server);?>/mnc/mnc.php">
<fieldset class="main">
<?php polejazyka($lang); ?>
<?php echo __('Data file')  ?>:
 <input size="100" name="body" value="1, 2 ; 3,4; 2,1 ; 5,8 ">  

<br>
<br>
<?php echo $submitbutton;?>
<br>
</fieldset>

</form>

<?php history("mnc",$server); 

echo __("MAW-mnc")

?>

