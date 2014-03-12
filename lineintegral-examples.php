<?php

examples("1,2,3,4,5");

function bind_examples ($id,$tex,$infunction,$infx, $infy, $infz, $inx, $iny, $inz, $intmin, $intmax, $chkind)
{
  echo '$("#e-'.$id.'").tooltip({ content: \'<img src="http://um.mendelu.cz/mathtex/mathtex.php?'.$tex.'">\' });';
echo '$("#e-'.$id.'").bind("click", function() {';
echo '$("#exampleform")[0].reset();';
echo '$(\'[name="kind"][value="'.$chkind.'"]\').prop("checked", true).trigger("change");';
echo '$("#in-function").val("'.$infunction.'");';
echo '$("#in-fx").val("'.$infx.'");';
echo '$("#in-fy").val("'.$infy.'");';
echo '$("#in-fz").val("'.$infz.'");';
echo '$("#in-x").val("'.$inx.'");';
echo '$("#in-y").val("'.$iny.'");';
echo '$("#in-z").val("'.$inz.'");';
echo '$("#in-tmin").val("'.$intmin.'");';
echo '$("#in-tmax").val("'.$intmax.'");';
echo '$("#exampleform").submit();});';

}

?>

<script>

window.onload = function() {
<?php
bind_examples(1,'\\\\int x^2\\\\mathrm{d}s',"x^2","0","0","","cos(t)","sin(t)","","0","pi/2",1);
bind_examples(2,'\\\\int x\\\\mathrm{d}s',"x^2","0","0","","t","1+2*t","","0","1",1);
bind_examples(3,'\\\\int x\\\\mathrm{d}s',"x^2","0","0","","sqrt(t)","t","","0","1",1);
bind_examples(4,'\\\\int (x^2+y)\\\\mathrm{d}x+(x^2-y)\\\\mathrm{d}y',"0","x^2+y","x^2-y","","t","t","","0","1",2);
bind_examples(5,'\\\\int (x^2-3y^2)\\\\mathrm{d}y',"0","0","x^2-3*y^2","","t","t^2","","0","1",2);

?>
}

</script>

