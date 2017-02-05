<?php $this->layout('template', ['titulo' => 'VEDREO']) ?>

<?php $this->start('name-proyect') ?>
    <strong>VEDREO</strong>
<?php $this->stop() ?>

<?php $this->start('styles') ?>
    <link rel="stylesheet" href="<?= $this->css('signin.css') ?>">
<?php $this->stop() ?>

<?php $this->start('contenido') ?>

<div class="container">

  <form class="form-signin" method="POST" action="<?= $this->route('/logindata') ?>">
    <h2 class="form-signin-heading">Login</h2>
    <label for="username" class="sr-only">Username</label>
    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    
    <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    
    <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
  </form>

</div> <!-- /container -->
<br><br>

<?php $this->stop() ?>

