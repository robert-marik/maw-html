<?php
$moje_video=1;

#   $popisek='Computing and mechanical cut-and-paste with Brunsviga\'s brain of steel';
#   $popisekcz='Počítání a mechanické cut-paste ocelovým mozkem (můžete si zapnout i české titulky)';
#   $adresa='dlkTFEz8Lz0';


# if ($cislo==6)
# {
#   $popisek='Top 3 different methods for square root on mechanical calculator - methods and calculator description, you should turn english subtitles on';
#   $popisekcz='Nejlepší 3 metody pro odmocňování na mechanické kalkulačce - popis kalkulačky a metod. Vlastní výpočet je ve druhém díle tohoto videa.';
#   $adresa='5DK1W_CxH4g';
#  }
#
# if ($cislo==7)
# {
#  $popisek='Top 3 different methods for square root of 1896 on mechanical calulator (second part with actual computation, the methods are introduced in the first part)';
#  $popisekcz='Nejlepší 3 metody pro odmocninu z 1896 na mechanické kalkulačce. Druhý díl - výpočet. Metody jsou představeny v prvním díle videa.'; 
#  $adresa='bmV52Hp1byc';
# }
 
$videos = array
  (
   array('Integration (measuring area) by spoon, turn English subtitles on', 'Integrování (měření obsahu) žličkou', 'u8gTQoSCuRo', 15)
   ,
   array('Integration (area measure) using mechanical devices, turn English subtitles on', 'Integrování (měření obsahu) pomocí čistě mechanických nástrojů!', 'UjaPmowIUIA')
   ,
   array('Assembling mechanical calculator', 'Seskládání mechanické kalkulačky', 'Ic5ixQgUdSY', 15)
   ,
   array('Division on meat grinder', 'Dělení mlýnkem na maso (můžete si zapnout i české titulky)', 'HecEOd2494k')
   ,
   array('Mercedes Euklid 21 - one of the most advanced calulators from early 30\'s is introduced in a short but comprehensive video.', 'Mercedes Euklid 21 - elektromechanická kalkulačka. Automaticky dělí a sečítá nebo odečítá podíly. Dělí i nulu nulou :)', 'QR6VDMcMkHo', 15)
   ,
   array('Semiautomatic multiplication and vampire numbers on Diehl KR 15.</p><p style="font-weight:normal">The closest dates which can be permuted into a vampire number are April 4 and May 5 2016. These days give digits for three vampire numbers. One of them even with two pairs of fangs. The last day this year which can be permuted into a vampire number is just Xmass :).', 'Poloautomatické násobení a upírská čísla na Diehl KR 15.</p><p style="font-weight:normal">Nejbližší datum které půjde permutovat na upírské číslo (dokonce třemi způsoby) je 5. duben 2016 a 4. květen 2016. Jedno z takto obdržených upírských čísel má dokonce dva páry upírských tesáků. Poslední letošní datum které půjde permutovat na upírské číslo jsou Vánoce.', 'aj4-_h0Umxc')
   ,
   array('Multiplication on an old calculator, probably unique on the world (at least the type not mentioned in any book)', 'Násobení na kalkulačce, které je pravděpodobně jediná na světě (není zmíněna v žádné z knih věnovaných tématu)', 'zz_RcaeNdlo')
   ,
   array('How does the mechanical thing multiply? Detailed explanation how successive additions and carriage shifts are used in a calculator with automatic multiplication.', 'Jak vlastně kalkulačka násobí? Pohled pod pokličku (kryt) velmi vzácného modelu s automatickým násobením.', 'yeGHrOTkDXw', 15)
   ,
   array('Playing (not only) with mechnaical memory on vintage Mercedes Euklid calculator (by Jaroslav Pochylý).', 'Hrátky (nejen) s pamětí na historickém kalkulátoru Mercedes Euklid (by Jaroslav Pochylý).', 'xE-GZtoa6xY', 5)
   ,
   array('Detailed view on vintage Mercedes Euklid 38 calculator (by Jaroslav Pochylý).', 'Detailní pohled na dělení na historickém kalkulátoru Mercedes Euklid 38 (by Jaroslav Pochylý).', 'kY6BvofCw-M',20)
   ,
   array('Detailed view on vintage Mercedes Euklid 37 SM, computing wonder by Jaroslav Pochylý.', 'Detailní pohled na funkce historického kakulátoru Mercedes Euklid 37 SM (by Jaroslav Pochylý).', '8dX5xzQ-ppo',20)
   ,
   array('Detailed view on vintage Mercedes Euklid 37 SM, computing wonder by Jaroslav Pochylý.', 'Detailní pohled na funkce historického kakulátoru Mercedes Euklid 37 SM (by Jaroslav Pochylý).', '8dX5xzQ-ppo',20)
,
   array('Marchant Silent Speed calculator in excellent condition - an absolute curiosity in the world of electromechnaical calculators',  'Naprostá rarita ve světě mechanických kalkulátorů - stoprocentně funkční Marchant Silent Speed', 'XaKtqb9mni0', 20)
   ,
   array('Multiplication in the rhythm of the Radetzki March on MADAS 20AS calculator', 'Násobení v rytmu Radeckého marše. Také dělení na přednastavený počet cifer a násobení tří čísel v řadě na kalkulátoru MADAS 20AS.', 'Yq5ZgB-Bmok', 10)
   ,
   array('Marchant Silent Speed ACT 10M, the only mechanical calculator which runs on 1200 rpm.', 'Marchant Silent Speed ACT 10M, jediná mechanická kalkulačka bežící na 1200 otáček za minutu.', 'S13uzVBNhtg',20)
   ,
   array('Speed comparison for Marchant calculators, the fastest mechanical calculators in human history.', 'Test rychlosti a vzájemné porovnání kalkulátorů Marchant, nejrychlejších mechanických kalkulaček všech dob.', '6O7CAxFIytQ',20) 
   ,
   array('MADAS ATG 20 - one of the most complex mechaincal calculator. The registers invove 80 digits.', 'MADAS ATG 20 - jedna z nejsložitějších mechanických kalkulaček s celkem 80 ciframi v šesti registrech.', 'FPk10kMzX8M',200) 
   );

