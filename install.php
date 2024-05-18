<?php
require "packages/load.php";

$phpServer = new Server("localhost", 3000, "packages/installer");

shell_exec("start http://localhost:3000");
echo "Sunucu Açılıyor...\n";

$phpServer->start();

