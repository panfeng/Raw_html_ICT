<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <title>
            Chapter <?php 

            $nchapter = $_GET["chapter_Num"];
            if(is_numeric($nchapter) && $nchapter<=33 && $nchapter>=1 ){
                echo $nchapter;
                }else{
                    $msg="Input a number between 1 and 33! You just inputed -- ";
                    return $msg;
                }

                ?> Analysis 
            </title>
        <style type="text/css">
        h1 {color:red;text-align:center;font-family:arial;}
        div#img {float:left;margin:0px 20px 10px 30px;}
        #input {float:auto;margin:10px 10px 10px 70px;} 
        table {float:left;
                margin:10px 20px 10px 50px;
                border-spacing: 2px;
                border-color: gray; }
        .in {text-align:center;font-weight:bold;}
        #nc {}
        #lc {}
        #hrefa {margin:30px 10px 10px 30px;}
        #hrefb {margin:60px 60px 0px 40px;text-align:right;}
        </style>
        </head>

<body>


<div id="hrefa">
<a href="./" class="in">Back to index<a><br />

<?php 
if($nchapter-1<0){ header('Location: /daskap_php/'); }
$lchapter=$nchapter-1;
?>
<a href="./chapter.php?chapter_Num=<?php echo $lchapter ;?>" id="lc">Last chapter&nbsp<a>
<?php 
$xchapter=$nchapter+1;
if($xchapter>34){ header('Location: /daskap_php/'); }
?>
<a href="./chapter.php?chapter_Num=<?php echo $xchapter ;?>" id="nc">&nbspNext chapter<a>

</div>


<?php
echo "<h1>Analysis of Chapter ".$nchapter."</h1>";




# read json to the variable
$filepath="./pic_json/term_Json".$nchapter.".json";
$content= file_get_contents($filepath);
# echo strlen($content);
# print_r($content);

# var_dump(json_decode($json));
# var_dump(json_decode($json,true));

# var_dump(json_decode($content));

# var_dump(json_decode($content, true));

# $json = array(json_decode($content)));

echo "<pre>";
# print_r(json_decode($content, true));
echo "</pre>";

$obj = json_decode($content);
$termName = $obj->stemName;
$termNum = $obj->termNum;


?>

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



<table id="table" border="1">
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
<?php
echo "<div id='img'><img src='./pic_json/aTerm_Freq".$nchapter.".jpeg'></div>";
?>



<iframe id="iframe" width=45% height=400 frameborder=0 scrolling=auto src="html/ch<?php
if($nchapter>=10){
    echo $nchapter;}else{
    echo "0".$nchapter; };?>.htm
"></iframe>



<div id="hrefb">
<a href="./" class="in">Back to index<a><br />

<?php 
if($nchapter-1<0){ header('Location: /daskap_php/'); }
$lchapter=$nchapter-1;
?>
<a href="./chapter.php?chapter_Num=<?php echo $lchapter ;?>">Last chapter&nbsp<a>
<?php 
$xchapter=$nchapter+1;
if($xchapter>34){ header('Location: /daskap_php/'); }
?>
<a href="./chapter.php?chapter_Num=<?php echo $xchapter ;?>">&nbspNext chapter<a>

</div>
<?php
include("footer.php");
?>
</body>
</html>
