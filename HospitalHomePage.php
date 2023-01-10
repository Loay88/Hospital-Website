<!DOCTYPE html>
<html>
    <head>
<title>Home page</title>
<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="HospitalStyling.css">
    </head>
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
          <a class="nav-link active" aria-current="page" href="HospitalHomePage.php">Home</a>
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
          <a class="nav-link" href="appointment.php">Appointment</a>
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



            
            <!--carousel-->
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://static.scientificamerican.com/sciam/cache/file/F6FF3DF2-A99D-4BE0-99595C9E4717FEF4_source.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="container">
                  <h1 class="h1">We Believe Everyone Should Have <br>Easy Access To Great Health Care</h1>
                  <a href="sign_up.html"><button type="button" class="btn btn-primary btn-lg b1" ><span id="appoint">Sign Up</span></button></a>
                  <a href="GetCareNow.html"><button type="button" class="btn btn-primary btn-lg b1" ><span id="appoint">Get Care Now</span></button></a>
                </div>
                </div>
                  

                </div>
                <div class="carousel-item">
                    <img src="doctor12.webp" alt="..." width="1600px">
                    <div class="carousel-caption d-none d-md-block">
                      <div class="container">
                      <h1 class="h1">We Provide Top Medical<br>Health Across Egypt</h1>
                      <a href="sign_up.html"><button type="button" class="btn btn-primary btn-lg b1" ><span id="appoint">Sign Up</span></button></a>
                      <a href="Contactus.html"><button type="button" class="btn btn-primary btn-lg b1" ><span id="appoint">Contact Us</span></button></a>
                    </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="carousel3.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <div class="container">
                        <h1 class="h1">Your Health Is Always<br>In The First Place</h1>
                        <a href="sign_up.html"><button type="button" class="btn btn-primary btn-lg b1" ><span id="appoint">Sign Up</span></button></a>
                        <a href="Donate.html"><button type="button" class="btn btn-primary btn-lg b1" ><span id="appoint">Donate</span></button></a>
                      </div>
                    </div>
                  </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              
            </div>
          <!---->
            <section class="icons-container" >

              <div class="icons">
                  <i class="fas fa-user-md"></i>
                  <h3><?php 
                  $conn = mysqli_connect("localhost", "root", "","hospital") or die('could not connect:');
                  $qur="select * from doctor";
                  $result=mysqli_query($conn,$qur);
                  $count=mysqli_num_rows($result);
                  echo $count;
                  ?></h3>
                  <p>Doctors</p>
              </div>
          
             
          
              <div class="icons">
                  <i class="fas fa-procedures"></i>
                  <h3> <?php
                  $conn = mysqli_connect("localhost", "root", "","hospital") or die('could not connect:');
                  $qur="select * from patient";
                  $result=mysqli_query($conn,$qur);
                  $count=mysqli_num_rows($result);
                  echo $count;
                  ?></h3>
                  <p>Patients</p>
              </div>
          
              <div class="icons">
                  <i class="fas fa-hospital"></i>
                  <h3>6</h3>
                  <p>Available Hospitals</p>
              </div>
          
          </section>

          <div class="cookie-container"></div>
          

          

        
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
          



    </body>
</html> 