<h1>articulos</h1>

<!-- Contenido destabado -->
<div class="row">
	<div class="center">
		
		<br />
		<div class="col-xs-8 center-block" style="float:none"> 
			<table id="tabla_articulos" class="table table-striped table-bordered display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>id</th>
						<th>Nombre de Actividades</th>
						<th>Nombre de Actividades</th>
						<th>Nombre de Actividades</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					if ($articulos) {
						foreach ($articulos->result() as $articulo ) { ?>	
						<tr > 
							<td><?php echo $articulo->id; ?></td>
							<td><?php echo $articulo->title; ?></td>
							<td><?php echo $articulo->name; ?></td>
							<td><?php echo $articulo->email; ?></td>
							<td>
								<a class="btn btn-primary btn-xs" onClick="editar_articulo('<?php echo $articulo->id; ?>')">
									<span class="glyphicon glyphicon-edit"></span>
									Editar	
								</a>
								<a class="btn btn-danger btn-xs" onClick="eliminardata('users','id','<?php echo $articulo->id; ?>','Usuario','usuarios/consultar')">
									<span class="glyphicon glyphicon-trash"></span>
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


		<?php  $this->load->view('articulo/articulo_editar'); ?>
