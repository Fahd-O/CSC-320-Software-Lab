<?php include 'dbh.php'; 
    session_start();
?>
<?php
    //Set question number
    $number = (int) $_GET['n'];

    /*
    *   Get Correct Total
    */
    $query = "SELECT * FROM `questions`";

    //Get result
    $queFromDataBase = mysqli_query($conn, $query);
    $total = mysqli_num_rows($queFromDataBase);
    $_SESSION['t'] = $total;

    /*
    *   Get Question
    */
    $queSQL = "SELECT * FROM questions 
                WHERE question_number = $number";
    //Get result
    $queFromDataBase = mysqli_query($conn, $queSQL);
    $question = mysqli_num_rows($queFromDataBase);

    /*
    *   Get Choices
    */
    $choicesSQL = "SELECT * FROM choices 
                WHERE question_number = $number";
    //Get results
    $choicesFromDataBase = mysqli_query($conn, $choicesSQL);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terbiyah CBT | Test Ongoing...</title>
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
            <div class="current">Question <?php echo $number; ?> of <?php echo $total; ?></div>
            <p class="question">
                <?php #printing out question from database
                    if($question > 0)
                    {
                        while($row = mysqli_fetch_assoc($queFromDataBase))
                        {
                            echo $row['que_text'];
                        }
                    }
                    else
                    {
                        echo "<p class='error'>ERROR: no result from Database when trying to print out questions</p>";
                    }  
                ?>
            </p>
            <form method="post" action="process.php">
                <ol class="choices">

                    <?php while($row = mysqli_fetch_assoc($choicesFromDataBase)): #printing out choices from database ?>
                            
                        <li><input name="choice" type="radio" value="<?php echo $row['id'];?>"> <?php echo $row['choice_text']; ?> </li>
                         
                    <?php endwhile; ?>
                    
                </ol>
                
                <input type="submit" value="<?php if($number == $total){echo "Submit";} else{echo "Next";} ?>" class="submitBtn">
                <input type="hidden" name="number" value="<?php echo $number; ?>">
            </form>
                    
            <!--Links to different questions-->
            <br><h2>Questions</h2>
            <?php
                for ($i=1; $i <= $total; $i++)
                { 
                    if ($_POST['choice'])
                    {
                        echo "<button class='qLinkBtn'><a class='qLink' href='question.php?n=$i'>$i</a></button>";
                    }
                    else
                    {
                        echo "<button style='background-color:rgba(0, 255, 0, 0.1);' class='qLinkBtn'><a class='qLink' href='question.php?n=$i'>$i</a></button>";
                    }
                }
            ?>
            
        </div>
    </main>

    <footer>
        <div class="container">
            Copyright &copy; 2022, Al-Ghuraba
        </div>
    </footer>
    
</body>
</html>
