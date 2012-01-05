<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <link rel="shortcut icon" href="ikona1.png" >
  <meta name="verify-v1" content="x3d1tCrhI9DFDDtCOx3kjZETBlj6CmnFT1YHhe3HBC8=" />
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <link rel="stylesheet" type="text/css" href="styl.css" />

<?php
if (file_exists('./custom.css')) 
{
  echo ('<link rel="stylesheet" type="text/css" href="custom.css" />');
}
?>

  <link rel="stylesheet" type="text/css" href="navigace.css" />
  <title>Mathematical Assistant on Web </title>


</head>

<body>

Languages:
<ul>
<li><a href="#cz">česky</a>
<li><a href="#en">English</a>
</ul>
<hr>
Acknowledgement:
<ul>
<li>The current build of MAW virtual machine is 
from January 2, 2012. 
</ul>
<hr>
<a name="en"></a>
<h2> Mathematical Assistant on Web on your PC</h2>
<h3>Linux</h3>
To install MAW on your local computer with Linux download everything from our 
homepage at <a href="http://mathassistant.sourceforge.net/">sourceforge</a>, 
install necesary software (on Debian install imagemagick texlive-base 
texlive-base-bin texlive-latex-recommended texlive-latex-base texlive-metapost 
maxima maxima-share gnuplot gettext libintl-perl texlive-fonts-recommended dvipng build-essential mercurial unzip). From CTAN
install <a href="http://www.math.uakron.edu/~dpstory/webeq.html">AcroTeX</a> 
and <a href="http://tug.ctan.org/tex-archive/macros/latex/contrib/comment/">comment.sty</a>. 
Then 
follow the <a
href="http://bitbucket.org/robert.marik/maw/src/tip/INSTALL">rough instructions</a> 
and contact authors if you fail into troubles. 

<h3>Windows</h3>
<br>This text describes how to run MAW on Windows (in Linux virtual
machine). Follow these steps (and
let us know if something does not work).
<ul>
<li>Install free VMware player of VMware server from <a
href="http://www.vmware.com/download/player/">vmware</a> site.
<li>Download MAW virtual machine from 
<a href="http://user.mendelu.cz/marik/maw/download.php">here</a>
(>800MB!). 
<li>Unpack the zip file in some directory, start VMware Player, open the MAW virtual machine in this
VMvare Player and power on the MAW virtual machine.
<li>The virtual machine is some minimal text only installation of
Debian Squeeze. After boot process you should see the login prompt. Login
as <b>root</b> with password <b>mawroot</b>. 
<li>Run <pre>ifconfig</pre> command to find  IP address of the virtual computer. Your use IP address for 
eth0 interface (inetadr in the output of ifconfig command).
<li>Open web browser on your personal computer and go to the IP address from the previous step. 
You should see the message "It works!", link to MAW forms and some other links for debugging MAW.
<li>You can stop the virtual computer with MAW by the command
<pre>halt
</pre>
as root (passwoord is mawroot)
<li>If you have any opinion (simple/hard to run, need more detailed
instructions, need to increase the maximal time limit for running
external programms, ....) let us know, please. Use our email adresses.
Thank you very much.
</ul>
On a typical PC expect typically slower calculations than on our online server.
If the computations are too slow, you may try to use virtual machine with <a href="http://user.mendelu.cz/marik/maw/download-old.php">older and faster software</a>.

<hr>
<a name="cz"></a>
<h1>Matematické výpočty online offline</h1>

<h3>Linux</h3>
Pro instalaci na Linux stáhněte vše z domovské stránky na 
<a href="http://mathassistant.sourceforge.net/">sourceforge</a>, 
nainstalujte potřebné prerekvizity (na Debianu instalujte imagemagick texlive-base 
texlive-base-bin texlive-latex-recommended texlive-latex-base texlive-metapost 
maxima maxima-share gnuplot gettext libintl-perl texlive-fonts-recommended dvipng). Z CTAN
nebo odjinud nainstalujte <a href="http://www.math.uakron.edu/~dpstory/webeq.html">AcroTeX</a> 
a <a href="http://tug.ctan.org/tex-archive/macros/latex/contrib/comment/">comment.sty</a>. 
Potom zkuste <a
href="http://bitbucket.org/robert.marik/maw/src/tip/INSTALL">hrubé 
instrukce</a> a kontaktujte nás v případě problémů. 

<h3>Windows</h3>
<br>Na Windows musíte nechat MAw běžet ve virtuálním počítači s Linuxem.
<ul>
<li>Nainstalujte si zdarma VMware player nebo VMware server z <a
href="http://www.vmware.com/download/player/">vmware</a>.
<li>Stáhněte si   
<a href="http://user.mendelu.cz/marik/maw/download.php">virtuální
počítač s MAWem</a> (>800MB!).
<li>Rozzipujte někam archiv, spusťte VMware Player, otevřete v něm virtuální počítač MAW a 
zapněte jej.
<li>Ve virtuálním počítači je textová instalace Debianu Squeeze. Po bootu uvidíte 
výzvu na přihlášení a vložení hesla. 
Stačí se přihlásit při prvním spuštění. Nalogujte se jako 
<b>root</b> s heslem <b>mawroot</b>. 
<li>Spusťte příkaz <pre>ifconfig</pre> abyste našli IP adresu virtuálního stroje. 
Je to IP adresa rozhraní eth0 (inetadr).
<li>Otevřete svůj oblíbený internetový prohlížeč (raději jiný než Microsoft Explorer)
a zadejte IP adresu, kterou jste našli v předchozím kroku. 
Měli byste vidět text "It works!", odkaz na formuláře k MAwu a pár dalších odkazů pro 
ladící účely.
<li>Virtuální počítač zastavíte příkazem 
<pre>halt
</pre>
jako root (heslo mawroot)
<li>Jakekoliv nazory a zkusenosti s provozem (lehke/tezke na
nainstalovani a pouzivani, potreba detailnejsich navodu, potreba
prodlouzit maximalni povoleny cas pro provadeni prikazu, ....) smerujte
prosim na nase mailove adresy. Dekujeme.
</ul>
Na typickém studentském počítači (ne herním) očekávejte delší odezvu než na online 
serveru (v době nízké zátěže).
Pokud jsou výpočty příliš pomalé, můžete použít virtuální počítač se <a href="http://user.mendelu.cz/marik/maw/download-old.php">starší ale rychlejší verzí programu Maxima</a>.
 
</body>


