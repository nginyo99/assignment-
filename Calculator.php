<!-- calculator.php -->
<?php
include 'functions.php'; // Include the file containing our functions

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? $_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : null;
    $operation = $_POST['operation'];

    $result = null;
    switch ($operation) {
        case 'add':
            $result = add($num1, $num2);
            break;
        case 'subtract':
            $result = subtract($num1, $num2);
            break;
        case 'multiply':
            $result = multiply($num1, $num2);
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = divide($num1, $num2);
            } else {
                $result = "Cannot divide by zero";
            }
            break;
        case 'exponent':
            $result = exponent($num1, $num2);
            break;
        case 'percentage':
            $result = percentage($num1, $num2);
            break;
        case 'sqrt':
            $result = sqrt_calc($num1);
            break;
        case 'logarithm':
            $result = log_calc($num1);
            break;
        default:
            $result = "Invalid operation selected";
            break;
    }

    echo "<h2>Result: $result</h2>";
}
?>
