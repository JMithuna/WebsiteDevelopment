<?php 
    include "./gallery/logicimage.php"
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
$debug = FALSE;

if(isset($_FILES['image'])){
    $output_success_image = "Successful image upload. (Image was found)";

    //var_dump($_FILES['image']);
    
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
        
        if(!move_uploaded_file($imageTmpName, './gallery/envuploadsimage/'.$newFileName)) {
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
         
<?php 

//echo $output_success_image;
//echo "<br>";
//echo $output_tmpName;


if($debug) echo $output_error_image;

if($debug) echo $error_size_image;

if($debug) echo $error_type_image;

if($debug) echo $output_newFileName;

if($debug) echo $error_into_folder;

if($debug) echo $output_insert_db;
      

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <style>
    .dynamicgallery {
        width: 200px;
        height: 150px;
    }
    </style>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Eco Green - Nature & Environmental Non-Profit HTML5 Template</title>

    <meta name="author" content="thethemely.com" />
    <meta
      name="description"
      content="Eco Green - Nature or Environmental Non-Profit HTML5 Template"
    />
    <meta
      name="keywords"
      content="nature, environmental, non-profit, website template, bootstrap template, multipage, Eco Green, save the nature, forest, organization"
    />
    <!-- favicon -->
    <link
      rel="apple-touch-icon"
      sizes="57x57"
      href="./images/favicon/apple-icon-57x57.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="60x60"
      href="./images/favicon/apple-icon-60x60.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="./images/favicon/apple-icon-72x72.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./images/favicon/apple-icon-76x76.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="./images/favicon/apple-icon-114x114.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="120x120"
      href="./images/favicon/apple-icon-120x120.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="./images/favicon/apple-icon-144x144.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="152x152"
      href="./images/favicon/apple-icon-152x152.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="./images/favicon/apple-icon-180x180.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="192x192"
      href="./images/favicon/android-icon-192x192.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="96x96"
      href="./images/favicon/favicon-96x96.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./images/favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="./images/favicon/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta
      name="msapplication-TileImage"
      content="./images/favicon/ms-icon-144x144.png"
    />
    <meta name="theme-color" content="#ffffff" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- google font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Courgette&family=Open+Sans:wght@300;400;600;700&family=Raleway:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- fontawesome -->
    <link rel="stylesheet" href="./fonts/fontawesome/css/all.min.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- navbar top -->
    <div class="navbar_top">
      <div class="container">
        <div
          class="d-flex flex-column flex-md-row flex-lg-row justify-content-md-between justify-content-lg-between"
        >
          <div
            class="navbar_top_contact_left mb-2 mb-md-0 mb-lg-0 d-flex flex-column flex-md-row flex-lg-row align-items-center justify-content-lg-center"
          >
            <div class="contact_item mr-md-3 mr-lg-3">
              <span>
                <i class="fas fa-phone-alt mr-1 contact_item_icon"></i
              ></span>
              <span class="contact_item_text"
                >Call Us:
                <a class="user-select-all contact_item_link" href="#"
                  >123 4561 5523</a
                ></span
              >
            </div>
            <div class="contact_item">
              <span>
                <i class="fas fa-envelope mr-1 contact_item_icon"></i
              ></span>
              <span class="contact_item_text"
                >Email:
                <a class="user-select-all contact_item_link" href="#"
                  >info@example.com</a
                ></span
              >
            </div>
          </div>
          <div class="navbar_top_contact_right d-flex justify-content-center">
            <!-- problem -->

            <a href="#"><i class="fab fa-facebook-f"></i></a>

            <a href="#"><i class="fab fa-twitter"></i></a>

            <a href="#"><i class="fab fa-youtube"></i></a>

            <a href="#"><i class="fab fa-pinterest-p"></i></a>

            <a href="#"><i class="fab fa-instagram"></i></a>

            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- main nav -->
    <nav id="navbar-fixed" class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html"
          ><img src="images/logo/logo.jpg" alt="logo" width="58" height='80'
        /></a>

        <span
          class="navbar-toggler"
          role="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
          ><i class="fas fa-bars navbar_toggler_bar"></i
        ></span>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav navbar_nav ml-lg-auto text-center">
            <li class="nav-item active">
              <a class="nav-link nav_link" href="index.html"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link nav_link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav_link" href="service.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav_link" href="project.html">Projects</a>
            </li>

            <li class="nav-item">
              <a class="nav-link nav_link" href="gallery.html">Gallery</a>
            </li>

            <li class="nav-item">
              <a class="nav-link nav_link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav_link" href="contact.html">Contact</a>
            </li>

            <li class="nav-item dropdown navbar_nav_item">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Pages
              </a>
              <div
                class="dropdown-menu dropdown-menu-lg-right navbar_dropdown_menu mt-lg-3"
                aria-labelledby="navbarDropdown"
              >
                <a class="dropdown-item" href="donate.html">Donate</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="register.html">Register</a>
                <a class="dropdown-item" href="login.html">Login</a>
                <a class="dropdown-item" href="./announcement/displayannouncement.php">Announcements</a>
                <a class="dropdown-item" href="password-email.html"
                  >Password Email</a
                >
                <a class="dropdown-item" href="password-reset.html"
                  >Password Reset</a
                >
                <a class="dropdown-item" href="join-now.html">Join Now</a>
              </div>
            </li>
          </ul>

          <div
            class="dropdown navbar_nav_search text-center mt-2 mt-lg-0 d-none d-lg-block"
          >
            <div
              class="navbar_nav_search_icon"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="fas fa-search"></i>
            </div>

            <div class="dropdown-menu dropdown-menu-lg-right mt-lg-4">
              <div class="navbar_nav_search_form">
                <form>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control nav_search_input"
                      placeholder="Search..."
                      aria-label="Recipient's username"
                    />
                    <div class="input-group-append">
                      <button
                        class="btn btn-outline-secondary btn_nav_search"
                        type="button"
                      >
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center ml-lg-3 mt-2 mt-lg-0">
            <a href="donate.html" class="btn btn-primary navbar_btn_donate">
              Donate
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!--page title -->
    <section class="page_title">
      <div class="page_title_overlay">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="page_title_overlay_content text-center">
                <h2>Gallery</h2>
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li>
                    <span><i class="fas fa-angle-double-right"></i></span>
                  </li>
                  <li><a class="active" href="gallery.html">Gallery</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- gallery -->
    <section class="gallery_page">
      <div class="container">
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
          <br>
          <br>
          <br>
        <div class="row">
          <table>
            <?php 
            $i = 0;

            //3 columns of images
            while($row_image = mysqli_fetch_assoc($image_query)) {
                if($i%3 == 0) {
                    echo"<tr>";

                }
                echo"<td><img src='./gallery/envuploadsimage/{$row_image['image_url']}' alt='{$row_image['image_title']}' class='dynamicgallery'><br></td>";
                if($i%3 == 2) {
                    echo"</tr>";
                }
                $i++;
            }

            ?>
          </table>
      </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
      <div class="newsletter_overlay">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="newsletter_overlay_text">
                <h5>Stay in Touch with us by -</h5>
                <h4>Subscribe to our Newsletter</h4>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <form class="newsletter_mail_send_form">
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control newsletter_mail_send_input"
                    placeholder="Search..."
                    aria-label="Recipient's username"
                  />
                  <div class="input-group-append">
                    <button
                      class="btn btn-outline-secondary btn_newsletter_mail_send"
                      type="button"
                    >
                      Send
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- footer -->
    <section class="footer">
      <div class="container">
        <div class="row footer_padding">
          <div class="col-12 col-lg-3">
            <div class="footer_logo text-left">
              <a href="#">
                <img
                  class="img img-fluid p-1"
                  src="./images/logo/2.png"
                  alt="logo"
                />
              </a>
              <div class="footer_logo_content text">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel
                  assumenda commodi inventore deserunt tempore hic, odit rerum
                  unde! Nam, tempora.
                </p>
                <div class="footer_logo_icon">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>

                  <a href="#"><i class="fab fa-twitter"></i></a>

                  <a href="#"><i class="fab fa-youtube"></i></a>

                  <a href="#"><i class="fab fa-pinterest-p"></i></a>

                  <a href="#"><i class="fab fa-instagram"></i></a>

                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-12 col-lg-3 d-flex justify-content-start justify-content-lg-center mt-4 mt-lg-0"
          >
            <div class="footer_quick_link">
              <h3>QUICK LINKS</h3>
              <ul>
                <li>
                  <i class="fas fa-chevron-right"></i
                  ><a href="about.html">About Us</a>
                </li>
                <li>
                  <i class="fas fa-chevron-right"></i
                  ><a href="service.html">Our Services</a>
                </li>
                <li>
                  <i class="fas fa-chevron-right"></i
                  ><a href="project.html">Our Projects</a>
                </li>
                <li>
                  <i class="fas fa-chevron-right"></i
                  ><a href="#">Terms & Conditions</a>
                </li>
                <li>
                  <i class="fas fa-chevron-right"></i><a href="#">FAQ’s</a>
                </li>
                <li>
                  <i class="fas fa-chevron-right"></i
                  ><a href="donate.html">Donate</a>
                </li>
                <li>
                  <i class="fas fa-chevron-right"></i
                  ><a href="contact.html">Contact us</a>
                </li>
              </ul>
            </div>
          </div>
          <div
            class="col-12 col-lg-3 d-flex justify-content-start justify-content-lg-center mt-4 mt-lg-0"
          >
            <div class="footer_blog_link">
              <h3>Latest Blog Post</h3>
              <ul>
                <li>
                  <div class="d-flex justify-content-start">
                    <div>
                      <i class="fas fa-chevron-right"></i>
                    </div>
                    <div class="d-flex flex-column">
                      <a href="#">Recycling Plastic Bottles</a>

                      <p>2 Oct 2020</p>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="dropdown-divider"></div>
              <ul>
                <li>
                  <div class="d-flex justify-content-start">
                    <div>
                      <i class="fas fa-chevron-right"></i>
                    </div>
                    <div class="d-flex flex-column">
                      <a href="#">Recycling Plastic Bottles</a>

                      <p>2 Oct 2020</p>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="dropdown-divider"></div>

              <ul>
                <li>
                  <div class="d-flex justify-content-start">
                    <div>
                      <i class="fas fa-chevron-right"></i>
                    </div>
                    <div class="d-flex flex-column">
                      <a href="#">Recycling Plastic Bottles</a>

                      <p>2 Oct 2020</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div
            class="col-12 col-lg-3 d-flex justify-content-start justify-content-lg-center mt-4 mt-lg-0"
          >
            <div class="footer_contact">
              <h3>Contact Info</h3>

              <div class="d-flex justify-content-start">
                <div class="d-flex align-items-center">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="d-flex flex-column">
                  <span>1234 Park Street Avenue, NY City America.</span>
                </div>
              </div>
              <div class="dropdown-divider"></div>
              <div class="d-flex justify-content-start">
                <div class="d-flex align-items-center">
                  <i class="fas fa-phone"></i>
                </div>
                <div class="d-flex flex-column">
                  <span>+88 017 386 96914</span>

                  <span>+88 017 386 96914</span>
                </div>
              </div>
              <div class="dropdown-divider"></div>
              <div class="d-flex justify-content-start">
                <div class="d-flex align-items-center">
                  <i class="fas fa-envelope"></i>
                </div>
                <div class="d-flex flex-column">
                  <span>admin@info.com</span> <span>admin@info.com</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center p-3">
              <p>
                Copyright &copy; <span id="year"></span> Eco Green -
                <a
                  class="text_primary_color hover_text_primary_color"
                  href="https://www.thethemely.com/"
                  >theThemely</a
                >
                theme. All Rights Reserved
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- js -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/gallery-script.js"></script>
  </body>
</html>
