<?php
$key   = isset($_GET['key'])   ? $_GET['key']   : '';
$veri  = isset($_GET['veri'])  ? $_GET['veri']  : '';
$tarih = isset($_GET['tarih']) ? $_GET['tarih'] : '';

$icerik = "veri=" . $veri . "\n" . "tarih=" . $tarih;

$dosya = __DIR__ . '/veri.txt';

if (file_put_contents($dosya, $icerik) !== false) {
    echo "Başarıyla yazıldı.<br>";
    echo "veri.txt içeriği:<br><pre>" . htmlspecialchars($icerik) . "</pre>";
} else {
    echo "Hata: veri.txt dosyasına yazılamadı. Klasör yazma iznini kontrol edin.";
}
?>
