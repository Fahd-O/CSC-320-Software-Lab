<?php 
    include "dbh.php"; 

    session_start();

    //check to see if score is set
    if(!isset($_SESSION['score']))
    {
        $_SESSION['score'] = 0;
    }

    if($_POST)
    {
        $queNumber = $_POST['number'];
        $selectedChoice = $_POST['choice'];

        $next = $queNumber+1;

        /*
        *   Get Correct Total
        */
        $qQuery = "SELECT * FROM `questions`";

        //Get result
        $queFromDataBase = mysqli_query($conn, $qQuery);
        $total = mysqli_num_rows($queFromDataBase);

        /*
        *   Get Correct Choice
        */

        $cQuery = "SELECT * FROM `choices` 
                    WHERE question_number = $queNumber AND is_correct = 1";
       
       //Get result
        $correctChoiceFromDatabase = mysqli_query($conn, $cQuery);
        
        //Get row
        $row = $correctChoiceFromDatabase-> fetch_assoc();
        #mysqli_num_rows($correctChoiceFromDatabase); #Note to self: this may be subject to review. REVIEWED !!!

        //Set correct choice
        $correctChoice = $row['id'];

        //Compare
        if($correctChoice == $selectedChoice)
        {
            //Answer is correct
            $_SESSION['score']++;
        }
       
        //check if question is the last
        if ($queNumber == $total)
        {
            header("Location:final.php");
            exit();
        } else
        {
            header("Location:question.php?n=".$next);
        }
        
    }
    