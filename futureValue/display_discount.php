<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["inventmentAmount"]) && isset($_POST["yearlyInterestRate"]) && isset($_POST["numberOfYears"])) {

        $inventmentAmount = floatval($_POST["inventmentAmount"]);
        $yearlyInterestRate = floatval($_POST["yearlyInterestRate"]);
        $numberOfYears = floatval($_POST["numberOfYears"]);


        if (!($inventmentAmount >= 0 && $yearlyInterestRate >= 0 &&  $numberOfYears >= 0)) {
            echo "tất cả input phải >=0";
            exit();
        }
        $futureValue = $inventmentAmount + ($inventmentAmount * $yearlyInterestRate);
        echo "Future Value :" .   $futureValue;
    } else {
        echo "Thiếu dữ liệu cần thiết.";
    }
} else {
    echo "Chỉ chấp nhận phương thức POST.";
}
