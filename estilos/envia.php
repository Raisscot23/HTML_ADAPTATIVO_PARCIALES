<?php
$remitente = $_POST['email'];
$destinatario = 'juanpablozaragoza@outlook.es'; // en esta línea va el mail del destinatario.
$asunto = 'Consulta'; // aquí se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre" . $_POST["nombre"] . "\r\n";
    $cuerpo = "Apellido: " . $_POST["apellido"] . "\r\n";
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
	$cuerpo .= "Consulta: " . $_POST["mensaje"] . "\r\n";
    $cuerpo .= "Telefono: " . $_POST["tel"] . "\r\n";
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo del HTML. 
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." ".$_POST['email']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'confirma.html'; //se debe crear un html que confirma el envío
}
?>
