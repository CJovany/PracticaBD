<?php

require 'conexion.php';

$Nombre=$_POST['nombre'];
$Semestre=$_POST['semes'];
$CalP=$_POST['calip'];
$CalS=$_POST['calis'];
$CalT=$_POST['calit'];
$CalC=$_POST['calic'];

$sql="INSERT INTO alumno (nombre, semestre, cal1, cal2, cal3, cal4) values ('$Nombre','$Semestre','$CalP','$CalS','$CalT','$CalC')";

$resultado=mysql_query($sql, $con);

if ($resultado){
	echo "Se ha Realizado el Registro con exito";

	} else {
		echo "No se ha realizado el Registro con exito".mysql_error();
		}
  mysql_close($con);
?>