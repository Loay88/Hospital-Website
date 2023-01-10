<?php
$conn = mysqli_connect("localhost", "root", "","hospital") or die('could not connect:');
if (isset($_POST['save'])) 
{
    $username = $_POST['username'];
    $password=$_POST['password'];
    $Manager_flag = 0;
    $patient_qur="select * from patient where Username='$username' and Passwordd='$password'";
    $manager_qur="select * from manager where Username='$username' and passwordd='$password'";
    $patient_result=mysqli_query($conn,$patient_qur);
    $manager_result=mysqli_query($conn,$manager_qur);
    $patient_count=mysqli_num_rows($patient_result);
    $manager_count=mysqli_num_rows($manager_result);
    if($patient_count>0)
    {
        $count=$patient_count;
        $Manager_flag = 0;
    }
    else
    {
        $count = $manager_count;
        $Manager_flag = 1;
    }
    if($count>0)
    {

        // $data=mysqli_fetch_assoc($result);
        $_SESSION['username']=$count['username'];
        $_SESSION['password']=$count['password'];
        if($Manager_flag==1)
        {
            
            // Ana manager w el mfrood aroo7 3la el homepage eli feeha zorar ll manager?
            header("Location: Add_employee.php");
        }
        else
        {
            header("Location: HospitalHomePage.php");
        }
    }
    else
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("User not found");';
        echo 'window.location.href = "login.php";';
        echo '</script>';
    }


}



?>