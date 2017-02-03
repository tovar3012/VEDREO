<?php $this->layout('template', ['titulo' => 'VEDREO']) ?>

<?php $this->start('styles') ?>
    <link rel="stylesheet" href="<?= $this->e($this->css('jquery.dataTables.css')) ?>">
    <link rel="stylesheet" href="<?= $this->e($this->css('font-awesome/css/font-awesome.min.css')) ?>">
<?php $this->stop() ?>

<?php $this->start('name-proyect') ?>
    <strong>VEDREO</strong>
<?php $this->stop() ?>

<?php $this->start('contenido') ?>
    
    <table id="tabla" class="display table " cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Creado</th>
            <th>Actualizado</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
            
            <?php foreach($data as $value){ ?>
            <tr>
                <th> <?= $value->id ?> </th>
                <th> <?= $value->nombre ?> </th>
                <th> <?= $value->apellido ?> </th>
                <th> <?= $value->edad ?> </th>
                <th> <?= $value->created_at ?> </th>
                <th> <?= $value->updated_at ?> </th>
                <th>
                    <div class="btn-group">
                        <a class="btn btn-warning" href="<?= $this->e( $this->route('/edit/'.$value->id) ) ?>"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="<?= $this->e( $this->route('/delete/'.$value->id) ) ?>"><i class="fa fa-close"></i></a>
                    </div> 
                </th>
            </tr>
            <?php } ?>

        </tbody>
    </table>    

<?php $this->stop() ?>

<?php $this->start('js') ?>
    
    <!-- JQuery -->
    <script type="text/javascript" src="<?= $this->e( $this->js('jquery-1.12.4.min.js') ) ?>" ></script>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="<?= $this->e( $this->js('bootstrap.min.js') ) ?>" ></script>
    
    <!-- DataTables -->
    <script type="text/javascript" src="<?= $this->e( $this->js('jquery.dataTables.js') ) ?>"></script>

    <script>
    	$(document).on("ready", function(){
       		$('#tabla').DataTable();
       	});
    </script>

<?php $this->stop() ?>