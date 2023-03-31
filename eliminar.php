
<?php 
    
    include "./clases/Conexion.php";
    include "./clases/Crud.php";
    include "./header.php";

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);

?>

<?php

   

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
					<h2>Eliminar Registro</h2>
                   
                    <table class="table table-danger table-bordered">
                        <thead>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Tipo de Documento</th>
                            <th>Documento</th>
                            <th>Tipo de Persona</th>
                            <th>Jornada</th>
                            <th>Ficha</th>
                            <th>Nombre del Programa</th>
                            <th>Elemento a Registrar</th>
                            <th>Placa - Serial</th>
                            <th>Caracteristicas del Elemento</th>
                            <th>Codigo de Barras</th>
                        </thead>

                        <tbody>
                            <tr>
                                    <td> <?php echo $datos->Nombres;?> </td>
                                    <td> <?php echo $datos->Apellidos?> </td>
                                    <td> <?php echo $datos->Tipo_de_Documento?> </td>
                                    <td> <?php echo $datos->Documento?> </td>
                                    <td> <?php echo $datos->Tipo_de_Persona?> </td>
                                    <td> <?php echo $datos->Jornada?> </td>
                                    <td> <?php echo $datos->Ficha?> </td>
                                    <td> <?php echo $datos->Nombre_del_Programa?> </td>
                                    <td> <?php echo $datos->Elemento_a_Registrar?> </td>
                                    <td> <?php echo $datos->Placa_o_Serial?> </td>
                                    <td> <?php echo $datos->Caracteristicas_del_Elemento?> </td>
                                    <td> <?php echo $datos->Codigo_de_Barras?> </td>
                            </tr>

                        </tbody>

                    </table>
                    <hr>                  
                </div>
                <div class="alert alert-danger" role="alert">
                    <p>¿Esta seguro de eliminar este registro?</p>
                    <p>Una vez eliminado no podra ser recuperado</p>
                    <form action="./procesos/eliminar.php" method="post">
                        <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-user-xmark"></i> Eliminar
                        </button>
            </form>
                </div>
            </div>            
        </div>
       
    </div>
</div>



<?php include "./scripts.php";?>
