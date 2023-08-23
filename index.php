<?php
 
   
     

 include("classes/autoload.php");
 
 
 $login = new Login();
 $user_data = $login->check_login($_SESSION['mychat_userid']);

?>


<!DOCTYPE html>
<html>

<head>
  <title>Profile | MyChat</title>
</head>

<style type="text/css">
  #blue_bar {
    height: 50px;
    background-color: #405d9b;
    color: #d9dfeb;
  }

  #search_box {
    width: 400px;
    height: 18px;
    border-radius: 5px;
    border: none;
    padding: 4px;
    font-size: 14px;
    margin: 8px;
    background-image: url(icon.jpg);
    background-repeat: no-repeat;
    background-position: right;
  }

  #profile_pic {
    width: 150px;
    border-radius: 50%;
    border: solid 2px white;
  }

  #menu_buttons {
    width: 100px;
    display: inline-block;
    margin: 2px;
  }

  #friends_img {
    width: 75px;
    float: left;
    margin: 8px;
  }

  #friends_bar {

    min-height: 400px;
    margin-top: 20px;
    padding: 8px;
    text-align: center;
    font-size: 20px;
    color: #405d9b;
  }

  #friends {
    clear: both;
    font-size: 12px;
    font-weight: bold;
    color: #405d9b;
  }

  textarea {
    width: 100%;
    border: none;
    font-family: tahoma;
    font-size: 14px;
    height: 60px;
  }

  #post_button {
    float: right;
    background-color: #405d9b;
    border: none;
    color: white;
    padding: 4px;
    font-size: 14px;
    border-radius: 2px;
    width: 50px;
  }

  #post_bar{
    margin-top: 20px;
    background-color: white;
    padding: 10px;
  }

  #post{

    padding: 4px;
    font-size: 13px;
    display: flex;
    margin: 20px;
  }
</style>

<body style="font-family: tahoma; background-color: #d0d8e4;">
  <br>
  <!--top bar-->
  <?php include("header.php");?>
  <!--cover area-->
  <div style="width: 800px; margin:auto; min-height: 400px;">
    
    <!--below cover area-->
    <div style="display: flex;">
      <!-- friends area-->
      <div style="min-height: 400px; flex:1;">
        <div id="friends_bar">
          <img src="selfie.jpg" id="profile_pic"><br>
          <a href="profile.php" style="text-decoration:none;">
           <?php echo $user_data['first_name'] . "<br> " . $user_data['last_name']?>
          </a>
        </div>
      </div>
      <!--posts area-->
      <div style="min-height: 400px; flex:2.5; padding: 20px; padding-right:0px;">
        <div style="border: solid thin #aaa; padding: 10px; background-color:white;">
          <textarea placeholder="Whats on your mind?"></textarea>
          <input id="post_button" type="submit" value="Post">
          <br>
        </div>

        <!--posts-->
        <div id="post_bar">

        <!--post 1-->
          <div id="post">
            <div>
              <img src="photo.webp" style="width: 75px; margin-right: 4px;">
            </div>
            <div>
              <div style="font-weight: bold; color:#405d9b">First User</div>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et, ut? Fuga ex quos in? Soluta quasi error enim debitis aperiam corporis, consequuntur voluptate odio, ab expedita nisi voluptatem consequatur explicabo animi quibusdam libero placeat. Consequuntur, cumque. Explicabo totam minima itaque nostrum voluptatem nesciunt impedit rem neque? Ad placeat expedita mollitia distinctio? Aperiam eius excepturi voluptate?
           <br><br>
           <a href="">Like</a> . <a href="">Comment</a> . <span style="color:#999;">June 22 2021</span>          
            </div>
          </div>

            <!--post 2-->
            <div id="post">
            <div>
              <img src="user4.jpg" style="width: 75px; margin-right: 4px;">
            </div>
            <div>
              <div style="font-weight: bold; color:#405d9b">Fouth User
            </div>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et, ut? Fuga ex quos in? Soluta quasi error enim debitis aperiam corporis, consequuntur voluptate odio, ab expedita nisi voluptatem consequatur explicabo animi quibusdam libero placeat. Consequuntur, cumque. Explicabo totam minima itaque nostrum voluptatem nesciunt impedit rem neque? Ad placeat expedita mollitia distinctio? Aperiam eius excepturi voluptate?
           <br><br>
           <a href="">Like</a> . <a href="">Comment</a> . <span style="color:#999;">June 22 2021</span>          
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</body>

</html>