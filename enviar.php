
<!-- ======================================================================= -->
<?php

$destino  = "fyarari@sts.com.bo" ;
$nombre   = $_POST["nombre"];
$correo   = $_POST["correo"];
$asunto   = $_POST["asunto"];
$telefono = $_POST["telefono"];
$empresa  = $_POST["empresa"];
$mensaje  = $_POST["mensaje"];

$contenido = "Nombres y Apellidos: " .$nombre . "\nCorreo: " .$correo . "\nAsunto: " .$asunto . "\nTelefono: " .$telefono . "\nEmpresa: (opcional) " .$empresa . "\nMensaje: " .$mensaje;

mail($destino, "Contacto desde la Página Web STS", $contenido);
echo"<script> ' correo enviado exitosamente'</script>"
echo"<script> setTimeout(\"location.href='contactos.html'\",1000) </script>"

// <!-- ====================================================================================== -->

$destino  = "franzyarari@gmail.com" ;
$nombre   = $_POST["nombre"];
$correo   = $_POST["correo"];
$asunto   = $_POST["asunto"];
$telefono = $_POST["telefono"];
$empresa  = $_POST["empresa"];
$mensaje  = $_POST["mensaje"];

$contenido = "Nombres y Apellidos: " .$nombre . "\nCorreo: " .$correo . "\nAsunto: " .$asunto . "\nTelefono: " .$telefono . "\nEmpresa: (opcional) " .$empresa . "\nMensaje: " .$mensaje;

mail($destino, "Contacto desde la Página Web STS", $contenido);

// <!-- ======================================================================================= -->

$destino  = "rpayrumani@sts.com.bo" ;
$nombre   = $_POST["nombre"];
$correo   = $_POST["correo"];
$asunto   = $_POST["asunto"];
$telefono = $_POST["telefono"];
$empresa  = $_POST["empresa"];
$mensaje  = $_POST["mensaje"];

$contenido = "Nombres y Apellidos: " .$nombre . "\nCorreo: " .$correo . "\nAsunto: " .$asunto . "\nTelefono: " .$telefono . "\nEmpresa: (opcional) " .$empresa . "\nMensaje: " .$mensaje;

mail($destino, "Contacto desde la Página Web STS", $contenido);


// <!-- ===================================================================================== -->

$destino  = "jtarqui@sts.com.bo" ;
$nombre   = $_POST["nombre"];
$correo   = $_POST["correo"];
$asunto   = $_POST["asunto"];
$telefono = $_POST["telefono"];
$empresa  = $_POST["empresa"];
$mensaje  = $_POST["mensaje"];

$contenido = "Nombres y Apellidos: " .$nombre . "\nCorreo: " .$correo . "\nAsunto: " .$asunto . "\nTelefono: " .$telefono . "\nEmpresa: (opcional) " .$empresa . "\nMensaje: " .$mensaje;

mail($destino, "Contacto desde la Página Web STS", $contenido);

// <!-- ============================================================================================ -->



?>

<!-- ===================================================JavaScripts ==========================-->


</body>
</html>