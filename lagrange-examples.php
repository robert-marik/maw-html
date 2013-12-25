<?php

examples("1,2,3,4,5");

function bind_examples ($id,$tex,$body)
{
echo '$("#e-'.$id.'").tooltip({ content: \''.$tex.'\' });';
echo '$("#e-'.$id.'").bind("click", function() {';
echo '$("#exampleform")[0].reset();';
echo '$("#in-body").val("'.$body.'");';
echo '$("#exampleform").submit();});';
}

?>

<script>

window.onload = function() {

<?php
bind_examples(1,'[0,1]; [3,0]; [4,2]',"0,1 ; 3,0 ; 4,2");
bind_examples(2,'[-2,2]; [0,0]; [1,1]; [2,2]',"-2,2 ; 0,0 ; 1,1 ; 2,2");
bind_examples(3,'[-1,1]; [1,1]; [3,0]; [2,1] ',"-1,1 ; 1,1 ; 3,0 ; 2,1 ");
bind_examples(4,'[0,0]; [2,4]; [3,9]; [1,1]; [-1,1]',"0,0 ; 2,4 ; 3,9 ; 1,1 ; -1,1");
bind_examples(5,'[10,22]; [15,31]; [20,16]',"10,22 ; 15,31 ; 20,16");
?>
}

</script>

