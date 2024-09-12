<?php
include "bloques/header.php";
?>
    <section class="counter">
        <p>
            <span class="number">1</span>
            <span class="arrow">-</span>
            <span class="number current">2</span>
            <span class="arrow">-</span>
            <span class="number">3</span>
        </p>
    </section>
    <section class="form-container">
        <h1>¡Continuamos!</h1>
        <p>Por favor necesitamos más datos para continuar tu proceso de alta:</p>
        <form action="lectura2.php" method="GET">
            <div class="main-data">
                <label for="nombre">
                    <input type="text" id="nombre" name="nombre" placeholder="NOMBRE" >
                    Tu nombre
                </label>
                <label for="prim-apellido">
                    <input type="text" id="prim-apellido" name="prim-apellido" placeholder="PRIMER APELLIDO" >
                    Tu primer apellido. Ejemplo: Sánchez
                </label>
                <label for="seg-apellido">
                    <input type="text" id="seg-apellido" name="seg-apellido" placeholder="SEGUNDO APELLIDO" >
                    Tu primer apellido. Ejemplo: García
                </label>
                <label for="edad">
                    <input type="number" id="edad" name="edad" placeholder="EDAD">
                    00
                </label>
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
<?php
