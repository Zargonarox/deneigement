<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Antoine Moitessier">
    <meta name="description" content="Page d'accueil pour le site web de déneigement belisle.">
    <meta name="keywords" content="Belisle, déneigement, accueil">
    <title>Déneigement Bélisle</title>
    <link rel="icon" href="../images/logo_cropped.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/2d29c813bd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Autour+One&family=Chocolate+Classical+Sans&family=Damion&family=Delius+Swash+Caps&display=swap" rel="stylesheet">

    <style>
      #Main_text {border-radius:25px;padding:10px;margin:5px;box-sizing:border-box;grid-area: main;z-index: 1;display: flex;flex-direction:column;justify-content: center;}

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
          margin-top:30px;
          margin-bottom:10px;
          grid-template-columns: 100%;
          grid-template-rows: 40% 40% 30%;
          grid-template-areas: 
          "main"
          "side"
          "main_footer";
          grid-area: Main; box-sizing:border-box;}
      }
      @media only screen and (max-height: 100vh) {
          body, html {
            display: grid;
            height:100vh;
            width:100vw;
            grid-template-columns: 1fr;
            grid-template-rows: 110px auto 60px;
            box-sizing:border-box;
            grid-template-areas:
            "title"
            "text"
            "footer";
            }
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
  grid-template-columns: 50% 50%;
  grid-template-rows: 2fr 1fr;
  grid-template-areas: 
  "main side"
  "main_footer main_footer";
  box-sizing:border-box;
  z-index: 1;
  color:rgb(21, 19, 150);
  grid-area: text;}
