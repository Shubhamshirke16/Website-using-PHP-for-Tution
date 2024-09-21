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
  <meta name="keywords" content="Parag Sir's Ideal Classes Kothrud Pune" />
  <meta name="description" content="Parag Sirs Ideal classes is the best tuition in the kothrud Pune for JEE CET NEET | 11th 12th | HSC | CBSE | Diploma and Engineering." />
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
<style>
.slider_section form input {

  box-shadow: 3px 3px 4px #646161;
  background-color: #fefefe;
  width: 50%;
  height: 45px;
  color: #bbb6b6;
  outline: none;
  border-radius: 5px;
  padding: 0 15px;
}

.slider_section  form input::-webkit-input-placeholder {
  color: #777;
}

.slider_section form input:-ms-input-placeholder {
  color: #777;
}

.slider_section  form input::-ms-input-placeholder {
  color: #777;
}

.slider_section  form input::placeholder {
  color: #777;
}

.slider_section  form button {
  width: 50%;
  text-align: center;
  display: inline-block;
  padding: 10px 55px;
  background-color: #2b0064;
  color: #ffffff;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: 1px solid #2b0064;
  margin-top: 15px;
}

.slider_section  form button:hover {
  background-color: #ffffff;
  color: #2b0064;
}
</style>


</head>

<body>

<?php
    include_once('header.php')
?>
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="images/hero-bg.png" alt="">
    </div>
    <!--------------------------------------------------------------------- slider section --------------------------------------------------------------------->
    <section class="slider_section">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row text-center">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <form action="verify.php" method="POST" style="background-color: #ffffff; padding: 20px; border-radius: 20px; width:100%">
                     <br>
                     <center>
                      <h2>Verify Your Certificate</h2>
                      <img src="images/check.gif" width=20% height=45%><br><br>
                      <input type="text" placeholder="Enter Certificate ID" name="vNum" required/><br><br>
                      <button type="submit">
                        Verify
                      </button>
                    </center>
                    </form>
                    <br>
                  </div>
                  <div class="col-md-3"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
   

<!------------------------------------------------------------------- Contact Section ------------------------------------------------------------------->

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
          <form action="add.php" method="POST">
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


<!------------------------------------------------------------------- Floatig contact Section ------------------------------------------------------------------->


<?php
    include_once('footer.php')
?>

<!----------------------------------------------------------- POPUP  -------------------------------------------------------------------------------->  
  <div class="popup">
    <!-- <h5 style="float:left;">Addmission Open</h5></button> -->
	<button id="close" style="border: 2px solid black;background-color:red; color:white;">&times;</button>
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


</body>
</html>
<?php
?>