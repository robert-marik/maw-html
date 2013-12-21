<?php

examples("1,2,3,4,5");

function bind_examples ($id,$tex,$math,$a,$b)
{
echo '$("#e-'.$id.'").tooltip({ content: \'<img src="http://um.mendelu.cz/mathtex/mathtex.php?'.$tex.'">\' });';
echo '$("#e-'.$id.'").bind("click", function() {';
echo '$("#exampleform")[0].reset();';
//echo '$(\'input[id=ch-'.$checkbox.']\').attr(\'checked\', true).trigger("change");';
//echo '$(\'[name="akce"][value="'.$checkbox.'"]\').prop("checked", true).trigger("change");';
//echo '$("#ch-'.$checkbox.'").buttonset("refresh");';
echo '$("#in-funkce").val("'.$math.'");';
echo '$("#in-a").val("'.$a.'");';
echo '$("#in-b").val("'.$b.'");';
echo '$("#exampleform").submit();});';
echo "\n";
}

?>

<script>

window.onload = function() {
$("#in-funkce").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?\\int_{a}^{b} {\\color{red}f(x)}\\,\\mathrm{d}x">' });
$("#in-a").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?\\int_{{\\color{red}a}}^{b} f(x)\\,\\mathrm{d}x">' });
$("#in-b").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?\\int_{a}^{{\\color{red}b}} f(x)\\,\\mathrm{d}x">' });
<?php
bind_examples(1,'\\\\int_0^{\\\\pi} \\\\sin^2(x) \\\\,\\\\mathrm{d}x',"sin(x)^2",0,"pi");
bind_examples(2,'\\\\int_0^{1} 2\\\\sqrt {x} \\\\,\\\\mathrm{d}x',"2*sqrt(x)",0,1);
bind_examples(3,'\\\\int_1^{3} 2x^2+1 \\\\,\\\\mathrm{d}x',"2*x^2+1",1,3);
bind_examples(4,'\\\\int_1^{e} x\\\\ln(x) \\\\,\\\\mathrm{d}x',"x*ln(x)",1,"e");
bind_examples(5,'\\\\int_0^{1} e^{-\\\\frac 12 x^2} \\\\,\\\\mathrm{d}x',"exp(-1/2 * x^2)",0,1);
?>
  };

</script>

