<?php

// Verifica si el formulario ha sido enviado
if (isset($_POST['enviar'])) {

    // Muestra el encabezado para los datos
    echo "<h3> Datos </h3>";

    // Muestra el nombre ingresado
    echo "<br>" . ("Nombre: " . $_POST['nombre']) . "<br>";

    // Valida el correo electrónico
    if (filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
        // Muestra el correo si es válido
        echo "<br>" . ("Correo electronico: " . $_POST['correo']) . "<br>";
    } else {
        // Mensaje de error si el correo no es válido
        echo "<br>" . "Mensaje no valido<br>";
    }

    // Verifica si la contraseña y la confirmación coinciden
    if ($_POST['contraseña'] == $_POST['confirmar_contraseña']) {
        // Mensaje si las contraseñas son válidas
        echo "<br>" . "Contraseña Valida";
    } else {
        // Mensaje si las contraseñas no coinciden
        echo "<br>" . "Contraseña no valida";
    }

    // Muestra la fecha de nacimiento
    echo "<br>".("Fecha de Nacimiento: " . $_POST['fecha_nacimiento']) . "<br>"; // Corrección de la variable

    // Muestra el género seleccionado
    echo "<br>".("Género: ". $_POST['genero']) . "<br>";
}
?>
