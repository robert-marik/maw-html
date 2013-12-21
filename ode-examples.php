<?php

examples("1,2,3,4,5");

function bind_examples ($id,$tex,$ode,$ode2,$checkbox)
{
echo '$("#e-'.$id.'").tooltip({ content: \'<img src="http://um.mendelu.cz/mathtex/mathtex.php?'.$tex.'">\' });';
echo '$("#e-'.$id.'").bind("click", function() {';
echo '$("#exampleform")[0].reset();';
echo '$(\'[name="akce"][value="'.$checkbox.'"]\').prop("checked", true).trigger("change");';
echo '$("#in-ode").val("'.$ode.'");';
echo '$("#in-ode2").val("'.$ode2.'");';
echo '$("#exampleform").submit();});';

}

?>

<script>

window.onload = function() {
$("#in-ch0").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?y^\\prime={\\color{red}f(x,y)}">' });
$("#in-ode").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?y^\\prime={\\color{red}f(x,y)}">' });
$("#in-ch1").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?{\\color{red}f(x,y,y^\\prime)=0}">' });
$("#in-ode2").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?{\\color{red}f(x,y,y^\\prime)=0}">' });

<?php
bind_examples(1,'y^\\\\prime=x e^{x+y}',"x*exp(x+y)","",0);
bind_examples(2,'2y^\\\\prime+3y=2x+1',"","2*y'+3*y = 2*x+1",1);
bind_examples(3,'y^\\\\prime=y-3x^2',"y-3*x^2","",0);
bind_examples(4,'y^\\\\prime=y^2+4x^y^2',"y^2+4*x^2*y^2","",0);
bind_examples(5,'y^\\\\prime=e^x+2ye^x',"exp(x)+2*y*exp(x)","",0);
?>
$("#in-ch0").change(function () {$("#in-ode2").attr("readonly", true); $("#in-ode").attr("readonly", false);});
$("#in-ch1").change(function () {$("#in-ode").attr("readonly", true); $("#in-ode2").attr("readonly", false);});
}

</script>

