<?php
function tinhtoan(){
    //Tong
    $arr = [2, 5, 6, 9, 2, 5, 6, 12, 5];
    $tong = array_sum($arr);
    echo " Tổng của mảng là: " . $tong;

    //Hieu
    $hieu = $arr[0];
    for($i = 1;$i < count($arr);$i++){
        $hieu = $hieu - $arr[$i];
    }
    echo "Hiệu là: $hieu <br>";

    //tich
    $product = array_product($arr);
    echo "Tích là $product <br>";

    //thuong
    $thuong = $arr[0];
    for($i = 1;$i < count($arr);$i++){
        $thuong = $thuong / $arr[$i];
    }
    echo "Thương là: $thuong";
}
?>