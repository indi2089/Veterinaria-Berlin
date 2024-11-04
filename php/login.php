<?php
$cedula = $_POST['cedula'];
$password = $_POST['password'];

//Perfil admin
if ($cedula == '001010111' && $password == '0000') {
    header("Location: admin.html");
    exit();
    //Perfil Empleados
} elseif (
    ($cedula == '101010111' && $password == '1111') ||
    ($cedula == '201010111' && $password == '2222')
) {
    header("Location: empleados.html");
    exit();
    //Perfil veterinarios
} elseif (
    ($cedula == '301010111' && $password == '3333') ||
    ($cedula == '401010111' && $password == '4444')
) {
    header("Location: veterinarios.html");
    exit();
} else {
    echo "<script>alert('Cédula o contraseña incorrecta'); window.location.href='index.html';</script>";
}
?>
