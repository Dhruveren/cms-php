<?php
if (file_exists(__DIR__ . '/credentials.php')) {
    include(__DIR__ . '/credentials.php'); // Local (MAMP)
} else {
    // Live (Render / InfinityFree)
    $dbHost = getenv('DB_HOST');
    $dbUser = getenv('DB_USER');
    $dbPass = getenv('DB_PASS');
    $dbName = getenv('DB_NAME');
}

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Something went wrong. Database is not connected");
}
?>
