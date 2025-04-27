<?php
$dataFile = 'data.txt';
if (file_exists($dataFile)) {
    $messages = file($dataFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($messages as $message) {
        echo nl2br(htmlspecialchars($message) . "\n");
    }
} else {
    echo "No messages yet.";
}
?>
