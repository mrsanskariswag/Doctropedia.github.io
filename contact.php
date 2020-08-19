<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Contact Us</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<div class="w3l-bootstrap-header fixed-top">
  <nav class="navbar navbar-expand-lg navbar-light p-2">
    <div class="container">
        <a class="navbar-brand" href="index.html"><span class="fa fa-diamond"></span>Doctro<label class="logo-view">Pedia</label></a>
       <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute"></a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
        <div class="form-inline">
          <li>
           <a href="login.php">Log in</a>
            <a href="SignUP.php"  class="btn btn-primary btn-theme">Create Account</a>
          </li>
        </div>
      </div>
    </div>
  </nav>
</div>
<!-- contacts -->
<section class="w3l-contact mt-5">
  <div class="contacts-9 py-5 mt-5">
    <div class="container py-lg-3">
      <div class="row top-map">
        <div class="cont-details col-md-5">
          <div class="heading mb-lg-4 mb-4">
            <h3 class="head">Contact us </h3>
          </div>
          <div class="cont-top">
            <div class="cont-left">
              <span class="fa fa-phone"></span>
            </div>
            <div class="cont-right">
              <p><a href="tel:+44-99-555-42">+91-99-555-42</a></p>

            </div>
          </div>
          <div class="cont-top mt-4">
            <div class="cont-left">
              <span class="fa fa-envelope-o"></span>
            </div>
            <div class="cont-right">
              <p><a href="mailto:mailid@mail.com" class="mail">DoctroPedia@mail.com</a></p>
            </div>
          </div>
          <div class="cont-top mt-4">
            <div class="cont-left">
              <span class="fa fa-map-marker"></span>
            </div>
            <div class="cont-right">
              <p>#135,Station Road,
              Anand-388001.</p>
            </div>
          </div>
        </div>
        <div class="map-content-9 col-md-7 mt-5 mt-md-0">
         <form action="" method="POST">
             <!-- class="SignUp" -->
            <div class="form-group row">
              <div class="col-md-6">
                <label class="contact-textfield-label" for="FirstName">First Name</label>
                <input type="text" class="form-control" name="Firstname" id="Firstname" placeholder="Enter Your Firstname" required="">
              </div>
              <div class="col-md-6 mt-md-0 mt-3">
                <label class="contact-textfield-label" for="LastName">Last Name</label>
                <input type="text" class="form-control" name="Lastname" id="Lastname" placeholder="Enter Your Lastname" required="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label class="contact-textfield-label" for="Sender">Your Email ID</label>
                <input type="email" class="form-control" name="Email" id="Email" placeholder="Email" required="">
              </div>
              <div class="col-md-6 mt-md-0 mt-3">
                <label class="contact-textfield-label" for="Phone">Phone Number</label>
                <input type="tel" class="form-control" name="Phone" id="Phone" placeholder="Enter your Phone Number" required="">
              </div>
            </div>
            <div class="form-group">
              <label class="contact-textfield-label" for="Subject">Subject</label>
              <input type="text" class="form-control" name="Subject" id="Subject" placeholder="Subject" required="">
            </div>
            <div class="form-group">
              <label class="contact-textfield-label" for="Message">Message</label>
              <textarea name="Message" class="form-control" id="Message" placeholder="Message" required=""></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-contact">Send Message</button>
          </form>
          <?php
          $conn = mysqli_connect('localhost','root','','signup');

          $fn =$_POST['Firstname'];
          $ln =$_POST['Lastname'];
          $email =$_POST['Email'];
          $phn =$_POST['Phone'];
          $sub =$_POST['Subject'];
          $msg =$_POST['Message'];

          $query= "INSERT INTO contact(`Firstname`, `Lastname`, `Email`, `Phone`, `Subject`, `Massage`) VALUES ('$fn','$ln','$email','$phn','$sub','$msg')";
      
          mysqli_query($conn, $query);

          ?>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- //contacts -->
      <!-- footer-28 block -->
      <section class="w3l-market-footer">
        <footer class="footer-28">
          <div class="footer-bg-layer">
            <div class="container py-lg-3">
              <div class="row footer-top-28">
                <div class="col-md-6 footer-list-28 mt-5">
                  <h6 class="footer-title-28">Contact information</h6>
                  <ul>
                    <li>
                      <p><strong>Address</strong> :#135,Station Road,Anand,38801</p>
                    </li>
                    <li>
                      <p><strong>Phone</strong> : <a href="tel:+404-11-22-89">+91-11-22-89</a></p>
                    </li>
                    <li>
                      <p><strong>Email</strong> : <a href="mailto:example@mail.com">DoctroPedia@mail.com</a></p>
                    </li>
                  </ul>

                  <div class="main-social-footer-28 mt-3">
                    <ul class="social-icons">
                      <li class="facebook">
                        <a href="#link" title="Facebook">
                          <span class="fa fa-facebook" aria-hidden="true"></span>
                        </a>
                      </li>
                      <li class="twitter">
                        <a href="#link" title="Twitter">
                          <span class="fa fa-twitter" aria-hidden="true"></span>
                        </a>
                      </li>
                      <li class="dribbble">
                        <a href="#link" title="Dribbble">
                          <span class="fa fa-dribbble" aria-hidden="true"></span>
                        </a>
                      </li>
                      <li class="google">
                        <a href="#link" title="Google">
                          <span class="fa fa-google" aria-hidden="true"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-4 footer-list-28 mt-5">
                      <h6 class="footer-title-28">Company</h6>
                      <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="#blog.html">Blog Posts</a></li>
                        <li><a href="#pricing.html">FAQ</a></li>
                        <li><a href="#pricing.html">Pricing</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4 footer-list-28 mt-5">
                      <h6 class="footer-title-28">Support</h6>
                      <ul>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#signup.html">Create account</a></li>
                        <li><a href="#learn.html">Learning Center</a></li>
                        <li><a href="#career.html">Team</a></li>
                      </ul>
                    </div>
  
                  </div>
                </div>
              </div>
            </div>


            <div class="midd-footer-28 align-center py-lg-4 py-3 mt-5">
              <div class="container">
                <p class="copy-footer-28 text-center"> &copy; 2020 Market. All Rights Reserved. Design by <a href="assets/images/About Us.jpeg">Shivam patel & Alish Findoliya</a></p>
              </div>
            </div>
          </div>
        </footer>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
          &#10548;
        </button>
        <script>
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function () {
            scrollFunction()
          };

          function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("movetop").style.display = "block";
            } else {
              document.getElementById("movetop").style.display = "none";
            }
          }

          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }
        </script>
        <!-- /move top -->
      </section>
      <!-- //footer-28 block -->

      <!-- jQuery, Bootstrap JS -->
      <script src="assets/js/jquery-3.3.1.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>

      <!-- Template JavaScript -->
      
      <script src="assets/js/owl.carousel.js"></script>

      <!-- script for owlcarousel -->
      <script>
        $(document).ready(function () {
          $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
              0: {
                items: 1,
                nav: false
              },
              480: {
                items: 1,
                nav: false
              },
              667: {
                items: 1,
                nav: true
              },
              1000: {
                items: 1,
                nav: true
              }
            }
          })
        })
      </script>
      <!-- //script for owlcarousel -->

      <!-- disable body scroll which navbar is in active -->
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
      <!-- disable body scroll which navbar is in active -->

      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <script>
        $(document).ready(function () {
          $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
          });

          $('.popup-with-move-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-slide-bottom'
          });
        });
      </script>

</body>
</html>