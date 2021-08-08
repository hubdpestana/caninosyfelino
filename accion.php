<?php


$conectar = mysqli_connect('bebayochl5vrtbsdtx6r-mysql.services.clever-cloud.com','u7dferjqwj1dxhbq','8c49WK3UT3W0Pm7vq5MR','bebayochl5vrtbsdtx6r');

    if(!$conectar){
        echo "No conectado";
    }
    
    
    // $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $raza = $_POST['raza'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $amo = $_POST['amo'];
    
    
    
    
    
    
    //$mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO citas(nombre,edad,raza,fecha,hora,amo) VALUES ('$nombre','$edad','$raza','$fecha','$hora','$amo')";

    $verificar_fecha = mysqli_query($conectar, "SELECT * FROM citas WHERE fecha='$fecha' AND hora= '$hora'" );

//contando cuantos registros trajo
if(mysqli_num_rows($verificar_fecha) > 0){
echo'
<script>
alert("La hora seleccionada no está disponible. Por favor seleccione otra hora");
window.location = "index.php"
</script>
 ';
 exit();
 }
  
    $ejecutar = mysqli_query($conectar, $sql);

    if(!$ejecutar){
        echo "Hay Algun Error";
    }else{
        
        echo "<script>
            
            alert('la Cita se ha generado correctamente. '+'Favor presentarse 10 minutos antes el Dia: '+'$fecha'+' Hora:'+'$hora');
            window.location='index.php'

                  </script>";
    $destinatario="hubertpestana@yahoo.com";
    $asunto="Cita Generada desde nuestra Website";
    // $mensaje="$mensaje";
    $carta = "De:$amo \n";
    $carta .= "Paciente:$nombre \n";
    $carta .= "Raza:$raza \n";
    $carta .= "Edad:$edad \n";
    $carta .= "Fecha:$raza \n";
    $carta .= "Hora:$raza \n";
    $carta .= "Se ha generado una nueva Cita, Favor realizar la verificación en la base de datos"; 
        mail($destinatario,$asunto,$carta);             
                        
      
    }
?>