<?php

    $conn = mysqli_connect("localhost", "root", "", "environment");
    
    if(!$conn){
        echo "Error - Not able to establish connection!";
    } 
    
    $feedback_sql = "SELECT * FROM contact_feedback";
    $feedback_query = mysqli_query($conn, $feedback_sql);
    
    if(isset($_POST["new_feedback"])){
        $feedback_name = $_POST["feedback_name"];
        $feedback_content = $_POST["feedback_content"];
       
        $feedback_sql = "INSERT INTO contact_feedback(feedback_name, feedback_content) VALUES('$feedback_name', '$feedback_content')";
        mysqli_query($conn, $feedback_sql);
        
        
        header("Location: contact.php?info=added");
        exit();
    }
    
?>

