<?php
    include "./feedback/logicfeedback.php"
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Eco Green - Nature & Environmental</title>

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
        <a class="navbar-brand" href="index.php"
          ><img src="images/logo/logo.jpg" alt="logo" width="58" height="80"
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
              <a class="nav-link nav_link" href="index.php"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link nav_link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav_link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav_link" href="contact.php">Contact</a>
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
                <a class="dropdown-item" href="donate.php">Donate</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="register.php">Register</a>
                <a class="dropdown-item" href="login.php">Login</a>
                <a class="dropdown-item" href="./announcement/displayannouncement.php">Announcements</a>
               
                <a class="dropdown-item" href="join-now.php">Join Now</a>
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
            <a href="donate.php" class="btn btn-primary navbar_btn_donate">
              Donate
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!--page title -->
    
    <!-- contact form -->
    <section class="contact_details">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-7">
            <div class="contact_details_content">
              <h3>Get In Touch With Us</h3>
              <h2>Send Message</h2>
              <div class="contact_details_content_form">
                <form method="POST">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>Name <span>*</span></label>
                      <input name="feedback_name" type="text" class="form-control" required />
                    </div>
                    <div class="form-group col-md-12">
                      <label>Message <span>*</span> </label>
                      <textarea
                        name="feedback_content"
                        class="form-control"
                        rows="4"
                        required
                      ></textarea>
                    </div>
                  </div>
                  <button name="new_feedback" class="btn btn-primary">
                    Send Message
                  </button>
                </form>
                  <?php if(isset($_REQUEST['info'])){?>
                    <?php if($_REQUEST['info'] == "added"){?>
                        <div>
                            Feedback has been submitted successfully!
                        </div>
                    <?php }?>
                  <?php }?>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-5 mt-5 mt-lg-0">
            <div class="contact_details_address">
              <h2>Address Information</h2>
              <p>
               
              </p>
              <div
                class="contact_details_address_box d-flex align-items-center justify-content-start"
              >
                <div class="contact_details_address_box_icon map">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div
                  class="contact_details_address_box_content ml-2 d-flex justify-content-start flex-column"
                >
                  <h3>Address</h3>
                  <p class="mb-0">103-8 42nd Ave, Corona,</p>
                  <p class="mb-0">NY 11368, United States</p>
                </div>
              </div>

              <div
                class="contact_details_address_box mt-3 d-flex align-items-center justify-content-start"
              >
                <div class="contact_details_address_box_icon">
                  <i class="fas fa-phone"></i>
                </div>
                <div
                  class="contact_details_address_box_content ml-2 d-flex justify-content-start flex-column"
                >
                  <h3>Phone</h3>
                  <span>+88 017 386 96914</span>
                  <span>+88 017 386 96914</span>
                </div>
              </div>

              <div
                class="contact_details_address_box mt-3 d-flex align-items-center justify-content-start"
              >
                <div class="contact_details_address_box_icon">
                  <i class="fas fa-envelope"></i>
                </div>
                <div
                  class="contact_details_address_box_content ml-2 d-flex justify-content-start flex-column"
                >
                  <h3>Email</h3>
                  <span>admin@info.com</span>
                  <span>admin@info.com</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- google map location -->
    <section>
      <div class="container-fluid">
        <div class="embed-responsive embed-responsive-21by9">
          <iframe
            class="embed-responsive-item"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.616415178921!2d-73.86412928522586!3d40.748465243322045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25fc631185d9f%3A0xfdd424f8783bd607!2sPark%20Of%20The%20Americas!5e0!3m2!1sen!2sbd!4v1614406341811!5m2!1sen!2sbd"
            allowfullscreen
          ></iframe>
        </div>
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
               
              </a>
              <div class="footer_logo_content text">
                <p>
                 
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
                  ><a href="about.php">About Us</a>
                </li>
                <li>
                  <i class="fas fa-chevron-right"></i
                  ><a href="service.php">Our Services</a>
                </li>
                <li>
                  <i class="fas fa-chevron-right"></i
                  ><a href="project.php">Our Projects</a>
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
                  ><a href="donate.php">Donate</a>
                </li>
                <li>
                  <i class="fas fa-chevron-right"></i
                  ><a href="contact.php">Contact us</a>
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
  </body>
</html>







<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

