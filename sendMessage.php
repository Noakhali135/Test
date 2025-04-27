<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $message = htmlspecialchars($_POST['message']);
    $timestamp = date('Y-m-d H:i:s');

    $entry = "$timestamp | $username: $message\n";

    // Append the message to data.txt
    file_put_contents('data.txt', $entry, FILE_APPEND);

    // Redirect back to the main page
    header('Location: index.php');
    exit;
}
?>
