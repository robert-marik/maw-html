<?php

examples("1,2,3,4,5");

function bind_examples ($id,$tex,$math,$checkbox,$xs,$ys,$points)
{
echo '$("#e-'.$id.'").tooltip({ content: \'<img src="http://um.mendelu.cz/mathtex/mathtex.php?'.$tex.'">\' });';
echo '$("#e-'.$id.'").bind("click", function() {';
echo '$("#exampleform")[0].reset();';
echo '$(\'[name="akce"][value="'.$checkbox.'"]\').prop("checked", true).trigger("change");';
echo '$("#in-funkcef").val("'.$math.'");';
echo '$("#in-xs").val("'.$xs.'");';
echo '$("#in-ys").val("'.$ys.'");';
echo '$("#in-stacbody").val("'.$points.'");';
echo '$("#exampleform").submit();});';

}

?>

<script>

window.onload = function() {
<?php
bind_examples(1,'xy(4-x-y)',"x*y*(4-x-y)",2,"","","[0,0]; [0,4]; [4,0]; [4/3,4/3]");
bind_examples(2,'xy-x^2-y^2+x+y',"x*y-x^2-y^2+x+y",0,1,1,"");
bind_examples(3,'x^3+2xy+y^3',"x^3+2*x*y+y^3",2,"","","[0,0]; [-2/3,-2/3]");
bind_examples(4,'3x^3+3x^2y-y^3-15x',"3*x^3+3*x^2*y-y^3-15*x",2,"","","[1,1]; [-1,-1]; [sqrt(5),-sqrt(5)]; [-sqrt(5),sqrt(5)]");
bind_examples(5,'\\\\ln\\\\frac x6+2\\\\ln y+\\\\ln(12-x-y)',"ln(x/6)+2*ln(y)+ln(12-x-y)",0,3,6,"");

?>
}

</script>

