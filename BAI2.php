<?php
$sinhVienList = array();

$sv1 = array("mssv" => "012345", "hoTen" => "Lê Thị Tươi", "namSinh" => 2002, "Avatar" => "hinh1.jpg");
$sv2 = array("mssv" => "014245", "hoTen" => "Bành Văn Bưởi", "namSinh" => 2003, "Avatar" => "hinh2.jpg");
$sv3 = array("mssv" => "014454", "hoTen" => "La Hảo Hán", "namSinh" => 2001, "Avatar" => "hinh3.jpg");
$sv4 = array("mssv" => "112334", "hoTen" => "Mạc Văn Hết", "namSinh" => 2002, "Avatar" => "hinh4.jpg");

$lop = array($sv1, $sv2, $sv3, $sv4);

foreach ($lop as $sv) {
    foreach ($sv as $key => $value) {
        if ($key == "Avatar") {
            echo $key . " - <img src='" . $value . "' alt='Avatar' width='100' height='100'><br/>";
        } else {
            echo $key . " - " . htmlspecialchars($value) . "<br/>";
        }
    }
    echo "----------------------<br/>";
}
?>
