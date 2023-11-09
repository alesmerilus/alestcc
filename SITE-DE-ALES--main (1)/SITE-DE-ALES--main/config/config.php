<?php
    // Definir constantes para armazenar valores que não se repetem
    define('LOCALHOST', '127.0.0.1');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'ales');

    // Conectar ao banco de dados MySQL
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Verificar a conexão
    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }
?>