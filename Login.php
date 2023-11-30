<?php
  include "Koneksi.php";
 ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Login Form &bull; Content Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Asset/CSS/style.css?v=1.4">
    <link rel="icon" type="img/png" href="gambar/logo1.png">
    <meta name="author" content="Sonix" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="Plugins/particles.js-master/particles.js-master/demo/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome.css"> -->
    <script type="text/javascript" src="https://kit.fontawesome.com/159ac3c501.js"></script>
</head>
<body>

<!-- particles.js container -->
<div class="container">
    <form class="form-signin pt-5 text-center" style="background: rgba(0,0,0,.5); width: 400px; margin: 0 auto; left: 50%; top: 50%; transform: translate(-50%,-50%); position: absolute; border-radius: 2px;" action="aksilogin.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal text-light">Log In</h1>
      <label for="inputUsername" class="sr-only">Username</label>
      <input type="text" name="user" id="inputUsername" class="form-control" placeholder="Username" required autofocus style="width: 350px; margin: 0 auto;">
      <br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required style="width: 350px; margin: 0 auto;">
      <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" style="width: 350px; margin: 0 auto;">Sign In</button>
        <!-- <p class="text-left text-light pl-4 pt-2">Don't have account? <a href="Register.php">Register</a> Here</p> -->
        <p class="mt-5 mb-3 text-light">&copy; 2020-2021</p>
    </form>
  </div>
  <div id="particles-js"></div>

  <!-- scripts -->
  <script src="Plugins/particles.js-master/particles.js-master/particles.js"></script>
  <script src="Plugins/particles.js-master/particles.js-master/demo/js/app.js"></script>

  <!-- stats.js -->
  <script>
    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');
    update = function() {
      stats.begin();
      stats.end();
      if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
        count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
      }
      requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
  </script>
  <!-- End Login -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>