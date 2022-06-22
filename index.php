<?php
$server="localhost";
$username='root';
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);
if(isset ($_POST["submitButton"] ) )
{
    //1.Fetch form data
    $firstname=$_POST["firstname"];
    $lastName=$_POST["lastName"];
    $email=$_POST["email"];
    $phone=$_POST["phone_number"];
    $message=$_POST["message"];
    //Submit form data
    $insert_data= mysqli_query($conn,"INSERT INTO 
    contactus(firstname,lastname,email,phonenumber,message)
    VALUES('$firstname','$lastName','$email','$phone','$message')
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zalego Academy</title>
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
                    <a href="index.php" class="nav-link active">Home</a>
                    <a href="about-us.php" class="nav-link">About us</a>
                    <a href="#" class="nav-link">Contact us</a>
                </div>

            </div>
        </div>
     </nav> -->
    <!--End navigation bar -->


    <main class="p-5 mb-4 bg-light rounded-8 mt-4 ">
        <h1>
            Welcome, Timothy Muyelele 
        </h1>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem hic nostrum nihil aperiam, quos excepturi. Voluptatem, expedita eos quod velit quis sed, sunt debitis dolorum, nemo incidunt eius est. Itaque, quod aspernatur! Expedita, minus corporis accusamus earum tempora nisi magnam, in, veritatis fugiat quae sint? Quasi deserunt, totam, qui odio .
        </p>
        <button class="btn btn-primary">
            learn more
        </button> 
    </main>
    <div class="container">
       <div class="row">
           <div class="col-lg-4 ">
               <h1>Header 1</h1>
               <p>
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, amet. Eveniet atque incidunt iusto veritatis dolorem autem laudantium libero ut, quasi aliquid sapiente itaque cupiditate accusamus alias at esse, magni impedit dolore voluptate. Corporis quos quo natus molestiae, alias consequuntur laboriosam dignissimos amet provident explicabo ea voluptatum cum, rem ad?
               </p>
               <button class="btn btn-primary">Learn more</button>
           </div>
           <div class="col-lg-4 ">
            <h1>Header 2</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, amet. Eveniet atque incidunt iusto veritatis dolorem autem laudantium libero ut, quasi aliquid sapiente itaque cupiditate accusamus alias at esse, magni impedit dolore voluptate. Corporis quos quo natus molestiae, alias consequuntur laboriosam dignissimos amet provident explicabo ea voluptatum cum, rem ad?
            </p>
            <button class="btn btn-primary">Learn more</button>
        </div>
        <div class="col-lg-4   fade-out-left">
            <h1>Header 3</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, amet. Eveniet atque incidunt iusto veritatis dolorem autem laudantium libero ut, quasi aliquid sapiente itaque cupiditate accusamus alias at esse, magni impedit dolore voluptate. Corporis quos quo natus molestiae, alias consequuntur laboriosam dignissimos amet provident explicabo ea voluptatum cum, rem ad?
            </p>
            <button class="btn btn-primary">Learn more</button>
        </div>
       </div>
       <!-- contact us page here -->
       <div class="row pt-5">
           <h1>
               Contact Us
           </h1>
           <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum porro at, corporis distinctio blanditiis corrupti sunt eaque nostrum voluptates cumque, natus ipsa laboriosam architecto minus, quibusdam unde sapiente. Voluptatem accusamus ea fugiat ex non, corporis libero aliquid cum a ipsa! Doloribus.
           </p>
           <form action="index.php" method="POST" > 
               <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Enter your first name please">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" name="lastName"class="form-control" placeholder="Enter your last name please">
                </div>
               </div>
               <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your e-mail address please">
                </div>   
                <div class="mb-3 col-lg-6">
                    <label for="phone-number" class="form-label">Phone number</label>
                    <input type="tel"name= "phone_number"class="form-control" placeholder="Enter your phone number please">
                </div>
                <div class="row">
                  <div class="col-lg-12">
                      <label for="Message" class="form-label">Your Message</label>
                      <textarea  cols="30" rows="5" name="message" class="form-control"></textarea>
                  </div>
                </div>
      <div class="pt-3" >                         
        <button  type="submit" name="submitButton" class="btn btn-primary">Send Message</button>     
      </div>       
           
           </form>

       </div>
       <!-- contact us page ends here -->

    <hr>
    <footer>
     &copy;Company 2022
    </footer>
    </div>
    <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   
    
</body>
</html>