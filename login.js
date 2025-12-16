function mostrarInfo(metodo) {
    const tarjeta = document.getElementById('tarjetaInfo');
    const titulo = document.getElementById('tituloInfo');
    const texto = document.getElementById('textoInfo');

    tarjeta.style.display = 'block';

    if (metodo === 'query') {
        tarjeta.style.borderColor = '#dc3545'; // Rojo peligro
        tarjeta.style.backgroundColor = '#f8d7da';
        titulo.innerText = "Modo Vulnerable (Query)";
        titulo.style.color = '#721c24';
        texto.innerHTML = "Este método es inseguro. <br><br><strong>Prueba de inyección:</strong><br>En el campo contraseña escribe: <br><code>' OR '1'='1</code>";
    } else if (metodo === 'prepare') {
        tarjeta.style.borderColor = '#28a745'; // Verde seguro
        tarjeta.style.backgroundColor = '#d4edda';
        titulo.innerText = "Modo Seguro (Preparada)";
        titulo.style.color = '#155724';
        texto.innerText = "Este método utiliza consultas preparadas (Prepared Statements). La inyección SQL no funcionará porque los datos se escapan automáticamente.";
    }
}
