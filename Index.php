<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multipurpose Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Multipurpose Calculator</h1>
    <form action="calculator.php" method="post">
        <label for="num1">Enter First Number:</label>
        <input type="number" name="num1" required><br><br>

        <label for="num2">Enter Second Number (if required):</label>
        <input type="number" name="num2"><br><br>

        <label for="operation">Choose Operation:</label>
        <select name="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
            <option value="exponent">Exponentiation</option>
            <option value="percentage">Percentage</option>
            <option value="sqrt">Square Root</option>
            <option value="logarithm">Logarithm</option>
        </select><br><br>

        <button type="submit">Calculate</button>
    </form>
</body>
</html>
