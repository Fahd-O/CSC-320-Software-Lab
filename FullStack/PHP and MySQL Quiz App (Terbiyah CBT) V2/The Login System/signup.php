<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terbiyah CBT | Signup</title>
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
            
            <div class="signup-box">
                <main>
                <div class="wrapper-main">
                    <section class="section-default">

                    <h1 style="font-size: xx-large">SignUp</h1>

                    <?php
                            if(isset($_GET['error']))
                            {   $fields = '<form class="form-signup" action="includes/signup.inc.php" method="POST">

                                <label for="Name" class="un">Name:</label> 
                                <input type="text" name="uid" placeholder="Full Name"><br><br>
                                
                                <label for="Matric No." class="un">Matric No.:</label> 
                                <input type="text" name="matno" placeholder="Matric No."><br><br>
        
                                <label for="email" class="un">E-mail:</label> 
                                <input type="text" name="mail" placeholder="E-mail"><br><br>
        
                                <label for="User Password" class="pw">Password:</label> 
                                <input type="password" name="pwd" placeholder="Password"><br><br>
        
                                <label for="User Password" class="pw">Repeat Password:</label> 
                                <input type="password" name="pwd-repeat" placeholder="Repeat password"><br><br>
                                
                                <button type="submit" name="signup-submit" class="login-signupbutton">Signup</button><br><br>
                                
                                Already have an account ?<br><br> 
                                <a href="index.php" class="header-signup">Login</a><br><br>' ;
                                
                                if($_GET['error'] == "emptyfields")
                                {
                                    echo '<p class="signuperror">Fill in all fields !</p>'.$fields;
                                }
                                elseif($_GET['error'] == "invaliduidmail")
                                {
                                    echo '<p class="signuperror">Invalid name and e-mail !</p>'.$fields;
                                }
                                elseif($_GET['error'] == "invaliduid")
                                {
                                    echo '<p class="signuperror">Invalid name !</p>'.$fields;
                                }
                                elseif($_GET['error'] == "invalidmail")
                                {
                                    echo '<p class="signuperror">Invalid e-mail !</p>'.$fields;
                                }
                                elseif($_GET['error'] == "passwordcheck")
                                {
                                    echo '<p class="signuperror">Your passwords do not match !</p>'.$fields;
                                }
                                elseif($_GET['error'] == "usertaken")
                                {
                                    echo '<p class="signuperror">Name is already taken !</p>'.$fields;
                                }
                                elseif($_GET['error'] == "sqlerror")
                                {
                                    echo '<p class="signuperror">Critical SQL error encountered !</p>'.$fields;
                                }
                            }
                            elseif(isset($_GET['signup']) && $_GET['signup'] == "success")
                            {
                                echo '<p class="signupsuccess">Signup Successful !</p>
                                <p>You can now login with your details on the login page</p>

                                <p>
                                <a class="lrbtn" href="index.php"> Ok </a> </p>';
                            }
                            else
                            {
                                echo '<form class="form-signup" action="includes/signup.inc.php" method="POST">

                                <label for="Name" class="un">Name:</label> 
                                <input type="text" name="uid" placeholder="Full Name"><br><br>

                                <label for="Matric No." class="un">Matric No.:</label> 
                                <input type="text" name="matno" placeholder="Matric No."><br><br>
        
                                <label for="email" class="un">E-mail:</label> 
                                <input type="text" name="mail" placeholder="E-mail"><br><br>
        
                                <label for="User Password" class="pw">Password:</label> 
                                <input type="password" name="pwd" placeholder="Password"><br><br>
        
                                <label for="User Password" class="pw">Repeat Password:</label> 
                                <input type="password" name="pwd-repeat" placeholder="Repeat password"><br><br>
                                
                                <button type="submit" name="signup-submit" class="login-signupbutton">Signup</button><br><br>
                                
                                Already have an account ?<br><br> 
                                <a href="index.php" class="header-signup">Login</a><br><br>';
                            }
                    ?>

                    

                    </form>

                    </section>
                </div>
                </main>


            </div>
            
        </nav>
    </header><br><br><br><br><br>


    
<?php
    require "footer.php";
?>
