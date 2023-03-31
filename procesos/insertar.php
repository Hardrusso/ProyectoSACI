<?php
    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $Crud = new Crud();

    $datos = array(
        "Nombres" => $_POST['nombre'],
        "Apellidos" => $_POST['apellido'],
        "Tipo_de_Documento" => $_POST['tipo_documento'],
        "Documento" => $_POST['documento'],
        "Tipo_de_Persona" => $_POST['tipo_persona'],
        "Jornada" => $_POST['jornada'],
        "Ficha" => $_POST['ficha'],
        "Nombre_del_Programa" => $_POST['titulada'],
        "Elemento_a_Registrar" => $_POST['tipo_elemento'],
        "Placa_o_Serial" => $_POST['serial'],
        "Caracteristicas_del_Elemento" => $_POST['otros'],
        "Codigo_de_Barras" => $_POST['codigo_barras'],
    );

    $respuesta = $Crud->insertarDatos($datos);

    if ($respuesta->getInsertedId() > 0 ) {
        header("location:../index.php");
    } else{
        print_r($respuesta);
    }





?>