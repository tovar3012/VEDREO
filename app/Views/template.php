<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= $this->img('ico/favicon.ico') ?>">

    <title> <?= $this->e($titulo) ?> </title>

    <!-- Bootstrap core CSS 
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    -->

    <link rel="stylesheet" href="<?= $this->css('bootstrap.min.css') ?>">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    -->

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?= $this->css('jumbotron-narrow.css') ?>">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?= $this->section('styles') ?>

  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        
        <?= $this->insert('layout/menu') ?>
        
        <h3 class="text-muted"> <?=$this->section('name-proyect')?> </h3>
      
      </div>

      <div class="content">
        
        <?= $this->section('contenido') ?>  

      </div>

      <?= $this->insert('layout/footer') ?>

    </div> <!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    -->
  </body>
</html>

<?= $this->section('js') ?>