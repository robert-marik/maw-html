<?php

examples("1,2,3,4,5");

function bind_examples ($id,$tex,$math,$bod,$texbod,$n)
{
echo '$("#e-'.$id.'").tooltip({ content: \'<img src="http://um.mendelu.cz/mathtex/mathtex.php?y='.$tex.", x_0=$texbod, n=$n".'">\' });';
echo '$("#e-'.$id.'").bind("click", function() {';
echo '$("#exampleform")[0].reset();';
echo '$("#in-funkce").val("'.$math.'");';
echo '$("#in-bod").val("'.$bod.'");';
echo '$("#in-rad").val("'.$n.'");';
echo '$("#exampleform").submit();});';

}

?>

<script>

window.onload = function() {
<?php
bind_examples(1,'\\\\sin x',"sin(x)",0,0,5);
bind_examples(2,'\\\\ln\\\\frac{1+x}{1-x}',"ln((1+x)/(1-x))",0,0,5);
bind_examples(3,'x+2x^3',"x+2*x^3",1,1,5);
bind_examples(4,'1-e^x',"1-exp(x)",0,0,7);
bind_examples(5,'\\\\sqrt{x}',"sqrt(x)",9,9,4);
?>
}

</script>

