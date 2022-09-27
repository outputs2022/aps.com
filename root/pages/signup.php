<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //somethig was posted
        $email = $_POST['email'];
        $user_name = $_POST['user_name'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($user_name) && !empty($fname) && !empty($lname) && !empty($gender) && !empty($password) && !is_numeric($user_name))
        {
            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,email,user_name,fname,lname,gender,password) values ('$user_id','$email','$user_name','$fname','$lname','$gender','$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
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
    <title>Signup</title>
    <link rel="stylesheet" href="../css/signup.css">
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
        <a href="login.php" class="header-sign">Log in</a>
        </nav>
    </header>
    <main>
        <div class="wrapper">
            <form method="post">
                <section>
                    <p>Sign up</p><br>
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="user_name" placeholder="Username"><br>
                    <input type="text" name="fname" placeholder="Firstname">
                    <input type="text" name="lname" placeholder="Lastname"><br><a>Gender:</a>
                    <select name="gender">
                        <option value=""></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Others</option>
                    </select>
                    <input type="password" name="password" placeholder="Password"><br><br>
                    <input class="button" type="submit" value="Sign up"><br>
                </section>
            </form>
        </div>
    </main>
</body>
</html>