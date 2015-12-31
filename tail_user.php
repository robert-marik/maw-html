</div>
</div>
</div>
<div id=clear style="clear:both;">
</div>

<div id=mawoutput> </div>



<style> 
.responsive-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; }
.responsive-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
.cetered-div{ max-width:600px; margin-left:auto; margin-right:auto;  display:inline-div;}
.border {border-width:1px; border-style: dashed; border-color: gray; padding:10px; background-color:#5fcc06;}
.popisek {margin-left:auto; margin-right:auto; margin-bottom:10px; font-weight:bold;}

.popisekp {margin-top:0px; margin-bottom:0px;}


.wrapper{padding-top:10px;}
                                           
#one {
        float:left; 
        margin-right:20px;
        width:500px;
    }
    
#one .border {margin-bottom:30px; margin-left:3px;}

#two { 
          overflow:hidden;
       }

#two .imgdiv {width:60%; max-width:300px !important; margin-left:auto; margin-right:auto; msrgin-top:10px;}
.imgdiv img {width:100% !important;}
                              
@media screen and (max-width: 600px) {
     #one { 
           float: none;
           margin-right:0;
           width:auto;
           border:0;
           border-bottom:2px solid gray;
           border-top:2px solid gray;
                          
   }
}



</style>


<div class="wrapper no-print">
<div id="one">


<div class="cetered-div border">
<?php

include("youtube.php");
$popisek="<p class='popisekp'>".str_replace("<br>","</p><p class='popisekp'>",$popisek)."</p>";
echo "<div class='popisek'>$popisek</div>";
echo '<div class="responsive-container">';
echo '<iframe src="https://www.youtube.com/embed/';
echo $adresa;
echo '" frameborder="0" allowfullscreen></iframe>';
echo '</div>';
if ($reqlang=="cs")
{
echo '<p style="text-align:right; margin:0pt; margin-top:5px;">Celý <a href="https://www.youtube.com/user/KAJAMARIK1974/videos">Youtube kanál</a>.</p>';
echo '<p style="text-align:right; margin:0pt;">Web <a href="http://user.mendelu.cz/marik/mechmat">Mechanická matematika</a>.</p>';
}
else
{
echo '<p style="text-align:right;">The rest of the <a href="https://www.youtube.com/user/KAJAMARIK1974/videos">Youtube chanel</a>.</p>';
}

?>
</div>


</div>
<div id="two">

<?php


if ( ($form != "") && ($form != "map") && ($form != "main") )
{

if ($reqlang=="cs") { 

echo '<div
style="color:#333;margin-left:20%;margin-right:20%"><b>Ujednání</b>. Odesláním
formuláře stvrzuji, že rozumím tomu, že bezmyšlenkové vkládání zadání
do počítače a bezmyšlenkové opsání výsledku může mít neblahý vliv na
mé budoucí vzdělávání. Proto používám tuto aplikaci spíše ke kontrole
výsledků získaných klasickým počítáním, nebo výjímečně v případech,
kdy moje pokusy vypočítat příklad klasickou cestou selhaly.</div>';

echo '<div style="color:#222; margin-left:10%; margin-right:20%;margin-top:10px;background-color:#FFF; padding:10px;"><div> 
Pokud se Vám MAW líbí a pomáhá Vám, můžete poslat dárek, který bude použit k nákupu a záchraně nějaké mechanické nebo 
elektromechanické kalkulačky a jejímu představení zde.';
} else { 

echo '<div
style="color:#333;margin-left:20%;margin-right:20%"><b>Warning</b>. Did
you try the problem by yourself first? Blind rewriting problem to
computer and puting down the answer may have serious negative
influence on your education. The optimal way how to use this
application is to solve the problem and then check your result against
computer generated answer.</div>';

echo '<div style="color:#222; margin-left:10%; margin-right:20%;margin-top:10px;background-color:#FFF; padding:10px;"><div> 
If you like MAW, you may donate the author. I will use your money to buy, rescue and introduce here a mechanical or electromechnical calculator
Donations in the form of old calculators are also welcome.';

}
}

echo '
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="background-color:#FFF; display:inline-div;">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form></div>';


#echo "<div class=imgdiv>";
#echo "<a href='http://akademie.ldf.mendelu.cz'><img src='http://user.mendelu.cz/marik/akademie/OPVK.png'></a>";
#echo "</div>";

?>

</div>


<br>
<br>
<br>
<center> This is temporary URL for Mathematical Assistant on
Web. Please, do not spread this URL. Always use <a
href="http://user.mendelu.cz/marik/maw">http://user.mendelu.cz/marik/maw</a>. Thanks.
</center>

    
       <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
   <!-- Histats.com  START  (aync)-->
   <script type="text/javascript">var _Hasync= _Hasync|| [];
   _Hasync.push(['Histats.start', '1,305361,4,603,110,40,00011111']);
   _Hasync.push(['Histats.fasi', '1']);
   _Hasync.push(['Histats.track_hits', '']);
   (function() {
   var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
   hs.src = ('http://s10.histats.com/js15_as.js');
   (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
   })();</script>
   <noscript><a href="http://www.histats.com" target="_blank"><img  
   src="http://sstatic1.histats.com/0.gif?305361&101" alt="free website stats program" 
   border="0"></a></noscript>
   <!-- Histats.com  END  -->
   

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41290718-1', 'mendelu.cz');
  ga('send', 'pageview');

</script>


<div>
<div>
<div>
<div>
