<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<style media="screen">
body {
font-family: Arial, Helvetica, sans-serif;
margin: 0;
}

html {
box-sizing: border-box;
}

*, *:before, *:after {
box-sizing: inherit;
}

.column {
float: left;
width: 33.3%;
margin-bottom: 16px;
padding: 0 8px;
}

.card {
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
margin: 8px;
}

.about-section {
padding: 50px;
text-align: center;
background-color: #474e5d;
color: white;
}

.container {
padding: 0 16px;
}

.container::after, .row::after {
content: "";
clear: both;
display: table;
}

.title {
color: grey;
}

.button {
border: none;
outline: 0;
display: inline-block;
padding: 8px;
color: white;
background-color: #000;
text-align: center;
cursor: pointer;
width: 100%;
}

.button:hover {
background-color: #555;
}

@media screen and (max-width: 650px) {
.column {
  width: 100%;
  display: block;
}
}
</style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">eLokality</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registration/login.php">Login/Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact Us</a>
          </li>

//main-content

      </div>
    </nav>
    <div class="about-section">
    <h1>About Us Page</h1>
    <p>Some text about who we are and what we do.</p>
    <p>Resize the browser window to see that this page is responsive by the way.</p>
  </div>

  <h2 style="text-align:center">Our Team</h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="images/abhi.jpg" alt="abhi" style="width:100%">
        <div class="container">
          <h2>Jane Doe</h2>
          <p class="title">CEO & Founder</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>jane@example.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="images/sid.jpg" alt="sid" style="width:100% height:20%">
        <div class="container">
          <h2>Mike Ross</h2>
          <p class="title">Art Director</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>mike@example.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>


  </div>
