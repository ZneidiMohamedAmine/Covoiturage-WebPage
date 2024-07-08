<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <?php
        session_start(); // Start the session

        // Check if user is authenticated
        if (isset($_SESSION['user'])) {
            // User is authenticated, display logout button or other authenticated content
            echo '<form action="logout" method="POST">';
            echo '<button type="submit">Logout</button>';
            echo '</form>';
        } else {
            // User is not authenticated, display login and register buttons
            echo '<form action="login" method="POST">';
            echo '<button type="submit">Login</button>';
            echo '</form>';
            
            echo '<form action="register" method="POST">';
            echo '<button type="submit" value="register">Register</button>';
            echo '</form>';
        }
        ?>
    </div>

    <div class="search-container">
        <form method="get" action="/search">
            <input type="text" name="query" placeholder="Search...">
            <button type="submit">Search</button>
        </form>
    </div>

    <?php foreach ($trajets as $trajet): ?>
    <div class="post">
        <div class="profile">
            <img src="profile.jpg" alt="Profile Picture">
            <div class="name">conducteur_name</div>
            <div class="time"><?php echo $trajet['date']; ?></div>
        </div>
        <div class="details">
            <p><strong>From:</strong> <?php echo $trajet['debut']; ?></p>
            <p><strong>To:</strong> <?php echo $trajet['arrive']; ?></p>
            <p><strong>Departure:</strong> <?php echo $trajet['date']; ?></p>
            <p><strong>Seats Available:</strong> <?php echo $trajet['nbr_place'] - $trajet['nbr_place_occupe']; ?></p>
            <p><strong>Price:</strong> €<?php echo $trajet['prix']; ?></p>
            <form  method="post">
                <input type="hidden" name="trajet_id" value="<?php echo $trajet['id_trajet']; ?>">
                <button type="submit" name="reserve" class="reserve-btn">Reserve</button>
            </form>
        </div>
    </div>
    <?php endforeach; ?>

</body>
</html>
