<?php 

    //Include constants.php file her
    include('../config/constants.php');

    //1. Get the ID of the Teacher to be deleted
    echo $id = $_GET['id'];
    //2. Create SQL Query to Delete Teacher
    $sql = "DELETE FROM tbl_teacher WHERE id=$id";

    //Execute the Query
    $res = mysqli_query($con, $sql);

    //Check whether the query executed successfully of not
    if($res == TRUE)
    {
        //Query Executed successfully and Teacher Deleted
        //echo "Teacher Deleted";
        //Create Session variable to display message
        $_SESSION['delete'] = "<div class='success tex-center'>Teacher Deleted Successfully.</div>";
        //Redirect to manage teacher page
        echo "<script>window.location.href='manage-teacher.php';</script>";
    }
    else
    {
        //Failed to Delete Teacher
        //echo "Failed to Deleted Teacher";
        
        $_SESSION['delete'] = "<div class='error tex-center'>Failed to Delete Teacher, try Again Later.</div>";
        echo "<script>window.location.href='manage-teacher.php';</script>";
    }

    //3. Redirect to manage Teacher page with message (Success)

?>