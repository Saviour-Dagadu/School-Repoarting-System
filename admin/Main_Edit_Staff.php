<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="TOTAL STUDENTS, TOTAL STAFF​, Quick Links:, Students">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Edit Staff-Reporting Sys.</title>
    <link rel="stylesheet" href="nicepage.css" type="text/css">
    <link rel="stylesheet" href="Add_Staff.css" type="text/css">
    <!-- <link rel="stylesheet" href="footer.css" type="text/css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
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
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
  

 <!-- THIS FORM WILL BE AUTO FILLED FROM THE STAFF DATABASE BASE ON THE ID THE USER WILL CLICK FROM EDIT STAFF PAGE
            NB: THERE SHOULD BE A VALUE ATTRIBUTE IN THE INPUT TAG WHICH WILL CONTAIN THE PHP CODES THAT WILL AUTO GENERATE THE DATA-->


                  <!-- STAFF FORMS -->
                  <div class="container">
        <form method="post">
            <p class="text-center shadow rounded heading">Staff Information</p>
            <div id="student" class="information">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputStaffID">STAFF ID:</label>
                        <input type="text" name="Staff_ID" required="" class="form-control shadow" id="Staff_ID" readonly>
                    </div>
                    <div class="form-group col-md-6 display">
                        <img src="" alt="" style="width: 150px; height: 120px;">
                        <a href="#" class="btn btn-outline-primary shadow mx-3 mb-2" role="button">Upload Image</a>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 display">
                        <label for="inputFirstName">FIRST NAME:</label>
                        <input type="text" name="First_Name" required="" class="form-control shadow" id="First_Name" placeholder="Enter First Name...">
                    </div>
                    <div class="form-group col-md-6 display">
                        <label for="inputLastName">LAST NAME:</label>
                        <input type="text" name="Last_Name" required="" class="form-control shadow" id="Last_Name" placeholder="Enter Last Name...">
                    </div>
                </div>
    
                <div class="form-row">
                    <div class="form-group col-md-6 display">
                        <label for="inputGender">GENDER:</label>
                        <select name="Gender" id="Gender" require="" class="form-control shadow">
                            <option selected>Select Gender... </option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 display">
                        <label for="inputD_O_B">DATE OF BIRTH:</label>
                        <input type="date" name="D_O_B" required="" class="form-control shadow" id="D_O_B" placeholder="DD-MM-YYYY">
                    </div>
                </div>
    
                <div class="form-row">
                    <div class="form-group col-md-6 display">
                        <label for="inputReligion">RELIGION:</label>
                        <select name="Religion" id="Religion" require="" class="form-control shadow">
                            <option selected>Choose Religion...</option>
                            <option>Christianity</option>
                            <option>Islam</option>
                            <option>Traditionalist</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 display">
                        <label for="inputNational_ID">NATIONAL ID:</label>
                        <input type="text" name="National_ID" required="" class="form-control shadow" id="National_ID" placeholder="000-0000-00">
                    </div>
                </div>
    
                <div class="form-row">
                    <div class="form-group col-md-6 display">
                        <label for="inputCountry">NATIONALITY / COUNTRY:</label>
                        <input type="text" name="Country" required="" class="form-control shadow" id="Country" placeholder="Enter Country Of Origin...">
                    </div>
                    <div class="form-group col-md-6 display">
                        <label for="inputCity">CITY:</label>
                        <input type="text" name="City" required="" class="form-control shadow" id="City" placeholder="Enter City...">
                    </div>
                </div>

                <div class="form-row">                   
                    <div class="form-group col-md-6 display">
                        <label for="inputAddress">ADDRESS:</label>
                        <input type="text" name="Address" required="" class="form-control shadow" id="Address" placeholder="House No, GPS Address....">
                    </div>                   
                    <div class="form-group col-md-6 display">
                        <label for="inputAddress"> E-MAIL ADDRESS:</label>
                        <input type="email" name="Email_Address" required="" class="form-control shadow" id="Email_Address" placeholder="example@info.com">
                    </div>
                </div>
    
                <div class="form-row">
                    <div class="form-group col-md-6 display">
                        <label for="inputAdmissionDate">ADMISSION DATE:</label>
                        <input type="date" name="Admission_Date" required="" class="form-control shadow" id="Admission_Date" placeholder="DD-MM-YYYY">
                    </div>
                    <div class="form-group col-md-6 display">
                        <label for="inputClassAssign">ASSIGN CLASS:</label>
                        <select name="Assign_Class" id="Assign_Class" require="" class="form-control shadow">
                            <option selected>  </option>
                            <option>Primary 1</option>
                            <option>Primary 2</option>
                            <option>Primary 3</option>
                            <option>Primary 4</option>
                            <option>Primary 5</option>
                            <option>Primary 6</option>
                            <option>JHS 1</option>
                            <option>JHS 2</option>
                            <option>JHS 3</option>
                        </select>
                    </div>
                </div>
    
                <div class="form-row">
                    <div class="form-group col-md-6 display">
                        <label for="inputFathersName">FATHER'S NAME:</label>
                        <input type="text" name="Fathers_Name" required="" class="form-control shadow" id="Fathers_Name" placeholder="Enter Father's Name...">
                    </div>
                    <div class="form-group col-md-6 display">
                        <label for="inputFathersContact">FATHER'S CONTACT:</label>
                        <input type="number" name="Fathers_Contact" required="" class="form-control shadow" id="Fathers_Contact" placeholder="Enter Father's contact...">
                    </div>
                </div>
    
                <div class="form-row">
                    <div class="form-group col-md-6 display">
                        <label for="inputFathersOccupation">FATHER'S OCCUPATION:</label>
                        <input type="text" name="Fathers_Occupation" required="" class="form-control shadow" id="Fathers_Occupation" placeholder="Banker, Trader....">
                    </div>
                    <div class="form-group col-md-6 display">
                        <label for="inputFathersNID">FATHER'S NATIONAL ID:</label>
                        <input type="text" name="Fathers_NID" required="" class="form-control shadow" id="Fathers_NID" placeholder="000-0000-000">
                    </div>
                </div>
    
                <div class="form-row">
                    <div class="form-group col-md-6 display">
                        <label for="inputMothersName">MOTHER'S NAME:</label>
                        <input type="text" name="Mothers_Name" required="" class="form-control shadow" id="Mothers_name" placeholder="Enter Mother's Name....">
                    </div>
                    <div class="form-group col-md-6 display">
                        <label for="inputMothersContact">MOTHER'S CONTACT:</label>
                        <input type="number" name="Mothers_Contact" required="" class="form-control shadow" id="Mothers_Contact" placeholder="024********">
                    </div>
                </div>
    
                <div class="form-row">
                    <div class="form-group col-md-6 display">
                        <label for="inputMothersOccupation">MOTHER'S OCCUPATION:</label>
                        <input type="text" name="Mothers_Occupation" required="" class="form-control shadow" id="Mothers_Occupation" placeholder="Example, Banker, Teacher....">
                    </div>
                    <div class="form-group col-md-6 display">
                        <label for="inputMothersNID">MOTHER'S NATIONAL ID:</label>
                        <input type="text" name="Mothers_NID" required="" class="form-control shadow" id="Mothers_NID" placeholder="000-0000-000">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4 display">
                        <label for="inputMaritalStatus">MARITAL STATUS:</label>
                        <select name="Marital_Status" id="Marital_Status" require="" class="form-control shadow">
                            <option selected>  </option>
                            <option>Single</option>
                            <option>Married</option>
                            <option>Divorce</option>
                            <option>Widow / Widower</option>
                        </select> 
                    </div>       
                </div>
    
                <div class="form-row">
                    <div class="form-group col-md-6 display">
                        <label for="inputSpouseName">SPOUSE NAME:</label>
                        <input type="text" name="Spouse_Name" class="form-control shadow" id="Spouse_name" placeholder="Enter Spouse Name....">
                    </div>
                    <div class="form-group col-md-6 display">
                        <label for="inputSpouseContact">SPOUSE CONTACT:</label>
                        <input type="number" name="Spouse_Contact" class="form-control shadow" id="Spouse_Contact" placeholder="024********">
                    </div>
                </div>
    
                <div class="form-row">
                    <div class="form-group col-md-6 display">
                        <label for="inputSpouseOccupation">SPOUSE OCCUPATION:</label>
                        <input type="text" name="Spouse_Occupation" class="form-control shadow" id="Spouse_Occupation" placeholder="Example Banker, Teacher....">
                    </div>
                    <div class="form-group col-md-6 display">
                        <label for="inputSpouseNID">SPOUSE NATIONAL ID:</label>
                        <input type="text" name="Spouse_NID" class="form-control shadow" id="Spouse_NID" placeholder="000-0000-000">
                    </div>
                </div>
    
            </div>
    
            <div style="margin: 20px;">
                <fieldset class="form-group">
                    <input style="margin-left: 43%" class="btn btn-primary shadow" type="submit" name="Updatestaffinfo" value="UPDATE STAFF">
                </fieldset>
            </div>
        </form>
      </div>



                <!-- FOOTER -->
<?php include('../partials/footer.php'); ?>