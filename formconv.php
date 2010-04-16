
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
 <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <link rel="stylesheet" type="text/css" href="../common/styl.css" />
<script language="Javascript">

var exp = opener.document.forms['exampleform'].elements[opener.thenumber].value
var whichone;
function writedata()
{
    whichone = opener.thenumber
 
}

function updateit()
{
  opener.document.forms['exampleform'].elements[whichone].value = "x";       
    window.close()
}
</script>


</head>
<body onload="writedata()">
Výraz: <img align="center" src="http://is.mendelu.cz/teximg.pl?x^{2}\, \mathrm{e}^{x^{2}}"/><br><br>Zápis programem Maxima: <b>((x^23)*exp((x^2)))</b><br>
<br>

<form name="checkit">
<input type="hidden" cols="20" id="data" />
<br />

<input type="button" value="Zavřít" onclick="window.close()">
<input type="button" value="Přenést do formuláře" onclick="updateit()"></body>
</html>
