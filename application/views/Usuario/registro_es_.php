<?php 
	setlocale(LC_TIME,'es_ES.UTF-8');
	$dia = date('d-m-Y');
	$hora= date('h:i:s A');
?>
<link href="<?php echo base_url()?>assets/js/FormValidation/formValidation.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/css/chkinchkout_style.css" rel="stylesheet" type="text/css" />
<form id="form-registro" action="<?php echo base_url()?>index.php/main/insertar_registro" method="post" role="form">
	<div class="modal-header text-center">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h3 class="modal-title">Registrar Hora de Entrada - Salida</h3>
	</div>
	<div class="modal-body col-md-12">
		<h3>
			<div class="form-group col-md-6">
				<label>Día: </label>
					<input type="text" id="fecha_chk " name="fecha_chk " class="form-control input-lg text-center" value="<?php echo $fecha;?>" readonly >
			</div>
			<div class="form-group col-md-6">
				<label>Hora: </label>
					<input type="text" id="horae_chk " name="horae_chk " class="form-control input-lg text-center" value="<?php echo $horae_chk ;?>" readonly>
			</div>
			<div class="form-group col-md-12">
				<label>Cedula Profesor: </label>
					<select id="cedchkprof" name="cedchkprof" class="form-control input-lg" autofocus="on">
						<option value=""> </option>
						<?php
							// consulta para ubicar las notas del estudiante
							$personal = $this->Main_model->consult_profesores();
							foreach ($personal->result() as $r) {
								echo '<option value="'.$r->cedulaprof.'">'.$r->cedulaprof.' - '.$r->apenomprof.'</option>';
							}
						?>
					</select>
			</div>
		</h3>
			<div class="modal-footer col-md-12 col-sd-3 btn-group">
				<button 
					type="submit" 
					name="posteo" 
					id="posteo" 
					class="btn btn-primary btn-large" 
					value="ENTRADA"
					title="Registrar ENTRADA" >
					<i class="glyphicon glyphicon-log-in"></i>&nbsp;&nbsp;ENTRADA
				</button>
				<button 
					type="submit" 
					name="posteo" 
					id="posteo" 
					class="btn btn-danger btn-large col-md-push-1 col-sm-push-1" 
					value="SALIDA" 
					title="Registrar SALIDA" >SALIDA&nbsp;&nbsp;
					<i class="glyphicon glyphicon-share-alt"></i>
				</button>
			</div>
			<div id="ajaxcontent"></div>
		</div>
	</div>
</form>
<script src='<?php echo base_url()?>assets/js/FormValidation/formValidation.min.js'></script>
<script src='<?php echo base_url()?>assets/js/FormValidation/formValidation_bootstrap.min.js'></script>
<script src='<?php echo base_url()?>assets/js/FormValidation/formValidation_language_es_ES.min.js'></script>
<script src="<?php echo base_url()?>assets/js/selectize.js"></script>
<script>
	$('#cedchkprof').selectize({
		create: true,
		sortField: {
			field: 'text',
			direction: 'asc'
		},
		placeholder: 'Matricula del alumno'
	});
</script>
<script>
	// validacion de campos
	$('#form-registro').formValidation({
	 	framework: 'bootstrap',
		 err: {
			container: 'tooltip'
		 },
		 row: {
			selector: 'div'
		},
		 /*icon: {
			valid: 'fa fa-check',
			invalid: 'fa fa-times',
			validating: 'fa fa-refresh'
		 },*/
		 excluded: ':disabled',
		 fields: {
			 cedchkprof: {
				 validators: {
					 notEmpty: {
						 message: 'La matricula es requerida'
					 }
				 }
			 }
		 }
	});
</script>
<script>
	//callback del manejador para enviar el formulario completo
	$("#form-registro").submit(function(event)
	{
		event.preventDefault(); //DETENER el comportamiento estandar del "action"
	    var postData = $(this).serializeArray();// con esto revisa todo lo que sea posteable en el form y lo recoje en una variable
	    var formURL = $(this).attr("action");
	    $.ajax(
	    {
	        url : formURL,
	        type: "POST",
	        data : postData,
	        success:function(data, textStatus, jqXHR) 
	        {
	            //alert(data);
	            $("#ventanaEditar").modal("hide");
	            $("#ajaxcontent").html(data);

	        },
	        error: function(jqXHR, textStatus, errorThrown) 
	        {
	            alert(errorThrown);
	        }
	    });
	});