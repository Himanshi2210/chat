<div id="post">
            <div>

            <?php
              $image ="images/user_male.jpeg";
              if($ROW_USER['gender'] == "Female")
              {
                $image = "images/user_.jpeg";
              }
              if(file_exists($ROW_USER['profile_image']))
              {
                $image = $image_class->get_thumb_profile( $ROW_USER['profile_image']);
              }
            
            
            ?>
              <img src="<?php echo $image ?>" style="width: 75px; margin-right: 4px;">
            </div>
            <div>
              <div style="font-weight: bold; color:#405d9b">
              <?php echo $ROW_USER['first_name'] . " " . $ROW_USER['last_name']; ?>            </div>
             <?php echo $ROW['post']?>
           <br><br>
           <?php

           if(file_exists($ROW['image']))
           {
              $post_image = $image_class->get_thumb_post($ROW['image']);
              echo "<img src='$post_image' style='width:80%;'/>";
           }
            
            ?>
           <br><br>
           <a href="">Like</a> . <a href="">Comment</a> . 
           <span style="color:#999;">
           
             <?php echo $ROW['data']?> 
        </span>          
            </div>
          </div>