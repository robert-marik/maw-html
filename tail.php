</div>
</div>
<div id="maw_tail">

<?php
echo '<div id="subtitle">'.__('written by <a href="http://user.mendelu.cz/marik" target="_blank">Robert Mař&iacute;k</a> and <a href="http://user.mendelu.cz/tihlarik" target="_blank">Miroslava Tihlař&iacute;kov&aacute;</a>').'</div>';

echo '<div id="subsubtitle">'.sprintf(__('%sOffline version%s is also available and translators are %s welcomed %s.'),'<a href="offline.php">','</a>','<a href="translators.html">','</a>').'</div>';
?>

The project Mathematical Assistant on Web is hosted on <a
href="http://mathassistant.sourceforge.net/">sourceforge.net</a> and supported by Grant 99/2008 of <a href="http://www.frvs.cz/">FRVŠ</a>.
<div id="user">
<?php
if (file_exists('./tail_user.php')) {require ('./tail_user.php');}
?>

</div>
</div>
</div>
</div>

</body>
</html>
