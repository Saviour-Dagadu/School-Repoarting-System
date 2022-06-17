<?php
    include('../config/constants.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="TOTAL STUDENTS, TOTAL STAFF​, Quick Links:, Students">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>All Staff-Reporting Sys.</title>
    <link rel="stylesheet" href="nicepage.css" type="text/css">
    <link rel="stylesheet" href="Edit_Staff.css" type="text/css">
    <!-- <link rel="stylesheet" href="footer.css" type="text/css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Student_Report_System",
		"logo": "images/default-logo.png"}
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Edit Staff">
    <meta property="og:type" content="website">
  </head>
  <body>

    <nav class="navbar" style="background-color: #e3f2fd;">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand" href="#"><img src="images/images.png" alt="" width="50" height="50" class="d-inline-block align-text-top"></a>
        <h3 class="text-primary">Student Reporting System</h3>
    </div>
    </nav>

<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e3f2fd;">   
  <div class="container">
    <button class="navbar-toggler border-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon expand-lg"><b class="text-primary">X</b></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav nav-pills mx-auto mb-lg-0 fw-bolder fs-6">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="Dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item dropdown fst-italic">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Manage Staffs
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Add_Staff.php">Add Staff</a></li>
            <li><a class="dropdown-item" href="Edit_Staff.php">Edit Staff</a></li>
            <li><a class="dropdown-item" href="Remove_Staff.php">Remove Staff</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="All_Staff.php">All Staff</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Manage Students
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Add_Student.php">Add Student</a></li>
            <li><a class="dropdown-item" href="Edit_Student.php">Edit Student</a></li>
            <li><a class="dropdown-item" href="Remove_Student.php">Remove Student</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="All_Student.php">All Student</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Manage Results
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Add_Result.php">Add Results</a></li>
            <li><a class="dropdown-item" href="Edit_Result.php">Edit Results</a></li>
            <li><a class="dropdown-item" href="Remove_Result.php">Remove Results</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Print_Result.php">Print Results</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Others
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="manage-admin.php">Manage Admins</a></li>
            <li><a class="dropdown-item" href="manage-teacher.php">Manage Teacher</a></li>
            <li><a class="dropdown-item" href="Remove_Class.php">Remove Class</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Add_Subject.php">Add Subject</a></li>
            <li><a class="dropdown-item" href="Edit_Subject.php">Edit Subject</a></li>
            <li><a class="dropdown-item" href="Remove_Subject.php">Remove Subject</a></li>
          </ul>
        </li>
        <a class="nav-link" href="logout.php" role="button" aria-expanded="false">
            Logout
        </a>
      </ul>  
    </div>
  </div>
</nav>

<div class="main-content">
    <div class="wrapper">
        <h1>Add teacher</h1>

        <br /><br />

        <?php 
            if(isset($_SESSION['add'])) //Checking whether the session is set or not
            {
                echo $_SESSION['add']; // Display the session message
                unset($_SESSION['add']); // Remove session message
            }
        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter teacher full name">
                    </td>
                </tr>
                <tr>
                    <td>Assign Class</td>
                    <td>
                        <input type="text" name="class_assigned" placeholder="Enter class assigned">
                    </td>
                </tr>
                <tr>
                    <td>Username </td>
                    <td>
                        <input type="text" name="username" placeholder="Enter teacher username">
                    </td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td>
                        <input type="password" name="password" placeholder="Choose password for teacher">
                    </td>
                </tr>
                <tr>
                    <td col-span="2">
                        <input type="submit" name="submit" value="Add Teacher" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>


    </div>
</div>

<?php include('../partials/footer.php'); ?>

<?php 
    //Process the value from form and save it in Database
    
    //Check whether the button is clicked ot not

    if(isset($_POST['submit']))
    {
        // Button Clicked
        //echo "Button clicked";

        //1. Get the data from form
        $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
        $class_assigned = mysqli_real_escape_string($con, $_POST['class_assigned']);
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, md5($_POST['password'])); //Password Encripted with MD5

        //2. SQL Query to Save the data into database
        $sql = "INSERT INTO tbl_teacher SET
            full_name = '$full_name',
            class_assigned = '$class_assigned',
            username = '$username',
            password = '$password'
        ";
        
        //3. Executing and Saving Data into Database
        $res = mysqli_query($con, $sql) or die(mysqli_error());

        //4. Check whether the (Query is executed) data is inserted or not and display appropriate message
        if($res == TRUE)
        {
            //Data Inserted
            //echo "Data Saved Successfully";
            //Create a Session variable to display message
            $_SESSION['add'] = "<div class='success tex-center'>Teacher Added Successfully.</div>";
            //Redirect Page to Manage Admin
            echo "<script>window.location.href='manage-teacher.php';</script>";
        }
        else
        {
            //Failed to insert Data
            //echo "Failed to save data";
            //Create a Session variable to display message
            $_SESSION['add'] = "<div class='error tex-center'>Failed to Add Teacher.</div>";
            //Redirect Page to Add Admin
            echo "<script>window.location.href='manage-teacher.php';</script>";
        }
    }
    
?>