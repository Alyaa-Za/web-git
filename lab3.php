<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // معالجة بيانات GET
    $nameGet = htmlspecialchars($_GET['name']);
    echo "Hello (GET), " . $nameGet;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // معالجة بيانات POST
    $namePost = htmlspecialchars($_POST['name']);
    echo "Hello (POST), " . $namePost;
}
?>