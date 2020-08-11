<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Blog - Flexor Bootstrap Template</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Flexor - v2.2.0
    * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<style>

    * {
        box-sizing: border-box;
    }
    body {
        margin: 0;
        font-family: sans-serif;
    }
    a {
        color: #666;
        font-size: 14px;
        display: block;
    }
    .logo {
        width: 190px;
        height: 60px;
        background: #DDD;
    }
    .login-title {
        flex-basis: 100%;
    }
    #login-page {
        display: flex;
    }
    .login {
        width: 30%;
        height: 100vh;
        background: #FFF;
        padding: 50px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        align-content: center;
        text-align: center;
    }
    .login a {
        margin-top: 25px;
    }
    .form-login label {
        text-align: left;
        font-size: 13px;
        margin-top: 5px;
        display: block;
        color: #666;
    }
    .input-email,
    .input-password {
        width: 100%;
        background: #DDD;
        border-radius: 5px;
        margin: 4px 0 8px 0;
        padding: 10px;
        float: left;
        display: flex;
    }
    .icon {
        padding: 4px;
        color: #666;
        min-width: 30px;
        text-align: center;
    }
    input[type="email"],
    input[type="password"] {
        width: 100%;
        border: 0;
        background: none;
        font-size: 16px;
        padding: 4px 0;
        outline: none;
    }
    input[type="submit"] {
        width: 100%;
        border: 0;
        border-radius: 25px;
        padding: 14px;
        background: #008552;
        color: #FFF;
        display: inline-block;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        margin-top: 10px;
    }

    .background {
        width: 70%;
        padding: 40px;
        height: 100vh;
        background: linear-gradient(60deg, rgba(158, 189, 19, 0.5), rgba(0, 133, 82, 0.7)), url('https://cdn.pixabay.com/photo/2016/03/09/09/22/workplace-1245776_960_720.jpg') center no-repeat;
        background-size: cover;
        display: flex;
        flex-wrap: wrap;
        align-items: flex-end;
        justify-content: flex-end;
        align-content: center;
        flex-direction: row;
    }
    .background h1 {
        max-width: 420px;
        color: #FFF;
        text-align: right;
        padding: 0;
        margin: 0;
    }
    .background p {
        max-width: 650px;
        color: #DDD;
        font-size: 15px;
        text-align: right;
        padding: 0;
        margin: 15px 0 0 0;
    }
    .madeby {
        position: absolute;
        bottom: 30px;
        right: 40px;
    }
    .madeby p {
        font-weight: bold;
        color: #9EBD13;
    }
    .madeby a {
        color: #222;
        text-decoration: none;
    }
</style>


<div id="login-page">
    <div class="login">
        <h2 class="login-title">Connexion</h2>
        <form class="form-login">
            <label for="email">E-mail</label>
            <div class="input-email">
                <i class="fas fa-envelope icon"></i>
                <input type="email" name="email" placeholder="votre email">
            </div>
            <label for="password">Mot de passe</label>
            <div class="input-password">
                <i class="fas fa-lock icon"></i>
                <input type="password" name="password" placeholder="votre mot de passe">
            </div>
            <input type="submit" value="se connecter">
        </form>
        <a href="#">vous n'avez pas de compte, adhérez?</a>
    </div>
    <div class="background">
        <h1>Association collective des entrepreneurs</h1>
        <p>Vivamus vitae dolor nec dolor pellentesque euismod dignissim sed orci. Donec sodales lacinia suscipit. Fusce fringilla convallis sem, et porttitor mi ornare sit amet. Aliquam.</p>
    </div>
</div>




</body>

</html>