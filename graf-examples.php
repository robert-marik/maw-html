<?php

examples("1,2,3,4,5");

function bind_examples ($id,$tex,$math,$xmin,$xmax,$ymin,$ymax,$mrizka,$checkbox,$logbase)
{
echo '$("#e-'.$id.'").tooltip({ content: \'<img src="http://um.mendelu.cz/mathtex/mathtex.php?'.$tex.'">\' });';
echo '$("#e-'.$id.'").bind("click", function() {';
echo '$("#exampleform")[0].reset();';
//echo '$(\'input[id=ch-'.$checkbox.']\').attr(\'checked\', true).trigger("change");';
echo '$(\'[name="naturallog"][value="'.$checkbox.'"]\').prop("checked", true).trigger("change");';
//echo '$("#ch-'.$checkbox.'").buttonset("refresh");';
echo '$("#in-funkce").val("'.$math.'");';
echo '$("#in-logbase").val("'.$logbase.'");';
echo '$("#in-xmin").val("'.$xmin.'");';
echo '$("#in-xmax").val("'.$xmax.'");';
echo '$("#in-ymin").val("'.$ymin.'");';
echo '$("#in-ymax").val("'.$ymax.'");';
if ($mrizka!=0) {
echo '$("#ch").prop("checked", true);';
}
echo '$("#exampleform").submit();});';
}

?>

<script>

window.onload = function() {
$("#in-funkce").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?y={\\color{red}f(x)}">' });

<?php
bind_examples(1,'y=\\\\sin\\\\left(2x+\\\\frac{\\\\pi}{3}\\\\right)',"sin(2*x+pi/3)",-10,10,-2,2,0,1,"");
bind_examples(2,'y=\\\\sqrt[3]{2x-1}-x',"(2*x-1)^(1/3)-x",-2,3,-2,1,0,1,"");
bind_examples(3,'y=\\\\left(\\\\frac 12 x-2\\\\right)^3+1',"(1/2*x-2)^(3)+1",-2,8,-5,5,1,1,"");
bind_examples(4,'y=1+\\\\log_6(x+2)',"1+log(x+2)",-3,8,-3,3,1,0,"6");
bind_examples(5,'y=1-e^{2-x}',"1-exp(2-x)",-1,10,-10,3,1,1,"");
?>
}

</script>

