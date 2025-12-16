<?php
    // 1. Recogemos los datos del formulario
    $password = $_POST['contrasena'];
    $metodo = $_POST['metodo'];

    // 2. Cargamos el modelo dependiendo de lo que haya elegido el usuario
    if ($metodo == 'prepare') {
        // Carga el archivo con la consulta segura (Prepared Statement)
        require_once 'mLoginConsultaPreparada.php';
    } else {
        // Carga el archivo con la consulta vulnerable (Query normal)
        require_once 'mLogin.php';
    }

    // 3. Creamos el objeto del modelo
    // Nota: Ambos archivos tienen una clase que se llama igual: 'MLogin'
    $modelo = new MLogin();

    // 4. Comprobamos si el usuario es válido
    $loginCorrecto = $modelo->validarUsuario($password);

    // 5. Mostramos el mensaje final
    if ($loginCorrecto) {
        echo "<h1>¡Login Correcto!</h1>";
        echo "<p>Has entrado al sistema exitosamente.</p>";
    } else {
        echo "<h1>Login Incorrecto</h1>";
        echo "<p>La contraseña no es válida.</p>";
    }
?>