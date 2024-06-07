<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/user_register.css">
    <title>user registeration</title>
</head>

<body>
    <div class="container">
        <form method="post" action="../controller/user_register_proccess.php">
            <h1>Register form</h1>
            <div class="login__field">
                <fieldset>
                    <legend>Full name</legend>
                    <input required name="fullname" type="text" class="login__input" placeholder="Enter your name and family">
            </div>
            <br>
            <div class="login__field">
                <fieldset>
                    <legend>Username</legend>
                    <input required name="username" type="text" class="login__input" placeholder="Enter your username">
            </div>
            <br>
            <div class="login__field">
                <fieldset>
                    <legend>password</legend>
                    <input required name="password" type="password" placeholder="Enter your password" pattern="[0-9a-z-A-Z]{4,8}">
            </div>
            <br>
            <div class="login__field">
                <fieldset>
                    <legend>Gender</legend>
                    <input required name="gender" type="text" class="login__input" placeholder="male / female">
            </div>
            <br>
            <div class="login__field">
                <fieldset>
                    <legend>Email</legend>
                    <input required name="email" type="text" class="login__input" placeholder="example@gmail.com">
            </div>
            <br>
            <br>
            <div class="login__field">
                <fieldset>
                    <legend>Mobile number</legend>
                    <input  required name="number" type="text" class="login__input" placeholder="+(98)9059649619">
            </div>
            <br>
            <button>register</button>
            <br>
            <p>
                <a href="endereço">forgot password</a>
        </form>
</body>

</html>