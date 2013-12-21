<?php

examples("1,2,3,4,5");

function bind_examples ($id,$tex,$math,$xmin,$xmax,$ymin,$ymax)
{
echo '$("#e-'.$id.'").tooltip({ content: \'<img src="http://um.mendelu.cz/mathtex/mathtex.php?'.$tex.'">\' });';
echo '$("#e-'.$id.'").bind("click", function() {';
echo '$("#exampleform")[0].reset();';
//echo '$(\'input[id=ch-'.$checkbox.']\').attr(\'checked\', true).trigger("change");';
//echo '$(\'[name="akce"][value="'.$checkbox.'"]\').prop("checked", true).trigger("change");';
//echo '$("#ch-'.$checkbox.'").buttonset("refresh");';
echo '$("#in-funkce").val("'.$math.'");';
echo '$("#in-xmin").val("'.$xmin.'");';
echo '$("#in-xmax").val("'.$xmax.'");';
echo '$("#in-ymin").val("'.$ymin.'");';
echo '$("#in-ymax").val("'.$ymax.'");';
echo '$("#exampleform").submit();});';
}

?>

<script>

window.onload = function() {

<?php
bind_examples(1,'\\\\frac{x^3}{x-1}',"x^3/(x-1)",-5,5,-10,10);
bind_examples(2,'\\\\frac{x}{3x^2+1}',"x/(3*x^2+1)",-5,5,-1,1);
bind_examples(3,'\\\\frac{2x^3+1}{(x-1)^2}',"(2*x^3+1)/(x-1)^2",-5,10,-5,25);
bind_examples(4,'x^2 e^{-x}',"x*2*exp(-x)",-1,8,-1,1);
bind_examples(5,'x \\\\ln^2(x)',"x*ln(x)^2",0,3,0,2);
?>
}

</script>

