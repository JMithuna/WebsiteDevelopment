<?php
    include "logicblog.php"
?>


<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->


<html>
    <head>
        <meta charset="UTF-8">
        <title>Blog for Environmental Sustainability</title>
    </head>
    <body>
        <?php
        echo "Let's play a part in improving environmental sustainability";
        ?>
        
        <?php if(isset($_REQUEST['info'])){?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div>
                    Post has been added successfully!
                </div>
            
            <?php } else if($_REQUEST['info'] == "updated"){?>
                <div>
                    Post has been updated successfully!
                </div>
            
            <?php } else if($_REQUEST['info'] == "deleted"){?>
                <div>
                    Post has been deleted successfully!
                </div>
            <?php }?>
        <?php }?>
        <div>
            <a href="createblog.php"><input type="button" value="Create a new post" name="blogpost"></a>
        </div>
        
        <div>
            <!-- display content from blog -->
            <?php foreach($blog_query as $bq) {?>
                <h5><?php echo $bq['blog_title'];?></h5>
                <p><?php echo $bq['blog_content'];?></p>
                <a href="viewblog.php?id=<?php echo $bq['blog_id'];?>"><input type="button" value="Read More"></a>
                
            <?php }?>
        </div>
         
        
    </body>
</html>
