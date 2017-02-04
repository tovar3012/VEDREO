<?php $this->layout('template', ['titulo' => 'Actualizar - VEDREO']) ?>

<?php $this->start('name-proyect') ?>
    <strong>VEDREO</strong>
<?php $this->stop() ?>

<?php $this->start('contenido') ?>
    
    <form class="form-horizontal" method="POST" action="<?= $this->route('/update/'.$id) ?>">
      
      <div class="form-group">
        <label class="control-label col-sm-2">Nombre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nombre" value="<?= $this->e($nombre) ?>" placeholder="Ingrese su nombre...">
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-sm-2">Apellido</label>
        <div class="col-sm-10"> 
          <input type="text" class="form-control" name="apellido" value="<?= $this->e($apellido) ?>" placeholder="Ingrese su apellido...">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2">Edad</label>
        <div class="col-sm-10"> 
          <input type="number" class="form-control" name="edad" value="<?= $this->e($edad) ?>" placeholder="Ingrese su edad...">
        </div>
      </div>
      
      <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-warning">Actualizar</button>
        </div>
      </div>
    </form>


<?php $this->stop() ?>