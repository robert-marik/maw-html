<?php
 $cislo=mt_rand(0,15); 

 $popisek='Integration (measuring area) by spoon, turn English subtitles on';
 $popisekcz='Integrování (měření obsahu) žličkou';
 $adresa='u8gTQoSCuRo';
 if ($cislo==1)
  {
   $popisek='Integration (area measure) using mechanical devices, turn English subtitles on';
   $popisekcz='Integrování (měření obsahu) pomocí čistě mechanických nástrojů!';
   $adresa='UjaPmowIUIA';
  } 

 if ($cislo==3)
  {
 $popisek='Assembling mechanical calculator';
 $popisekcz='Seskládání mechanické kalkulačky';
 $adresa='Ic5ixQgUdSY';
 }

 if ($cislo==4)
 {
   $popisek='Division on meat grinder';
   $popisekcz='Dělení mlýnkem na maso (můžete si zapnout i české titulky)';
   $adresa='HecEOd2494k';
 }

 if ($cislo==5)
 {
   $popisek='Computing and mechanical cut-and-paste with Brunsviga\'s brain of steel';
   $popisekcz='Počítání a mechanické cut-paste ocelovým mozkem (můžete si zapnout i české titulky)';
   $adresa='dlkTFEz8Lz0';
 }

 if ($cislo==6)
 {
   $popisek='Top 3 different methods for square root on mechanical calculator - methods and calculator description, you should turn english subtitles on';
   $popisekcz='Nejlepší 3 metody pro odmocňování na mechanické kalkulačce - popis kalkulačky a metod. Vlastní výpočet je ve druhém díle tohoto videa.';
   $adresa='5DK1W_CxH4g';
  }

 if ($cislo==7)
 {
  $popisek='Top 3 different methods for square root of 1896 on mechanical calulator (second part with actual computation, the methods are introduced in the first part)';
  $popisekcz='Nejlepší 3 metody pro odmocninu z 1896 na mechanické kalkulačce. Druhý díl - výpočet. Metody jsou představeny v prvním díle videa.'; 
  $adresa='bmV52Hp1byc';
 }

 if ($cislo==8)
 {
 $popisek='Does your Odhner calculator compute wihtout errors? Suggestions for quick check siutable when you obtain new mechanical calculator.';
 $popisekcz='Počítá vaše mechanická kalkulačka bez chyby? Kratičký orientační test co je vhodné provést s nově získanou kalkulačkou. (Ve videu si můžete zapnout české titulky.)';
 $adresa='ujJCGpFeB4Q';
 }

if ($cislo==9)
 {
  $popisek='Monroe calculator (model K, cca 1920) extracts square root using Monroe multiplication tables.';
  $popisekcz='Kalkulator Monroe (model K, cca 1920) a výpočet odmocniny pomocí Monroeových multiplikačních tabulek.'; 
  $adresa='ZZGKYMrpj0A';
 }


if ($cislo==10)
 {
  $popisek='Five rational approximations of Pi on (electro-)mechanical computers.';
  $popisekcz='Pět aproximací Pi na (elektro-)mechanických kalulačkách.'; 
  $adresa='IPu5GbOnI1A';
 }

if ($cislo==11)
 {
  $popisek='Cube root on (electro-)mechanical computer.';
  $popisekcz='Třetí odmocnina na (elektro-)mechanické kalulačce.'; 
  $adresa='igg1ZBRSlm8';
 }

if ($cislo==12)
 {
  $popisek='60 digits of quotient on Walther RKZ10 calulator ';
  $popisekcz='Dělení na kalkulačce Walther s přesností na 60 cifer'; 
  $adresa='gahwjIvsXXc';
 }


$dalsicislo=mt_rand(1,6);

if (($cislo==13)||($dalsicislo<5))
 {
  $popisek='How vintage calculators show negative answer - big comparison of 12 calculators';
  $popisekcz='Jak mechanické kalkulačky zobrazují záporná čísla - velké srovnání 12 modelů'; 
  $adresa='iRwIEmyWRig';
 }


if (($cislo==14)||($dalsicislo<4))
 {
  $popisek='PF 2016: What is interesting on the number 2016?';
  $popisekcz='PF 2016: Co je zajímavého na čísle 2016?'; 
  $adresa='hT3BWiljISQ';
 }




if ($reqlang=="cs") {$popisek=$popisekcz;}

if (($reqlang=="cs") && (mt_rand(0,9)==0))
{
  $cislo=mt_rand(0,2);
  if ($cislo==0)
  {
   $popisek='Video o zrození mechanických kalkulaček (když computers nebyly stroje ale lidé)';
   $adresa='czIQDrOO4zg';
  }   
  elseif ($cislo==1)
  {
   $popisek='MacGyverův nožový planimetr: měření obsahu plochy (integrálu) domácí variantou Prytzova planimetru na fotkách zatmění Slunce, začíná v čase 1:09';
   $adresa='8lXxJ5eIvII?start=69';
  }
  else
  {
  $popisek='Staré mechanické počítadlo (cca 1950)';
  $adresa='C_p4QKVNp8A';
  }
   
} 


//   $popisek='MacGyverův nožový planimetr: měření obsahu plochy (integrálu) domácí variantou Prytzova planimetru na fotkách zatmění Slunce, začíná v čase 1:09';
//   $adresa='8lXxJ5eIvII?start=69';


?>
