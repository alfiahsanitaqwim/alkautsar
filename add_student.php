<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add data</title>
</head>

<body>
    <form method="POST" action="add_process.php">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>
        <label for="class">Class:</label>
        <input type="number" id="class" name="class" required>
        <button type="submit">Add</button>
    </form>
</body>

</html>