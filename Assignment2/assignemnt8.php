<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interactive Calculator</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .calculator {
        max-width: 300px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    input[type="text"], select, input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4caf50;
        color: white;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<div class="container">
    <div class="calculator">
        <h2>Interactive Calculator</h2>
        <form method="post" action="">
            <input type="text" name="num1" placeholder="Enter first number" required><br>
            <select name="operator" required>
                <option value="">Select operator</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select><br>
            <input type="text" name="num2" placeholder="Enter second number" required><br>
            <input type="submit" value="Calculate">
        </form>
        <?php
        // Initialize result variable
        $result = "";

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];

            // Function to perform addition
            function add($num1, $num2) {
                return $num1 + $num2;
            }

            // Function to perform subtraction
            function subtract($num1, $num2) {
                return $num1 - $num2;
            }

            // Function to perform multiplication
            function multiply($num1, $num2) {
                return $num1 * $num2;
            }

            // Function to perform division
            function divide($num1, $num2) {
                if ($num2 == 0) {
                    return "Error: Division by zero!";
                } else {
                    return $num1 / $num2;
                }
            }

            // Main function to perform calculations based on user input
            function calculator($operator, $num1, $num2) {
                switch ($operator) {
                    case '+':
                        return add($num1, $num2);
                    case '-':
                        return subtract($num1, $num2);
                    case '*':
                        return multiply($num1, $num2);
                    case '/':
                        return divide($num1, $num2);
                    default:
                        return "Invalid operator!";
                }
            }

            // Perform calculation and store result
            $result = calculator($operator, $num1, $num2);
            echo "<h3>Result: $num1 $operator $num2 = $result</h3>";
        }
        ?>
    </div>
</div>

</body>
</html>
