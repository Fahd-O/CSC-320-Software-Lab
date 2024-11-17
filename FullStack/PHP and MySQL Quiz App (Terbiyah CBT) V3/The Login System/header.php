<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terbiyah CBT | Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="heading">
        <div class="container">
            <h1>Terbiyah CBT</h1>
        </div>
    </header>
    
    <header>
        <nav class="nav-header-main">
            <ul>
                <li>
                    <a href="https://ecampus.fuoye.edu.ng" style="text-decoration:none;font-size:x-large; color:green;">Home</a>
                </li>     
            </ul>
        
                <?php
                    #some profile codes implemented from Bro Ibrahim(Algorithm)
                    if(isset($_SESSION['userId']))
                    {
                        $servername = "localhost";
                        $dBUsername = "root";
                        $dBPassword = "root";
                        $dBType = "mysql";
                        $dBName = "Terbiyah CBT.";

                        $string = $dBType . ":host=". $servername .";dbname=". $dBName;
                        $conn = new PDO($string,$dBUsername,$dBPassword);

                        #session_start();
                        $data['username'] = $_SESSION["userUid"];

                        $query = "SELECT uidUsers, emailUsers FROM Registered_Students WHERE uidUsers = :username";

                        $stmt = $conn->prepare($query);

                        $result = $stmt->execute($data);

                            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
                            echo '<p style="text-align: center;font-size:xx-large; color:rgba(0, 0, 0, 0.623)"> Assalaamu alaykum warahmatullahi wabarakaatuh ya '.$data[0]->uidUsers;
            
                       echo '<p class="login-status">You are logged in !</p>

                       <img src="../img./UProfile..png" alt="Dummy User Profile Image"
                       width="1280px" height="800px">

                       <form action="includes/logout.inc.php" method="POST">
                       
                       <button type="submit" name="logout-submit" class="logoutbutton">Logout</button>

                       </form>';
                    }
                    elseif (isset($_GET['error']))
                    {
                        if($_GET['error'] == "emptyfields")
                        {
                            echo'<p style="text-align: center; font-size: x-large; color:red">Fields cannot be empty !</p>';
                        }
                        elseif($_GET['error'] == "sqlerror")
                        {
                            echo '<p style="text-align: center; font-size: x-large; color:red">Critical SQL error encountered !</p>';
                        }
                        else
                        {
                            echo '<p style="text-align: center; font-size: x-large; color:red">Something is wrong somewhere</p>';
                        }

                        echo '<p class="login-status">You are logged out !</p>
                        <div class="login-box">
                        
                            <form action="includes/login.inc.php"       method="POST">
                            <h1 style="font-size: xx-large">
                                Login 
                            </h1>
                            <p style="font-size: large;"> 
                                Enter your "Matric No." and "password" to login...
                            </p>
                            <p>
                                <label for="Matric No." class="un">Matric No.:</label> 
                                <input type="text" name="matno" placeholder="Matric No.">
                            </p>
                            <p>
                                <label for="User Password" class="pw">Password:</label> 
                                <input type="password" name="pwd" placeholder="Password">
                            </p>

                            <button type="submit" name="login-submit" class="login-signupbutton" >Login</button>

                            </form>

                            <br>Don‛t have an account yet ?<br><br> 
                            <a href="signUp.php" class="header-signup">Signup</a><br><br>

                        </div>';
                    }
                    else
                    {
                        echo '<p class="login-status">You are logged out !</p>
                        <div class="login-box">
                        
                            <form action="includes/login.inc.php"       method="POST">
                            <h1 style="font-size: xx-large">
                                Login 
                            </h1>
                            <p style="font-size: large;"> 
                                Enter your "Matric No." and "password" to login...
                            </p>
                            <p>
                                <label for="Matric No." class="un">Matric No.:</label> 
                                <input type="text" name="matno" placeholder="Matric No.">
                            </p>
                            <p>
                                <label for="User Password" class="pw">Password:</label> 
                                <input type="password" name="pwd" placeholder="Password">
                            </p>

                            <button type="submit" name="login-submit" class="login-signupbutton" >Login</button>

                            </form>

                            <br>Don‛t have an account yet ?<br><br> 
                            <a href="signUp.php" class="header-signup">Signup</a><br><br>

                        </div>';
                    }

                    
                ?>

            
        </nav>
    </header>
    