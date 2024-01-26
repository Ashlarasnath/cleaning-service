<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <img id="logo" src="https://bundesverband-micro-living.de/wp-content/uploads/2021/11/Logo_WeWash.png">
    
    <nav>    
      <ul>
        <li><a href="about.php">About</a></li>
        
        <li><a href="service.php">Service</a></li>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="contact.php">contact-us</a></li>
      </ul>
    </nav>
    
  </header>

  <main>
    <section class="home">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="https://www.progressive.com/lifelanes/wp-content/uploads/2022/06/PN1305_HowOftenWashCar_Tile.jpg" style="width:100%">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="https://assets-global.website-files.com/5fbde3dc76aea24cb3b0ae52/6017bb2859b475c6f95ef05f_home-cleaning-hero.jpg" style="width:100%">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="https://www.inquirer.com/resizer/ouvvVoE5T981bowIYl_0v5vgP38=/760x507/smart/filters:format(webp)/arc-anglerfish-arc2-prod-pmn.s3.amazonaws.com/public/FR2GRWLCPJEB7M2PEWBYDOFXKA.jpg" style="width:100%">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="https://c8.alamy.com/comp/W192C1/summer-time-garden-maintenance-caucasian-pro-gardener-cleaning-huge-backyard-from-leaves-and-grasses-W192C1.jpg" style="width:100%">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="https://www.mutneys.com/wp-content/uploads/2020/07/Untitled-design.jpg" style="width:100%">
          <div class="text"></div>
        </div>
      </div>

      <br>

      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>

      <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); 
        }
      </script>
      <h1>WeWash</h1>
      <p class="clean">When your environment is clean you feel happy motivated and healthy.</p>
    </section>

    <section role="region" aria-labelledby="css-questions">
      <img class="img2" src="https://t3.ftcdn.net/jpg/02/94/62/14/360_F_294621430_9dwIpCeY1LqefWCcU23pP9i11BgzOS0N.jpg">
      <p>"The object of cleaning is not just to clean, but to feel happiness living within that environment."</p>
      <h1>Welcome to the official website of</h1>
      <h1>We Wash</h1>
      <p>I believe that as you are browsing our website, you will gain the perception of how through <br> combining place, people, and principles, we create a unique environment. </p>
      <h1>CEO</h1>
      <p><span>Mohamed Rasnath</span></p>
      <img class="img3" src="https://i.pinimg.com/originals/6a/14/a2/6a14a2565834045849ddda1eba92f92c.jpg">
    </section>

    <section role="region" aria-labelledby="css-questions">
      <h2>Why Choose Us?</h2>
      <p>We will provide you with the best services based on our<br>
      significant industry experience</p>

      <div class="container">
        <div class="content">
          <img class="us" src="https://cdn-icons-png.flaticon.com/128/9874/9874840.png">
          <h2>10 years of work</h2>
          <p>We have established ourselves as professionals in our field, working with both small and well-known brands.</p>
        </div>

        <div class="content">
          <img class="us" src="https://cdn-icons-png.flaticon.com/128/10211/10211021.png">
          <h2>individual approach</h2>
          <p>Every company has its conception and motto.,<br> we work to develop unique products.</p>
        </div>

        <div class="content">
          <img class="us" src="https://cdn-icons-png.flaticon.com/128/3281/3281172.png">
          <h2>We grow for the future</h2>
          <p>Highly skilled professionals will help your business grow on par with new technologies.</p>
        </div>
      </div>
    </section>
  </main>

  <footer>
  <section class="footer">
  <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;"><div id="canvas-for-googlemap" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin=Doha,+Qatar&destination=New+Salata,+Doha,+Qatar&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="embedded-map-code" rel="nofollow" href="https://www.bootstrapskins.com/themes" id="enable-map-info">premium bootstrap themes</a><style>#canvas-for-googlemap img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
    <p>
      <a href="https://www.freecodecamp.org" target="_blank">Visit our website</a>
    </p><br>
    <p class="address"></p>
    
            <div class="share">

                <a href="https://www.facebook.com" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/2504/2504903.png"></a>
                <a href="https://www.instagram.com" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/2111/2111463.png"></a>
                <a href="https://twitter.com/" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/3256/3256013.png"></a>
                <a href="https://telegram.org/" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/2504/2504941.png"></a>
                <a href="https://www.linkedin.com/" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/3536/3536505.png"></a>
            </div>

            <h1 class="credit">created by<span>Ms. Web Developer</span> | @ all rights reserved!</h1>
        </section>
  </footer>
</body>
</html>
