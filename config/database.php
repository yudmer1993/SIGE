<?php
// Configuración de errores para desarrollo
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = "sql111.infinityfree.com"; // VERIFICA ESTO EN TU PANEL
$user = "if0_40485369";
$pass = "Erestodo001"; 
$db   = "if0_40485369_iglesia";

try {
    $conn = new mysqli($host, $user, $pass, $db);
    $conn->set_charset("utf8");
    // Si llegamos aquí, la conexión es exitosa
} catch (mysqli_sql_exception $e) {
    // Error controlado para el Analista
    die("Error técnico en la infraestructura de datos: " . $e->getMessage());
}
?>