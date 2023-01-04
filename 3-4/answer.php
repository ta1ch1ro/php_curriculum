<?php
    $name = $_POST['name'];

    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];

    $ans_1 = $_POST['ans1'];
    $ans_2 = $_POST['ans2'];
    $ans_3 = $_POST['ans3'];

    $T = "正解！";
    $F = "残念・・・";

    $ANS1=$q1==$ans_1?$T:$F;
    $ANS2=$q2==$ans_2?$T:$F;
    $ANS3=$q3==$ans_3?$T:$F;

    // $q1 = filter_input(INPUT_POST,'q1');
    // $q2 = filter_input(INPUT_POST,'q2');
    // $q3 = filter_input(INPUT_POST,'q3');
    // echo $q1;
    // echo $q2;
    // echo $q3;

?>

<link rel = "stylesheet" href="style.css">

<p><?php echo $name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
    <?php echo $ANS1; ?>

<p>②の答え</p>
    <?php echo $ANS2; ?>

<p>③の答え</p>
    <?php echo $ANS3; ?>