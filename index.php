<?php

    if ($_POST) {

        $errors = "";
        $message = "";
        $success = "";

        if (!$_POST["email"]) {
            $errors .= "Please add an email <br>";
        } else {

            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $errors .= "Please add a valid email <br>";
            }

        }

        if (!$_POST["subject"]) {
            $errors .= "Please add an subject <br>";
        }

        if (!$_POST["message"]) {
            $errors .= "Please add an message <br>";
        }

        if ($errors != "") {
            $message = '<div class="error">' . $errors . '</div>';
        } else {
            $success = "Mesage sent successfuly!";
            $message = '<div class="succesed">' . $success . '</div>';
        }

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Contact Formular</title>
    <link rel="stylesheet" type="text/css" href="style-script.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
</head>
<body>

<div class="wrapper">

    <div class="formular">

        <form method="POST">
        <div class="message-final"><?php echo $message; ?></div>
            <h1>GET IN TOUCH</h1>
        <div class="field">
            <label for="email">Your email:</label><br>
            <input type="text" name="email" id="email" class="email">
        </div>
        <div class="field">
            <label for="subject">Subject:</label><br>
            <input type="text" name="subject" id="subject" class="subject">
        </div>
        <div class="field">
            <label for="message">Message:</label><br>
            <textarea name="message" id="message" class="message" cols="30" rows="10"></textarea>
        </div>
        <div class="field">
            <button type="submit" id="submit" class="submit">Send<i class="fas fa-paper-plane"></i></button>
        </div>
        </form>
    
    </div>

    <div class="side hide">
        <ul>
            <li><i class="move fas fa-arrow-circle-left"></i></li>
            <li><i class="move fas fa-map-marker-alt"></i>Cluj-Napoca</li>
            <li><i class="move fas fa-phone"></i>0712 345 678</li>
            <li><i class="move fas fa-envelope"></i>contact@contact.com</li>
            <li><i class="move fab fa-facebook"></i>facebook.com/contact</li>
            <li><i class="move fab fa-twitter"></i>twitter.com/contact</li>
            <li><i class="move fab fa-linkedin"></i>linkedin.com/contact</li>
        </ul>
    </div>

</div>

<script src="script.js" type="text/javascript"></script>
    
</body>
</html>