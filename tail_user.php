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


<div class="wrapper">
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

} else { 

echo '<div
style="color:#333;margin-left:20%;margin-right:20%"><b>Warning</b>. Did
you try the problem by yourself first? Blind rewriting problem to
computer and puting down the answer may have serious negative
influence on your education. The optimal way how to use this
application is to solve the problem and then check your result against
computer generated answer.</div>';

}
}


echo "<div class=imgdiv>";
echo "<a href='http://akademie.ldf.mendelu.cz'><img src='http://user.mendelu.cz/marik/akademie/OPVK.png'></a>";
echo "</div>";

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
