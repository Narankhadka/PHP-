<?php
session_start(); // Start the session

function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=';
    $password = '';
    $charactersLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }
    return $password;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = $_POST["length"];

    if (!is_numeric($length) || $length <= 0) {
        echo "Invalid input. Please enter a valid positive integer.\n";
    } else {
        $_SESSION["password"] = generatePassword($length); // Store the generated password in session variable
        header("Location: {$_SERVER['REQUEST_URI']}"); // Redirect to the same page to prevent form resubmission
        exit(); // Stop further execution of the script
    }
}

// Check if the password is set in session and display it
$password = isset($_SESSION["password"]) ? $_SESSION["password"] : null;
unset($_SESSION["password"]); // Clear the password from session after displaying

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center">Password Generator</h2>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="length">Enter the length of the password:</label>
                                <input type="text" class="form-control" id="length" name="length" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Generate Password</button>
                        </form>
                        <?php if (!empty($password)) { ?>
                            <div class="alert alert-success mt-3" role="alert">
                                Generated Password: <?php echo $password; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
