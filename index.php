<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Antoine Moitessier">
    <meta name="description" content="Page d'accueil pour le site web de déneigement belisle.">
    <meta name="keywords" content="Belisle, déneigement, accueil">
    <title>Déneigement Bélisle</title>
    <link rel="icon" href="images/logo_cropped.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/2d29c813bd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Autour+One&family=Chocolate+Classical+Sans&family=Damion&family=Delius+Swash+Caps&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
    <style>
      #Accueil {padding: 5px;margin-bottom:10px;margin-top:100px;}
      h1 {color:#7595c4;font-weight: bold;font-style: normal;font-family: "Damion", serif;
  font-weight: 400;
  font-style: normal;}
      @media only screen and (max-width: 600px) {
        #Accueil {margin-top:50px;}
        h1 {font-size:30px;}
      }
      @media only screen and (max-width: 600px) {
        #Main_block {display:grid;
          margin-left: auto;
          margin-right: auto;
          margin-top:30px;
          margin-bottom:10px;
          grid-template-columns: 100%;
          grid-template-rows: 70% 30%;
          grid-template-areas: 
          "main"
          "side";
          grid-area: Main; box-sizing:border-box;}
      }




      body, html {
      background: white;  
      background-image: linear-gradient(60deg, rgb(227, 236, 255),rgb(106, 153, 255));
      font-family: "Chocolate Classical Sans", serif;
      font-weight: 400;
      font-style: normal;
    }
.body {box-sizing: border-box;margin:0;}
h1 {font-size:45px;}
img {vertical-align: middle;border: 5px solid white;border-radius:25px;box-sizing:border-box;}
a {color:#7595c4;text-decoration: none;font-weight: bold;
  text-shadow: 1px 0 #fff, -1px 0 #fff, 0 1px #fff, 0 -1px #fff,
               1px 1px #fff, -1px -1px #fff, 1px -1px #fff, -1px 1px #fff;transition: all 0.4s ease;
}
a:hover {color:rgb(21, 19, 150);transition: all 0.4s ease;}
#Title {background-color: white;
        display: flex;
        flex-flow: row wrap;
        align-items: center;
        justify-content: space-between;
        position: fixed;
        padding-right: 20px;
        padding-left: 20px;
        top: 0%;
        left: 0%;
        width: 100%;
        box-sizing: border-box;
        z-index: 5;}
#Links {border-radius:10px;padding:5px;margin:5px;box-sizing:border-box;}
#Main_block {display:grid;
  margin-left: auto;
  margin-right: auto;
  margin-bottom:30px;
  grid-template-columns: 60% 40%;
  grid-template-rows: 1fr;
  grid-template-areas: 
  "main side";box-sizing:border-box;
  z-index: 1;
  color:rgb(21, 19, 150);}
#Main_text {line-height: 1.5;border-radius:25px;padding:10px;margin:5px;box-sizing:border-box;grid-area: main;z-index: 1;}
#Sidebar {border-radius:25px;padding:10px;margin:5px;box-sizing:border-box;grid-area: side;z-index: 1;}
#General_foot {text-align: center;line-height: 20px;padding: 10px;background-color: rgb(3, 3, 72);color: white;box-sizing:border-box;z-index:1;}
.center {text-align: center;}
.nav li {display: inline-block;font-size: 20px;padding: 20px;}
#current_page {color:rgb(21, 19, 150);}
#Logo {display: flex;
        flex-flow: row wrap;
        align-items: center;
        justify-content: space-between;}
        .navbar {
  overflow: hidden;
  border-radius:25px;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: #7595c4;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: all 0.4s ease;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
  border-radius:25px;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  border-radius:25px;
  outline: none;
  color:#7595c4;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
  transition: all 0.6s ease;
}

/* Add a red background color to navbar links on hover */
.dropdown:hover .dropbtn {
  background-color: #7595c4;
  color: white;
  transform: rotate(90deg);
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  margin-top:-10px;
  background-color: white;
  border-radius:25px;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: #A7C7E7;
  font-optical-sizing: auto;
  font-weight: bold;
  font-style: normal;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  font-size: 18px;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  color: rgb(21, 19, 150);
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@media only screen and (max-width: 1200px) and (min-width: 450px){
  #Main_block {display:grid;
    margin-left: auto;
    margin-right: auto;
    margin-top:100px;
    margin-bottom:30px;
    grid-template-columns: 50% 50%;
    grid-template-rows: 1fr;
    grid-template-areas: 
    "main side";box-sizing:border-box;}
  }

