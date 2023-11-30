<?php
  include "Koneksi.php";
 ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Registration Form &bull; Content Management System</title>
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
    <form class="form-signin pt-5" style="background: rgba(0,0,0,.5); width: 1000px; margin: 0 auto; left: 50%; top: 50%; transform: translate(-50%,-50%); position: absolute; border-radius: 2px; padding: 20px; width: 400px;" action="aksiregister.php" method="post">
    	<div class="container">
	      <h1 class="h3 mb-3 font-weight-normal text-light text-center"><b>Register</b></h1>
	      <label class="pb-2 text-light"><b>Nama</b></label>
	      <input type="text" name="name" class="form-control" placeholder="Name" required autofocu>
	      <br>
	      <label class="pb-2 text-light"><b>Username</b></label>
	      <input type="text" name="user" class="form-control" placeholder="Username" require>
	      <br>
	      <label class="pb-2 text-light"><b>Password</b></label>
	      <input type="password" name="pass" class="form-control" placeholder="Password" require>
	      <br>
	      <label class="pb-2 text-light"><b>Level</b></label>
	      <input type="number" name="lvl" class="form-control" placeholder="Level" require>
	      <br>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
	        <p class="text-left text-light pt-2">Already have account? <a href="Login.php">Login</a> Here</p>
	        <p class="mt-5 mb-3 text-light">&copy; 2020-2021</p>
	    </div>
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