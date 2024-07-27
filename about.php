<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php 
include "cssjs/css.php";
?>
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
</head>
<body>
    
  <?php
  include "includes/header.php";
  ?>
  <style>
    body {
        font-family: 'Roboto', sans-serif;
    }
    .hero-wrap {
        position: relative;
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }
    .container {
        position: relative;
        z-index: 2;
        text-align: center;
    }
    .about-us {
        color: #fff;
        font-size: 48px; /* Font size for the title */
        margin-bottom: 30px; /* Space between title and content */
    }
    .about-us strong {
        font-weight: bold;
    }
    .card-outer-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 20px; /* Adjusted padding */
    }
    .card-container {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 1000px;
        width: 100%;
        margin: 0 auto; /* Centering the container */
    }
    .card-content p {
        font-size: 20px; /* Larger font size */
        line-height: 1.8;
        text-align: justify;
        color: #000;
    }
  </style>

  <div class="hero-wrap js-fullheight" style="background-image: url('images/cs03.jpg');">
      <div class="overlay"></div>
      <div class="container">
          <h1 class="about-us" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>ABOUT</strong> US</h1>
          <div class="card-outer-container">
              <div class="card-container">
                  <div class="card-content">
                      <p>Welcome to EventEcho, launched in 2024 to revolutionize your event experiences. We pride ourselves on seamless ticket booking, effortless event browsing, and expert event organization services. Whether you're planning a conference, concert, or corporate retreat, we ensure every detail is meticulously handled for your peace of mind. Our user-friendly interface guarantees swift navigation and hassle-free ticket purchases, while our dedicated team stands ready to assist you at every step. Discover the future of event planning with us and transform your ideas into unforgettable occasions. Join us in shaping the next generation of event management today.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>

<?php
include "includes/footer.php";
?>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <?php
  include "cssjs/js.php";
  ?>
</body>  
</html>
