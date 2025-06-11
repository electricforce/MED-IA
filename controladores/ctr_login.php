<?php

// incluir archivo de conexión o crear objeto conexión
require_once __DIR__ . '/../conexion.php';

// crear objeto de conexión
$db = new mod_db();

// obtener el objeto PDO
$pdo = $db->getConexion();

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["usuario"]) || empty($_POST["password"])) {
        echo "bro!!! noooo hagas eso, los campos están vacíos ";
    } else {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];

        // Preparar consulta segura, buscando usuario y contraseña directamente (sin hash)
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nombre = :usuario AND hash = :password");
        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();

        // Obtener usuario
        $datos = $stmt->fetch(PDO::FETCH_OBJ);

        if ($datos) {
            // Login OK
            header("Location: inicio.html");
            exit();
        } else {
            echo "Usuario o contraseña incorrectos, bro!";
        }
    }
}
?>
