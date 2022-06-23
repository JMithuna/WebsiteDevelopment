<?php 
include "logicimage.php"
?>


<?php 
$output_success_image = "";
$output_tmpName = "";
$output_error_image = "";
$error_size_image = "";
$error_type_image = "";
$error_into_folder = "";
$output_newFileName = "";
$output_insert_db = "";
$flag = TRUE;
$debug = TRUE;

if(isset($_FILES['image'])){
    $output_success_image = "Successful image upload. (Image was found)";

    var_dump($_FILES['image']);
    
    $imageTmpName = $_FILES['image']['tmp_name'];
    
    
    
    $output_tmpName = "Temp Name Image: $imageTmpName<br>";
    
    //FILE ERROR CODE CHECK
    if($_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $output_error_image .= "No Error Code.<br>";
    } else {
        //contains the php error code
        $output_error_image .= "Error Code: ".$_FILES['image']['error'];
        $flag = FALSE;
    } //IF ERROR CODE
    
    //FILE SIZE CHECK
    if($_FILES['image']['size'] > 2500000) {
        $error_size_image .= "Sorry, your file is too large.<br>";
    
        $flag = FALSE; 
    } else {
        $error_size_image .= "File size is OK.<br>";
    } //IF SIZE CHECK
    
    //CHECK MIME TYPE YOURSELF
    //You can check for particular types 
    //Files smaller than 11 bytes generate a particular error
    if(exif_imagetype($imageTmpName)) {
        $error_type_image .= "Header indicates it is an image.<br>";
    } else {
        $flag = FALSE;
        $error_type_image .= "Header indicates it is NOT an image.<br>";
    } //IF MIME TYPE
    
    if($flag == TRUE) {
        
        $image_category = mysqli_real_escape_string($conn, $_REQUEST['image_category']);
        $image_title = mysqli_real_escape_string($conn, $_REQUEST['image_title']);
        
        //Replace spaces with underscores
        $cleanNameImage = str_replace(' ', '_', $_FILES['image']['name']);
        
        //Change name
        $date = date_create();
        $timestamp = date_timestamp_get($date);
        $newFileName = $timestamp.$cleanNameImage;
        $output_newFileName .= "New name: ".$newFileName."<br>";
        
        if(!move_uploaded_file($imageTmpName, 'envuploadsimage/'.$newFileName)) {
            $error_into_folder .= "Failed copy.<br>";
        } else {
            $error_into_folder = "Successful move.<br>";
        }
        
        $imagesql = "INSERT INTO image(image_title, image_category, image_url) VALUES('$image_title', '$image_category', '$newFileName')";
        $imagesqlresult = mysqli_query($conn, $imagesql);
        
        $output_insert_db .= "Successfully stored image into db.<br>";
        
       
    } else {
        $output_insert_db .= "Failed to store image into db.<br>";
    }//IF NO ERRORS
    
    
}

?>


<form action="" method="POST" enctype="multipart/form-data">
                Image Title: <input type="text" name="image_title"> 
                <br>
                <br>
                <br>
                Image Category: <select name="image_category">
                    <option value="recycling">Recycling</option>
                    <option value="cleanups">Cleanups</option>
                    <option value="composting">Composting</option>
                    <option value="energy">Sustainable Forms of Energy</option>
                    <option value="animals">Saving Animals</option>
                    <option value="workshops">Workshops</option>
                </select>
                <br>
                <br>
                <br>
                Upload Image: <input type="file" name="image">
                <input type="submit">
</form>
         
<?php 

echo $output_success_image;
echo "<br>";
echo $output_tmpName;


if($debug) echo $output_error_image;

if($debug) echo $error_size_image;

if($debug) echo $error_type_image;

if($debug) echo $output_newFileName;

if($debug) echo $error_into_folder;

if($debug) echo $output_insert_db;


                
   
                

?>
            
            
    
    
