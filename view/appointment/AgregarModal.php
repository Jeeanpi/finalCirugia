<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addRowModal" style="z-index:1045" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
	
        <div class="modal-content">
            <div class="modal-header">
               
                <center><h4 class="modal-title" id="myModalLabel">Nuevo Registro</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
                <div class="card-body">
						<form method="POST" autocomplete="off"  action="../view/appointment/nuevo.php">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group form-group-default">
								<label>Fecha</label>
								<input name="dates" type="date" class="form-control" required  placeholder="Ingrese fecha">
							</div>
						</div>
						
						<div class="col-md-6 pr-0">
							<div class="form-group form-group-default">
								<label>Hora</label>
								<input name="hour" type="time" class="form-control" required placeholder="Ingrese la hora">
							</div>
						</div>
						<!-- ---------------------------------------------->
						
					
						<!-- ----------------------------------------------->
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Paciente</label>
								<input type="text" class="form-control" id="nombrePaciente">
								<input type="hidden" name="idPaciente" id="idPaciente">
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Especialidad</label>
								<select class="form-control" id="continentes"  required name="codespe">
								
				
								</select>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Médico</label>
								<select class="form-control" id="paises" required name="coddoc">
								
				
								</select>
							</div>
						</div>
						
						
						
						<div class="col-md-6" style="display:none;">
							<div class="form-group form-group-default">
								<label>Estado</label>
								<select class="form-control" required name="estado">
							<option value="0">0</option>
							</select>
							</div>
						</div>
						
					</div>
			
            </div>

        </div>
		 <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar
				
				
				</button>
                <button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
				
				
				
			</form>
                </div>
			
            </div>

        </div>
		
    </div>
</div>
</div>
<!-- -->