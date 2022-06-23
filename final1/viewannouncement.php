<?php
    include "logicannouncement.php"
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
        <?php foreach($announcement_query as $aq) {?>
            
            <h1><?php echo $aq['announcement_title'];?></h1>
            <p><?php echo $aq['announcement_content'];?></p>
            
            <a href="editannouncement.php?id=<?php echo $aq['announcement_id'];?>">Edit</a>
        
            <form method="POST">
                <input type="text" hidden name="id" value="<?php echo $aq['announcement_id'];?>">
                <button name="deleted_announcement">Delete</button>
            </form>
            
            
        <?php }?>
        
        </div>
        
    </body>
</html>
