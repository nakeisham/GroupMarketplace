<?php
 
session_start()

 

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //if something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    
    }else
    {
        echo "Please enter valid login";
    }
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
      
      <div style="font-size: 20px;margin: 10px;color: white;">Sign up</div>
      <input id="text" type="text"  name="user_name"><br><br>
      <input id="text" type="password"  name="password"><br><br>


      <input id="button" type="submit" value="Sign up"><br><br>


      <a href="login.php">Click to login</a><br><br>


    </form>

  
     </div>





</body>
</html>
