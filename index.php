<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texting Web App</title>
</head>
<body>
    <h1>Texting Web App</h1>
    <form action="sendMessage.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <button type="submit">Send Message</button>
    </form>
    <hr>
    <h2>Messages:</h2>
    <div id="messages">
        <?php include 'getMessages.php'; ?>
    </div>
</body>
</html>
