<?php

examples("1,2,3,4,5");

function bind_examples ($id,$tex,$math,$xmin,$xmax)
{
echo '$("#e-'.$id.'").tooltip({ content: \'<img src="http://um.mendelu.cz/mathtex/mathtex.php?'.$tex.'">\' });';
echo '$("#e-'.$id.'").bind("click", function() {';
echo '$("#exampleform")[0].reset();';
echo '$(\'[name="akce"][value="'.$checkbox.'"]\').prop("checked", true).trigger("change");';
echo '$("#in-xmin").val("'.$xmin.'");';
echo '$("#in-xmax").val("'.$xmax.'");';
echo '$("#in-funkcef").val("'.$math.'");';
echo '$("#exampleform").submit();});';

}

?>

<script>

window.onload = function() {
<?php
bind_examples(1,'f(x)=\\\\frac{\\\\sqrt{x^2-3x+2}}{\\\\ln(x+2)}',"sqrt(x^2-3*x+2)/ln(x+2)",-5,5);
bind_examples(2,'f(x)=1+\\\\sqrt{\\\\frac{x-3}{x+2}}',"1+sqrt((x-3)/(x+2))",-5,5);
bind_examples(3,'f(x)=\\\\arcsin\\\\frac 1{2x-1}',"asin(1/(2*x-1))",-5,5);
bind_examples(4,'f(x)=\\\\ln(1-\\\\sqrt{2x})',"ln(1-sqrt(2*x))",-1,5);
bind_examples(5,'f(x)=\\\\frac{x^2+4x+3}{\\\\sqrt{x^2-5x-6}}',"(x^2+4*x+3)/sqrt(x^2-5*x-6)",-8,8);

?>
}

</script>

