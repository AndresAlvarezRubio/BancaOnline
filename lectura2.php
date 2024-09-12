<?php

if (!empty($_GET["nombre"]) && !empty($_GET["prim-apellido"]) && !empty($_GET["seg-apellido"]) && !empty($_GET["edad"])) {

    $nombre = $_GET["nombre"];
    $primApellido = $_GET["prim-apellido"];
    $segApellido = $_GET["seg-apellido"];
    $edad = (int)$_GET["edad"];
    $errores = array();


    //Validación teléfono
    if ($edad > 120 || $edad < 18) {

        $errores[] = "<p style='color:red'>ERROR: La edad es invalida";
    }
    if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚ]+$/",$nombre) || !preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚ]+$/",$primApellido) || !preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚ]+$/",$segApellido)) {

        $errores[] = "<p style='color:red'>ERROR: El nombre contiene caracteres que son invalidos";
    }
} else {

    $errores[] = "<p style='color: red'>ERROR: Todos los datos son requeridos</p>";
}

if (count($errores)>0) {
    for ($i = 0; $i < count($errores); $i++) {
        $cadena .= $errores[$i];
    }
    header("Location:segundoForm.php?mensajeError=$cadena");

} else {

    header("Location:final.php");
}