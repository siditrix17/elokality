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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




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
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact Us</a>
          </li>

      </div>
    </nav>


    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
      </div>

      <div class="w-50 m-auto">
        <form class="" action="userinfo.php" method="post">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name"  autocomplete="off" class="form-control">


          </div>
          <div class="form-group">
            <label>Email-id</label>
            <input type="text" name="email"  autocomplete="off" class="form-control">

          </div>
          <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile"  autocomplete="off" class="form-control">

          </div>
          <div class="form-group">
            <label>Comments</label>
            <textarea name="comment" class="form-control"></textarea>
          </div>
          <button type="submit" name="submit" class="btn btn-primary" href="userinfo.php">Submit</button>


        </form>

      </div>
  </section>


  <footer>

    <p class="p-3 bg-dark text-white">@eLokality</p>

  </footer>
  <!-- Footer -->  <!-- Footer -->

</body>
</html>

  <!-- Footer -->