/* On smaller screens, decrease text size */
@media only screen and (max-width: 600px) {
  p {font-size: smaller;}
  h1 {font-size: 25px;}
  a img {width: 50px; height:50px;}
  .dropdown-content a {
    font-size: 18px;
  }
  .dropdown .dropbtn {
    font-size: 16px;
  }
  #Main_block {display:grid;
    margin-left: auto;
    margin-right: auto;
    margin-top:30px;
    margin-bottom:10px;
    grid-template-columns: 100%;
    grid-template-rows: 70% 30%;
    grid-template-areas: 
    "main"
    "side";
    grid-area: Main; box-sizing:border-box;}
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  text-align: center;
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
/* The dots/bullets/indicators */
.dot {
  height: 10px;
  width: 10px;
  margin: 0 2px;
  background-color: white;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active {
  background-color: rgb(3, 3, 72);
}
/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}
    </style>
</head>
<body class="body">
    <header id="Title">
    <div class="navbar">
            <div class="dropdown">
              <button class="dropbtn">
                <i class="fas fa-bars" style="font-size:25px;"></i>
              </button>
              <div class="dropdown-content">
                <a title="La page d'accueil." href="forfaits/.." id="current_page"><i class="fa-solid fa-snowflake"></i> Accueil <i class="fa-solid fa-snowflake"></i></a>
                <a title="Forfaits et services." href="forfaits/"><i class="fa-solid fa-snowflake"></i> Forfaits et services <i class="fa-solid fa-snowflake"></i></a>
                <a title="La zone que nous déneigeons." href="zone/"><i class="fa-solid fa-snowflake"></i> Zone déneigée <i class="fa-solid fa-snowflake"></i></a>
                <a title="Nous joindre." href="joindre/"><i class="fa-solid fa-snowflake"></i> Nous joindre <i class="fa-solid fa-snowflake"></i></a>
              </div>
            </div>
          </div>
          <div id="Logo">
          <a href="forfaits/..">
          <h1>Déneigement Bélisle</h1>
          </a>  
          <a href="forfaits/..">
          <img src="images/logo_cropped.png" alt="logo" width="100" height="100">
          </a>   
          </div>
    </header>
    <div id="Accueil" style="grid-area:text;">
    </div>
    <main id="Main_block">
        <section id="Main_text" style="font-weight: bold;margin:auto;">
          <h2 style='font-size: 35px;margin:20px;text-align: center;font-family: "Autour One", serif;font-weight: bold;font-style: normal;'>Pour un service adapté à vos besoins, Déneigement Bélisle est la solution.</h2>
          <h2 style="margin:20px"><i class="fa-solid fa-snowflake"></i> Nos services <i class="fa-solid fa-snowflake"></i></h2>
          <p>Nous somme une jeune entreprise de la région de Mont-Laurier qui cherche à faire évoluer le domaine du service de déneigement par la qualité de notre service client.</p>
          <p>Notre objectif est de vous offrir un service basé sur la confiance et la transparence.</p>
          <p>De cette manière, vous pouvez économiser du temps, de l'argent et réduire le stress de ne pas connaître l'état de vos installations durant l'hiver.</p>
          <p style="font-weight: normal;"> * Contactez-nous pour vos projets spéciaux!</p>
          <h2 style="margin:20px"><i class="fa-solid fa-snowflake"></i> Tarifs <i class="fa-solid fa-snowflake"></i></h2>
          <p>Nous vous offrons le choix entre deux offres: un forfait fixe et un forfait personnalisé.</p>
          <p>Nous vous invitons donc à aller voir notre page expliquant ces forfaits en détails pour obtenir plus d'informations.</p>
        </section>
        <aside id="Sidebar">
            <div class="slideshow-container"></div>
                <!-- Full-width images with number and caption text -->
                <?php
                $relative_dir = "images/slideshow";
                $images = array_diff(scandir($relative_dir), array('..', '.'));
                function shuffle_assoc($array) {
                    $keys = array_keys($array);
                    shuffle($keys);
                    foreach($keys as $key) {
                        $new[$key] = $array[$key];
                    }
                    return $new;
                }
                $shuffled_images = array_values(shuffle_assoc($images));
                $nbr_images = count($shuffled_images);
                foreach ($shuffled_images as $img) {
                    echo '<div class="mySlides fade">
                            <img src="'.$relative_dir.'/'.$img.'" style="width:100%;margin:auto;">
                        </div>';
                }
                ?>
            </div>
            <br>
            
            <!-- The dots/circles -->
            <div style="text-align:center">
                <?php
                for ($x = 1; $x <= $nbr_images; $x++) 
                    echo '<span class="dot" onclick="currentSlide('.$x.')"></span>'
                ?>
            </div>
        </aside>
    </main>
    
    <footer id="General_foot" style="clear: both;font-size: 11px;">
        <p>Déneigement Bélisle</p>
        <p>Date de création: <time datetime="2025-02-22">22-02-2025</time> (dernière mise à jour: <time datetime="2025-02-22">22-02-2025</time>)</p> 
    </footer>
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
        setTimeout(showSlides, 5000); // Change image every 5 seconds
      }
      </script>
</body>
</html>