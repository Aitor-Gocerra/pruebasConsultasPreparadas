<?php
    // Incluimos la clase que acabamos de modificar
    require_once 'mLogin.php';
        
    // Recogemos la contraseña del formulario
    // Nota: En tu HTML el campo se llama 'contrasena'
    $password = $_POST['contrasena'];

    // Instanciamos tu clase
    $modelo = new MLogin();

    // Llamamos a la función vulnerable
    $esValido = $modelo->validarUsuario($password);

    if ($esValido) {
        echo "<h1>¡Bienvenido! Has iniciado sesión correctamente.</h1>";
        echo "<p>La consulta SQL fue inyectada con éxito.</p>";
    } else {
        echo "<h1>Error</h1>";
        echo "<p>Credenciales incorrectas.</p>";
    }

?>