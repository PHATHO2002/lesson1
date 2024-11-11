<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    form {
        display: flex;
        width: 220px;
        flex-direction: column;
        margin: auto;
    }

    form>input {
        margin: 10px;
    }
</style>

<body>
    <form action="" method="POST">
        <h1>Future Value Calculator</h1>
        Inventment Amount: <input type="text" name="inventmentAmount">
        Yearly Interest Rate: <input type="text" name="yearlyInterestRate">
        Number of Years: <input type="number" name="numberOfYears">
        <input type="submit" value="calculate">
        <p>
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
                    $futureValue = 0;
                    for ($i = 0; $i < $numberOfYears; $i++) {
                        $futureValue += ($inventmentAmount + ($inventmentAmount * $yearlyInterestRate));
                    }

                    echo "Future Value :" .   $futureValue;
                } else {
                    echo "Thiếu dữ liệu cần thiết.";
                }
            }
            ?>
        </p>

    </form>
</body>

</html>