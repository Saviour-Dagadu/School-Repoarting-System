<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="TOTAL STUDENTS, TOTAL STAFF​, Quick Links:, Students">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Add Student-Reporting Sys.</title>
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
    <meta property="og:title" content="Add Student">
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
        <li class="nav-item dropdown  fst-italic">
          <a class="nav-link dropdown-toggle  active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <button class="btn btn-outline-primary" type="submit">Logout</button>
      </ul>  
    </div>
  </div>
</nav>
  

  <!--                       STUDENT INFORMATION 
                THIS PAGE WILL AUTOMATICALLY LOAD WHEN THE USER CLICK ON A STUDENT FROM THE ALL_STUDENT.PHP PAGE -->

        <div class="container">
            <form method="post">
                <p class="text-center shadow rounded heading">Student Details</p>
                <div id="student" class="information">
                    <div class="form-row">
                        <div class="form-group col-md-6 display">
                            <label for="inputStudentID">STUDENT ID:</label>
                            <input type="text" name="Student_ID" required="" class="form-control shadow" id="Student_ID" readonly>
                        </div>
                        <div class="form-group col-md-6 display">
                        <img src="" alt="" style="width: 150px; height: 120px;">
                        <a href="#" class="btn btn-primary shadow mx-3 mb-2" role="button">Upload Image</a>
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 display">
                            <label for="inputFirstName">FIRST NAME:</label>
                            <input type="text" name="First_Name" required="" class="form-control shadow" id="First_Name" placeholder="Enter First Name..." readonly>
                        </div>
                        <div class="form-group col-md-6 display">
                            <label for="inputLastName">LAST NAME:</label>
                            <input type="text" name="Last_Name" required="" class="form-control shadow" id="Last_Name" placeholder="Enter Last Name..." readonly>
                        </div>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group col-md-6 display">
                            <label for="inputGender">GENDER:</label>
                            <select name="Gender" id="Gender" require="" class="form-control shadow" readonly>
                                <option selected>Select Gender... </option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 display">
                            <label for="inputD_O_B">DATE OF BIRTH:</label>
                            <input type="date" name="D_O_B" required="" class="form-control shadow" id="D_O_B" placeholder="DD-MM-YYYY" readonly>
                        </div>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group col-md-6 display">
                            <label for="inputReligion">RELIGION:</label>
                            <select name="Religion" id="Religion" require="" class="form-control shadow" readonly>
                                <option selected>Choose Religion...</option>
                                <option>Christianity</option>
                                <option>Islam</option>
                                <option>Traditionalist</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 display">
                            <label for="inputNational_ID">NATIONAL ID:</label>
                            <input type="text" name="National_ID" required="" class="form-control shadow" id="National_ID" placeholder="000-0000-00" readonly>
                        </div>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group col-md-6 display">
                            <label for="inputCountry">NATIONALITY / COUNTRY:</label>
                            <input type="text" name="Country" required="" class="form-control shadow" id="Country" placeholder="Enter Country Of Origin..." readonly>
                        </div>
                        <div class="form-group col-md-6 display">
                            <label for="inputCity">CITY:</label>
                            <input type="text" name="City" required="" class="form-control shadow" id="City" placeholder="Enter City..." readonly>
                        </div>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group col-md-4 display">
                            <label for="inputAdmissionDate">ADMISSION DATE:</label>
                            <input type="date" name="Admission_Date" required="" class="form-control shadow" id="Admission_Date" placeholder="DD-MM-YYYY" readonly>
                        </div>
                        <div class="form-group col-md-4 display">
                        <label for="inputClassAdmitted">CLASS ADMITTED:</label>
                            <select name="Class_Admitted" id="Class_Admitted" require="" class="form-control shadow" readonly>
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
                        <div class="form-group col-md-4 display">
                        <label for="inputCurrentClass">CURRENT CLASS:</label>
                            <select name="Current_Class" id="Current_Class" require="" class="form-control shadow" readonly>
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
                        <div class="form-group col-md-4 display">
                            <label for="inputAddress">ADDRESS:</label>
                            <input type="text" name="Address" required="" class="form-control shadow" id="Address" placeholder="House No, GPS Address..." readonly>
                        </div>
                        <div class="form-group col-md-4 display">
                            <label for="inputPosition">POSITION:</label>
                            <input type="text" name="Position" required="" class="form-control shadow" id="Position" placeholder="Boys Prefect, Girls Prefect, Basketball Captain..." readonly>
                        </div>
                        <div class="form-group col-md-4 display">
                            <label for="inputClub">CLUB:</label>
                            <input type="text" name="Club" required="" class="form-control shadow" id="Club" placeholder="Enter Last Name..." readonly>
                        </div>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group col-md-4 display">
                            <label for="inputPrizes">PRIZES:</label>
                            <input type="text" name="Prizes" required="" class="form-control shadow" id="Prizes" placeholder="Example, Best Student...." readonly>
                        </div>
                        <div class="form-group col-md-4 display">
                            <label for="inputFathersName">FATHER'S NAME:</label>
                            <input type="text" name="Fathers_Name" required="" class="form-control shadow" id="Fathers_Name" placeholder="Enter Father's Name..." readonly>
                        </div>
                        <div class="form-group col-md-4 display">
                            <label for="inputFathersContact">FATHER'S CONTACT:</label>
                            <input type="number" name="Fathers_Contact" required="" class="form-control shadow" id="Fathers_Contact" placeholder="Enter Father's contact..." readonly>
                        </div>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group col-md-6 display">
                            <label for="inputFathersOccupation">FATHER'S OCCUPATION:</label>
                            <input type="text" name="Fathers_Occupation" required="" class="form-control shadow" id="Fathers_Occupation" placeholder="Banker, Trader..." readonly>
                        </div>
                        <div class="form-group col-md-6 display">
                            <label for="inputFathersNID">FATHER'S NATIONAL ID:</label>
                            <input type="text" name="Fathers_NID" required="" class="form-control shadow" id="Fathers_NID" placeholder="000-0000-000" readonly>
                        </div>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group col-md-6 display">
                            <label for="inputMothersName">MOTHER'S NAME:</label>
                            <input type="text" name="Mothers_Name" required="" class="form-control shadow" id="Mothers_name" placeholder="Enter Mother's Name...." readonly>
                        </div>
                        <div class="form-group col-md-6 display">
                            <label for="inputMothersContact">MOTHER'S CONTACT:</label>
                            <input type="number" name="Mothers_Contact" required="" class="form-control shadow" id="Mothers_Contact" placeholder="024********" readonly>
                        </div>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group col-md-6 display">
                            <label for="inputMothersOccupation">MOTHER'S OCCUPATION:</label>
                            <input type="text" name="Mothers_Occupation" required="" class="form-control shadow" id="Mothers_Occupation" placeholder="Example, Banker, Teacher...." readonly>
                        </div>
                        <div class="form-group col-md-6 display">
                            <label for="inputMothersNID">MOTHER'S NATIONAL ID:</label>
                            <input type="text" name="Mothers_NID" required="" class="form-control shadow" id="Mothers_NID" placeholder="000-0000-000" readonly>
                        </div>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group col-md-6 display">
                            <label for="inputGuardianName">GUARDIAN'S NAME:</label>
                            <input type="text" name="Guardian_Name" required="" class="form-control shadow" id="Guardian_name" placeholder="Enter Guardian Name..." readonly>
                        </div>
                        <div class="form-group col-md-6 display">
                            <label for="inputGuardianContact">GUARDIAN'S CONTACT:</label>
                            <input type="number" name="Guardian_Contact" required="" class="form-control shadow" id="Guardian_Contact" placeholder="024********" readonly>
                        </div>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group col-md-4 display">
                            <label for="inputGuardianOccupation">GUARDIAN OCCUPATION:</label>
                            <input type="text" name="Guardian_Occupation" required="" class="form-control shadow" id="Guardian_Occupation" placeholder="Example Banker, Teacher...." readonly>
                        </div>
                        <div class="form-group col-md-4 display">
                            <label for="inputGuardianRelatiion">GUARDIAN RELATIONSHIP:</label>
                            <input type="text" name="Guardian_Relationship" required="" class="form-control shadow" id="Guardian_Relationship" placeholder="Brother, Father..." readonly>
                        </div>
                        <div class="form-group col-md-4 display">
                            <label for="inputGuardianNID">GUARDIAN NATIONAL ID:</label>
                            <input type="text" name="Guardian_NID" required="" class="form-control shadow" id="Guardian_NID" placeholder="000-0000-000" readonly>
                        </div>
                    </div>
                </div>  
                
          <div style="margin: 20px;">
              <fieldset class="form-group" id="btnAlign" style="margin-left: 40%">
                  <input class="btn btn-primary shadow" type="submit" name="back" value="&LeftArrow; BACK">
                  <input style="margin-left: 20px" class="btn btn-primary shadow" type="submit" name="details" value="PRINT DETAILS">
              </fieldset>
            </div>                  
            </form>
            
          </div>
    
           <!-- FOOTER -->
<nav class="navbar mt-4 mb-n4 pt-2" style="background-color: #e3f2fd;">
  <div class="container justify-content-center fw-bolder fs-5">
    <a class="navbar-brand" href="#"><h6>&copy; All Rights Reserved, 2022 - School Reporting System ~ (v1.0)</h6></a>
  </div>
</nav>

<nav class="navbar navbar-expand-sm pt-0" style="background-color: #e3f2fd;">
<div class="container-fluid justify-content-center fst-italic fs-5 mt-n3">
   
  <ul class="navbar-nav ">
    <li class="nav-item">
      <a class="nav-link" href="#">Design By  &RightArrow; </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa fa-globe"></i> SupaTech Developers</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa fa-envelope" aria-hidden="true"></i> info@supatech.com</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa fa-phone" aria-hidden="true"></i> 02345678000</a>
    </li>
  </ul>
</div>
</nav>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
  </body>
</html>