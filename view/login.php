<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
  background-color: rgb(152, 246, 255);
}

#doctorcontainer{
    display: none;
    background: rgb(12,208,212);
background: linear-gradient(0deg, rgba(12,208,212,1) 0%, rgba(255,255,255,1) 45%, rgba(17,199,217,1) 100%);
}
#usercontainer{
    
    display: none;
    background: rgb(12,208,212);
background: linear-gradient(0deg, rgba(12,208,212,1) 0%, rgba(255,255,255,1) 45%, rgba(17,199,217,1) 100%);
}
#user, #doctor {
    border-radius: 82px;
    background: linear-gradient(145deg, #f0f0f0, #cacaca);
    box-shadow:  9px 9px 18px #5a5a5a,
                 -9px -9px 18px #ffffff;
}

#user:hover, #doctor:hover {
    /* transition: 1s; */
    background: #e0e0e0;
    box-shadow: inset 9px 9px 18px #5a5a5a,
                inset -9px -9px 18px #ffffff;
}
    </style>
    <title>login</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5"></div>
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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
        <div class="row mt-5"></div>
        
        <div class="row mt-5"></div>
        <!-- user  -->
    
     <div class="pt-5 pb-5 rounded-pill" id="usercontainer">
         <center><h4>user login form</h4></center>
     <div class="row justify-content-center">
    <div class="col-md-6">
      <form method="post" action="../controller/user_login_proccess.php" class="border p-4">
        <div class="form-group">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-user"></i>
              </span>
            </div>
            <input name="username" type="text" class="form-control" id="username" placeholder="Enter username" required>
          </div>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-lock"></i>
              </span>
            </div>
            <input name="password" type="password" class="form-control" id="password" placeholder="Enter password" required>
          </div>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="remember">
          <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="#" class="btn btn-link">Forgot password?</a>
      </form>
    </div>
  </div>
     </div>
      <!-- user  -->

         <!-- doctor  -->
   
     <div class="pt-5 pb-5 rounded-pill" id="doctorcontainer">
         <center><h4>doctor login form</h4></center>
     <div class="row justify-content-center">
    <div class="col-md-6">
      <form method="post" action="../controller/doctor_login_proccess.php" class="border p-4">
        <div class="form-group">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-user"></i>
              </span>
            </div>
            <input name="username" type="text" class="form-control" id="username" placeholder="Enter username" required>
          </div>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-lock"></i>
              </span>
            </div>
            <input name="password" type="password" class="form-control" id="password" placeholder="Enter password" required>
          </div>
        </div>

        <div class="form-group">
          <label for="personel">personel code</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-user-md"></i>
              </span>
            </div>
            <input name="personnelcode" type="number" class="form-control" id="personel" placeholder="Enter you personnel code" required>
          </div>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="remember">
          <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">login</button>
        <a href="#" class="btn btn-link">Forgot password?</a>
      </form>
    </div>
  </div>
     </div>
      <!-- doctor  -->

<div class="row mt-5"></div>
<div class="row mt-5"></div>
<div class="row mt-5"></div>

      <!-- btn  -->
      <div style="margin-left:150px;" class="row justify-content-center">
  <div class="col-6">
    <button  class="btn p-5" id="user" style="color:black; font-size: 30px; font-family: arial; " >user login</button>
  </div>
  <div class="col-6">
 <button  class="btn p-5" id="doctor" style="color:black; font-size: 30px; font-family: arial; " >doctor login</button>
</div>
</div>
      <!-- btn  -->
     </div>

     <script>
        let usercontainer = document.getElementById("usercontainer")
        let doctorcontainer = document.getElementById("doctorcontainer")
        let userbtn = document.getElementById("user")
        let doctorbtn = document.getElementById("doctor")

        userbtn.addEventListener("click",function(){
            usercontainer.style.display = "block"
            userbtn.style.display = "none"
            doctorbtn.style.display = "none"
        })
        doctorbtn.addEventListener("click",function(){
            doctorcontainer.style.display = "block"
            userbtn.style.display = "none"
            doctorbtn.style.display = "none"
        })

     </script>
</body>
</html>