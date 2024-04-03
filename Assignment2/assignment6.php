<?php

function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate user input
    $number = isset($_POST['number']) ? $_POST['number'] : '';
    if (!is_numeric($number) || $number < 0 || $number != round($number)) {
        echo "Please enter a non-negative integer.";
    } else {
        // Calculate factorial
        $result = factorial($number);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <h2>Factorial Calculator</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="number">Enter a non-negative integer:</label>
        <input type="text" name="number" id="number">
        <input type="submit" value="Calculate">
    </form>
    <?php if(isset($result)): ?>
    <div>
        <?php echo "Factorial is $result"; ?>
    </div>
    <?php endif; ?>
</body>
</html>