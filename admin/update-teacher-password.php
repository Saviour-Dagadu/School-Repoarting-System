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
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Check_Result.php">Check Results</a></li>
            <li><a class="dropdown-item" href="Student_Trancript.php">Student Transcript</a></li>
            <li><a class="dropdown-item" href="Print_Report.php">Print Terminal Report</a></li>
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
        <h1>Change Password</h1>
        <br /><br />

        <?php
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
            }
        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Current Password: </td>
                    <td>
                        <input type="password" name="current_password" placeholder="Current Password">
                    </td>
                </tr>

                <tr>
                    <td>New Password</td>
                    <td>
                        <input type="password" name="new_password" placeholder="New Password">
                    </td>
                </tr>

                <tr>
                    <td>Confirm Password</td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="Confirm Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">    
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>

    </div>
</div>

<?php 

    //Check whether the submit button is clicked or not 
    if(isset($_POST['submit']))
    {
        //echo "Clicked";

        //1. Get the Data from Form
        $id=$_POST['id'];
        $current_password = mysqli_real_escape_string($con, md5($_POST['current_password']));
        $new_password = mysqli_real_escape_string($con, md5($_POST['new_password']));
        $confirm_password = mysqli_real_escape_string($con, md5($_POST['confirm_password']));

        //2. Check whether the user with current ID and current Password exists or not
        $sql = "SELECT * FROM tbl_teacher WHERE id = $id AND password = '$current_password'";

        //Execute the Query
        $res = mysqli_query($con, $sql);

        if($res == TRUE)
        {
            //Check whether data is available or not
            $count=mysqli_num_rows($res);

            if($count==1)
            {
                //User Exists and Password can be changed
                //echo "User Found";
                
                //Check wether the new password and confirm password match or not
                if($new_password==$confirm_password)
                {
                    //Update to Password
                    //echo "Password matched";
                    $sql2 = "UPDATE tbl_teacher SET
                    password='$new_password'
                    WHERE id=$id";
                    
                    //Execute the Query
                    $res2 = mysqli_query($con, $sql2);

                    //Check whether the query executed or not
                    if($res2 == TRUE)
                    {
                        //DIsplay Success Message
                        //Update to Manage teacher Page with success message
                        $_SESSION['change-pwd'] = "<div class = 'success tex-center'> Password Changed Successfully. </div>";
                        //Redirect the user
                        echo "<script>window.location.href='manage-teacher.php';</script>";
                    }
                    else
                    {
                        //Update to Manage Teacher Page with error message
                        $_SESSION['change-pwd'] = "<div class = 'error tex-center'> Failed to Change Password. </div>";
                        //Redirect the user
                        echo "<script>window.location.href='manage-teacher.php';</script>";
                    }
                }
                else
                {
                    //Update to Manage Teacher Page with error message
                    $_SESSION['pwd-not-match'] = "<div class = 'error tex-center'> Password did not match. </div>";
                    //Redirect the user
                    echo "<script>window.location.href='manage-teacher.php';</script>";

                }
            }
            else
            {
                //User Does not exist Set message and redirect
                $_SESSION['user-not-found'] = "<div class= 'error tex-center'>User Not Found. </div>";
                //Redirect the user
                echo "<script>window.location.href='manage-teacher.php';</script>";
            }
        }
        //3. Check whether the New Password and Confirm Password match or not

        //4. Change Password if all above is true
    }

?>
          <!------Footer------>
<?php include('../partials/footer.php'); ?>