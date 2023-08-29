<?php
session_start();

include("classes/connect.php");
include("classes/login.php");

$email="";
$password="";

if($_SERVER['REQUEST_METHOD']  == 'POST')
{
  $login= new Login();
  $result = $login->evaluate($_POST);
 if($result !=""){
     echo $result;
 }
 else
 {
  header("location:profile.php");
  die;
 }
   $email=$_POST['email'];
   $password=$_POST['password'];
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
  #photo{
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
          <a class="navbar-brand" href="Social Link.html" ><img src="logo.jpg" style="width: 5rem; height: 5rem;" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <button class="btn btn-outline-success">Sign up</button>
            </form>
          </div>
        </div>
      </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <div id="page">
      <form method="post">
    </a><h3 style="color:rgba(0, 0, 0, 0.688)">Log in to Social Link</h3><br><br>
        <input name="email" type="text" id="text" placeholder="email or username or phone number"><br><br>
        <input name="password" type="password" id="text"placeholder="password"><br><br>
        <div type="submit"  href="login.html">
          <button class="btn btn-outline-success" type="submit" id="text">Log in</button></form>
        </div>
        <div style="padding: center;">
        <a href="forget1.html"><strong>Forget Password?</strong></a>
        <a href="signup11.html"><strong>Sign up to Social Link</strong></a>
</body>
</html>