<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
 .col-6 img {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  border: 1px solid #ccc;
  cursor: pointer;
}

.col-6 img:hover {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  border: 1px solid #ccc;
}

.image-cards img {
  transition: transform 0.3s ease;
}

.image-cards img:hover {
  transform: scale(1.1);
}
body{
  background-color: rgb(152, 246, 255);
}
    </style>
    <title>register</title>
</head>
<body>
  <div class="container">
 
    <div class="row mt-5 ">
   <div class="col-12">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">My Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
  <!-- <div class="navbar-nav">
  <a class="nav-item nav-link" href="#" style="margin-right: 10px;">
    <i class="fas fa-user"></i>
    <span>Full Name</span>
  </a>
</div> -->
</nav>
   </div>
    </div>
    <center><div class="rowjustify-content-center mt-5"><h3>who Are You ?</h3></div></center>
    <!-- <div class="row mt-5"></div> -->
    <div class="row justify-content-center">
  <div class="col-6"><center><h4>user</h4></center>
    <a href="user_register.php"><img src="./img/user_profile.jpg" class="img-fluid image-cards img" alt="Lorem Picsum Image"></a>
  </div>
  <div class="col-6"><center><h4>Doctor</h4></center>
<a href="doctor_register.php"><img src="./img/doctor_profile.jpg" class="img-fluid image-cards img" alt="Lorem Picsum Image">
</a>
</div>
</div>
<div class="row mt-5"></div>
    <div class="row mt-5"></div>
    <div class="row mt-5"></div>
    
  </div>
</body>
</html>