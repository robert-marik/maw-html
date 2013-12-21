<?php

examples("1,2,3,4,5");

function bind_examples ($id,$tex,$function,$a,$b,$n,$c)
{
echo '$("#e-'.$id.'").tooltip({ content: \'<img src="http://um.mendelu.cz/mathtex/mathtex.php?\\\\begin{aligned}'.$tex.'\\\\end{aligned}">\' });';
echo '$("#e-'.$id.'").bind("click", function() {';
echo '$("#exampleform")[0].reset();';
echo '$("#in-funkce").val("'.$function.'");';
echo '$("#in-a").val("'.$a.'");';
echo '$("#in-b").val("'.$b.'");';
echo '$("#in-n").val("'.$n.'");';
echo '$("#in-c").val("'.$c.'");';
echo '$("#exampleform").submit();});';

}

?>

<script>

window.onload = function() {
$("#in-funkce").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?{\\color{red}f(x)}=x">' });
<?php
bind_examples(1,'\\\\cos(x)=x',"cos(x)",0,1,10,0.5);
bind_examples(2,'x^3+2x-2&=0 \\\\\\\\ &\\\\vdots \\\\\\\\ x&=1-\\\\frac{x^3}2',"1-x^3/2",0,1,10,1);
bind_examples(3,'x^5+3x^2-20&=0\\\\\\\\ &\\\\vdots \\\\\\\\ x&=1-\\\\sqrt[5]{20-3x^2}',"(20-3*x^2)^(1/5)",0,2,10,1);
bind_examples(4,'e^{-2x}+x-3&=0\\\\\\\\ &\\\\vdots \\\\\\\\ x&=-\\\\frac 12\\\\ln(3-x)',"-1/2*ln(3-x)",-1,0,10,-1);
bind_examples(5,'e^{x^2}+e^{x}&=4\\\\\\\\ &\\\\vdots \\\\\\\\ x&=\\\\sqrt{\\\\ln(\\\\left(4-e^{x^2}\\\\right))}',"sqrt(ln(4-exp(x)))",0,1,10,1);
?>
}

</script>

