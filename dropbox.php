<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<style>
#drop-box-body{
width: 100%;
background-color: #FFFFFF;
}
.dropbtn {
    background-color: white;
    color: black;
    padding: 12px;
    font-size: 14px;
    font-family: 'Quicksand', sans-serif;
    border: none;
    margin-left: 20px;
    width: 200px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    font-family: 'Quicksand', sans-serif;
    font-size: 14px;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
  background-color:  #ffffff;
  text-decoration: underline;
}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {
  background-color: white;
  text-decoration: underline;}
</style>
</head>
<body>
<div id="drop-box-body">
<div class="dropdown">
  <button class="dropbtn">Electronics</button>
  <div class="dropdown-content">
    <a href="cctv-camera.php">CCTV-Camera</a>
    <a href="realme-mobile.php">Realme 2</a>
    <a href="xbox.php">Microsoft Xbox One S</a>
    <a href="iphone-x.php">Iphone X</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">TVs & Applications</button>
  <div class="dropdown-content">
    <a href="tv.php">Sony 101.6cm (40 inch) Full HD LED TV  (KLV-40R252F)</a>
    <a href="video-camera.php">Sony HC-PV100GW NONE Camcorder Camera  (Black)</a>
    <a href="laptop.php">Predator Laptop</a>
    <a href="dvd.php">Sylvania DVP3618/94 DVD Player  (Black)</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Home & Furniture</button>
  <div class="dropdown-content">
    <a href="sofa1.php">Perfect Homes Crete Leatherette and Fabric 3 Seater Sofa</a>
    <a href="sofa2.php">sofa 2</a>
    <a href="sofa3.php">Sofa 3</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Men</button>
  <div class="dropdown-content">
    <a href="men1.php">Peter England Suit Self Design Men Suit</a>
    <a href="men2.php">Men 2</a>
    <a href="men3.php">Men 3</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Women</button>
  <div class="dropdown-content">
    <a href="women1.php">Women Saree </a>
    <a href="women2.php">Women Sandal</a>
    <a href="women3.php">Women Shoes</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Offer Zone</button>
  <div class="dropdown-content">
    <a href="laptop.php">Predator Laptop</a>
    <a href="women2.php">Women Sandal</a>
    <a href="realme-mobile.php">Realme 2</a>
  </div>
</div>

</div>
</body>
</html>
