<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav">
            <a href="index.php">Home</a>
            <a href="serv.php">Services</a>
            <a href="gal.php">Gallery</a>
            <a href="contact.php">Contact us</a>
        </div>
    </nav>
    <div class="bodys">
        <form action="conect.php" method="post" class="body form">
            <input type="text" name="name" autocomplete="off" placeholder="Enter your name">
            <input type="email" name="email" autocomplete="off" placeholder="Enter your email">
            <input type="tel" name="phone" autocomplete="off" placeholder="Enter your phone number">
            <textarea name="msg" placeholder="Enter your massge"></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
</body>
</html>