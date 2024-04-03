<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <?php
    // Define variables and initialize with empty values
    $name = $email = $password = $error = "";

    // Function to validate email format
    function validate_email($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    // Function to validate password length
    function validate_password($password) {
        return strlen($password) >= 8;
    }

    // Process form data when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Validate email
        if (!validate_email($email)) {
            $error = "Invalid email address";
        }
        // Validate password
        elseif (!validate_password($password)) {
            $error = "Password must be at least 8 characters long";
        }
        // If validation passes, display thank you message
        else {
            echo "<h2>Thank You, $name!</h2>";
            echo "<p>Your form has been submitted successfully.</p>";
            exit(); 
        }
    }
    ?>

    <h2>Form Submission</h2>
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
