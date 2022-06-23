<?php
    include "logicblog.php"
?>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>Create a blogpost</title>
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
                Title: <input type="text" name="blog_title"> 
                <br>
                <br>
                <br>
                Content: <textarea name="blog_content" rows="5" cols="50"></textarea>
                <br>
                <br>
                <br>
                <button name="new_blogpost">Add post</button>
            </form>
        </div>
    </body>
</html>
