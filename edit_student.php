<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit student</title>
</head>

<body>
    <form method="POST" action="edit_process.php">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name ?>" required>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="<?php echo $address ?>" required>
        <label for="class">Class:</label>
        <input type="number" id="class" name="class" value="<?php echo $class ?>" required>
        <button type="submit">Save Change</button>
    </form>

</body>

</html>