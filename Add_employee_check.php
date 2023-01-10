<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "","hospital") or die('could not connect:');


if(isset($_POST['save']))
{
   
    $name=$_POST["name"];
    $N_pattern= "/^[a-zA-Z\s]{2,}$/";
    $phone=$_POST['phone'];
    $PN_pattern = "/^[0]{1}[1]{1}[0-9]{9}$/";
    $email=$_POST['email'];
    $E_pattern = "/^[a-zA-Z0-9.]{3,}@[a-zA-Z]+[.]{1}[a-zA-Z]+$/";
    $empid=$_POST['emp_id'];
    $Emp_pattern = "/^[0-9]{1,6}$/";
    $salary=$_POST['sal'];
    $S_pattern = "/^[0-9]{4,6}$/";
    $job=$_POST['job'];
    
    if($name=="" or $phone=="" or $email=="" or $empid=="" or $salary==""){
        echo '<script type="text/javascript">'; 
        echo 'alert("All fields are required.");'; 
        echo 'window.location.href = "Add_employee.php";';
        echo '</script>';
    }
    elseif(!preg_match($N_pattern,$name)){
        echo '<script type="text/javascript">'; 
        echo 'alert("Name is not valid.");'; 
        echo 'window.location.href = "Add_employee.php";';
        echo '</script>';
    }
    elseif(!preg_match($PN_pattern,$phone)){
        echo '<script type="text/javascript">'; 
        echo 'alert("Phone is not valid.");'; 
        echo 'window.location.href = "Add_employee.php";';
        echo '</script>';
    }
    elseif(!preg_match($E_pattern,$email)){
        echo '<script type="text/javascript">'; 
        echo 'alert("Email is not valid.");'; 
        echo 'window.location.href = "Add_employee.php";';
        echo '</script>';
    }
    elseif(!preg_match($Emp_pattern,$empid)){
        echo '<script type="text/javascript">'; 
        echo 'alert("Emp_ID is not valid.");'; 
        echo 'window.location.href = "Add_employee.php";';
        echo '</script>';
    }
    elseif(!preg_match($S_pattern,$salary)){
        echo '<script type="text/javascript">'; 
        echo 'alert("salary is not valid.");'; 
        echo 'window.location.href = "Add_employee.php";';
        echo '</script>';
    }
    if($job=="Doctor")
    {
        $qur="select * from doctor where EMP_ID='$empid'";
        $result=mysqli_query($conn,$qur);
        $count=mysqli_num_rows($result);
        if ($count>0) 
        {
            echo '<script type="text/javascript">'; 
            echo 'alert("Doctor already exist");'; 
            echo 'window.location.href = "Add_employee.php";';
            echo '</script>';
        
        }
        else
        {
            
            $q="INSERT INTO doctor (`EMP_ID`, `Name`, `Phone number`, `Email`, `Salary`, `Speciality`) VALUES ('".$_POST['emp_id']."','".$_POST['name']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['sal']."','".$_POST['speciality']."')";
            $result=mysqli_query($conn,$q);
            echo '<script type="text/javascript">'; 
            echo 'alert("Doctor inserted successfully!!!");'; 
            echo 'window.location.href = "Add_employee.php";';
            echo '</script>';
            
        }
    }
    elseif($job=="Nurse"){
        $qur="select * from nurse where EMP_ID='$empid'";
        $result=mysqli_query($conn,$qur);
        $count=mysqli_num_rows($result);
        if ($count>0) 
        {
            echo '<script type="text/javascript">'; 
            echo 'alert("Nurse already exist");'; 
            echo 'window.location.href = "Add_employee.php";';
            echo '</script>';
        
        }
        else
        {
            
            $q="INSERT INTO nurse (`EMP_ID`, `Name`, `Phone_number`, `Salary`, `email`) VALUES ('".$_POST['emp_id']."','".$_POST['name']."','".$_POST['phone']."','".$_POST['sal']."','".$_POST['email']."')";
            $result=mysqli_query($conn,$q);
            echo '<script type="text/javascript">'; 
            echo 'alert("Nurse inserted successfully!!!");'; 
            echo 'window.location.href = "Add_employee.php";';
            echo '</script>';
            
        }
    }
}
if(isset($_POST['remove']))
{
    $r_empid=$_POST['r_emp_id'];
    $r_Emp_pattern = "/^[0-9]{1,6}$/";
    if($r_empid==""){
        echo '<script type="text/javascript">'; 
        echo 'alert("field is required.");'; 
        echo 'window.location.href = "Add_employee.php";';
        echo '</script>';
    }
    elseif(!preg_match($r_Emp_pattern,$r_empid)){
        echo '<script type="text/javascript">'; 
        echo 'alert("Emp_ID is not valid.");'; 
        echo 'window.location.href = "Add_employee.php";';
        echo '</script>';
    }
    else
    {
        $doctor_qur="select * from doctor where EMP_ID='$r_empid'";
        $nurse_qur="select * from nurse where EMP_ID='$r_empid'";
        $doctor_result=mysqli_query($conn,$doctor_qur);
        $doctor_count=mysqli_num_rows($doctor_result);
        $nurse_result=mysqli_query($conn,$nurse_qur);
        $nurse_count=mysqli_num_rows($nurse_result);
        if($doctor_count>0)
        {
        $q="Delete from doctor WHERE Emp_ID = $r_empid";
        $result=mysqli_query($conn,$q);
        echo '<script type="text/javascript">'; 
        echo 'alert("Doctor deleted successfully!!!.");'; 
        echo 'window.location.href = "Add_employee.php";';
        echo '</script>';
       
        }
        elseif($nurse_count>0)
        {
            $q="Delete from nurse WHERE Emp_ID = $r_empid";
            $result=mysqli_query($conn,$q);
            echo '<script type="text/javascript">'; 
            echo 'alert("Nurse deleted successfully!!!.");'; 
            echo 'window.location.href = "Add_employee.php";';
            echo '</script>';
        }
        else
        {
            echo '<script type="text/javascript">'; 
            echo 'alert("Emp_ID does not exist.");'; 
            echo 'window.location.href = "Add_employee.php";';
            echo '</script>';
        }
      
    }
    
}
?>