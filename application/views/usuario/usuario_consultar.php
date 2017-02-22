<!-- Contenido destabado -->
<div class="row">
	<div class="center">
		
		<br />
		<div class="col-xs-6 center-block" style="float:none"> 
			<table id="tabla_user" class="table table-striped table-bordered display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>id</th>
						<th>Nombre de Actividades</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					if ($usuarios) {
						foreach ($usuarios->result() as $usuario ) { ?>	
						<tr > 
							<td><?php echo $usuario->id; ?></td>
							<td><?php echo $usuario->name; ?></td>
							<td>
								<a class="btn btn-primary btn-xs" onClick="eliminardata('users','id','<?php echo $usuario->id; ?>','Usuario','usuarios/consultar')">
									<span class="glyphicon glyphicon-plus"></span>
									Eliminar	
								</a>
							</td>
						</tr>
						<?php } 
					}?>
					<tbody>
					</table>
				</div>
			</div>
		</div>


		<div class="col-xs-6 center-block" style="float:none"> 
			<button type="button"  class="btn btn-success " data-toggle="modal" data-target="#modal_usuario_crear"><span class="glyphicon glyphicon-plus" ></span> CREAR Materias</button>
		</div>

		<?php  $this->load->view('usuario/usuario_crear'); ?>

		<?php  $this->load->view('main/modal_eliminar');
		/*
		eli_tabla= tabla
		eli_col= columna
		eli_id= id columna
		eli_tipo= usiario....
		eli_dir= direcios dps de eliminar..
		*/
		?>

		<div>holaa </div>

		<div>solo text</div>
		<div>solo text2</div>
		<div>solo text3</div>

		

















		<?php 
		if ($usuarios) {
			foreach ($usuarios->result() as $usuario ) { ?>	
			<ul>
				<li> <?php echo $usuario->id; ?></li>
				<li> <?php echo $usuario->name; ?></li>
				<li> <?php echo $usuario->email; ?></li>
			</ul>
			<?php }}else{
				echo "<h2>error no encotro</h2>";
			}?>
