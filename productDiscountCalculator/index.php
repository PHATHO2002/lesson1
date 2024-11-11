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
        <h1>Product Discount Calculator</h1>
        miêu tả: <input type="text" name="pr_description">
        giá $: <input type="text" name="pr_price">
        tỉ lệ chiết khấu (%) :<input type="number" name="pr_dc_pc">
        <input type="submit" value="calculate">

    </form>
</body>

</html>