$videosarray = array();

foreach ($videos as $value) {
  if (count($value)==4)
    {
      $tempcount=$value[3];
    }
  else
    {
      $tempcount=1;
    }
  $tempi = 0;
  while ($tempi++ < $tempcount)
    {
      $videosarray[] = $value;
    }
}
 
shuffle($videosarray);

if (strpos($videosarray[0][0], 'Jaroslav') !== false) {
    $moje_video=0;
}

if ($reqlang=="cs") 
  {
    $popisek=$videosarray[0][1];
  }
else
  {
    $popisek=$videosarray[0][0];
  }
$adresa=$videosarray[0][2]; 



/*  if ($cislo==8) */
/*  { */
/*  $popisek='Does your Odhner calculator compute wihtout errors? Suggestions for quick check siutable when you obtain new mechanical calculator.'; */
/*  $popisekcz='Počítá vaše mechanická kalkulačka bez chyby? Kratičký orientační test co je vhodné provést s nově získanou kalkulačkou. (Ve videu si můžete zapnout české titulky.)'; */
/*  $adresa='ujJCGpFeB4Q'; */
/*  } */

/* if ($cislo==9) */
/*  { */
/*   $popisek='Monroe calculator (model K, cca 1920) extracts square root using Monroe multiplication tables.'; */
/*   $popisekcz='Kalkulator Monroe (model K, cca 1920) a výpočet odmocniny pomocí Monroeových multiplikačních tabulek.';  */
/*   $adresa='ZZGKYMrpj0A'; */
/*  } */


/* if ($cislo==10) */
/*  { */
/*   $popisek='Five rational approximations of Pi on (electro-)mechanical computers.'; */
/*   $popisekcz='Pět aproximací Pi na (elektro-)mechanických kalulačkách.';  */
/*   $adresa='IPu5GbOnI1A'; */
/*  } */

/* if ($cislo==11) */
/*  { */
/*   $popisek='Cube root on (electro-)mechanical computer.'; */
/*   $popisekcz='Třetí odmocnina na (elektro-)mechanické kalulačce.';  */
/*   $adresa='igg1ZBRSlm8'; */
/*  } */

/* if ($cislo==12) */
/*  { */
/*   $popisek='60 digits of quotient on Walther RKZ10 calulator '; */
/*   $popisekcz='Dělení na kalkulačce Walther s přesností na 60 cifer';  */
/*   $adresa='gahwjIvsXXc'; */
/*  } */


/* if ($cislo==13) */
/*  { */
/*   $popisek='How vintage calculators show negative answer - big comparison of 12 calculators'; */
/*   $popisekcz='Jak mechanické kalkulačky zobrazují záporná čísla - velké srovnání 12 modelů';  */
/*   $adresa='iRwIEmyWRig'; */
/*  } */


/* if ($cislo==14) */
/*  { */
/*   $popisek='PF 2016: What is interesting on the number 2016?'; */
/*   $popisekcz='PF 2016: Co je zajímavého na čísle 2016?';  */
/*   $adresa='hT3BWiljISQ'; */
/*  } */



// if ($reqlang=="cs") {$popisek=$popisekcz;}

///if (($reqlang=="cs") && (mt_rand(0,9)==0))
//{
//  $cislo=mt_rand(0,2);
//  if ($cislo==0)
//  {
//   $popisek='Video o zrození mechanických kalkulaček (když computers nebyly stroje ale lidé)';
//   $adresa='czIQDrOO4zg';
//  }   
//  elseif ($cislo==1)
//  {
//   $popisek='MacGyverův nožový planimetr: měření obsahu plochy (integrálu) domácí variantou Prytzova planimetru na fotkách zatmění Slunce, začíná v čase 1:09';
//   $adresa='8lXxJ5eIvII?start=69';
//  }
//  else
//  {
//  $popisek='Staré mechanické počítadlo (cca 1950)';
//  $adresa='C_p4QKVNp8A';
//  }
//   
//} 


//   $popisek='MacGyverův nožový planimetr: měření obsahu plochy (integrálu) domácí variantou Prytzova planimetru na fotkách zatmění Slunce, začíná v čase 1:09';
//   $adresa='8lXxJ5eIvII?start=69';


?>
