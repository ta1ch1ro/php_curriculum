<?php
    $name = $_GET['name'];
    $int = $_GET['int'];
?>
<?php 
date_default_timezone_set('Asia/Tokyo');
echo date("Y-m-d H:i:s",time()); ?>
<p>名前は<?php echo $name; ?>です。</p>
<p>番号は<?php echo $int; ?>です。</p>
<p>結果は<?php 
            $kekka = $int * mt_rand(1,6);
            if ($kekka >= 37) {
                echo "【残念】";
            } elseif ($kekka <= 10) {
                echo "【凶】";
            } elseif ($kekka >= 11 && $kekka <= 15) {
                echo "【小吉】";
            } elseif ($kekka >= 16 && $kekka <= 20) {
                echo "【中吉】";
            } elseif ($kekka >= 21 && $kekka <= 25) {
                echo "【吉】";
            } elseif ($kekka >= 26 && $kekka <= 36) {
                echo "【大吉】";
            };
            ?>です！。</p>
<p></p>