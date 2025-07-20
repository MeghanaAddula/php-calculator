<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];

    switch ($operator) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            $result = ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero";
            break;
        default:
            $result = "Invalid operator";
    }

    echo "Result: " . $result;
}
?>
