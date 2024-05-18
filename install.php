<?php
require "packages/load.php";

$phpServer = new Server("localhost", 3000, "packages/installer");

shell_exec("start http://localhost:3000");
echo "Sunucu Açılıyor...\n";

$phpServer->start();

if (file_exists("packages/helper/settings.php")) {
    echo "Ayarlar Dosyası Kaydedildi!\n Konumu => packages/helper/settings.php";
} else {
    echo "Ayarlar Dosyası Kaydedilemedi.";
}
