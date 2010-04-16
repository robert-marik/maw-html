

<span class="nadpis">
<?php echo __("Taylor polynomial");?>
</span> 

<form name="exampleform" method="get"
<?php echo $onsubmit;?>
action="<?php echo($server);?>/taylor/taylor.php">
<fieldset class="main">
<?php polejazyka($lang); ?>
<?php echo __('Function'); ?>:
<span style="font-style: italic;">f(x)=</span> <input size="40"
name="funkce" value="sin(x)"> &nbsp; &nbsp; 
<input value="Editor" onclick="edit('funkce')" type="button" class="tlacitko"> 
<br>
<br>
&nbsp;
<?php echo __('Degree of Taylor polynomial'); ?>: 
<input size="5" name="rad" value="6"> <br>
<br>
&nbsp;
<?php echo __('Center of Taylor polynomial'); ?>: &nbsp; <input size="5" name="bod" value="0"> 
<br>
<br>
&nbsp;
<?php echo $submitbutton;?>
<br>
</fieldset>
</form>

<?php history("taylor",$server);?>


