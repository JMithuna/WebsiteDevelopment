

<?php 


$conn = mysqli_connect("localhost", "root", "", "environment");
    
    if(!$conn){
        echo "Error - Not able to establish connection!";
    } 
    
$announcement_sql = "SELECT * FROM announcement";
$announcement_query = mysqli_query($conn, $announcement_sql);


  

?>
