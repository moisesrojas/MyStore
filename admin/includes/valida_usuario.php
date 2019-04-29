<?php
$usuario_form = $_POST['nombre_usuario'];
$password = md5($_POST['password_usuario']);

include_once("conexion.php");
echo $consulta_usuario = "SELECT nombre_usuario, password_usuario, tipo_usuario FROM Usuarios WHERE nombre_usuario = '$usuario_form' AND password_usuario = '$password' AND tipo_usuario = 2";
$resultado_usuario = mysqli_query($conexion, $consulta_usuario);
echo $total_usuario = mysqli_num_rows($resultado_usuario);
$row = mysqli_fetch_assoc($resultado_usuario);
if ($total_usuario > 0){
	session_start();
	$_SESSION["usuario_admin"] = $usuario_form;
	header("Location:../index.php");
} else {
	?>
	<script>
		alert("Usuario o Contraseña incorrectos");
		location.href = "../login-admin.php";
	</script>
<?php
}
?>