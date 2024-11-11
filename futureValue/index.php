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
    <form action="display_discount.php" method="POST">
        <h1>Future Value Calculator</h1>
        Inventment Amount: <input type="text" name="inventmentAmount">
        Yearly Interest Rate: <input type="text" name="yearlyInterestRate">
        Number of Years: <input type="number" name="numberOfYears">
        <input type="submit" value="calculate">

    </form>
</body>

</html>