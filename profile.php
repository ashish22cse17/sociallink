<?php
session_start();
//print_r($_SESSION);
include("classes/connect.php");
include("classes/login.php");
include("classes/user.php");


//check if user is logged in
if(isset($_SESSION['social_userid'])&& is_numeric($_SESSION['social_userid'])){
  $id=$_SESSION['social_userid'];
  $login= new Login();
  $result=$login->check_login($id);
  if($result){
    //retrive user data
    $user=new User();
    $user_data=$user->get_data($id);
    if(!$user_data){
      header("location:login.php");
      die;
    }
  }
  else{
    header("location:login.php");
    die;
  }
}
else{
  header("location:login.php");
  die;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Link | profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <style>
    #homepage2{
      background-color:white;
             width: auto;
             height: auto;
             text-align: bold;
             margin-top: 10px;
             padding: 10px; 
             border-radius: 3px;
             padding: 50px;
             margin-left: auto;
             
             }
 
     #post1{
      background: linear-gradient(white,rgba(136, 212, 137, 0.338));
 height: 150px;
      width: 85%;
      border-radius: 5px;
      transition-property: none;
     
    }
    #post{
    
      height: 150px;
      width: auto;
      margin-left: 300px;
    }

#suggestion{
            background: linear-gradient(grey,white);
             width: auto;
             height: auto;
             text-align: bold;
             margin-top: auto;
             padding: 10px;
             text-align: center;
             border-radius: 3px;
           
             }
  #homepage1{
      background-color: #88869f5f;
             width: auto;
             height: auto;
             text-align: bold;
             margin-top: 10px;
             padding: 10px; 
             border-radius: 3px;
             padding: 50px;
             margin-left: 100px;
             margin-right: 100px;
             
             }
  #page2{
    background-color:rgba(72, 88, 94, 0.155);
     width: auto;
     height:5px;
     text-align: bold;
     margin-top: auto;
     padding: 10px;
    
     border-radius: 3px;
     padding: 50px;
     margin-left: auto;
     }
     
     #page3{
           background:linear-gradient(grey,white);
             width: auto;
             height: auto;
             text-align: bold;
             margin-top: auto;
             padding: 10px;
             text-align: center;
             border-radius: 3px;
             padding: 50px;
             margin-left: auto;
             }
    
    #page{
           background:linear-gradient(white,grey);
             width: auto;
             height: auto;
             text-align: bold;
             margin-top: auto;
             padding: 10px;
             text-align: center;
             border-radius: 3px;
             padding: 50px;
             margin-left: auto;
             }
    #photo2{
      height: 40px;
      width:40px ;
    }
    #dp{
      border-radius: 50%;
    }
    #photo{
      height: 45px;
      margin-right: 10px;
      margin-left: 5px;
      width: 45px;
      text-align: center;
    }
  #button{
    height: 50px;
    width: 150px;
    background-color: #88869f00;
text-align: center;
border-radius: 5px;
border: #88869f5f;
margin-top: 10x;
margin-left: 110px;
  }
  </style>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark"  >
        <div class="container-fluid">
          <a class="navbar-brand" href="home.html" ><img src="logo.jpg" style="width: 5rem; height: 5rem;" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Friends</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Setting
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Privacy Settings</a></li>
                  <li><a class="dropdown-item" href="#">Data and Privacy</a></li>
                  <li><a class="dropdown-item" href="#">Account Security</a></li>
                  <li><a class="dropdown-item" href="#">privacy Settings</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                </ul>
              </li>
              <li class="nav-item">
                
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Social - Link" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <div id="blue">
      <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div id="blue">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <div ><a href="home.html">
                <button id="button"><img src="home.png" id="photo"><label>Home</label></a></button></div>
                <div ><a href="explore.html">
                <button id="button"><img src="commuunity.png" alt="" id="photo"><label>Explore</label></a></button></div>
                <div ><a href="chats.html">
                <button id="button"><img src="chat.png" alt="" id="photo"><label>Chats</label></a></button></div>
                <div ><a href="notification.html">
                <button id="button"><img src="noti.png" alt="" id="photo2"><label>Notifications</label></a></button></div>
                <div><a href="profile.html">
                <button id="button"><img src="profile.png" alt="" id="photo"><label>Profile</label></a></button></div>
            </ul>
          </div>
        </div>
      </nav>
<div id="page">
  <picture><a href="<?php echo $user_data['profile_pic']?>">
  <img src="<?php echo $user_data['profile_pic']?>" alt="" id="dp"></a></picture>
  <div> <h4><?php echo $user_data['first_name']. " ".$user_data['last_name']?></h4></div>
  <div><h6>1 Follower  1 Following </h6></div>
  <button class="btn btn-outline-success" type="submit"> Add Status</button>
  <button class="btn btn-outline-success" type="submit">Profile Picture</button>
  <button class="btn btn-outline-success" type="submit">Update Profile</button>
</div>
<div id="page3" style="text-align: center;">
  <div><h4>New Post:</h4></div>
<div>
<input type="message" placeholder="enter your thoughts" style="height: 50px;width:340px;border-radius: 5px;margin-right: auto;"></div>
<div>
  <div>
<button style="margin-left: 5px;border-radius: 5px;" >Document attach</button>
<button style="margin-left: 5px;border-radius: 5px;" >Post</button>
</div>
</div>
</div>
  <h2 style="margin-left: 50px ;">Recent Posts:-</h2>
  <div id="homepage2">
    <div>
 <img src="<?php echo $user_data['profile_pic']?>" alt="" style="display:block; border-radius: 50%; height:55px;width: 55px;"><a style="display: inline-block;"><h4><?php echo $user_data['first_name']. " ".$user_data['last_name']?></h4>28 minute ago</a></div>
<div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi aperiam reiciendis maxime magni fugit ex doloribus inventore mollitia culpa alias vero molestias, dolores quibusdam, voluptatibus animi vel natus amet aspernatur.</div>
<div>
  <button id="like" >Like</button>
<button id="like" >Comment</button>
<button id="like" >Share</button>
</div>
</div>
</div>
    </body>
</html>