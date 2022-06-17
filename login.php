<?php 

  include('config/constants.php'); 

?>

<html class="lead">
    <head>
        <title>Login - School Reporting System</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <div class="login">
            <h1 class="text-center">Login</h1>

            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo  $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <br /> <br />

            <!------Login Form Starts------>
            <form action="" method="POST" class="text-center">
                Username <br />
                example@supatech.org<br /><br />
                <input type="text" name="username" placeholder="Enter Username"><br /><br />

                Password <br /><br />
                <input type="password" name="password" placeholder="Enter Password"><br /><br />
                
                <input type="submit" name="submitT" value="Login as Teacher" class="btn-primary">
                <br><br>
                <input type="submit" name="submitA" value="Login as Admin" class="btn-primary">
                <br><br>

            </form>
            <!------Login Form Starts------>

            <p class="text-center">Created By - <a href="https://objective-brown-fa0d45.netlify.app/">Supatech</a></p>
        </div>

    </body>
</html>

<?php

    //Check whether the submit teacher button is clicked or not
    if(isset($_POST['submitT']))
    {
        //Process for Login
        //1. Get the Data from Login form
        //$username = $_POST['username'];
        //$password = md5($_POST['password']);
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, md5($_POST['password']));

        //2. SQL to check whether the username and password exists or not
        $sql = "SELECT * FROM tbl_teacher WHERE username = '$username' AND password = '$password'";

        //3. Execute the Query
        $res = mysqli_query($con, $sql);

        //4. count rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count == 1)
        {
            //User available and Login success
            $_SESSION['login'] = "<div = class='success tex-center'>Login Successful.</div>";
            $_SESSION['user'] = $username; //To check whether the user is logged in or not and logout will unset it
            //Redirect to Home Page/Dashboard
            header('location:'.SITEURL);
        }
        else
        {
            //User not available
            $_SESSION['login'] = "<div = class='error text-center'>Username or Password did not match</div>";
            //Redirect to Home Page/Dashboard
            header('location:'.SITEURL.'login.php');
        }
    }

    //Check whether the submit admin button is clicked or not
    if(isset($_POST['submitA']))
    {
        //Process for Login
        //1. Get the Data from Login form
        //$username = $_POST['username'];
        //$password = md5($_POST['password']);
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, md5($_POST['password']));

        //2. SQL to check whether the username and password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'";

        //3. Execute the Query
        $res = mysqli_query($con, $sql);

        //4. count rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count == 1)
        {
            //User available and Login success
            $_SESSION['login'] = "<div = class='success tex-center'>Login Successful.</div>";
            $_SESSION['user'] = $username; //To check whether the user is logged in or not and logout will unset it
            //Redirect to Home Page/Dashboard
            echo "<script>window.location.href='admin/index.php';</script>";
        }
        else
        {
            //User not available
            $_SESSION['login'] = "<div = class='error text-center'>Username or Password did not match</div>";
            //Redirect to Home Page/Dashboard
            header('location:'.SITEURL.'login.php');
        }
    }

?>