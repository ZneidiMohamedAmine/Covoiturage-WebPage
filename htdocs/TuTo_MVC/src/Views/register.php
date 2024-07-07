<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="form-container">
        <h2>Register</h2>
        <form method="post" > 
            <input type="text" name="firstname" placeholder="First Name">
            <input type="text" name="lastname" placeholder="Last Name">
            <input type="date" name="birthdate" placeholder="Birthdate">
            <select name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <input type="text" name="address" placeholder="Address">
            <input type="text" name="role" placeholder="Role">
            <input type="text" name="driver_license" placeholder="Driver License">
            <input type="text" name="cin" placeholder="CIN">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">


            <?php
            if (count($error))
                echo "<div>" . implode(" ", $error) . " </div>";
            ?>

            <button name="submit" type="submit">Register</button>
        </form>
    </div>
</body>

</html>