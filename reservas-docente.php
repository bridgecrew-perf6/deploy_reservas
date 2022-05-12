<?php //esto se ocupa de ver si hay una sesion activa y si no redirecciona a que inicie sesion
    
    $nombre = " ";
    $apellido = " ";
    session_start();

    if(!isset($_SESSION['cuenta'])){
        header('location:index.php');
    }else{
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];
    }

    date_default_timezone_set("America/Santiago");
    $time = time();
    $day =date("d",$time + (1 * 24 * 60 * 60));
    $year =date("Y",$time);
    $month = date("m",$time);
    $month2 = date("m",$time+ (30 * 24 * 60 * 60));

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>SAA-UMSS</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=New+Rocker&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="https://www.umss.edu.bo/wp-content/uploads/2021/07/cropped-Logo7-32x32.png">
  
    <!-- <link rel='stylesheet' href='css/styles-index.css'> -->
    <link rel='stylesheet' href='css/styles-index.css'>
    <link rel='stylesheet' href='css/styles-repetitivos.css'>
    <link rel='stylesheet' href='css/styles-reservas-docente.css'>
    
</head>
<body>
    <header>
        <div class="contenedor-navegacion">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand me-auto" href="index.php">SAA-UMSS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            
                            <li class="nav-item   text-center">
                                <a class="nav-link active " href="reservas-docente.php">Reservas</a>
                            </li>
                            <?php 
                            
                                echo ("<li class='nav-item  text-center nav-item-usuario'>
                                          <div class= 'info-usuario-menu '>
                                              <p class='nav-link  nombre-usuario-menu ' >$nombre $apellido</p>
                                              <div class='imagen-usuario'>
                                                  <p class= 'texto-imagen-usuario'>$nombre[0]$apellido[0]</p>
                                              </div>
                                          </div>
                                          <div class='opciones-usuario oculto'>
                                            <div class='item-opciones-usuario item-opciones-usuario1'>
                                                <a href='perfil-docente.php'>Configuracion de Cuenta</a>
                                            </div>
                                            <div class='item-opciones-usuario'>
                                                <a href='php/cerrarSesion.php'>Cerrar Sesion</a>
                                            </div>
                                          </div>
                                      </li>");
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
    </header>

    <main class="contenido-main">
        <div class="encabezado-pagina-reservas">
            <p class="opcion-encabezado-pagina-reserva opcion-encabezdo-selecionado">Formulario de Reserva</p>
            <p class="opcion-encabezado-pagina-reserva ultimo ">Lista de Reservas</p>
            
        </div>
        <div class="formulario-reserva">
            <h1 class="titulo-formulario-reserva">Formulario Para Reserva De Ambientes</h1>
           
            <div class="seccion-datos-reserva">
                <div class="seccion-input">
                    <label class="label-input" for="asunto">Asunto:</label>
                    <input type="text"  spellcheck="false"  class="input-asunto" name="asunto" >

                </div>

                <div class="seccion-input">
                    <label class="label-input">Materia:</label>
                    <div class="selecciones-seccion-input input-materia">

                    </div>

                     <button class="btn-agregar btn-agregar-materia">Agregar</button>

                </div>

                <div class="seccion-input">
                    <label class="label-input">Solicitantes:</label>
                    <div class="selecciones-seccion-input input-solicitantes">
                        
                    </div>
                    <button class="btn-agregar btn-agregar-solicitante btn-agregar-deshabilitado">Agregar</button>

                </div>

                <div class="seccion-input">
                    <label class="label-input">Grupos:</label>
                    <div class="selecciones-seccion-input input-grupos">

                    </div>
                    <button class="btn-agregar btn-agregar-grupo btn-agregar-deshabilitado">Agregar</button>
                </div>

                <div class="seccion-input">
                    <label class="label-input" for="fecha">Fecha:</label>
                    <input type="date"  class="input-fecha" name="fecha" <?php echo ("value='$year-$month-$day' min='$year-$month-$day' max='$year-$month2-$day'")?>>
                </div>

                <div class="seccion-input">
                    <label class="label-input">Periodos:</label>
                    <div class="selecciones-seccion-input input-periodos">

                    </div>

                    <button class="btn-agregar btn-agregar-periodo">Agregar</button>
                </div>

                <div class="seccion-input">
                    <label class="label-input">Cant. Estudiantes:</label>
                    <p class="dato-cantidad-estudiantes">0</p>
                </div>



            </div>

            <div class="seccion-aulas-reserva">
                <div class="seccion-input">
                    <label class="label-input">Surgerencias:</label>
                    <div class="selecciones-seccion-input input-sugerencias">

                    </div>

                </div>
                <div class="seccion-input">
                    <label class="label-input">Elegir Ambiente:</label>
                    <div class="selecciones-seccion-input input-ambientes">

                    </div>

                </div>
                <div class="seccion-input">
                    <label class="label-input">Capacidad Total:</label>
                    <p class="dato-cantidad-estudiantes">0</p>
                </div>

            </div>

            <div class="seccion-comentario-reserva">
            <div class="seccion-input">
                    <label class="label-input">Comentario:</label>
                    <textarea class= "input-comentario" name="comentario" spellcheck="false"></textarea>
                </div>

            </div>

            <button class="btn-reservar-aula">Reservar Ambientes</button>

        </div>




     

    </main>


    
    <footer>
        <p class="fila-1">DERECHOS RESERVADOS © 2022 · UNIVERSIDAD MAYOR DE SAN SIMÓN</p>
        <p class="fila-2">Siguenos en:</p>
        <div class="fila-3 enlaces">
            <a href="https://www.instagram.com/umssboloficial/" class="instagram" target = “_blank ” >
                <img src="img/logo-instagram.svg" height="22">
            </a>
            <a href="https://twitter.com/UmssBolOficial" class="twitter" target = “_blank ” >
                <img src="img/logo-twiter.svg" height="22">
            </a>
            <a href="https://www.facebook.com/UmssBolOficial/" class="facebook" target = “_blank ” >
                <img src="img/logo-facebook.svg" height="22">
            </a>
            <a href="https://t.me/GrupoUmssBolOficial" class="telegram" target = “_blank ” > 
                <img src="img/logo-telegram.svg" height="22">
            </a>
            
        </div>
        <p class="fila-4">Diseñado por<span class="empresa-disenadora"> DataByte S.R.L</span></p>

    </footer>

    <div class="overlay-pagina-reserva ">

        <div class="popup-pagina-reserva">
            <div class="popup popup-materia oculto">
                <h1 class="titulo-popaup-reserva">Agregar Materia</h1>
                <div class="contenedor-tabla-loader">
                    <div class="contenedor-tabla">
                        <table class="table table-striped">
                            <thead>
                                <tr class="encabezado-tabla-reserva">
                                    <th class="item-encabezado-tabla-reserva item-encabezado-tabla-reserva-accion">Accion</th>
                                    <th class="item-encabezado-tabla-reserva item-encabezado-tabla-reserva-codigo">Codigo</th>
                                    <th class="item-encabezado-tabla-reserva item-encabezado-tabla-reserva-nombre">Nombre</th>
                                </tr>
                            </thead>
                            <tbody class="contenido-tabla-reserva contenido-tabla-reserva-materia">
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="seccion-loader-reserva  oculto">
                        <div class="contenedor-loader">
                            <div class="loader ">
                                <span></span><span></span><span></span><span></span><span></span><span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn-cerrar-popup">Cerrar</button>
            </div> 

            <div class="popup popup-solicitantes oculto">
                <h1 class="titulo-popaup-reserva">Agregar Solicitante</h1>
                <div class="seccion-buscador-popup">
                    <input type="text"  class="input-buscar-solicitante" placeholder = "Buscar CodigoSIS">
                    <button class="btn-buscar-solicitante">Buscar</button>

                </div>
                <div class="contenedor-tabla-loader">
                    <div class="contenedor-tabla">
                        <table class="table table-striped">
                            <thead>
                                <tr class="encabezado-tabla-reserva">
                                    <th class="item-encabezado-tabla-reserva item-encabezado-tabla-reserva-accion">Accion</th>
                                    <th class="item-encabezado-tabla-reserva item-encabezado-tabla-reserva-codigo">CodigoSIS</th>
                                    <th class="item-encabezado-tabla-reserva item-encabezado-tabla-reserva-nombre">Nombre</th>
                                </tr>
                            </thead>
                            <tbody class="contenido-tabla-reserva contenido-tabla-reserva-solicitantes">
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="seccion-loader-reserva  oculto">
                        <div class="contenedor-loader">
                            <div class="loader ">
                                <span></span><span></span><span></span><span></span><span></span><span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn-cerrar-popup">Cerrar</button>
            

            </div> 

            <div class="popup popup-grupos oculto">
                <h1 class="titulo-popaup-reserva">Agregar Grupos</h1>
                <div class="contenedor-tabla-loader">
                    <div class="contenedor-tabla">
                        <table class="table table-striped">
                            <thead>
                                <tr class="encabezado-tabla-reserva">
                                    <th class="item-encabezado-tabla-reserva item-encabezado-tabla-reserva-accion">Accion</th>
                                    <th class="item-encabezado-tabla-reserva item-encabezado-tabla-reserva-codigo">Grupo</th>
                                    <th class="item-encabezado-tabla-reserva item-encabezado-tabla-reserva-nombre">Docente</th>
                                </tr>
                            </thead>
                            <tbody class="contenido-tabla-reserva contenido-tabla-reserva-grupos">
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="seccion-loader-reserva  oculto">
                        <div class="contenedor-loader">
                            <div class="loader ">
                                <span></span><span></span><span></span><span></span><span></span><span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn-cerrar-popup">Cerrar</button>
            </div> 
            
            <div class="popup popup-periodos oculto">
                <h1 class="titulo-popaup-reserva">Agregar Periodo</h1>
                <div class="contenedor-tabla-loader">
                    <div class="contenedor-tabla">
                        <table class="table table-striped">
                            <thead>
                                <tr class="encabezado-tabla-reserva">
                                    <th class="item-encabezado-tabla-reserva item-encabezado-tabla-reserva-accion">Accion</th>
                                    <th class="item-encabezado-tabla-reserva item-encabezado-tabla-reserva-codigo">Periodo</th>
                                </tr>
                            </thead>
                            <tbody class="contenido-tabla-reserva contenido-tabla-reserva-periodos">
                                <tr class="fila-tabla-reserva">
                                    <td class="casilla-columna casilla-columna-btn">
                                        <button class="btn-agregar-item-tabla">Agregar</button>
                                    </td>
                                    <td class="casilla-columna casilla-codigo ">6:45 - 8:15</td>
                                </tr>
                                <tr class="fila-tabla-reserva">
                                    <td class="casilla-columna casilla-columna-btn">
                                        <button class="btn-agregar-item-tabla">Agregar</button>
                                    </td>
                                    <td class="casilla-columna casilla-codigo ">8:15 - 9:45</td>
                                </tr>
                                <tr class="fila-tabla-reserva">
                                    <td class="casilla-columna casilla-columna-btn">
                                        <button class="btn-agregar-item-tabla">Agregar</button>
                                    </td>
                                    <td class="casilla-columna casilla-codigo ">9:45 - 11:15</td>
                                </tr>
                                <tr class="fila-tabla-reserva">
                                    <td class="casilla-columna casilla-columna-btn">
                                        <button class="btn-agregar-item-tabla">Agregar</button>
                                    </td>
                                    <td class="casilla-columna casilla-codigo ">11:15 - 12:45</td>
                                </tr>
                                <tr class="fila-tabla-reserva">
                                    <td class="casilla-columna casilla-columna-btn">
                                        <button class="btn-agregar-item-tabla">Agregar</button>
                                    </td>
                                    <td class="casilla-columna casilla-codigo ">12:45 - 14:15</td>
                                </tr>
                                <tr class="fila-tabla-reserva">
                                    <td class="casilla-columna casilla-columna-btn">
                                        <button class="btn-agregar-item-tabla">Agregar</button>
                                    </td>
                                    <td class="casilla-columna casilla-codigo ">14:15 - 15:45</td>
                                </tr>
                                <tr class="fila-tabla-reserva">
                                    <td class="casilla-columna casilla-columna-btn">
                                        <button class="btn-agregar-item-tabla">Agregar</button>
                                    </td>
                                    <td class="casilla-columna casilla-codigo ">15:45 - 17:15</td>
                                </tr>
                                <tr class="fila-tabla-reserva">
                                    <td class="casilla-columna casilla-columna-btn">
                                        <button class="btn-agregar-item-tabla">Agregar</button>
                                    </td>
                                    <td class="casilla-columna casilla-codigo ">17:15 - 18:45</td>
                                </tr>
                                <tr class="fila-tabla-reserva">
                                    <td class="casilla-columna casilla-columna-btn">
                                        <button class="btn-agregar-item-tabla">Agregar</button>
                                    </td>
                                    <td class="casilla-columna casilla-codigo ">18:45 - 20:15</td>
                                </tr>
                                <tr class="fila-tabla-reserva">
                                    <td class="casilla-columna casilla-columna-btn">
                                        <button class="btn-agregar-item-tabla">Agregar</button>
                                    </td>
                                    <td class="casilla-columna casilla-codigo ">20:15 - 21:45</td>
                                </tr>
                                

                            </tbody>
                        </table>
                        
                    </div>
                    <div class="seccion-loader-reserva  oculto">
                        <div class="contenedor-loader">
                            <div class="loader ">
                                <span></span><span></span><span></span><span></span><span></span><span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn-cerrar-popup">Cerrar</button>
            </div> 
        </div>

    </div>


    <script   src="https://code.jquery.com/jquery-3.6.0.min.js"   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="   crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script-reservas-docente.js"></script>
    <script src="js/script-index.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
    
</body>
</html>