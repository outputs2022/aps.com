<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //somethig was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //read from database
            $query = "select * from users where user_name = '$user_name' limit 1";

            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: ../index.php");
                        die;
                    }
                }
            }
            echo "Wrong username or password!";
        }
        else
        {
        echo "Please don't leave anything blank or username is not a number!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<header>
        <a href="../index.php" class="header-brand">VMS</a>
        <nav>
            <ul>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="terms.html">Terms of Services</a></li>
            </ul>
        <a href="signup.php" class="header-sign">Sign up</a>
        </nav>
    </header>
    <main>
        <div class="wrapper">
            <form method="post">
                <section>
                    <p>Log in</p><br>
                    <input type="text" name="user_name" placeholder="Username"><br>
                    <input type="password" name="password" placeholder="Password"><br>
                    <input id="button" type="submit" value="Login"><br>
                </section>
            </form>
        </div>
    </main>
</body>
</html>