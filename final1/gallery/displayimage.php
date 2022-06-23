<?php 
    include "logicimage.php"

?>

<style>
    .dynamicgallery {
        width: 200px;
        height: 150px;
    }
</style>





<table>
<?php 
$i = 0;

//3 columns of images
while($row_image = mysqli_fetch_assoc($image_query)) {
    if($i%3 == 0) {
        echo"<tr>";
        
    }
    echo"<td><img src='envuploadsimage/{$row_image['image_url']}' alt='{$row_image['image_title']}' class='dynamicgallery'></td>";
    if($i%3 == 2) {
        echo"</tr>";
    }
    $i++;
}

?>
</table>

