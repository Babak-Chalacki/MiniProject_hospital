<html lang="es">
  <?php session_start(); ?>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/doctor_register.css"/>
    <title> register </title>
  </head>

  <body>
  <?php  if(isset( $_SESSION['message'])): ?>

<div class="col-12">
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <?php echo $_SESSION["message"]; ?>
    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
  </div>
  <?php unset($_SESSION["message"]) ?>
</div><?php  endif; ?>
    <section>
      <div class="login-container">
        <h2> register </h2>

        <form method="post" action="../controller/doctor_register_proccess.php">
          <div class="input-box">
            <span class="icon">
            <i class="fas fa-id-card"></i>
          </span>

          <input required type="text" id="email" name="fullname">
            <label for="email">Full name</label>
          </div>
  
          <div class="input-box">
            <span class="icon">
            <i class="fa-solid fa-user-md"></i>
            </span>
                    
            <input name="username" required type="text" id="contraseña">
            <label for="contraseña">Username</label>
          </div>
          <div class="input-box">
            <span class="icon">
              <i class="fa-solid fa-lock"></i>
            </span>

            <input name="password" required type="password" id="contraseña">
            <label for="contraseña">Password</label>
          </div>
          <div class="input-box">
            <span class="icon">
            <i class="fa fa-mars" aria-hidden="true"></i>
            <i class="fa fa-venus" aria-hidden="true"></i>
                      </span>

            <input name="gender" required type="text" id="contraseña">
            <label for="contraseña">gender </label>
          </div>

          <div class="input-box">
            <span class="icon">
            <i class="fa fa-envelope" aria-hidden="true"></i>
                      </span>

            <input name="email" required type="email" id="email">
            <label for="email">Email </label>
          </div>
  

          <div class="input-box">
            <span class="icon">
            <i class="fa fa-history" aria-hidden="true"></i>
                      </span>

            <input name="jobbio" required type="text" id="email">
            <label for="email">About your job</label>
          </div>
  

          <div class="input-box">
            <span class="icon">
            
<i class="fas fa-stethoscope"></i>
                      </span>

            <input name="personnelcode" required type="number" id="email">
            <label for="email">Personnel code</label>
          </div>
  
          <div class="remember-forgot">
            <label>
              <input type="checkbox"> Remember me
            </label>
  
            <a href="#">forget password</a>
          </div>

          <button type="submit">Submit</button>
        </form>

      </div>
    </section>
  </body>
</html>
