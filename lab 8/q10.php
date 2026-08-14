<?php
function divide($num1, $num2) {
    try {
        if ($num2 == 0) {
            throw new Exception("Cannot divide by zero.");
        }

        $result = $num1 / $num2;
        echo "Result: $result<br>";
    }
    catch (Exception $e) {
        echo "Exception: " . $e->getMessage() . "<br>";
    }
    finally {
        echo "Division operation completed.";
    }
}

divide(20, 5);
?>