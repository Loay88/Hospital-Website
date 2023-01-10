<?php
if(isset($_GET['Specialty']) && !empty($_GET['Specialty'])){
    $conn = mysqli_connect("localhost", "root", "","hospital") or die('could not connect:');
    $id=$_GET['Specialty'];
    $query="SELECT * from doctor where Speciality='$id'";
    $do = mysqli_query($conn,$query);
    $count = mysqli_num_rows($do);
    if($count>0){
        while($row=mysqli_fetch_array($do)){
            echo '<option value="'.$row['EMP_ID'].'">'.$row['Name'].'</option>';
        }
    }
    else{
        echo 'alert("No data")';
    }
}
else{
    echo 'alert("No data")';
}
 $conn = mysqli_connect("localhost", "root", "","hospital") or die('could not connect:');
 ?> 

