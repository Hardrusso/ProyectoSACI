<?php 
    require_once "./clases/Conexion.php";
    require_once "./clases/Crud.php";
    $crud = new Crud();
    $datos = $crud->mostrarDatos();
?>

<?php include "./header.php";?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h1>SACI</h1>
                    <h2>SISTEMA DE ACCESO Y CONTROL DE INGRESO </h2>
                    <a href="./agregar.php" class="btn btn-primary">
                    <i class="fa-solid fa-user-plus"></i> Agregar Nuevo Registo
                    </a>
                    <hr>
                    <table class="table table-sm table-hover table-bordered">
                        <thead>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Tipo de Documento</th>
                            <th>Documento</th>
                            <th>Tipo Persona</th>
                            <th>Elmento Registrado</th>
                            <th>Codigo de Barras</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>
                            <?php
                                foreach($datos as $item) {
                            ?>
                                <tr>
                                    <td> <?php echo $item->Nombres?> </td>
                                    <td> <?php echo $item->Apellidos?> </td>
                                    <td> <?php echo $item->Tipo_de_Documento?> </td>
                                    <td> <?php echo $item->Documento?> </td>
                                    <td> <?php echo $item->Tipo_de_Persona?> </td>
                                    <td> <?php echo $item->Elemento_a_Registrar?> </td>
                                    <td> <?php echo $item->Codigo_de_Barras?> </td>
                                    <td class="text-center">
                                        <form action="" method="post">
                                            <button class="btn btn-warning">
                                            <i class="fa-solid fa-user-pen"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="./eliminar.php" method="post">
                                            <input type="text" hidden value="<?php echo $item->_id?>" name="id">
                                            <button class="btn btn-danger">
                                            <i class="fa-solid fa-user-xmark"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



    <?php include "./scripts.php";?>
