

<?php 


$conn = mysqli_connect("localhost", "root", "", "environment");
    
    if(!$conn){
        echo "Error - Not able to establish connection!";
    } 
    
$image_sql = "SELECT * FROM image";
$image_query = mysqli_query($conn, $image_sql);


  

?>
