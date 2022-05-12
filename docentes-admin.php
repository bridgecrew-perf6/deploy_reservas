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
    <link rel='stylesheet' href='css/styles-docentes-admin.css'>
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
                            <li class="nav-item ">
                                <a class="nav-link  text-center" aria-current="page" href="aulas-admin.php">Aulas</a>
                            </li>
                            <li class="nav-item text-center ">
                                <a class="nav-link text-center active" href="docentes-admin.php">Docentes</a>
                            </li>
                            <li class="nav-item   text-center">
                                <a class="nav-link" href="reservas-admin.php">Reservas</a>
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
                                            <a href='#'>Configuracion de Cuenta</a>
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
        <h1 class="titulo-encabezado-a">Administracion de Docentes</h1>

        <div class="herramientas-encabezado-a">
            <div class="buscador-encabezado-a">
                <input type="text" class="encabezado-input-buscar" placeholder="Buscar nombre">
                <select  class="opcion-busqueda">
                    <option  value="codigoSis" selected>CodigoSIS</option>
                    <option  value="nombre">Nombre</option>
                    <option  value="apellido">Apellido</option>
                    <option  value="ci">CI</option>
                    <option  value="telefono">Telefono</option>
                    <option  value="celular">celular</option>
                    <option  value="correo">correo</option>
                </select>
                <button class="btn-input-bucar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                    </svg>
                    Buscar
                </button>
            </div>

            <div class="filtro-encabezado-a">
                <div class="opcion-filtro  filtro-facultada">
                    <label >Facultad:</label>
                    <select  class="select-filtro-facultad">
                       <option class="opcion-filtro" value="0"  selected>Todas</option>
                       <option class="opcion-filtro" value="1">Ciencias agricolas y Pecuarias</option>
                       <option class="opcion-filtro" value="2">CS.Bioquimicas</option>
                       <option class="opcion-filtro" value="3">Ciencias Económicas</option>
                       <option class="opcion-filtro" value="4">Desarrollo Rural</option>
                       <option class="opcion-filtro" value="5">Odontologia</option>
                       <option class="opcion-filtro" value="6">Medicina</option>
                       <option class="opcion-filtro" value="7">Arquitectura</option>
                       <option class="opcion-filtro" value="8">Humanidades</option>
                       <option class="opcion-filtro" value="9">Ciencias Juridicas</option>
                       <option class="opcion-filtro" value="10">Ciencias y Tecnologia</option>
                       <option class="opcion-filtro" value="11">Ciencias Sociales</option>
                       <option class="opcion-filtro" value="12">Ciencias Veterinarias</option>
                       <option class="opcion-filtro" value="13">Enfermeria</option>
                   </select>

               </div>
               <div class="opcion-filtro  filtro-ordenar">
                   <label >Odenar por:</label>
                   <select  class="select-filtro-ordenar">
                       <option class="opcion-filtro" value="nombre"  selected>Nombre</option>
                       <option  class="opcion-filtro" value="apellido">Apellido</option>
                       <option  class="opcion-filtro" value="codigoSis">CodigoSIS</option>
                   </select>

               </div>
               <div class="opcion-filtro  filtro-facultada">
                <label >Mostrar:</label>
                <select  class="select-filtro-mostrar">
                   <option class="opcion-filtro" value="25">25</option>
                   <option class="opcion-filtro" value="50" selected>50</option>
                   <option class="opcion-filtro" value="70">70</option>
                   <option class="opcion-filtro" value="100">100</option>
               </select>

           </div>
            </div>

            <button class="btn-encabezado-a">Nuevo Docente</button>     
        </div>

        <div class="seccion-tabla  ">

            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>CodigoSIS</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Carnet Identidad</th>
                        <th>Facultad</th>
                       <!-- <th>Departamento</th> -->
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Celular</th>
                        <th>Contraseña</th>
                    </tr>
                </thead>
                <tbody id="tbody-lista-docentes">
                   
                </tbody>
               
            </table>

            <div class="seccion-loader  ">
                <div class="contenedor-loader">
                    <div class="loader ">
                        <span></span><span></span><span></span><span></span><span></span><span></span>
                    </div>
                </div>
            </div>

        </div>

        <div class="seccion-paginacion oculto">
            <div class="contenedor-paginacion">
                <nav aria-label="Page navigation example">
                    <ul class="pagination" id="paginacion">
                        <li class="page-item page-item-atras">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <div  class="numeros-paginacion" id="numeros-paginacion">
                          
                        </div>
                        <li class="page-item page-item-adelante">
                            <a class="page-link" href="#" aria-label="Next" >
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                  </nav>

            </div>
           
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



    <div class="overlay-form-a">

        <div class="form-a">
            <h1 class="titulo-form-a">FORMULARIO NUEVO DOCENTE</h1>

            <form action="" id="formulario-nuevo-docente">
                <div class="seccion-input-form-a input-codigosis">
                    <label>CodigoSIS:</label>
                    <input  spellcheck="false" type="text" placeholder="(Campo Obligatorio)" name="codigosis" id="codigosis">
                    <div class="mensaje-error-form-a seccion-advertencia-codigosis ">
                        <div class="img-advertencia  oculto"></div>
                        <p class="mensaje-error  oculto"> </p>
                    </div>
                </div>
                
                <div class="seccion-input-form-a  input-nombre">
                    <label>Nombre:</label>
                    <input spellcheck="false" type="text" placeholder="(Campo Obligatorio)" name="nombre" id="nombre" maxlength="20">
                    <div class="mensaje-error-form-a seccion-advertencia-nombre ">
                        <div class="img-advertencia  oculto"></div>
                        <p class="mensaje-error oculto"></p>
                    </div>
                </div>

                <div class="seccion-input-form-a input-apellido">
                    <label>Apellido:</label>
                    <input spellcheck="false" type="text" placeholder="(Campo Obligatorio)" name="apellido" id="apellido" maxlength="20">
                    <div class="mensaje-error-form-a seccion-advertencia-apellido ">
                        <div class="img-advertencia  oculto"></div>
                        <p class="mensaje-error oculto"> </p>
                    </div>
                </div>

                <div class="seccion-input-form-a input-ci">
                    <label>CI:</label>
                    <input spellcheck="false" type="text" placeholder="(Campo Obligatorio)" name="ci" id="ci">
                    <div class="mensaje-error-form-a seccion-advertencia-ci ">
                        <div class="img-advertencia  oculto"></div>
                        <p class="mensaje-error oculto"> </p>
                    </div>
                </div>

                <div class="seccion-input-form-a input-facultad">
                    <label>Facultad:</label>
                    <select name="facultad" id="facultad">
                        <option value="0" disabled selected>Seleccionar una Facultad</option>
                        <option value="1">Ciencias agricolas y Pecuarias</option>
                        <option value="2">CS.Bioquimicas</option>
                        <option value="3">Ciencias Económicas</option>
                        <option value="4">Desarrollo Rural</option>
                        <option value="5">Odontologia</option>
                        <option value="6">Medicina</option>
                        <option value="7">Arquitectura</option>
                        <option value="8">Humanidades</option>
                        <option value="9">Ciencias Juridicas</option>
                        <option value="10">Ciencias y Tecnologia</option>
                        <option value="11">Ciencias Sociales</option>
                        <option value="12">Ciencias Veterinarias</option>
                        <option value="13">Enfermeria</option>
                    </select>
                    <div class="mensaje-error-form-a seccion-advertencia-facultad ">
                        <div class="img-advertencia  oculto"></div>
                        <p class="mensaje-error oculto"> </p>
                    </div>
                </div>
