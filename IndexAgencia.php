<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
       <link rel="stylesheet" href="cssAgen/estilos.css">
    <title>Agencia</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
</head>

<body>





    <!--Main Navigation-->
    <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="#">
                    <strong class="Blue-text">Agencia</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="#inicio">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                      
                    </ul>
                       <!-- Links -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                           
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                      
                    </ul>
                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a href="/paneladministrador" class="nav-link waves-effect">
                              <a href="PanelUsuario.html">Entrar Usuario</a>
                             
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>

           
        <!-- Navbar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5 pt-5">
        <div class="container">
                <a id="inicio"/>

            <!--Section: Jumbotron-->
            <section class="card blue wow fadeIn" id="intro">

                <!-- Content -->
                <div class="card-body text-white text-center py-5 px-5 my-5">

                    <h1 class="mb-4">
                        <strong>Bienvenido a tu Agencia de Autobus Isa </strong>
                    </h1>
                    <p class="mb-4">
                        <strong>
                           En esta Agencia podras encontrar los viajes a todos los lugares que quieras Viajar 
                        </strong>
                    </p>
                </div>
                <!-- Content -->
            </section>
            <!--Section: Jumbotron-->

        </div>
    </main>

    <!--Main layout-->

   <main class="mt-5 pt-5">
        <div class="container">
                <a id="inicio"/>

            <!--Section: Jumbotron-->
            <section class="card blue wow fadeIn" id="intro">

                <!-- Content -->
                <div class="card-body text-black text-center py-5 px-5 my-5">

                    <h1 class="mb-4">
                        
                    </h1>
                    <p class="mb-4">
                        <strong>
             

    <form class="login-form">
            
        <?php
        if(isset($_GET['IdB'])){
            $client = new SoapClient("http://100.26.227.87:8080/Autobus1.wsdl");
        
            $parametros = array("Id"=> $_GET['IdB'] , "Destino"=> $_GET['DestinoB'] , "FechaSalida" => $_GET['FechaSalidaB'], "Hora" => $_GET['HoraB'], "NombreCliente" => $_GET['NombreClienteB'], "Costo" => $_GET['CostoB'], "NumAsiento" => $_GET['NumAsientoB']);
            $response = $client->__soapCall('AgregarViaje',array($parametros),);
            print"<h2>".$response->{'respuesta'}."</h2>";
        }
    ?>

  <section id="Agregar Viaje">

    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Agregar Viaje</h3>
          <div class="section-title-divider"></div>
          

      <p> Genera el Id del viaje con las iniciales de tu nombre completo </p>
    <label for="inputIdViaje">IdViaje</label>
    <input type="text" class="form-control" id="IdB" name="IdB" placeholder="" list="listademodelos">
  </p>



  </div>
     <div class="form-group col-md-6">
      <label for="inputDestino">Destino</label>
      <input type="text" class="form-control" id="DestinoB" name="DestinoB" placeholder=" "  list="listademodelosDestinos">




<datalist id="listademodelosDestinos">

  <option value="Veracruz">

  <option value="Guadalajara">

  <option value="Mexico">

  <option value="Sinaloa">

  <option value="Monterrey">

  <option value="Sonora">

  <option value="Yucatan">

  <option value="Chihuahua">

</datalist>

 
    
      <label for="inputFechaSalida">FechaSalida </label>
      <input type="date" class="form-control" id="FechaSalidaB" name="FechaSalidaB" placeholder=" " list="listademodelosFecha">
  </p>



<datalist id="listademodelosFecha">

  <option value="16/05/2020">

  <option value="17/05/2020">

  <option value="18/05/2020">

  <option value="19/05/2020">

</datalist>
 
    


      <label for="inputHora">Hora</label>
      <input type="text" class="form-control" id="HoraB" name="HoraB" placeholder="" list="listademodelosHora">



<datalist id="listademodelosHora">

  <option value="2:00">

  <option value="2:30">

  <option value="3:00">

  <option value="3:30">

   <option value="4:00"> 

  <option value="4:30"> 

   <option value="5:00"> 

  <option value="5:30"> 

   <option value="6:00"> 

  <option value="6:30"> 

   <option value="7:00"> 

  <option value="7:30"> 

   <option value="8:00"> 

  <option value="8:30"> 

</datalist>

    <label for="inputNombreCliente">NombreCliente</label>
    <input type="text" class="form-control" id="NombreClienteB" name="NombreClienteB"   placeholder="" >


    <label for="inputCosto">Costo</label>
    <input type="text" class="form-control" id="CostoB" name="CostoB"  placeholder="" list="listademodelosCostos"  >


<datalist id="listademodelosCostos">

  <option value="450">


    <label for="NumAsiento">NumAsiento</label>
    <input type="text" class="form-control" id="NumAsientoB" name="NumAsientoB" placeholder=" " list="listademodelosAsientos"  >


<datalist id="listademodelosAsientos">

  <option value="1A">

  <option value="2A">

  <option value="3B">

  <option value="4B">

   <option value="5C">

  <option value="6C">

  <option value="7D">

  <option value="8D">

  <option value= "9E">

  <option value= "10E">

</datalist>

    
  </div>
<input type="submit" name="Aceptar" value="Aceptar" class="login-submit" />

</form>  

<a href="IndexAgencia.php" class="login-forgot-pass1">Viajes Lupis</a>  
        </div>

      </div>
    </div>
   

   
  </section>


                       </strong>
                    </p>
                </div>
                <!-- Content -->
            </section>
            <!--Section: Jumbotron-->

        </div>
    </main>

    
</body>

</html>