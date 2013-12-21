<?php

examples("1,2,3,4,5");

function bind_examples ($id,$tex,$function,$a,$b,$n,$c)
{
echo '$("#e-'.$id.'").tooltip({ content: \'<img src="http://um.mendelu.cz/mathtex/mathtex.php?'.$tex.'">\' });';
echo '$("#e-'.$id.'").bind("click", function() {';
echo '$("#exampleform")[0].reset();';
echo '$("#in-funkce").val("'.$function.'");';
echo '$("#in-a").val("'.$a.'");';
echo '$("#in-b").val("'.$b.'");';
echo '$("#in-n").val("'.$n.'");';
echo '$("#exampleform").submit();});';

}

?>

<script>

window.onload = function() {
$("#in-funkce").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?{\\color{red}f(x)}=x">' });
<?php
bind_examples(1,'\\\\cos(x)=0',"cos(x)",0,4,10,1);
bind_examples(2,'x^3+2x-2&=0',"x^3+2*x-2",0,1,10,1);
bind_examples(3,'x^5+3x^2-20&=0',"x^5+3*x^2-20",0,2,10,1);
bind_examples(4,'e^{-2x}+x-3&=0',"exp(-2*x)+x-3",-1,0,10,-1);
bind_examples(5,'e^{x^2}+e^{x}&=4',"exp(x^2)+exp(x)-4",0,1,10,1);
?>
}

</script>
