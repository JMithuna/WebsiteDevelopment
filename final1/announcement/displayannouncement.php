<?php 
    include "announcementlogic.php"

?>

<style>
    .dynamicgallery {
        width: 200px;
        height: 150px;
    }
</style>





<table>
<?php 

while($row_announcement = mysqli_fetch_assoc($announcement_query)) {
    
    echo"<td><br><br>{$row_announcement['announcement_title']}</td></tr><tr><td><br>{$row_announcement['announcement_content']}</td></tr>";
    
}

?>
</table>

