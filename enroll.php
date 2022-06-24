<?php
include("penroll.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register now</title>
</head>
<body>
     <!-- begin navigation bar-->
     <nav class="navbar navbar-expand-lg bg-light fixed-top shadow p ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarDisplayNavigations">

                <div class="navbar-nav">
                    <a href="index.php" class="nav-link ">Home</a>
                    <a href="about-us.php" class="nav-link">About us</a>
                    <a href="enroll.php" class="nav-link active btn btn-primary ">Register now</a>
                </div>

            </div>
        </div>
     </nav> -->
    <!--End navigation bar -->
    <main class="p-5 mb-4 bg-light rounded-8 mt-4 ">
        <h1 class="fw-bold text-center">
            JULY SOFTWARE ENGINEERING BOOTCAMP     
        </h1>
     <div class="container  ">    
        <div class="row row-cols-auto p-3 ms-5 ps-5">
           <div class="col ">
               <i class="fa fa-calendar fa-3x"></i> 
           </div>
           <div class="col align-self-center fw-normal fs-5">
             <span>20th July 2022</span>
           </div>
           
        </div>
        <div class="row row-cols-auto p-3 ms-5 ps-5">
            <div class="col ">
                <i class="fa fa-map-marker fa-4x"></i> 
            </div>
            <div class="col align-self-center fw-normal fs-5">
              <span>Zalego Academy,<br>Devan plaza</span>
            </div>
            
         </div>
     </div>   
    </main>
  <div class="container">
    <p class="text-center fs-4">
        Looking for a place to kickstart your career in Technology?<br>
        Whether you're a local, new in town or just cruising through we've got <br>
        loads of great tips and events for you.
    </p>
     <div class="card">
        <div class="card-body">
            <h1 class="fw-bold text-center">
                Sign up today ?
            </h1>
            <form action="enroll.php" method="POST" class="row g-3 needs-validation "   novalidate>
            <?php if( $enroll) 
               {
                include("resenroll.php");
               }
               ?>

                <div class="col-md-5 mx-auto">
                    <label for="name" class="form-label fw-semibold">Full name</label> 
                    <input type="text" class="form-control shadow-sm p-3 mb-5 bg-body rounded "name="fullname" id="name" placeholder="Enter your full name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        please enter your full name.
                    </div>
                  
                </div>
                <div class="col-md-5 mx-auto">
                    <label for="phone" class="form-label fw-semibold">Phone Number</label>
                    <input type="tel" class="form-control shadow-sm p-3 mb-5 bg-body rounded " name="phonenumber" id="Phone" placeholder="+2547........." required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        please enter your phone number.
                    </div>
                </div>
                <div class="col-md-5 mx-auto">
                    <label for="email" class="form-label fw-semibold ">E-mail</label>
                    <input type="email" class="form-control shadow-sm p-3 mb-5 bg-body rounded " name="email" id="name" placeholder="Please enter your email" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        please enter your email
                    </div>
                </div>
                <div class="col-md-5 mx-auto">
                    <label for="gender" class="form-label fw-semibold ">What's your gender?</label>
                    <select class="form-select shadow-sm p-3 mb-5 bg-body rounded " name="gender" aria-label="Default select example" required >
                        <option selected aria-label="Disabled select example" disabled>--select your gender</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Other</option>
                    </select>
                    <div class="valid-feedback">
                        good
                    </div>
                    <div class="invalid-feedback">
                        please choose your gender
                    </div>
                </div>
                <div class="col-md-12 pt-5">
                    <p class="text-center fs-5">
                        In order to complete your registration to the bootcamp, you are required to select one course you will be <br>
                        undertaking. Please NOTE that this will be your learning track during the 2-weeks immersion.
                    </p>
                </div>
                <div class="col-md-7 pt-2 ms-5">
                    <label for="courses"class="form-label fw-semibold">what's your prefered course</label>
                    <select class="form-select shadow-sm p-3 mb-5 bg-body rounded " name="course" aria-label="Default select example" required>
                        <option selected aria-label="Disabled select example" disabled>--select your course--</option>
                        <option value="1">Web design & development</option>
                        <option value="2">Cyber security</option>
                        <option value="3">Android application development-Kotlin</option>
                        <option value="4">Data annotation</option>
                        <option value="5">Data analysis </option>
                        <option value="6">software design & development</option>
                        <option value="7">Data analysis with python</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        please choose your course
                    </div>

                </div>
                <div class="col-md-12 pt-2">
                    <p class="text-center fs-5">
                        You agree by providing your information you understand all our data privacy and protection policy <br>
                        Outlined in our terms & condition and the Privacy PolIicy statements.
                    </p>
                </div>
                <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label fw-semibold" for="invalidCheck">
                        Agree to terms and conditions
                      </label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" name="submit" type="submit">Submit application</button>
                </div>

            </form>
        </div>
     </div>
     <form action="about-us.php" method="POST" class="pt-3" > 
        <div class="row d-flex justify-content-center pb-3 mx-auto">
            <p class="fw-lighter fs-4 text-center">Subscribe to get information, latest news about <br>Zalego Academy</p>
            <div class=" col-lg-4 justify-content-center pl-5 ml-5 align-items-center ">
                <label for="email" class="form-label fw-semibold ">E-mail</label>
                <input type="email" class="form-control " name="email" placeholder="Enter your e-mail address please">     
            </div>
            <div class=" mt-4 p-2 col-lg-3 pb-5">
                <button class="btn btn-primary" name="subscribe">Subscribe</button>  
            </div>   
          </div>
      </form>    
  </div>
  
  <hr>
  <footer class="pb-5">
    &copy;Company 2022
   </footer>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
</body>
</html>