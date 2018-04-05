<?php 

if (isset($_GET['d1'])) {
	$recibeNom = $_GET['d1'];
}
else{
	$error = "Error=Ingrese su nombre, crack.";
}

if (isset($_GET['d2']) && is_numeric($_GET['d2']) && strlen($_GET['d2']) >= 7 && strlen($_GET['d2']) <= 10 ) {
	$recibeTel = $_GET['d2'];
}
else{
	$error .= "&Error2=Ingrese su número telefónico, crack.";
}

if (isset($_GET['d3']) /*&& ctype_alnum($_GET['d3'])*/ &&  (substr_count($_GET['d3'], "@") == 1) && (substr_count($_GET['d3'], ".") >= 1) ) {
	$recibeCor = $_GET['d3'];

} else {
	$error .= "&Error3 = Error de correo, so.";
}


if (isset($_GET['d4']) && is_numeric($_GET['d4']) && substr_count($_GET['d4'],' ')>= 1) {
	$recibeAsun = $_GET['d4'];
} else{
	$error .= "&Error4 = Llena el campo Asunto";
}


if (isset($error)) {
	header('location: right-sidebar.php?'.$error);
}


echo "$recibeNom $recibeTel $recibeCor $recibeAsun";

 ?>


