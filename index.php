<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="action.php" method="POST">

            <input type="text" name="firstname"
            placeholder="firstname"> <br><br>

            <input type="text" name="lastname"
            placeholder="lastname"> <br><br>

            <input type="number" name="age"
            placeholder="age"> <br><br>

            <input type="submit" name="save_btn"
            value="Save">
            <button><a href="view.php">View</a></button>
        </form>
    </div>
    
</body>
</html>