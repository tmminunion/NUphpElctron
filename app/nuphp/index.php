<?php
session_start();

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/core/config.php';
require __DIR__ . '/loader.php';
require __DIR__ . '/app/Routes.php';


// // Mengatkan direktori file aktif
// $activeDirectory = __DIR__;

// // Mendapatkan alamat HTTP lengkap
// $httpAddress = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// echo "Direktori Aktif: " . $activeDirectory;
// echo "<br>";
// echo "Alamat HTTP: " . $httpAddress;
