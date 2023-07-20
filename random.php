<?php
//欧阳鹏作品 2021.08.09
//随机输出一张图片或视频 来自壁纸多多所有数据
$count = $_GET["count"]
$ym3 = file_get_contents("https://api.zhouzifei.com/img/random?count=" . $count);
$json3 = json_decode($ym3, true);
$data3 = $json3["data"][$res]["res"];
$list = Array();
if ($_GET["count"] <= 30 && $_GET["count"] > $num3) {
  $pn = $num3;
} elseif ($_GET["count"] <= 30 && $_GET["count"] > 0) {
  $pn = $_GET["count"];
} else {
  $pn = 1;
}
for ($x = 0; $x < $pn; $x++) {
  $num4 = rand(0, (count($data3) - 1));
  $list[$x]["url"] = $data3[$num4]["url"];
  $list[$x]["thumb"] = $data3[$num4]["thumb"];
}
$newdata = Array(
  "name1" => $classname,
  "name2" => $labelname,
  "list" => $list
);

/*
模式列表 type
1. url重定向
2. thumb重定向
3. json
*/

$num4 = rand(0, (count($data3) - 1));
$burl = $data3[$num4]["url"];
$bthumb = $data3[$num4]["thumb"];
if ($_GET["type"] == "url") {
  header("Location:$burl");
} elseif ($_GET["type"] == "thumb") {
  header("Location:$bthumb");
} else {
  echo json_encode($newdata, JSON_UNESCAPED_UNICODE);
}
?>