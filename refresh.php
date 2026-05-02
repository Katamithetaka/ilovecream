<?php

ob_start();
include 'index.php';
$index = ob_get_clean();
file_put_contents('index.html', $index);

ob_start();
include 'web.php';
$index = ob_get_clean();
file_put_contents('web.html', $index);

ob_start();
include 'chat.php';
$index = ob_get_clean();
file_put_contents('chat.html', $index);

header("Location: index.html");
die();