<!--
                <div class="seccion-input-form-a  input-departamento">
                    <label>Departamento:</label>
                    <input spellcheck="false" type="text" placeholder="(Campo Opcional)" name="departamento" id="departamento">
                    <div class="mensaje-error-form-a seccion-advertencia-departamento ">
                        <div class="img-advertencia  oculto"></div>
                        <p class="mensaje-error oculto"> </p>
                    </div>
                </div>
-->
                <div class="seccion-input-form-a  input-celular">
                    <label>Celular:</label>
                    <input spellcheck="false" type="text" placeholder="(Campo Obligatorio)" name="celular" id="celular">
                    <div class="mensaje-error-form-a seccion-advertencia-celular ">
                        <div class="img-advertencia  oculto"></div>
                        <p class="mensaje-error oculto"> </p>
                    </div>
                </div>

                <div class="seccion-input-form-a  input-telefono">
                    <label>Telefono:</label>
                    <input spellcheck="false" type="text" placeholder="(Campo Opcional)" name="telefono" id="telefono">
                    <div class="mensaje-error-form-a seccion-advertencia-telefono ">
                        <div class="img-advertencia  oculto "></div>
                        <p class="mensaje-error oculto"> </p>
                    </div>
                </div>

                <div class="seccion-input-form-a  input-email">
                    <label>Correo:</label>
                    <input spellcheck="false" type="email" placeholder="(Campo Obligatorio)" name="correo" id="correo">
                    <div class="mensaje-error-form-a seccion-advertencia-correo ">
                        <div class="img-advertencia  oculto"></div>
                        <p class="mensaje-error oculto"> </p>
                    </div>
                </div>
               
            </form>

            <div class="seccion-botones-form-a ">
                <button class="btn-formulario btn-cancelar">cancelar</button>
                <button class="btn-formulario btn-aceptar">registrar</button>
            </div>
                                                                                                    
        </div>

    </div>






    <script   src="https://code.jquery.com/jquery-3.6.0.min.js"   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="   crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script-docentes-admind.js"></script>
    <script src="js/script-index.js"></script>

    
</body>
</html>