<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">


</head>

  <body >

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

      </div>
    </nav>

<h2>Service Locator App:</h2><br>
<p>Enter your location as co-ordinates to find out services near you!</p>
<br>

    <form action="show_service.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Latitude</label>
        <input type="text" class="form-control" name='lat' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="latitude">
        <small id="emailHelp" class="form-text text-muted">Latitude and Longitude should be 8 places till decimal</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Longitude</label>
        <input type="text" name="long" class="form-control" id="exampleInputPassword1" placeholder="longitude">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Distance</label>
        <input type="text" name="distance" class="form-control" id="exampleInputPassword1" placeholder="distance in kms">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Category:</label>
        <select name="type">
  <option value="">Select..</option>
  <option value="fastfood">Fast-food</option>
  <option value="vegetables">Vegetables</option>
  <option value="groceries">Groceries</option>
</select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
