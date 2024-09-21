<?php
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.jpg" type="">

  <title> Parag Sir's Ideal Classes </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
  
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">
<!----------------------------------------------------------- Header Section -------------------------------------------------------------------------------->

<?php
    include_once('header.php')
?>
    

    <!----------------------------------------------------------- Page-header section  -------------------------------------------------------------------------------->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-0 bread">Contact Us</h1>
        </div>
      </div>
    </div>
  </section>


<!----------------------------------------------------------- Contact Form and Map section  -------------------------------------------------------------------------------->
<section class="contact_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        Get In Touch
      </h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form_container contact-form">
        <form action="add1.php" method="POST">
            <div class="form-row">
              <div class="col-lg-6">
                <div>
                  <input type="text" name="vName" placeholder="Your Name" />
                </div>
              </div>
              <div class="col-lg-6">
                <div>
                  <input type="text"  name="vContact" placeholder="Phone Number" />
                </div>
              </div>
            </div>
            <div>
              <input type="email" name="vEmail" placeholder="Email" />
            </div>
            <div>
              <input type="text" class="message-box"  name="vMessage" placeholder="Message" />
            </div>
            <div class="btn_box">
              <button type="submit" name="add">
                SEND
              </button>
		        	
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="map_container">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.4363330276256!2d73.80986851504836!3d18.509174274353065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf5633d01115%3A0x476877b66fd2407d!2sParag%20Sir%E2%80%99s%20Ideal%20Classes%20%7C%20Engineering%20%7C%20Degree%20%7C%20Diploma%20%7C%2011th%20%26%2012th%20PCMB%20%7C%20JEE%20%7C%20CET%20%7C%20NEET%20%7C%20HSC%20%7C%20CBSE%20%7C%20ICSE!5e0!3m2!1sen!2sin!4v1675171549374!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!----------------------------------------------------------- Footer Section -------------------------------------------------------------------------------->

<?php
    include_once('footer.php')
?>
	
	
	<!------------------------------------------------------------------- Floatig contact Section & POPUP ------------------------------------------------------------------->

	<div class="whatsapp">
	<a href="https://api.whatsapp.com/send?phone=+91 9623146353&text=Hello,%20I%20found%20you%20on%20google.%20I%20would%20like%20to%20get%20more%20information%20about%20Ideal%20Classes." class="floating" target="_blank">
	  <i class="fa fa-whatsapp fab-icon"></i>
	  </a>
	</div>
	<div class="call_float">
	  <a href="tel:9623146353" class="floating" target="_blank">
		<i class="fa fa-phone fab-icon"></i>
		</a>
	  </div>

    <div class="popup">
		<button id="close">&times;</button>
		<img src="images/popup.jpg" alt="..." width="100%">
	</div>
	
  <!----------------------------------------------------------- Java script Imported -------------------------------------------------------------------------------->  
  <!--Script-->
  <script src="js/script.js"></script>

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>
<?php
?>