<?php
    include "./feedback/logicfeedback.php"
?>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>Give us your feedback</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                min-height: 100vh;
            }
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form method="POST">
                Enter your name: <input type="text" name="feedback_name"> 
                <br>
                <br>
                <br>
                Please enter feedback: <textarea name="feedback_content" rows="5" cols="50"></textarea>
                
                <button name="new_feedback">Submit feedback</button>
            </form>
        </div>
    </body>
</html>
