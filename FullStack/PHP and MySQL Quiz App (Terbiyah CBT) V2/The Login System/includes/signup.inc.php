<?php

if (isset($_POST['signup-submit']))
{
    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $matNo = $_POST['matno'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];


    if (empty($username) || empty($matNo) || empty($email) || empty($password) || empty($passwordRepeat))
    {
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);   

        exit();
    }
    elseif (!filter_var($email, 'FILTER_VALIDATE_EMAIL') && !preg_match("/^[a-zA-Z0-9\s]*$/", $username))
    {
        header("Location: ../signup.php?error=invaliduidmail"); 

        exit();
    }    //may need to put this: FILTER_VALIDATE_EMAIL, in quotation marks
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("Location: ../signup.php?error=invalidmail&uid=".$username); 

        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9\s]*$/", $username))
    {
        header("Location: ../signup.php?error=invaliduid&mail=".$email); 

        exit();
    }
    elseif ($password !== $passwordRepeat)
    {
        header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email); 

        exit();
    }
    else
    {
        $sql = "SELECT uidUsers FROM Registered_Students WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../signup.php?error=sqlerror"); 

            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if ($resultcheck > 0)
            {
                header("Location: ../signup.php?error=usertaken&mail=".$email); 

                exit();
            }
            else
            {
                $sql = "INSERT INTO Registered_Students (uidUsers, matNoUsers, emailUsers, pwdUsers) VALUES (?, ?, ?, ?)";

                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../signup.php?error=sqlerror"); 

                    exit();
                }
                else
                {//may need to put this: PASSWORD_DEFAULT, in quotation marks
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ssss", $username, $matNo, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success"); 

                    exit();
                }

            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else
{
    header("Location: ../signup.php"); 

    exit();
}