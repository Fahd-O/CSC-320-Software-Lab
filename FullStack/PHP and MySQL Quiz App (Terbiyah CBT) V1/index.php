<?php
    include "dbh.php";
?>
<?php
/*
*   Get Total Number Of Questions
*/
    $query = "SELECT * FROM questions";

    //Get result
    $queFromDataBase = mysqli_query($conn, $query);
    $numberOfQue = mysqli_num_rows($queFromDataBase);

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
            <h2>Take your Exam: CSC 101</h2>
            <p>This is a Computer Based Test to assess your knowledge</p>
            <ol>
                <li><strong>Number of Questions: </strong><?php echo $numberOfQue; ?></li>
                <li><strong>Type: </strong>Multiple Choice Question</li>
                <li><strong>Estimated time: </strong><?php echo 0.5*$numberOfQue; ?> Minutes</li>
            </ol>
            <br><h2>Instructions:</h2>
            <ul>
                <li>Attempt all questions</li>
                <li>Each question carries one mark</li>
                <li>Do not close the browser or refresh it once you start the exam</li>
                <li>If you come across any problem notify the invigilators</li>
            </ul>
            <a href="question.php?n=1" class="start">Start Exam</a>
        </div>
    </main>

    <footer>
        <div class="container">
            Copyright &copy; 2022, Al-Ghuraba
        </div>
    </footer>
    
</body>
</html>