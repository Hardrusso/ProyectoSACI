<?php 
    
    include "./clases/Conexion.php";
    include "./clases/Crud.php";
    include "./header.php";

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);
	$idMongo = $datos->_id;

?>


<div class="container">
    <div class="row">
        <div class="col">
			<div class="card mt-4">
				<div class="card-body">
					<a href="index.php" class="btn btn-outline-info">
						<i class="fa-solid fa-angles-left"></i> Regresar
					</a>
					<h1>SACI</h1>
					<h2>SISTEMA DE ACCESO Y CONTROL DE INGRESO </h2>
					<h2>Actualizar Registro</h2>
				</div>
			</div>
		</div>
	</div>
</div>


<form id="form1" action="./procesos/actualizar.php" method="POST">
		<input type="text" hidden value="<?php echo $idMongo?>" name="id">	
		<label for="nombre">Nombres:</label>
		<input type="text" name="nombre" id="nombre" value="<?php echo $datos->nombre?>"><br>

		<label for="apellido">Apellidos:</label>
		<input type="text" name="apellido" id="apellido" value="<?php echo datos->Apellidos?>"><br>

		<label for="tipo_documento">Tipo de Documento:</label>
		<select name="tipo_documento" id="tipo_documento" value="<?php echo datos->Tipo_de_Documento?>">
			<option value="">Selecciona una opción</option>
			<option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
			<option value="Tajeta de Identidad">Tajeta de Identidad</option>
			<option value="Cédula de Extranjería">Cédula de Extranjería</option>
			<option value="PEP">PEP</option>
			<option value="Permiso de Protección Temporal">Permiso de Protección Temporal</option>
		</select><br>

		<label for="documento">Documento:</label>
		<input type="text" name="documento" id="documento" value="<?php echo datos->Documento?><br>

		<label for="tipo_persona">Tipo de persona:</label>
		<select name="tipo_persona" id="tipo_persona" value="<?php echo datos->Tipo_de_Persona?>">
			<option value="">Selecciona una opción</option>
			<option value="Instructor">Instructor</option>
			<option value="Aprendiz">Aprendiz</option>
			<option value="Personal Administrativo">Personal Administrativo</option>
			<option value="Visitante">Visitante</option>
		</select><br>

		<label for="jornada">Jornada:</label>
		<select name="jornada" id="jornada" value="<?php echo datos->Jornada?>">
			<option value="">Selecciona una opción</option>
			<option value="Mañana">Mañana</option>
			<option value="Tarde">Tarde</option>
			<option value="Noche">Noche</option>
			<option value="No Aplica">No Aplica</option>
		</select><br>

		<label for="ficha">Ficha:</label>
		<input type="text" name="ficha" id="ficha" value="<?php echo datos->Ficha?>"><br>
		
		<label for="titulada">Nombre del Programa:</label>
		<input type="text" name="titulada" id="titulada" value="<?php echo datos->Nombre_del_Programa?>"><br>

		<label for="tipo_elemento">Elemento a Registrar:</label>
		<select name="tipo_elemento" id="tipo_elemento" value="<?php echo datos->Elemento_a_Registrar?>">
			<option value="">Selecciona una opción</option>
			<option value="Moto">Moto</option>
			<option value="Vehículo">Vehículo</option>
			<option value="Bicicleta">Bicicleta</option>
			<option value="Computador Portatil">Computador Portátil</option>
			<option value="Tablet">Tablet</option>
			<option value="Otros">Otros</option>
		</select><br>

		<label for="serial">Placa - Serial del Elemento a Registrar:</label>
		<input type="text" name="serial" id="serial" value="<?php echo datos->Placa_o_Serial?>"><br>

		<label for="otros">Características Elemento a Registrar:</label>
		<input type="text" name="otros" id="otros" value="<?php echo datos->Caracteristicas_del_Elemento?>"><br>

		<label for="codigo_barras">Codigo de Barras:</label>
		<input type="text" name="codigo_barras" id="codigo_barras" value="<?php echo datos->Codigo_de_Barras?>"><br>
		   
	<button class="btn btn-primary mt-3">
		<i class="fa-solid fa-floppy-disk"></i> Agregar Nuevo Registro
	</button>
</form>


    <?php include "./scripts.php";?>
