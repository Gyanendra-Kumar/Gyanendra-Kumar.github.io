<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

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
  width: 100%;
  margin-left: -380px;
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
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .7}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .7}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
#vid{
  width: 680px;
  height: 301px;
  float: right;
  margin-top: -296px;
  box-shadow: 4px 5px 6px solid red;
}
#vid:hover{

}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="images/furniture.jpg" style="width:675px;height:300px;margin-left:-188px">
  <div class="text">Caption First</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="images/tv.jpg" style="width:675px;height:300px;margin-left:-188px">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="images/clothes.jpg" style="width:675px;height:300px;margin-left:-188px">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="images/cctv-camera.png" style="width:675px;height:300px;margin-left:-188px">
  <div class="text">Caption Four</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="images/sony-camera.jpg" style="width:675px;height:300px;margin-left:-188px">
  <div class="text">Caption Five</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="images/video-game.png" style="width:675px;height:300px;margin-left:-188px">
  <div class="text">Caption Six</div>
</div>

</div>
<br>

<div style="margin-left:280px;margin-top:-40px;">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
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
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<video id="vid" autoplay loop>
  <source src="video/shopping.mp4" type="video/mp4">
  <source src="video/shopping.mp4" type="video/ogg">
</video>

</body>
</html>
