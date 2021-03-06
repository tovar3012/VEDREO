<?php $this->layout('template', ['titulo' => 'VEDREO']) ?>

<?php $this->start('name-proyect') ?>
    <strong>VEDREO</strong>
<?php $this->stop() ?>

<?php $this->start('styles') ?>
    <style type="text/css">
        .error-template {padding: 40px 15px;text-align: center;}
        .error-actions {margin-top:15px;margin-bottom:15px;}
        .error-actions .btn { margin-right:10px; }
    </style>
<?php $this->stop() ?>

<?php $this->start('contenido') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>Oops!</h1>
                <h2>Error 404</h2>
                <div class="error-details">
                    Sorry, an error has occured, Requested page not found!
                </div>
                <div class="error-actions">
                    <a href="#" class="btn btn-primary btn-lg">Volver al inicio </a>
                    <a href="#" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->stop() ?>
