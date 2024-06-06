<?php
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = '';

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'exponentiate':
                $result = $num1 ** $num2;
                break;
            case 'divide':
                if ($num2 == 0) {
                    $error = 'Division by zero error!';
                } else {
                    $result = $num1 / $num2;
                }
                break;
                
            default:
                $error = 'Invalid Operation';
                break;
        }
    } else {
        $error = 'Please enter valid numbers';
    }

    if (isset($error)) {
        header("Location: CALCULATORFORM.php?error=" . urlencode($error));
    } else {
        header("Location: CALCULATORFORM.php?result=" . urlencode($result));
    }
    exit();
} else {
    header("Location: CALCULATORFORM.php");
    exit();
}
