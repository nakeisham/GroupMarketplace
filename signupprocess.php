<?php
 
session_start()

 

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //if something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    
 
  }
?>


<!DOCTYPE html>
<html>
<head>
     <title>Sign up</title>
</head>
<body>
   
   <style type='text/css'>
   	    
     #text{
       
        height: 25px;
   	    border-radius: 5px;
        padding: 4px;
   	    color: white;
   	    border: solid thin #aaa;
   	    width: 100%;
   	 }


     #button{

       padding:10px;
       width: 100px;
       color: white;
       background-color: lightskyblue;
       border:none;
     }

   	 #box{

       background-color: grey;
       margin: auto;
       width: 300px;
       padding: 20px;
   	}

   </style>

   <div id="box"> 

   <form method="post">
      
     <?php

if (empty($_POST["name"])) {
    die("Name is required");
}

if (strlen($_POST["studentid"]) < 8 ) {
    die ("Enter valid Student number") ;
}

if (strlen($_POST["password"]) <10 ) {
    die ("Password needs to be at least 10 characters") ;
}

if (preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if (preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password]"] !== $_POST["password_confirmation"]) {
    die("Passwords do not match");
}


print_r($_POST);


    </form>

  
     </div>





</body>
</html>
