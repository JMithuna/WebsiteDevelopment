<?php
    include "./feedback/logicfeedback.php"
?>


<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->


<html>
    <head>
        <meta charset="UTF-8">
        <title>Feedback from users</title>
    </head>
    <body>
        <?php
        echo "Please provide our organisation with your valuable feedback so that we can serve you better. Thank you!";
        ?>
        
        <?php if(isset($_REQUEST['info'])){?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div>
                    Feedback has been submitted successfully!
                </div>
            <?php }?>
        <?php }?>
        
        <div>
            <a href="createfeedback.php"><input type="button" value="Feedback to us" name="feedback"></a>
        </div>
        
        <div>
            <!-- display content from feedback -->
            <?php foreach($feedback_query as $fq) {?>
                <h5><?php echo $fq['feedback_name'];?></h5>
                <p><?php echo $fq['feedback_content'];?></p>
                
                
            <?php }?>
        </div>
        
        
    </body>
</html>
