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
        <div>
        <?php foreach($blog_query as $bq) {?>
            
            <h1><?php echo $bq['blog_title'];?></h1>
            <p><?php echo $bq['blog_content'];?></p>
            
            <a href="editblog.php?id=<?php echo $bq['blog_id'];?>">Edit</a>
        
            <form method="POST">
                <input type="text" hidden name="id" value="<?php echo $bq['blog_id'];?>">
                <button name="deleted_blogpost">Delete</button>
            </form>
            
            
        <?php }?>
        </div>
        
    </body>
</html>
