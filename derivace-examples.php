<?php

examples("1,2,3,4,5");

function bind_examples ($id,$tex,$math,$checkbox)
{
echo '$("#e-'.$id.'").tooltip({ content: \'<img src="http://um.mendelu.cz/mathtex/mathtex.php?'.$tex.'">\' });';
echo '$("#e-'.$id.'").bind("click", function() {';
echo '$("#exampleform")[0].reset();';
//echo '$(\'input[id=ch-'.$checkbox.']\').attr(\'checked\', true).trigger("change");';
echo '$(\'[name="akce"][value="'.$checkbox.'"]\').prop("checked", true).trigger("change");';
//echo '$("#ch-'.$checkbox.'").buttonset("refresh");';
echo '$("#in-funkce").val("'.$math.'");';
echo '$("#exampleform").submit();});';

}

?>

<script>

window.onload = function() {
$("#in-funkce").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?\\Bigl[{\\color{red}f(x)}\\Bigr]^\\prime">' });
$("#ch-linear").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?\\begin{aligned}(f(x)+g(x))^\\prime&=f^\\prime(x)+g^\\prime(x)\\\\ (cf(x))^\\prime&=c f^\\prime(x)\\end{aligned}">' });
$("#ch-0").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?\\frac{\\mathrm{d}}{\\mathrm{d}x}f(x)">' });
$("#ch-1").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?\\frac{\\partial}{\\partial x}f(x,y)">' });
$("#ch-2").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?\\frac{\\partial}{\\partial y}f(x,y)">' });

<?php
bind_examples(1,'\\\\left(\\\\frac {x}{1+3\\\\ln x}\\\\right)^\\\\prime',"x/(1+3*ln(x))",0);
bind_examples(2,'\\\\left((x^2-1)\\\\sin^2(x)\\\\right)^\\\\prime',"(x^2-1)*sin(x)^2",0);
bind_examples(3,'\\\\left(\\\\frac{e^{-x^2+1}}{\\\\sqrt{2x+1}}\\\\right)^\\\\prime',"exp(-x^2+1)/sqrt(2*x+1)",0);
bind_examples(4,'\\\\frac{\\\\partial}{\\\\partial x}\\\\left( \\\\frac{x^2+y^2}{xy}\\\\right)',"(x^2+y^2)/(x*y)",1);
bind_examples(5,'\\\\frac{\\\\partial}{\\\\partial y}\\\\left( \\\\frac{x^2+y^2}{xy}\\\\right)',"(x^2+y^2)/(x*y)",2);
?>
}

</script>

