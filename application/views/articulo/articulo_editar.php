<?php 
$this->load->helper(array('form', 'url'));
$attributes = array('id' => 'auth-sign-up',
    'class'=>'block-form block-form-default'        
    );
    echo form_open_multipart('Usuarios/crearusuario',$attributes);?> 
<!-- <form id="auth-sign-up" class="block-form block-form-default" action="<?php echo base_url(); ?>plataforma/creargrupos" method="post">
-->
<!-- Modal -->
<div class="modal fade" id="modal_articulo_editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1" >
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Editar</h4>
        </div>
        <div class="modal-body">
         <div class="form-group">
             <label for="id" class="control-label required">id name</label>
             <input type="text" name="id" id="id" class="form-control" placeholder="id" />
         </div>
         <div class="form-group">
            <label for="nombre" class="control-label required">usuario</label>
            <input type="text" name="nombre" id="nombre" value="" maxLength="255" class="form-control" placeholder="nombre" />
        </div>

        <div class="form-group">
            <label for="email" class="control-label required">Email</label>
            <input type="text" name="email" id="email" value="" maxLength="255" class="form-control" placeholder="email" />
        </div>
        <div class="form-group">
            <label for="password" class="control-label required">password</label>
            <input type="password" name="password" id="password" value="" maxLength="255" class="form-control" placeholder="password" />
        </div>
        <div class="form-group">
            <label for="tipo" class="control-label required">tipo</label>
            <input type="text" name="tipo" id="tipo" value="" maxLength="255" class="form-control" placeholder="tipo" />
        </div>
        

    </div><!-- fin body modal -->
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <input type="submit" name="Submit" id="Submit" value="Editar"  class="btn btn-primary" />
    </div>
</div>
</div><!-- tamaño -->
</div>
</div>
</form>