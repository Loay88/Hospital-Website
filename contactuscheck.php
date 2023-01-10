<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "","hospital") or die('could not connect:');



if(isset($_POST['save']))
{
   
    $name=$_POST["name"];
    $N_pattern= "/^[a-zA-Z\s]{2,}$/";
    $message=$_POST['message'];
    $M_pattern = "/^[a-zA-Z\s]{2,}$/";
    $email=$_POST['email'];
    $E_pattern = "/^[a-zA-Z0-9.]{3,}@[a-zA-Z]+[.]{1}[a-zA-Z]+$/";
    $subject=$_POST['subject'];
    
    if($name=="" or $message=="" or $email==""){
        echo '<script type="text/javascript">'; 
        echo 'alert("All fields are required.");'; 
        echo 'window.location.href = "Contactus.html";';
        echo '</script>';
    }
    elseif(!preg_match($N_pattern,$name)){
        echo '<script type="text/javascript">'; 
        echo 'alert("Name is not valid.");'; 
        echo 'window.location.href = "Contactus.html";';
        echo '</script>';
    }
    elseif(!preg_match($E_pattern,$email)){
        echo '<script type="text/javascript">'; 
        echo 'alert("Email is not valid.");'; 
        echo 'window.location.href = "Contactus.html";';
        echo '</script>';
    }
    elseif(!preg_match($M_pattern,$message)){
        echo '<script type="text/javascript">'; 
        echo 'alert("Message is not valid.");'; 
        echo 'window.location.href = "Contactus.html";';
        echo '</script>';
    }
    else
    {
            
        $q="INSERT INTO contact (`Name`, `Email`, `Subject`, `Message`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."')";
        $result=mysqli_query($conn,$q);
        echo '<script type="text/javascript">'; 
        echo 'alert("Thanks For Contacting Us");'; 
        echo 'window.location.href = "Contactus.html";';
        echo '</script>';
            
    }
   
}


?>