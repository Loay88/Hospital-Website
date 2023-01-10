<!DOCTYPE html>
<html>

<head>
    <title>Make an appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="HospitalStyling.css">
</head>




<script src="jquery.main.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#Specialty').on('change',function(){
      var specialityID=$(this).val();
      if(specialityID){
        $.get("getDoctors.php",{Specialty : specialityID},function(data){
          $('#doctor').html(data);

        })
      }
      else{
        $('#doctor').html('<option>Select Prefered Doctor</option>')
      }
    });


  });
</script>



<body>


<!--navbar-->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img id="logo" src="HospLogo2.png" alt="Hospital Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav" style="text-align:right;">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="HospitalHomePage.php">Home</a>
        </li>
        <li  class="nav-item">
          <a class="nav-link" href="aboutus.html">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Doctors.html">Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Departments.html">Department</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Services.html">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="locations.html">Locations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.html">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="appointment.html">Appointment</a>
        </li>
        
        
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <a href="login.php">
    <button type="button" class="btn btn-primary btn-lg" ><span id="appoint">Sign In</span></button>
  </a>
  </div>
</nav>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <div class="row inputs">
        <div class="col-lg-9">
            <!-- booking Form  -->
            <form action="" method="post" class="form-grey myform mb-5" onsubmit="validate()">
              <input type="hidden" name="_token" value="izwqgvP8mSKuxRiUOQcLweCALoCtt5G94KnuTbGc">                        
              <input type="hidden" name="recaptcha_token" id="recaptcha_token">

              <div class="row">
                  <div class="col-md-4 col-sm-6">
                      <div class="form-group">
                          <label for="Name">
                              Full Name
                              <span>*</span>
                          </label>
                          <input type="text" class="form-control" id="Name" name="name" >
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                      <div class="form-group">
                          <label for="Phone">
                              Phone
                              <span>*</span>
                          </label>
                          <input type="tel" class="form-control" id="Phone" name="phone">
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                      <div class="form-group">
                          <label for="Email">
                              Email
                              <span>*</span>
                          </label>
                          <input type="email" class="form-control" id="Email" name="email">
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                      <div class="form-group">
                          <label for="Specialty">
                              Speciality
                              <span>*</span>
                          </label>
                          <select class="form-control custom-select" id="Specialty" name="Speciality">
                          <option selected="selected">Select Specialty </option>
                          <?php
                          $conn = mysqli_connect("localhost", "root", "","hospital") or die('could not connect:');
                          $speciality_quer = mysqli_query($conn, "select * from doctor group by Speciality");
                          while($row=mysqli_fetch_array($speciality_quer)){
                            ?>
                            <option value="<?php echo $row['Speciality'];?>">
                            <?php
                            echo $row['Speciality']
                            ?>
                            </option>
                          <?php
                          }
                          ?>
</select>
                      </div>
                  </div>


                  <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label for="Specialty">
                            Doctor
                            <span>*</span>
                        </label>
                        <select class="form-control custom-select" id="doctor" name="doctor">
                          <option selected="selected">Select Prefered Doctor</option>


                        </select>
                    </div>
                </div>


                  <div class="col-md-4 col-sm-6">
                      <div class="form-group">
                          <label for="Date">
                              Date
                              <span>*</span>
                          </label>
                          <input type="date" class="form-control" id="datePicker" name="date" value="todayDate">
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <br>
                      <button type="submit" class="btn btn-primary">
                          Request Now
                      </button>
                  </div>
              </div>
            </form>
        </div>
        
    </div>
</div>
</body>
</section>


 <!--footer-->
 <div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="HospitalHomePage.php" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="Contactus.html" class="nav-link px-2 text-muted">Contact Us</a></li>
      <li class="nav-item"><a href="locations.html" class="nav-link px-2 text-muted">Locations</a></li>
      <li class="nav-item"><a href="" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="aboutus.html" class="nav-link px-2 text-muted">About Us</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2022 Company, Inc</p>
  </footer>
</div>
            
            
            
            
            
          
<script type="text/javascript">
            
  function validate(){
    //first name
  var FN= document.getElementById('Name').value;
  var RFN= /^[a-zA-Z]{2,}$/;
  var FNres=RFN.test(FN);
  if(FNres==false){
    alert('Please enter a valid name');
    return false;
  }
   //PN
   var PN= document.getElementById('Phone').value;
  var RPN= /^[0]{1}[1]{1}[0-9]{9}$/;
  var PNres=RPN.test(PN);
  if(PNres==false){
    alert('Please enter a valid Phone Number');
    return false;
  }
  //email
  var em= document.getElementById('inputEmail').value;
                var Rem= /^[a-zA-Z0-9_\.]{3,}@[a-zA-Z]+[.]{1}[a-zA-Z]+$/;
                var emres=Rem.test(em);
                if(emres==false){
                  alert('please enter a valid email');
                  return false;
                }
 
}
// function todayDate(_date){
//   var today = new Date(_date);
//   var todayDate=new Date(today.getFullYear() , today.getMonth() , today.getDate());
//   return todayDate;
// }
// var todayDate=new Date(today.getFullYear() , today.getMonth() , today.getDate());
// document.getElementById('datePicker').value = new Date().toDateInputValue();

var date = new Date();

var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var today = year + "-" + month + "-" + day;       
document.getElementById("datePicker").value = today;
</script>

</body>
</html>