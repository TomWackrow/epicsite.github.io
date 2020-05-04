<!DOCTYPE html>

<html>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <head>
        <h1 class="title">Epic Site</h1>
        <form name="form" method="post" onsubmit="<?php onSubmit(); ?>">
            <label for="fname">First Name:</label><br>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Last Name:</label><br>
            <input type="text" id="lname" name="lname"><br><br>
            <p class="header">Gender:</p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br><br>
            <label for="credit-card">Credit Card:</label>
            <input type="credit-card" name="creditcard"><br>
            <label for="security-code">Security Code:</label>
            <input type="security-code" name="security-code"><br>
            Expiration Date: <input type="expiration" name="expiration" class="yesi"><br>
            Email: <input type="text" name="email"><br>
            Phone Number: <input type="text" name="phone"><br>
            Date of Birth: <input type="text" name="dob"><br>
            <input type="button" value="submit"><br><br>
        </form>
        <img src="https://cdn.discordapp.com/attachments/702099227706392629/706835456054263808/Z.png">
        <form method="post">
            <label>Please enter your Name:</label><input type="text" name="Name"  value=''/>Name<br><br>
            <input name="submit" type="submit" value="Submit"><br><br>
    </form>
    <?php
    function onSubmit() {
        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $gender = $_POST["gender"];
        $creditcard = $_POST["creditcard"];
        $securitycode = $_POST["security-code"];
        $expires = $_POST["expiration"];
        $phonenum = $_POST["phone"];
        $dob = $_POST["dob"];
        $file = fopen($firstname + " " + $lastname + ".txt", "w") or die("Unable to open file!");
        
        fwrite($file, $firstname + "\n");
        fwrite($file, $lastname + "\n");
        fwrite($file, $gender + "\n");
        fwrite($file, $creditcard + "\n");
        fwrite($file, $securitycode + "\n");
        fwrite($file, $expires + "\n");
        fwrite($file, $phonenum + "\n");
        fwrite($file, $dob + "\n");
        
        fclose($file);
    }
    ?>
    </head>
    <body>
    </body>
</html>