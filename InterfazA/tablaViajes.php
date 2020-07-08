<?php 

	$conexion=mysqli_connect('85.10.205.173:3306','jorgeasantiago','lucho1234','serviciosocial01');
  $matricula = $_GET['matricula'];
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Administrador </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">




  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <script>
  		params = (new URL(document.location)).searchParams;
	  	x = params.get("matricula");

		if (x != null) {
      document.getElementById("matricula").value = x;
      location.href="http://localhost/ProOnliPc-inicio/tablaModAlumno.html?matricula=" + x; 
      
		}
  </script>
    <style>
       select {
     
         font-size: 14px;
         height: 30px;
         padding: 5px;
         width: 100%;
      }
    </style> 

</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
      	 <h1>Administrador</h1>
        <div class="actions">
          <a href="#RegistroAlumnos" class="btn-services">Editar información de alumnos</a>
       
        <div class="actions">
        </div>
      </div>
    </div>
      </div>
  </section>

  

  <!--==========================
 
  About Section
  ============================-->
  <section id="RegistroAlumnos">

    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Editar información de alumnos</h3>
          <div class="section-title-divider"></div>
  <form action="editaralumno.php" method="post">

  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputAddress2">IdViaje</label>
    <input type="text" class="form-control" id="IdViaje" name="IdViaje" placeholder="IdViaje" maxlength="9" minlength="9" required> 
  </div>
     <div class="form-group col-md-6">
      <label for="inputnombre4">Destino</label>
      <input type="text" pattern="[a-zA-Z]*" class="form-control" id="Destino" name="Destino" placeholder="Destino" required>
    </div>

<div class="form-group col-md-6">
      <label for="inputAMaterno">FechaSalida</label>
      <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2, 4}$" class="form-control" id="correo" name="correo" placeholder="Correo electronico" required>
    </div>

    
    <div class="form-group col-md-6">
      <label for="inputAMaterno">Hora</label>
      <input type="text" pattern= "[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2, 4}$" class="form-control" id="Hora" name="Hora" placeholder="Hora" required>
    </div>

    
    <div class="form-group col-md-6">
      <label for="inputAPaterno">NombreCliente</label>
      <input type="text" pattern="[a-zA-Z]*" class="form-control" id="NombreCliente" name="NombreCliente" placeholder="NombreCliente" required>
    </div>

  </div>

  <div class="form-group col-md-6">
    <label for="inputCorreo">Costo</label>
    <input type="tel" pattern="[0-9]*" class="form-control" id="Costo" name="Costo" placeholder="Costo(solo numeros)" maxlength="10" minlength="10" required>
  </div>
  <div class="form-group col-md-6">
    <label for="inputTelefono">NumAsiento</label>
<input type="tel" pattern= "[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2, 4}$"class="form-control" id="NumAsiento" name="NumAsiento" placeholder="NumAsiento( numeros y letras)" maxlength="10" minlength="10" required>

  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="indexAdmin.php" class="btn btn-primary">Cancelar</a>
</form>    
        </div>
      </div>
    </div>
  </section>
  

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

          <?php 
          $sql="SELECT IdViaje,Destino,FechaSalida,Hora,NombreCliente,Costo,NumAsiento  from autobus where IdViaje= '$IdViaje'";
          $result=mysqli_query($conexion,$sql);

          while($mostrar=mysqli_fetch_array($result)){
          ?>

            <script>
            document.getElementById("IdViaje").value = "<?php echo $mostrar['IdViaje'] ?>";
            document.getElementById("Destino").value = "<?php echo $mostrar['Destino'] ?>";
            document.getElementById("FechaSalida").value = "<?php echo $mostrar['FechaSalida'] ?>";
            document.getElementById("Hora").value = "<?php echo $mostrar['Hora] ?>"; 
            document.getElementById("NombreCliente").value = "<?php echo $mostrar['NombreCliente'] ?>";
            document.getElementById("Costo").value = "<?php echo $mostrar['Costo'] ?>";
            document.getElementById("NumAsiento").value = "<?php echo $mostrar['NumAsiento'] ?>";
            </script>

          <?php
            }
           ?>

</body>

</html>
