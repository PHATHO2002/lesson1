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
    <form action="handle.php" method="POST">
        <h1>Read Number</h1>
        Number: <input type="text" name="number">
        <input type="submit" value="read">

    </form>
</body>

</html>