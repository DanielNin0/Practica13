<head>
	<meta charset="utf-8">
</head>
<?php
$nombre=$_POST['nombreAlumno'];
$apellidos=$_POST['apellidosAlumno'];
$edad=$_POST['edadAlumno'];
echo 'Tu nombre es:'.$nombre.' '.$apellidos;
echo "</br>";
echo "Tu edad es:".$edad.'Años';
?>