#Sidebar {border-radius:25px;background-color:#7595c4;padding:10px;margin:5px;box-sizing:border-box;grid-area: side;z-index: 1;border: 5px solid white;display: flex;flex-direction:column;justify-content: center;}
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
#Main_footer {background-color:#7595c4;border-radius:25px;padding:10px;margin:5px;box-sizing:border-box;z-index: 1;grid-area: main_footer;border: 5px solid white;display: flex;flex-direction:column;justify-content: center;}

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
.circles{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.circles li{
  position: absolute;
  display: block;
  list-style: none;
  width: 20px;
  height: 20px;
  color:white;
  animation: animate 25s linear infinite;
  bottom: -150px;
  z-index: 0;
  
}

.circles li:nth-child(1){
  left: 25%;
  width: 70px;
  height: 70px;
  font-size:70px;
  animation-delay: 0s;
}


.circles li:nth-child(2){
  left: 10%;
  width: 20px;
  height: 20px;
  font-size:20px;
  animation-delay: 2s;
  animation-duration: 12s;
}

.circles li:nth-child(3){
  left: 70%;
  width: 17px;
  height: 17px;
  font-size:17px;
  animation-delay: 4s;
}

.circles li:nth-child(4){
  left: 40%;
  width: 57px;
  height: 57px;
  font-size:57px;
  animation-delay: 0s;
  animation-duration: 18s;
}

.circles li:nth-child(5){
  left: 65%;
  width: 18px;
  height: 18px;
  font-size:18px;
  animation-delay: 0s;
}

.circles li:nth-child(6){
  left: 75%;
  width: 100px;
  height: 100px;
  font-size:100px;
  animation-delay: 3s;
}

.circles li:nth-child(7){
  left: 35%;
  width: 130px;
  height: 130px;
  font-size:130px;
  animation-delay: 7s;
}

.circles li:nth-child(8){
  left: 50%;
  width: 24px;
  height: 24px;
  font-size:24px;
  animation-delay: 15s;
  animation-duration: 45s;
}

.circles li:nth-child(9){
  left: 23%;
  width: 12px;
  height: 12px;
  font-size:12px;
  animation-delay: 2s;
  animation-duration: 35s;
}

.circles li:nth-child(10){
  left: 86%;
  width: 120px;
  height: 120px;
  font-size:120px;
  animation-delay: 2s;
  animation-duration: 12s;
}

.circles li:nth-child(11){
left: 52%;
width: 63px;
height: 63px;
font-size:63px;
animation-delay: 6s;
animation-duration: 12s;
}

.circles li:nth-child(12){
left: 5%;
width: 16px;
height: 16px;
font-size:16px;
animation-delay: 7s;
animation-duration: 27s;
}

.circles li:nth-child(13){
left: 84%;
width: 24px;
height: 24px;
font-size:24px;
animation-delay: 10s;
animation-duration: 42s;
}

.circles li:nth-child(14){
left: 55%;
width: 11px;
height: 11px;
font-size:11px;
animation-delay: 5s;
animation-duration: 38s;
}

.circles li:nth-child(15){
left: 68%;
width: 83px;
height: 83px;
font-size:83px;
animation-delay: 2s;
}

.circles li:nth-child(16){
left: 7%;
width: 64px;
height: 64px;
font-size:64px;
animation-delay: 1s;
animation-duration: 20s;
}

.circles li:nth-child(17){
left: 10%;
width: 125px;
height: 125px;
font-size:125px;
animation-delay: 2s;
animation-duration: 18s;
}

.circles li:nth-child(18){
left: 90%;
width: 56px;
height: 56px;
font-size:56px;
animation-delay: 3s;
animation-duration: 15s;
}



@keyframes animate {
  0%{
      transform: translateY(-120vh) rotate(0deg);
      opacity: 1;
      border-radius: 0;
  }
  100%{
      transform: translateY(0) rotate(720deg);
      opacity: -0.25;
      border-radius: 50%;
  }
}
    </style>
</head>
<body class="body">
<ul class="circles">
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i></li>
            </ul>
    <header id="Title">
    <div class="navbar">
            <div class="dropdown">
              <button class="dropbtn">
                <i class="fas fa-bars" style="font-size:25px;"></i>
              </button>
              <div class="dropdown-content">
                <a title="La page d'accueil." href="../"><i class="fa-solid fa-snowflake"></i> Accueil <i class="fa-solid fa-snowflake"></i></a>
                <a title="Forfaits et services." href="../forfaits/"><i class="fa-solid fa-snowflake"></i> Forfaits et services <i class="fa-solid fa-snowflake"></i></a>
                <a title="La zone que nous déneigeons." href="../zone/"><i class="fa-solid fa-snowflake"></i> Zone déneigée <i class="fa-solid fa-snowflake"></i></a>
                <a title="Nous joindre." href="../joindre/" id="current_page"><i class="fa-solid fa-snowflake"></i> Nous joindre <i class="fa-solid fa-snowflake"></i></a>
              </div>
            </div>
          </div>
          <div id="Logo">
          <a href="../">
          <h1>Déneigement Bélisle</h1>
          </a>  
          <a href="../">
          <img src="../images/logo_cropped.png" alt="logo" width="100" height="100">
          </a>   
          </div>
    </header>
    <div id="Accueil" style="grid-area:text;">
    </div>
    <main id="Main_text" style="color:white;text-align:center;grid-area:text;line-height:2em;">
        <h2 style="text-decoration: underline double;margin:20px;color:rgb(21, 19, 150);">NOUS JOINDRE</h2>
        <p><a href="https://www.facebook.com/profile.php?id=100084755738081#"><i class="fa-brands fa-facebook"></i> Déneigement Bélisle</a></p>
        <p><a href="mailto:belisledeneigement@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> belisledeneigement@gmail.com</a></p>   
        <p><a href="tel:819-951-0187"><i class="fa-solid fa-phone"></i> 819-951-0187</a></p>    
    </main>

    
    <footer id="General_foot" style="clear: both;font-size: 11px;grid-area:footer;">
        <p>Déneigement Bélisle</p>
        <p>Date de création: <time datetime="2025-02-22">22-02-2025</time> (dernière mise à jour: <time datetime="2025-02-22">22-02-2025</time>)</p> 
    </footer>
</body>
</html>