<?php
header("Content-type: text/html; charset=utf-8");
$qq=$_GET["qq"];
$list=file_get_contents("List.php");
$result=preg_match_all("/【机器：(.*?)】〖主人：".$qq."〗/",$list,$bb);
$bb0=$bb[1][0];
if($qq<="10001"||$qq>="9999999999"){
echo "查询主人号码错误!";
}else
if($bb0==''){
echo "你的授权列表空空";
}else{
echo "你的授权列表如下\n\n";
for ($x=0; $x < $result && $x<=50; $x++) 
{
$bb1=$bb[1][$x];
echo ($x+1).".".$bb1."\n";
}
}
?>