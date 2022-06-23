<?php

    $conn = mysqli_connect("localhost", "root", "", "environment");
    
    if(!$conn){
        echo "Error - Not able to establish connection!";
    } 
    
    $blog_sql = "SELECT * FROM blog";
    $blog_query = mysqli_query($conn, $blog_sql);
    
    if(isset($_REQUEST["new_blogpost"])){
        $blog_title = $_REQUEST["blog_title"];
        $blog_content = $_REQUEST["blog_content"];
        
        
        $blog_sql = "INSERT INTO blog(blog_title, blog_content) VALUES('$blog_title', '$blog_content')";
        mysqli_query($conn, $blog_sql);
        
        
        header("Location: blog.php?info=added");
        exit();
        
    }
    
    if(isset($_REQUEST["id"])) {
        $blog_id = $_REQUEST["id"];
        
        $sql = "SELECT * FROM blog WHERE blog_id = $blog_id";
        $blog_query = mysqli_query($conn, $sql);
        
        
    }
    
    if(isset($_REQUEST['updated_blogpost'])){
        $blog_id = $_REQUEST["id"];
        $blog_title = $_REQUEST["blog_title"];
        $blog_content = $_REQUEST["blog_content"];
        
        $blog_sql = "UPDATE blog SET blog_title = '$blog_title', blog_content = '$blog_content' WHERE blog_id = $blog_id";
        mysqli_query($conn, $blog_sql);
        
        header("Location: indexblog.php?info=updated");
        exit();
    }
    
    
      if(isset($_REQUEST["deleted_blogpost"])) {
        $blog_id = $_REQUEST["id"];
        
        $sql = "DELETE FROM blog WHERE blog_id = $blog_id";
        $blog_query = mysqli_query($conn, $sql);
        
        header("Location: indexblog.php?info=deleted");
        exit();
        
    }
 
    
 
?>

