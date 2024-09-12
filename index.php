<?php
include "bloques/header.php";
?>
<section class="counter">
    <span class="number current">1</span>
    <span class="arrow">-</span>
    <span class="number">2</span>
    <span class="arrow">-</span>
    <span class="number">3</span>
</section>
<section class="form-container">
    <h1>¡Comencemos!</h1>
    <p>Por favor necesitamos estos datos para iniciar tu proceso de alta:</p>
    <form action="lectura1.php" method="GET">
        <div class="main-data">
            <label for="dni">
                <input type="text" id="dni" name="dni" placeholder="DNI" >
                00000000A
            </label>
            <label for="email">
                <input type="text" id="email" name="email" placeholder="EMAIL" >
                usuario@dominio.ext
            </label>
            <label for="conf-email">
                <input type="text" id="conf-email" name="conf-email" placeholder="CONFIRMA TU EMAIL" >
                usuario@dominio.ext
            </label>
            <label for="numero">
                <input type="number" id="numero" name="numero" placeholder="TELÉFONO MÓVIL" maxlength="9" >
                000 000 000
            </label>
        </div>
        <div class="input">
            <input type="checkbox" id="data-protection" name="data-protection">
            <p>Acepta la Política de <a href="#">Protección de datos</a></p>
        </div>
        <div>
            <input type="submit" class="boton" id="enviar" value="Siguiente">
            <input type="reset" class="boton" value="Limpiar">
        </div>
    </form>
        <?php
            if (isset($_GET["mensajeError"])) {
                $errores=$_GET["mensajeError"];
                echo $errores;
            }
        ?>
</section>

</body>
</html>

