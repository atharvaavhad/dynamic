<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You have contact me</title>
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
    <div class="body">
        <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $comment = $_POST['msg'];
        $to = "atharvaavhad2010@gmail.com";
        $subject = "Response from website";
        if (empty($name)||empty($email)||empty($phone)||empty($comment)) {
            echo "Please fill all fields";
        }
        else {
            $message = "Name:$name Email:$email phone:$phone massage:$comment";
            if (mail($to, $subject, $message,"From: $name <$email>")) {
            echo "<h1>thans for response $name.</h1>";
            }
            else {
            echo "<h1>sorry we can't send massage $name.</h1>";
            }
        }
        ?>
    </div>
</body>
</html>