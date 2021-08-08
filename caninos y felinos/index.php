<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<link rel="stylesheet" href="estilos.css">
	<title>Centro Veterinario "Caninos y Felinos"</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	function validando2(caracter) {

		cadena = document.getElementById('txt_nombre').value.length;
		
		if ((caracter < 65 || caracter > 90) && (caracter < 97 || caracter > 122) && (caracter < 160 || caracter > 162) && (caracter != 32) && (caracter != 130) ) {
			cadena = document.getElementById('txt_nombre').value.length;
			document.getElementById('txt_nombre').value.substring(0, cadena - 1);
			swal.fire({
				title: "Ingrese sólo datos Afabéticos",
				 width: '25%',
				 allowOutsideClick: false,
				 allowEscapeKey: true,
				 allowEnterKey: true,
				 stopKeydownPropagation: false,
				icon: 'error',
				 cancelButtonText: true,
				 showCloseButton: true,
				 closeButtonAriaLabel: 'Cerrar',
			 });
			
		}
		
		}
</script>

</head>
<body>
	<div class="contenedor">
		<header class="header">
			<img src="logo_caninos.jpg"/>
			
		</header>
		
		<main class="nav">
			<br></br>
			<a href="https://veterinariadelbosque.com/clinica/servicios.html"> Servicios </a>
			<a href="https://www.fda.gov/consumers/articulos-en-espanol/productos-veterinarios">Productos</a>	
			<a href="https://www.colegioplaydog.com/">Guardería</a>	
			<a href="https://www.puppis.com.co/">Promociones</a>
			<br></br>

	</main>
		<main class="contenido">
			
				<h4>Cuidados y Educación para su perro</h4>
			
				<img class="imagen-cuidado" src="cuidado_perros.jfif" alt=""/>
				<p>Una mascota de convierte en un integrante mas de la familia, pero es muy importante educarlo para evitar dolores de cabeza
				y cuidarlo para proteger su existencia. A la hora de adoptar o comprar un perro, necesitaras pensar en el compromiso que implica 
				ésta decisión, no solo tendrá que alimentarlo, requiere atención, tiempo y educación. ello supone una gran resposabilidad.
				Con esta sección buscaremos apoyar y dar consejos sobre educacion y cuidados de perros.<a href="https://madridsalud.es/cuidados-basicos-para-los-animales-de-compania-perros-y-gatos/" target="_blank"> Ver mas...></a>
			</p>
				
			
		</main>
		<aside class="sidebar">
			
				<img class="imagen-cita" src="cita_medica.jfif" alt=""/>
				
				<!-- <form action="accion.php" name="f1" method="post" class="form" onsubmit="comprobarClave(); return true"></form> -->
				
				
				
				
				<form action="accion.php" class="form" method="post">
				<h3 class="solcita" >SOLICITAR CITA MÉDICA</h3>
					
					
					  
					<br></br>
					<br></br>
					<br></br>
					<br></br>
					<br>
					<br>
					<br>
					<br>
					
				<label for="nombre">MASCOTA:</label>
                <input type="text" class="nombre" name="nombre" id="txt_nombre"  placeholder="Ingrese Nombre" style="width: 180px"
                onkeypress="return validando2(event.charCode);" required>  
                <br>
				<label for="edad">EDAD:</label>
                <input type="number" class="edad" name="edad" id="txt_numeros"   style="width: 180px" required> 
                <br>
				<label for="raza">RAZA:</label>
                <input type="text" class="raza" name="raza" id="txt_nombre"  placeholder="Igrese Raza" style="width: 180px"
                onkeypress="return validando2(event.charCode);" required>
				<br>
				<label for="fecha">FEHA:</label>
                <input type="date" class="fecha" name="fecha" id="txt_numeros"   style="width: 180px" required> 
				<br>
				<label for="hora">HORA:</label>
                <input type="time" class="cedula" name="hora" id="txt_numeros"   style="width: 180px" required> 
				<label for="amo">AMO:</label>
                <input type="text" class="amo" name="amo" id="txt_nombre"  placeholder="Ingrese Nombre" style="width: 180px"
                onkeypress="return validando2(event.charCode);" required>
				<br>
				<br>
				<button id="enviar">    Validar Cita</button>
                <div class="singin">
   
                    
	
	
			</div>
            </form>


		</aside>
		
		<main class="contenido2">
			
			
				<h4>Salir de Viaje con su Mascota</h4>
				<img class="imagen-viaje" src="viaje_mascota.png" alt=""/>
				
			<p>Viajar Juntos puede resultar muy divertido y una gran experiencia siempre que estemos correctamente preparados. 
			Es importante tener en cuenta las condiciones de clima y el entorno a donde se desplaza. Además debe evitar el riesgo que supone
			el movimiento incontrolado de la mascota dentro del automóvil. Por eso, tenga en cuenta los siguientes consejos.
		</p>
		
				
			
		</main>
		
		<footer class="footer">
			<h3>Contáctenos</h3>
			<h4>Línea gratuita: 018001234</h4>
			<h4>Correo: preguntas@caninosyfelinos.com</h4>
		</footer>
	</div>
</body>
</html>