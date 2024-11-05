<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terbiyah CBT | Home</title>
    <link rel="stylesheet" href="css./style.css">
</head>
<body>

    <header>
        <div class="container">
            <h1>Terbiyah CBT</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>CSC 101</h2>
            <h3>You're Done !</h3>
            <p>Congratulations ! You have completed the test.</p>
            <p>Final score: <?php echo $_SESSION['score']." / ".$_SESSION['t']; session_destroy(); ?></p>
            <a href="index.php" class="start">Take Again</a><a href="../index.php" class="start">Done</a>
        </div>
    </main>

    <footer>
        <div class="container">
            Copyright &copy; 2022, Al-Ghuraba
        </div>
    </footer>
    
</body>
</html>