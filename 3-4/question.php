<?php
    $name = $_POST['name'];

    $ques1 = [80,22,20,21];
    $ques2 = ["PHP","Python","JAVA","HTML"];
    $ques3 = ["join","select","insert","update"];

    $ans1 = $ques1[0];
    $ans2 = $ques2[3];
    $ans3 = $ques3[1];
?>

<link rel = "stylesheet" href="style.css">

<p>お疲れ様です【<?php echo $name; ?>】さん</p>
<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>

    <?php foreach ($ques1 as $key => $value) { ?>
        <input type="radio" name="q1" value="<?php echo $value; ?>">
    <?php echo $value; } ?>

<h2>②Webページを作成するための言語は？</h2>

    <?php foreach ($ques2 as $key => $value) { ?>
        <input type="radio" name="q2" value="<?php echo $value; ?>">
    <?php echo $value; } ?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>

    <?php foreach ($ques3 as $key => $value) { ?>
        <input type="radio" name="q3" value="<?php echo $value; ?>">
    <?php echo $value; } ?>
    <br>
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="ans1" value="<?php echo $ans1; ?>">
    <input type="hidden" name="ans2" value="<?php echo $ans2; ?>">
    <input type="hidden" name="ans3" value="<?php echo $ans3; ?>">
    <input type="submit" value="回答する">


<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
</form>


