<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement System</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>Send Announcement</h2>
        <form action="Announcement_process.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required><br><br>

            <label for="message">Announcement:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

            <input type="submit" value="Send Announcement">
        </form>
    </div>
</body>

</html>
