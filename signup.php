<?php

include("classes/connect.php");
include("classes/signup.php");
$first_name="";
$last_name="";
$gender="";
$email="";
$profile_pic="";

if($_SERVER['REQUEST_METHOD']  == 'POST')
{
  $signup= new Signup();
  $result = $signup->evaluate($_POST);
 if($result !=""){
     echo $result;
 }
 else
 {
  header("location:login.php");
  die;
 }
   $first_name=$_POST['first_name'];
   $last_name=$_POST['last_name'];
   $gender=$_POST['gender'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $profile_pic=$_POST['profile_pic'];

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <style>
  #photo2{
            margin-top: 10px;
            margin-left: 7px;    
        height: 75px;
        width: 75px;
        }
    #bar{
        height: 100px;
        width: 1450px;
        background-color: rgb(2, 21, 78);
        color: rgb(255, 255, 255);
        font-size: 40px;
        }
        #signup{
            font-size: 15px;
           background-color: #42b72a;
           width: 70px;
           text-align: center;
           padding: 4px;
           border-radius: 4px;
       margin-left: 1350px;
        }
        #page{
            background-color: white;
             width: auto;
             height: auto;
             text-align: bold;
             margin-top: auto;
             padding: 10px;
             text-align: center;
             padding: 50px;
             margin-left: auto;
             }
             #text{
                height: 40px;
                width: 300px;
                border-radius: 4px;
                border:solid 1px #aaa 
             }
             #button{
                height: 40px;;
                width: 400px;
                border-radius: 4px;
                font-weight: bold;
                border: none;
                background-color: rgb(59,89,152);
                color:white;
                margin-left: auto;
             }
             #otp{
                height: 30px;
                width: 100px;
                border-radius: 4px;
                border:solid 1px #aaa  
             }
  </style>
  <body style="font-family:tahoma;background-color: #e9ebee;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" >
        <div class="container-fluid">
          <a class="navbar-brand" href="home.html" ><img src="logo.jpg" style="width: 5rem; height: 5rem;" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <button class="btn btn-outline-success" type="submit">Log in</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-2 col-1 vartical-line bg-sucess" ></div>
            <div class="col-xl-4 col-md-2 col-1 vartical-line bg-primary" ></div>
            <div class="col-xl-4 col-md-2 col-1 vartical-line bg-sucess"  ></div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
         <div id="page">
         </a><h3>Sign up to Social Link</h3><br><br>
         <form action="" method="post">
          <input  name="first_name" type="text" id="text" placeholder="First name" required><br><br>
          <input  name="last_name"  type="text" id="text" placeholder="Last name" required><br><br>       
          <select name="gender" id="text" required>
              <option ></option>
              <option>Male</option>
              <option>Female</option>
          </select><br><br>
          <input  name="email"  type="text" id="text" placeholder="email or phone number" required><br><br>
          <input name="password"  type="password" id="text"placeholder="Password" required><br><br>
          <input type="password2" id="text"placeholder="Comfirm Password" required><br><br>
          <div style="padding: center;">Profile Picture:</div>
        <input   class="btn btn-outline-success" id="text" type="file" name="profile_pic"></input><br><br>
          <button class="btn btn-outline-success" type="submit" id="text">Sign up</button>
              </form>
             </div>
  </body>
  </body>
</html>