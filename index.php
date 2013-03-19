<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <title> Text Mining </title>
    <style type="text/css">

        span#warning {color:orange; font-size:12px;}
        h1 {color:red;text-align:center;font-family:arial;}
        div#img {float:left; display:none}
        #table {float:left;margin:10px 50px 10px 70px;}
        #html {float:left;margin:0px 20px 10px 50px;}
        #input {float:auto;margin:10px 10px 10px 70px;}

    </style>
    </head>

<h1>Economic Manuscripts: Capital: Volume One</h1>

<div id="input">
<span id="warning"><?php
if(!isset($_GET['msg'])){
echo " ";
}else{ echo $_GET['msg'];}
?></span>

<form action="chapter.php" method="GET"> 
<p><label for="num_Of_Chapter">Please choose a chapter to analysis:</label> 
<input type="text" name="chapter_Num" id="nickname" placeholder="Input number from 1 to 33"><span id="tips"></span>
<input type="submit" value="OK" /></p> 
</form> 
</div>


<div id="img">
<img src="./pic_json/Term_Freq_all.jpeg">
</div>

<?php
$filepath="./pic_json/term_Json_all.json";
$content=file_get_contents($filepath);
echo "<br />";

$obj=json_decode($content);
$termName=$obj->termName;
$termNum=$obj->termNum;
?>


<div id="table">
<table border="1">
<tr>
  <th>Term</th>
  <th>Frequency</th>
</tr>
<?php
for($i=0; $i<count($termNum); $i++){
echo "<tr>"."<td>".$termName[$i]."</td>"."<td>".$termNum[$i]."</td>"."</tr>";
}
?>
</table>
</div>


<div id="html">
<p class="ptoc"><a href="chapter.php?chapter_Num=1" class="calibre1">Chapter 1 - Commodities</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=2" class="calibre1">Chapter 2 - Exchange</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=3" class="calibre1">Chapter 3 -  Money, or the Circulation of Commodities</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=4" class="calibre1">Chapter 4 - The General Formula for Capital</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=5" class="calibre1">Chapter 5 - Contradictions in the General Formula of Capital</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=6" class="calibre1">Chapter 6 - The Buying and Selling of Labour-Power</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=7" class="calibre1">Chapter 7 - The Labour-Process and the Process of Producing Surplus-Value</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=8" class="calibre1">Chapter 8 - Constant Capital and Variable Capital</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=9" class="calibre1">Chapter 9 - The Rate of Surplus-Value</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=10" class="calibre1">Chapter 10 - The Working-Day</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=11" class="calibre1">Chapter 11 - Rate and Mass of Surplus Value Rate and Mass of Surplus Value</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=12" class="calibre1">Chapter 12 - The Concept of Relative Surplus Value</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=13" class="calibre1">Chapter 13 - Co-operation</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=14" class="calibre1">Chapter 14 - Division of Labour and Manufacture</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=15" class="calibre1">Chapter 15 - Machinery and Modern Industry</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=16" class="calibre1">Chapter 16 - Absolute and Relative Surplus-Value</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=17" class="calibre1">Chapter 17 - Changes of Magnitude in the Price of Labour-Power and in Surplus Value</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=18" class="calibre1">Chapter 18 - Various Formula for the rate of Surplus-Value</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=19" class="calibre1">Chapter 19 - The Transformation of the Value (and Respective Price) of Labour-Power into Wages</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=20" class="calibre1">Chapter 20 - Time-Wages</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=21" class="calibre1">Chapter 21 - Piece Wages</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=22" class="calibre1">Chapter 22 - National Differences of Wages</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=23" class="calibre1">Chapter 23 - Simple Reproduction</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=24" class="calibre1">Chapter 24 - Conversion of Surplus-Value into Capital</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=25" class="calibre1">Chapter 25 - The General Law of Capitalist Accumulation</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=26" class="calibre1">Chapter 26 - The Secret of Primitive Accumulation</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=27" class="calibre1">Chapter 27 - Expropriation of the Agricultural Population from the Land</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=28" class="calibre1">Chapter 28 - Bloody Legislation Against the Expropriated, from the End of the 15th Century. Forcing Down of Wages by Acts of Parliament</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=29" class="calibre1">Chapter 29 - Genesis of the Capitalist Farmer</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=30" class="calibre1">Chapter 30 - Reaction of the Agricultural Revolution on Industry. Creation of the Home-Market for Industrial Capital</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=31" class="calibre1">Chapter 31 - Genesis of the Industrial Capitalist</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=32" class="calibre1">Chapter 32 - Historical Tendency of Capitalist Accumulation</a></p>
<p class="ptoc"><a href="chapter.php?chapter_Num=33" class="calibre1">Chapter 33 - The Modern Theory of Colonisation</a></p>
</div>
<?php
include("footer.php")
?>
</body>
</html>
