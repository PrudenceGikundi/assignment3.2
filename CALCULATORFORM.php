<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .calculator h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .calculator form {
            display: flex;
            flex-direction: column;
        }
        .calculator input[type="number"], 
        .calculator select, 
        .calculator input[type="submit"] {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .calculator input[type="submit"] {
            background-color: #28a745;
            color: white;
            cursor: pointer;
        }
        .calculator input[type="submit"]:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Simple Calculator</h2>
        <form method="post" action="CALCULATOR.php">
            <input type="number" name="num1" placeholder="First Number" required>
            <select name="operation" required>
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="exponentiate">**</option>
                <option value="divide">/</option>
            </select>
            <input type="number" name="num2" placeholder="Second Number" required>
            <input type="submit" name="submit" value="Calculate">
        </form>

        <?php
        // Check if there's a result to display
        if (isset($_GET['result'])) {
            echo "<div class='result'><strong>Result: </strong>" . htmlspecialchars($_GET['result']) . "</div>";
        }
        if (isset($_GET['error'])) {
            echo "<div class='result'><strong>Error: </strong>" . htmlspecialchars($_GET['error']) . "</div>";
        }
        ?>
    </div>
</body>
</html>
