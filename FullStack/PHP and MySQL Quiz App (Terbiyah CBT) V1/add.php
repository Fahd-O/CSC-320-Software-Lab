<?php include "dbh.php";
    if (isset($_POST['submit']))
    {
        //Get post variables
        $que_num = $_POST['que_num'];
        $que_txt = $_POST['que_txt'];
        $correct_choice = $_POST['correct_choice'];
        
        //Choices array
        $choices = array();
        $choices[1]=$_POST['choice1'];
        $choices[2]=$_POST['choice2'];
        $choices[3]=$_POST['choice3'];
        $choices[4]=$_POST['choice4'];
        $choices[5]=$_POST['choice5'];

        //Question query
        $qQuery = "INSERT INTO `questions` (question_number, que_text)
                    VALUES('$que_num', '$que_txt')";

        //Run question query
        $insert_question_row = mysqli_query($conn, $qQuery);
        
        //Validate question insert
        if ($insert_question_row) 
        { 
            foreach($choices as $choice => $value)
            {
                if ($value != '')
                {
                    if ($correct_choice == $choice)
                    {
                        $is_correct = 1;
                    }
                    else
                    {
                        $is_correct = 0;
                    }
                    //Choices query
                    $cQuery = "INSERT INTO `choices` (question_number, is_correct, choice_text)
                                VALUES ('$que_num', '$is_correct', '$value')";
                        
                    //Run choices query
                    $insert_choices_row = mysqli_query($conn, $cQuery);

                    //Validate choices insert
                    if ($insert_choices_row)
                    {
                        continue;
                    }
                    else
                    {
                        echo "<p class='error'>ERROR: Something unexpected happened</p>";
                    }
                }
            }
            $msg = "Question added successfully !";
        }
        else
        {
            echo "<p class='error'>ERROR: Invalid character used, single quotes <strong>' '</strong> not allowed</p>";
        }
    }

    /*
    *   Get Total Questions
    */
    $qQuery = "SELECT * FROM `questions`";

    //Get result
    $queFromDataBase = mysqli_query($conn, $qQuery);
    $total = mysqli_num_rows($queFromDataBase);
    $next = $total+1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terbiyah CBT | Add Questions</title>
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
            <h2>Add A Question</h2>
            <p><strong>Note: </strong>do not use single quotes <strong>' '</strong> in question and answer texts, use double quotes <strong>" "</strong> instead or other alternatives, else Question will NOT be uploaded</p>
            <?php
                if (isset($msg))
                {
                    echo "<p class='success'>".$msg."</p>";
                }
            ?>
            <form action="add.php" method="post">
                <p>
                    <label>Question Number: </label>
                    <input type="number" value="<?php echo $next; ?>" name="que_num">
                </p>
                
                <p>
                    <label>Question Text: </label>
                    <input type="text" name="que_txt" required>
                </p>
                
                <p>
                    <label>Choice #1: </label>
                    <input type="text" name="choice1">
                </p>

                <p>
                    <label>Choice #2: </label>
                    <input type="text" name="choice2">
                </p>

                <p>
                    <label>Choice #3: </label>
                    <input type="text" name="choice3">
                </p>

                <p>
                    <label>Choice #4: </label>
                    <input type="text" name="choice4">
                </p>

                <p>
                    <label>Choice #5: </label>
                    <input type="text" name="choice5">
                </p>

                <p>
                    <label>Correct Choice Number: </label>
                    <input type="number" name="correct_choice" required>
                </p>

                <p>
                    <input type="submit" name="submit" value="Submit">
                </p>
            </form>
        </div>
    </main>

    <footer>
        <div class="container">
            Copyright &copy; 2022, Al-Ghuraba
        </div>
    </footer>
    
</body>
</html>