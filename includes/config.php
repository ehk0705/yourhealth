<?php
declare(strict_types=1);

$DB_HOST = "127.0.0.1";
$DB_NAME = "yourhealth";
$DB_USER = "root";
$DB_PASS = ""; // XAMPP par défaut souvent vide

try {
    $pdo = new PDO(
        "mysql:host={$DB_HOST};dbname={$DB_NAME};charset=utf8mb4",
        $DB_USER,
        $DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (Throwable $e) {
    // Site doit fonctionner même sans BD : on garde $pdo = null
    $pdo = null;
}
