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

        <!-----Main Content Section Start----->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage teacher</h1>
                <br />

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];  //Displaying session message
                        unset($_SESSION['add']); //Removing session message
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }

                    if(isset($_SESSION['user-not-found']))
                    {
                        echo $_SESSION['user-not-found'];
                        unset($_SESSION['user-not-found']);
                    }

                    if(isset($_SESSION['pwd-not-match']))
                    {
                        echo $_SESSION['pwd-not-match'];
                        unset($_SESSION['pwd-not-match']);
                    }

                    if(isset($_SESSION['change-pwd']))
                    {
                        echo $_SESSION['change-pwd'];
                        unset($_SESSION['change-pwd']);
                    }
                ?>

                <br /><br /><br />
                <!---Button to Add Admin---->
                <a href="add-teacher.php" class="btn-primary">Add Teacher</a>

                <br /><br /><br />

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Full Name</th>
                        <th>Class Assigned</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>

                    <?php 
                    //Query to Get all admin
                        $sql = "SELECT * FROM tbl_teacher";
                        //Execute the Query
                        $res = mysqli_query($con, $sql);

                        //Check whether the Query is Executed or not
                        if($res == TRUE)
                        {
                            //Count rows to check wether we have data in database or not
                            $count = mysqli_num_rows($res); // Function to get all the rows in database

                            $sn=1; // Create a variable and assign a value

                            //Check the num of rows
                            if($count>0)
                            {
                                //We have data in database
                                while($rows = mysqli_fetch_assoc($res))
                                {
                                    //Using while loop to get the data from Database
                                    //And while loop will run as long as we have data in database

                                    //Get individual Data
                                    $id=$rows['id'];
                                    $full_name=$rows['full_name'];
                                    $class_assigned=$rows['class_assigned'];
                                    $username=$rows['username'];

                                    //Display the Values in our table
                                    ?>

                                    <tr>
                                        <td><?php echo $sn++; ?></td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $class_assigned; ?></td>
                                        <td><?php echo $username; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-teacher-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                        <a href="<?php echo SITEURL; ?>admin/update-teacher.php?id=<?php echo $id; ?>" class="btn-secondary">Update Teacher</a>
                                        <a href="<?php echo SITEURL; ?>admin/delete-teacher.php?id=<?php echo $id; ?>" class="btn-danger">Delete Teacher</a>
                                        </td>
                                    </tr>

                                    <?php

                                }
                            }
                            else
                            {
                                //We do not have Data in Database
                            }
                        }
                    ?>

                    
                </table>

            </div>
        </div>
        <!-----Main Content Section Ends----->
          <!------Footer------>
<?php include('../partials/footer.php'); ?>