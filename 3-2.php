<?php
    define("TAX",1.1);

    $products = ["鉛筆" => 100, "消しゴム" => 150, "物差し" => 500];

    function keisan($value) {
        $price =  $value * TAX;
        return $price;
    }
    keisan($products["鉛筆"]);
    keisan($products["消しゴム"]);
    keisan($products["物差し"]);

    foreach($products as $key => $value) {
        echo "<br>".$key."の税込み価格は".keisan($value)."です"."<br>";
    }


?>