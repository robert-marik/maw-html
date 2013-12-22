<?php

examples("1,2,3,4,5");

function bind_examples ($id,$tex,$p,$q,$f,$checkbox,$x0,$y0,$y10)
{
echo '$("#e-'.$id.'").tooltip({ content: \'<img src="http://um.mendelu.cz/mathtex/mathtex.php?'.$tex.'">\' });';
echo '$("#e-'.$id.'").bind("click", function() {'; 
echo '$("#exampleform")[0].reset();'; 
echo '$(\'[name="akce"][value="'.$checkbox.'"]\').prop("checked", true).trigger("change");';
echo '$("#in-p").val("'.$p.'");';
echo '$("#in-q").val("'.$q.'");';
echo '$("#in-f").val("'.$f.'");';
echo '$("#in-x0").val("'.$x0.'");';
echo '$("#in-y0").val("'.$y0.'");';
echo '$("#in-y10").val("'.$y10.'");';
if ($x0!="") {echo '$("#in-ch").prop("checked", true);';}
echo '$("#exampleform").submit();'; 
echo '});'; 

}

?>

<script>
window.onload = function() {
$("#in-p").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?y^{\\prime\\prime}+{\\color{red}p}\\,y^{\\prime}+q\\,y=f(x)">' });
$("#in-q").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?y^{\\prime\\prime}+p\\,y^{\\prime}+{\\color{red}q}\\,y=f(x)">' });
$("#in-f").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?y^{\\prime\\prime}+p\\,y^{\\prime}+q\\,y={\\color{red}f(x)}">' });
$("#in-x0").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?y({\\color{red}x_0})=y_0, \\quad y^{\\prime}({\\color{red}x_0})=y_1">' });
$("#in-y0").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?y(x_0)={\\color{red}y_0}, \\quad y^{\\prime}(x_0)=y_1">' });
$("#in-y10").tooltip({ content: '<img src="http://um.mendelu.cz/mathtex/mathtex.php?y(x_0)=y_0, \\quad y^{\\prime}(x_0)={\\color{red}y_1}">' });
<?php
bind_examples(1,'y^{\\\\prime\\\\prime}+4y^{\\\\prime}+2y=0',4,2,"0",1,"","","");
bind_examples(2,'y^{\\\\prime\\\\prime}+y^{\\\\prime}+2y=3x e^{x}',1,2,"3*x*e^x",1,"","","");
bind_examples(3,'y^{\\\\prime\\\\prime}+2y^{\\\\prime}+y=e^{x+1}',2,1,"exp(x+1)",1,"","","");
bind_examples(4,'y^{\\\\prime\\\\prime}+y=\\\\sin^2(x)',0,1,"sin(x)^2",0,"","","");
bind_examples(5,'\\\\begin{gathered}y^{\\\\prime\\\\prime}+y=\\\\sin(x)+2\\\\cos(x),\\\\\\\\ y(0)=0, \\\\quad y^{\\\\prime}(0)=2\\\\end{gathered}',0,1,"sin(x)+2*cos(x)",1,"0","0","2");
?>
}

</script>

