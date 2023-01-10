<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "","hospital") or die('could not connect:');



if(isset($_POST['save']))
{
   
    $email=$_POST['email'];
    $E_pattern="/^[a-zA-Z0-9.]{3,}@[a-zA-Z]+[.]{1}[a-zA-Z]+$/";
    $password=$_POST['password'];
    $P_pattern = "/^[a-zA-Z0-9_*]{7,25}$/";
    $Cpassword=$_POST['Cpassword'];
    $CP_pattern = "/^[a-zA-Z0-9_*]{7,25}$/";
    $Fname=$_POST['Fname'];
    $FN_pattern = "/^[a-zA-Z]{2,}$/";
    $dob=$_POST['dob'];
    $dob_pattern = "/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/";
    $username=$_POST['username'];
    $UN_pattern ="/^[a-zA-Z0-9_]{3,}$/";
    if($Fname=="" or $dob=="" or $email=="" or $username=="" or $password=="" or $Cpassword==""){
        echo '<script type="text/javascript">'; 
        echo 'alert("All fields are required.");'; 
        echo 'window.location.href = "sign_up.html";';
        echo '</script>';
    }
    elseif(!preg_match($FN_pattern,$Fname)){
        echo '<script type="text/javascript">'; 
        echo 'alert("Name is not valid.");'; 
        echo 'window.location.href = "sign_up.html;';
        echo '</script>';
    }
    elseif(!preg_match($dob_pattern,$dob)){
        echo '<script type="text/javascript">'; 
        echo 'alert("DOB is not valid.");'; 
        echo 'window.location.href = "sign_up.html;';
        echo '</script>';
    }
    elseif(!preg_match($E_pattern,$email)){
        echo '<script type="text/javascript">'; 
        echo 'alert("Email is not valid.");'; 
        echo 'window.location.href = "sign_up.html";';
        echo '</script>';
    }
    elseif(!preg_match($UN_pattern,$username)){
        echo '<script type="text/javascript">'; 
        echo 'alert("Username is not valid.");'; 
        echo 'window.location.href = "sign_up.html;';
        echo '</script>';
    }
    elseif(!preg_match($P_pattern,$password)){
        echo '<script type="text/javascript">'; 
        echo 'alert("Password is not valid.");'; 
        echo 'window.location.href = "sign_up.html";';
        echo '</script>';
    }
    elseif($Cpassword != $password){
        echo '<script type="text/javascript">'; 
        echo 'alert("Passwords not matching.");'; 
        echo 'window.location.href = "sign_up.html";';
        echo '</script>';
    }
   
    else{
        $qur="select Username, Email from patient where Username='$username' and Email='$email'";
        $result=mysqli_query($conn,$qur);
        $count=mysqli_num_rows($result);
        if ($count>0) 
        {
            echo '<script type="text/javascript">'; 
            echo 'alert("Username/email already taken");'; 
            echo 'window.location.href = "sign_up.html";';
            echo '</script>';
        
        }
        else
        {
            
            $q="INSERT INTO patient (`Patient_ID`, `Name`, `DOB`, `Username`, `Passwordd`, `Email`) VALUES ('".$_POST['']."','".$_POST['Fname']."','".$_POST['dob']."','".$_POST['username']."','".$_POST['password']."','".$_POST['email']."')";
            $result=mysqli_query($conn,$q);
            echo '<script type="text/javascript">'; 
            echo 'alert("Account created successfully!!!");'; 
            echo 'window.location.href = "login.php";';
            echo '</script>';
            
        }
    }
}


?>