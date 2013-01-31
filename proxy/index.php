<?php

$reqlang=$_REQUEST["lang"];
$form=$_REQUEST["form"];
$design=$_REQUEST["design"];

if ($reqlang == "")
  {
    $reqlang=explode(",",$_SERVER["HTTP_ACCEPT_LANGUAGE"]);
    $reqlang=substr($reqlang[0],0,2);
  }

if ($reqlang == "cz") { $reqlang = "cs";}
if ($reqlang == "ua") { $reqlang = "uk";}

$post_data['lang'] = $reqlang;
$post_data['form'] = $form;
$post_data['design'] = 'compact';



foreach ( array_merge($post_data,$_REQUEST) as $key => $value)
{
    $post_items[] = $key . '=' . $value;
}
$post_string = implode ('&', $post_items);


$ch = curl_init();

// set URL and other appropriate options

curl_setopt($ch, CURLOPT_URL, "http://um-bc107.mendelu.cz/maw-html/");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

$a=curl_exec($ch);

$a=str_replace('action="http://um-bc107.mendelu.cz/maw/', 'action="http://user.mendelu.cz/marik/maw-new/redirect.php?form=',$a);
$a=str_replace('server="http://um-bc107.mendelu.cz/maw"','server="http://user.mendelu.cz/marik/maw-new/redirect.php?"',$a);
$a=str_replace('server+"/common/formconv.php?','server+"form=common/formconv.php&',$a);
$a=str_replace('/gnuplot/curve.php?','form=gnuplot/curve.php?&',$a);
//$a=str_replace('<a href="index.php?lang=&amp;form=integral&amp;design=full">Switch to a full design</a>','',$a);
//$a=str_replace('Switch to a full design','',$a);

echo $a;
curl_close($ch);

echo "<br><br>";
echo "<center><img src='http://user.mendelu.cz/marik/akademie/OPVK.png' width=600></center>";
?>

