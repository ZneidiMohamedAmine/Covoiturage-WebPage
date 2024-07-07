<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form  method="post"> 
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <?php 
                if(count($error))
                    echo "<div>" . implode(" ",$error) . " </div>";
            ?>
            <button name="submit" type="submit">Login</button>
        </form>
    </div>
</body>
</html>
