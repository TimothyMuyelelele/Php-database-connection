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
        $response ="Data submitted successfully";
    }
    else{
        $response="Error occured" .mysqli_error($conn);
    }                
}
?>