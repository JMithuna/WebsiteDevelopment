<?php

    $conn = mysqli_connect("localhost", "root", "", "environment");
    
    if(!$conn){
        echo "Error - Not able to establish connection!";
    } 
    
    $announcement_sql = "SELECT * FROM announcement";
    $announcement_query = mysqli_query($conn, $announcement_sql);
    
    if(isset($_REQUEST["new_announcement"])){
        $announcement_title = $_REQUEST["announcement_title"];
        $announcement_content = $_REQUEST["announcement_content"];
        
        $announcement_sql = "INSERT INTO announcement(announcement_title, announcement_content) VALUES('$announcement_title', '$announcement_content')";
        mysqli_query($conn, $announcement_sql);
        
        
        header("Location: indexannouncement.php?info=added");
        exit();
        
    }
    
    if(isset($_REQUEST["id"])) {
        $announcement_id = $_REQUEST["id"];
        
        $sql = "SELECT * FROM announcement WHERE announcement_id = $announcement_id";
        $announcement_query = mysqli_query($conn, $sql);
        
        
    }
    
    if(isset($_REQUEST['updated_announcement'])){
        $announcement_id = $_REQUEST["id"];
        $announcement_title = $_REQUEST["announcement_title"];
        $announcement_content = $_REQUEST["announcement_content"];
        
        $announcement_sql = "UPDATE announcement SET announcement_title = '$announcement_title', announcement_content = '$announcement_content' WHERE announcement_id = $announcement_id";
        mysqli_query($conn, $announcement_sql);
        
        header("Location: indexannouncement.php?info=updated");
        exit();
    }
    
    
      if(isset($_REQUEST["deleted_announcement"])) {
        $announcement_id = $_REQUEST["id"];
        
        $sql = "DELETE FROM announcement WHERE announcement_id = $announcement_id";
        $announcement_query = mysqli_query($conn, $sql);
        
        header("Location: indexannouncement.php?info=deleted");
        exit();
        
    }
 
    
 
?>

