<?php
    include('../config/constants.php');
    include('login-check.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="TOTAL STUDENTS, TOTAL STAFF​, Quick Links:, Students">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Dashboard-Reporting Sys</title>
    <link rel="stylesheet" href="nicepage.css" type="text/css">
    <link rel="stylesheet" href="Dashboard.css" type="text/css">
    <link rel="stylesheet" href="footer.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="css/style.css">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Student_Report_System",
		"logo": "images/default-logo.png"}
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Dashboard">
    <meta property="og:type" content="website">
  </head>
  <body>
<div class="u">
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
          <li class="nav-item fst-italic">
            <a class="nav-link active" aria-current="page" href="Dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="navbarDropdown" href="manage-admin.php">
              Manage Admins
            </a>
          </li>
          <li class="nav-item dropdown">
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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Others
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="Add_Class.php">Add Class</a></li>
              <li><a class="dropdown-item" href="Edit_Class.php">Edit Class</a></li>
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
        <!-----Menu Section Ends----->