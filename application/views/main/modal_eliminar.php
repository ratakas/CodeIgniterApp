		<?php 
		$this->load->helper(array('form', 'url'));
		$attributes = array('id' => 'auth-sign-up',
			'class'=>'block-form block-form-default'        
			);
			echo form_open_multipart('Usuarios/eliminardatabd',$attributes);?> 
			<div class="modal fade" id="eliminargeneral" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1" >
						<div class="modal-content" style="    margin-top: 56px;">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="eli_titulo">Eliminar recurso</h4>
							</div>
							<div class="modal-body" id="body-eliminargruomsmodal" ">
								<div class="form-group">
									<input type="hidden" name="eli_id" id="eli_id" value="">
									<input type="hidden" name="eli_tabla" id="eli_tabla" value="">
									<input type="hidden" name="eli_col" id="eli_col" value="">
									<input type="hidden" name="eli_dir" id="eli_dir" value="">
								</div>
								<div class="form-group">
									<h4>Esta Seguro De eliminar esté <div id="eli_tipo"></div> </h4>
									<div> </div>
								</div>
							</div><!-- fin body modal -->
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
								<input type="submit" name="Submit" id="Submit" value="Eliminar"  class="btn btn-primary" />
							</div>
						</div>
					</div><!-- tamaño -->
				</div>
			</div>
		</form>