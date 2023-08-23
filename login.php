<?php
session_start();
    include("classes/connect.php");
    include("classes/login.php");

   
   
    $email = "";
    $password = "";
 
  
   
   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {

   $login = new Login();
  $result = $login->evaluate($_POST);

  if($result !=""){
    
    echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
    echo "<br>The following errors occured:<br><br>";
    echo $result;
    echo "</div>";
  }else
  {
        header("Location: Profile.php");
        die;
  }
  

  $email = $_POST['email'];
  $password = $_POST['password'];
 
   }
  
  
?>

<html>

<head>
    <title>MyChat | Login</title>
    <style>
        #bar {
            height: 100px;
            background-color: rgb(59, 89, 152);
            color: blue;
            font-size: 40px;
            color: white;
            padding: 4px;
        }

        #signup_button {
            background-color: #42b72a;
            font-size: 20px;
            width: 70px;
            text-align: center;
            padding: 4px;
            border-radius: 4px;
            float: right;
        }

        #bar2 {
            background-color: white;
            width: 800px;

            margin: auto;
            margin-top: 50px;

            padding: 10px;
            padding-top: 50px;
            text-align: center;
            font-size: bold;
        }

        #text {
            height: 40px;
            width: 300px;
            border-radius: 4px;
            border: solid 1px #aaa;
            padding: 4px;
            font-size: 14px;
        }
        #button{
            height: 40px;
            width: 300px;
            border-radius: 4px;
            border: none;
           
           
            background-color: rgb(59, 89, 152) ;
            color: white;
        }
    </style>
</head>

<body style="font-family: tahoma; background-color: #e9ebee;">
    <div id="bar">
        <div style="font-size: 40px;">MyChat</div>

        <div id="signup_button">Signup </div>
    </div>
    <div id="bar2">
        <form method="post">
       <b> Login to MyChat</b><br><br>
        <input name="email" value="<?php echo $email ?>" type="text" id="text" placeholder="Email"><br><br>
        <input name="password" value="<?php echo $password ?>" type="password" id="text" placeholder="Password"><br><br>
        <input type="submit" id="button" value="Login"><br><br><br>
        </form>
    </div>
</body>

</html>