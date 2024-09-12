<?php

if (!empty($_GET["email"]) && !empty($_GET["conf-email"]) && !empty($_GET["dni"]) && !empty($_GET["numero"])) {

    $email = $_GET["email"];
    $confEmail = $_GET["conf-email"];
    $dni = $_GET["dni"];
    $telefono = (int)$_GET["numero"];
    $checkbox = $_GET["data-protection"];
    $errores = array();


    //Validación teléfono
    if (!preg_match("/^(?:(?:\+|00)?34)?[679]\d{8}$/",$telefono)) {

        $errores[] = "<p style='color:red'>ERROR: El telefono tiene un formato incorrecto";
    }
    //Validación DNI
    if (!preg_match("/[0-9]{8}[A-Za-z]/",$dni)) {

        $errores[] = "<p style='color:red'>ERROR: El DNI tiene un formato incorrecto";
    }
    //Validación EMAIL
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {

        $errores[] = "<p style='color:red'>ERROR: Verifique el email";

    } else {

        //Validación repetir EMAIL
        if ($confEmail != $email) {

            $errores[] = "<p style='color:red'>ERROR: Los emails no coinciden";
        }
    }
    //Validación checkbox
    if (!isset($checkbox)) {

            $errores[] = "<p style='color:red'>ERROR: Debes aceptar los terminos y condiciones";
    }
} else {

    $errores[] = "<p style='color: red'>ERROR: Todos los datos son requeridos</p>";
}

if (count($errores)>0) {
    for ($i = 0; $i < count($errores); $i++) {
        $cadena .= $errores[$i];
    }
    header("Location:index.php?mensajeError=$cadena");

} else {

    header("Location:segundoForm.php");
}