<?php
$server="localhost";
$username='root';
$password="";
$database="zalego";  

$conn=mysqli_connect($server,$username,$password,$database);
if(isset ($_POST["subscribe"] ) ){
  //1.Fetch form data
  $email=$_POST["email"];
  //Submit form data
  $insert_data= mysqli_query($conn,"INSERT INTO 
  subscribers(email)
  VALUES('$email')
  ");  
  if($insert_data){
    echo "Data submitted successfully";
  }
  else{
   echo"Error occured";
  }                
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
</head>
<body>
    <!-- navigation bar here--> 
     <nav class="navbar navbar-expand-lg bg-light fixed-top shadow p ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarDisplayNavigations">

                <div class="navbar-nav">
                    <a href="index.php" class="nav-link ">Home</a>
                    <a href="about-us.php" class="nav-link active">About us</a>
                    <a href="enroll.php" class="nav-link btn btn-primary ">Register now</a>
                </div>

            </div>
        </div>
     </nav>
    <!--End navigation bar -->


    <main class="p-5 mb-4 bg-light rounded-8 mt-4" >
        <h1>
            About us
        </h1>
        <p>
            This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and  
            three supporting pieces or content. Use it as a starting point to create something more unique.
        </p>
    </main>
    <div class="container">
        <div class="row">
            <h1>Our Programs</h1>
            <div class="col-lg-6">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam at officia repellendus reiciendis, reprehenderit aperiam voluptas maiores quod, soluta, ducimus itaque! Corrupti excepturi nostrum repellendus reiciendis, tempora itaque quasi veniam, molestiae qui aut minus quibusdam quas debitis. Quas, fugiat quia.
            </div>
            <div class="col-lg-6">
                <img src="images/samantha-borges-gXsJ9Ywb5as-unsplash (1) (1) (1).jpg" class="rounded mx-auto d-block" alt="laptop image">
            </div>
        </div>
        <div class="row">
          <h1 class="pt-2 pb-3">The Programs</h1>
            <div class="col-lg-4 p-5 ">
                <div class="card text-center">
                  <div class="card-body shadow">
                    <h5 class="card-title p-3">Skill Discovery</h5>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt reprehenderit, aut nobis voluptate minima nostrum.</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 p-5 ">
                <div class="card text-center">
                  <div class="card-body shadow">
                    <h5 class="card-title p-3">Upskilling Program</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae velit suscipit eaque nihil eum accusantium!.</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 p-5 ">
                <div class="card text-center">
                  <div class="card-body shadow">
                    <h5 class="card-title p-3">Path finding Program</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ducimus dolore vero similique et praesentium!.</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                  </div>
                </div>
              </div>
        </div>
      <form action="about-us.php" method="POST" > 
        <div class="row d-flex justify-content-center pb-3 mx-auto">
            <p class="fw-lighter fs-4 text-center">Subscribe to get information, latest news about <br>Zalego Academy</p>
            <div class=" col-lg-4 justify-content-center pl-5 ml-5 align-items-center ">
                <label for="email" class="form-label ">E-mail</label>
                <input type="email" class="form-control " name="email" placeholder="Enter your e-mail address please">     
            </div>
            <div class=" mt-4 p-2 col-lg-3 pb-5">
                <button class="btn btn-primary" name="subscribe">Subscribe</button>  
            </div>   
          </div>
      </form>    
        </div>
       
        <hr>
<footer class="pt-3">
    &copy;Company 2022
</footer>



    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
</body>
</html>