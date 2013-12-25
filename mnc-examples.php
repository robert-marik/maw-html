<?php

examples("1,2,3,4,5");

function bind_examples ($id,$tex,$body)
{
  $body=str_replace("[","",$tex);
  $body=str_replace("]"," ",$body);
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
bind_examples(1,'[0,1]; [1,1]; [2,2]; [3,2]; [5,3]',"");
bind_examples(2,'[1,10]; [3,5]; [4,4]; [6,1]; [8,0]',"");
bind_examples(3,'[2,22]; [4,25]; [6,26]; [8,29]',"");
bind_examples(4,'[0,3]; [1,5]; [2,7]; [3,8]; [4,9]; [5,10]',"");
bind_examples(5,'[0,10]; [1,9]; [2,8]; [3,6]; [4,5]; [5,3]',"");
?>
}

</script>

