<?php session_start()?>
<html>
    <head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<head>
<style>
* {box-sizing: border-box;}
body {
margin: 0;
font-family: Arial;
}
.header {
overflow: hidden;
background: url(images/banner.png); 
padding: 20px 10px;
}
.header a {
float: left;
color: white;
text-align: center;
padding: 12px;
text-decoration: none;
font-size: 15px;
line-height: 25px;
border-radius: 5px;
}
.headera.logo {
font-size: 25px;
font-weight: bold;
}
.header a:hover {
background-color: grey;
color: black;
}
.headera.active {
background-color: green;
color: white;
}
.header-right {
float: right;
}
@media screen and (max-width: 500px) {
.header a {
float: none;
display: block;
text-align: left;
}
.header-right {
float: none;
}
}
</style>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>
<div class="header">
    <a href="#">
        <img class="header-logo-image" src="images/header1.png" alt="Logo">
    </a>
<div class="header-right">
</div>
</div>
<div style="padding-left:20px">
<h1>Choose Building</h1>
</div>
</body>
    <body>
    <header class="w3-container w3-center" style="padding:128px 16px">
  <a class="w3-button w3-black w3-padding-large w3-large w3-margin-top" href="index.php?bid=1">Main Gate</a>
  <a class="w3-button w3-black w3-padding-large w3-large w3-margin-top" href="index.php?bid=2">Y Building</a>
  <a class="w3-button w3-black w3-padding-large w3-large w3-margin-top" href="index.php?bid=3">OSSA</a>
  <a class="w3-button w3-black w3-padding-large w3-large w3-margin-top" href="index.php?bid=4">Gymnasium</a>
    </header>
        
    </body>
</html>