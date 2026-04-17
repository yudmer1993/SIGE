<?php
echo "ESTA ES UNA PRUEBA DE SINCRONIZACIÓN REAL";
session_start();

session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: dashboard/dashboard.php");
} else {
    header("Location: auth/login.php");
}
exit();

