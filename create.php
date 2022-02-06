<?php
$str = file_get_contents('https://font.snskun.repl.co/fontstyle.php');
echo $str;
?>
<title>フィルタリング回避システム2(.1)</title>
<form action="create.php" method="post">
<center><h1><u>フィルタリング回避プログラム2</u></h1></center>
<?php
$url = $_POST['url'];
$durl = $_POST['durl'];
echo '<center>URL(共有できます):<br> https://fesv.repl.co/filter2/data.php?url='.$url.'&durl='.$durl.'</p></center>';
?>
<center><h3>作成したURLは他人に共有できます！</h3>
<hr>
<center><p>使用はあくまで、<b>★自★己★責★任★</b>で、おなしゃす。</p></center>
