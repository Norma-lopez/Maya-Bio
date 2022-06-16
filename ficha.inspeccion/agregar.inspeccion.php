<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      
        <title>Solicitud</title>
        <link rel="stylesheet" href="../css/productos.css">
        <link href="../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../css/form.css">
        
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/jquery.dataTables.min.css" rel="stylesheet">	
	    <script src="js/jquery.dataTables.min.js"></script>
        

    </head>
    <style>
        .logo img {
            padding: 10px; 
            margin: 1px; 
            left: -right;
            width: 100px;

        }

        .datos{
            font-family: serif;
        }

        p{
            margin: .4rem ;
            
        }
        input{
            border-radius: 4px;
            margin: 1px;
            padding: 5px; 
            
        }
        .registro{
            float: right;
            padding: 50px;
            margin: 10px;
        }
        .tema legend{
            font-family: cursive;
        }
    </style>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <div class="logo">
				<a class="navbar-brand" href="../principal/index.html" > <img src="../images/MAYABIO-BN.png" alt="#">
				</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="" ><i class="fas fa-bars"></i></button>
			</div>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <!--
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Configuración
                        </a>
                        <div class="dropdown-divider"></div>-->
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400" ></i>
                            Cerrar sesión
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <br><br>
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="../solicitud/agregar.solicitud.php">
                                <div class="sb-nav-link-icon">
                                    <img src="../icon/solicitud.png" alt="">
                                </div> Solicitud
                            </a>
                            <a class="nav-link" href="../ficha-inspeccion/agregar.ficha.inspeccion.php">
                                <div class="sb-nav-link-icon">
                                    <img src="../icon/inspector.png" width: 40px>
                                </div> Ficha de Inspección
                            </a>

                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-users"></i>
                                </div>Socios/productor

                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>

                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../index.php">Registrar Datos</a>
                                    <a class="nav-link" href="../registro.php">Lista socios/productores</a>
                                    <a class="nav-link" href="../parcelas/parcelas.php">Parcelas</a>
                                </nav>
                            </div>

                            <a class="nav-link" href="">
                                <div class="sb-nav-link-icon">
                                    <i class='fas fa-user-edit fa-1x' style='color:#8a8785'></i>
                                </div> Inspector
                            </a>

                            <a class="nav-link" href="../parcelas/parcelas.php">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-seedling"></i>
                                </div> Parcelas
                            </a>

                            <a class="nav-link" href="../productos-agregar/productos.php">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-box-open"></i>
                                </div> Productos
                            </a>
                            
                            <!--  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-user-cog"></i>
                                </div> Configuración
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">Autentificacion
                                        <div class="sb-sidenav-collapse-arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                    </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                            </div> -->
                            <div class="sb-sidenav-menu-heading">Registros</div>
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                    <div class="sb-nav-link-icon">
                                        <img src="../icon/registro.png">
                                    </div> Formularios de Registro
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">    
                                    <a class="nav-link" href="../registros/agregar-registro.php">Registro Actividades</a>
                                    <a class="nav-link" href="../registro-cosecha/agregar.cosecha.php">Registro de cosecha</a>
                                    <a class="nav-link" href="../control-acopio/control.acopio.php">Control de Acopio</a>
                                    <a class="nav-link" href="../registro-capacitacion/capacitaciones.php">Registro Capacitaciones</a>
                                </nav>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <br>
                        <h1 class="mt-4">FICHA DE INSPECCIÓN INTERNA</h1>
                        <p><a href="ficha.inspeccion.php">Ficha</a> &raquo; Registro:</p>
                        <div class="card mb-4">
                            <form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off"> 
                                <div class="contenedor-inputs">
                                    <p>Nombre del Productor: <input type="text" name="nombreProductor" size="40" autofocus required/>   
                                        Código del Productor: <input type="text" name="codigProductor" size="37" autofocus required/>   
                                    </p>

                                    <p>Comunidad: <input type="text" name="comunidad"size="49" autofocus required/>   
                                        Código de Parcela: <input type="text" name="codigParcela" size="40" autofocus required/>   
                                    </p>

                                    <p>Inspector Interno: <input type="text" name="inspectorInterno"size="44" autofocus required/>   
                                        Fecha de Visita: <input type="date" name="fechaVisita" size="40" />   
                                    </p>    

                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Aspecto a evaluar</th>
                                                    <th>Evaluación</th>
                                                    <th>Explique</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Información general</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>1.1 ¿la extensión, ubicación y número de 
                                                    parcelas declaradas coinciden con la inspección 
                                                    en campo?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>1.2 ¿La información del terreno como colindancias, 
                                                    estrato vegetal e infraestructura es acorde a lo declarado?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion1"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>1.3 ¿El productor cuenta con evidencias de 
                                                        capacitaciones sobre las normas orgánicas y 
                                                        reglamento interno? Anote cuales</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Semillas</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>2.1 ¿El origen y manejo de semilla y/o material 
                                                        vegetativo cumplen con los requisitos de la 
                                                        norma?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>2.2 ¿existe evidencia de la fuente y manejo de la 
                                                        semilla y/o material vegetativo utilizado?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Fertilización</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>3.1 ¿el productor realiza fertilización adecuada, 
                                                        utilizando abonos composteados, material 
                                                        vegetal, estiércol u otras fuentes?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>3.2 ¿La fertilización cumple con las normas 
                                                        orgánicas y el reglamento interno?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>3.3 ¿el productor cuenta con los registros 
                                                        incluyendo volúmenes de aplicación?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Manejo integrado de plagas y enfermedades</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>4.1 ¿El productor tiene identificadas las plagas 
                                                        y enfermedades del cultivo?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>4.2 ¿El productor realiza actividades 
                                                        preventivas, de acuerdo al Plan de Manejo y 
                                                        reglamento interno para el manejo de plagas y 
                                                        enfermedades?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>4.3 ¿El productor utiliza productos para el 
                                                        control de plagas y estos cumplen con las 
                                                        normas y reglamento interno?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>4.4 ¿El productor cuenta con los registros 
                                                        sobre el manejo de plagas y enfermedades?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Protección de suelos, agua y biodiversidad</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>5.1 ¿El productor a implementado las medidas 
                                                        para la protección del suelo de acuerdo al plan 
                                                        de manejo?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>5.2 ¿Las medidas implementadas son 
                                                        suficientes para la protección del suelo contra 
                                                        erosión?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>5.3 ¿Las medidas de protección favorecen la 
                                                        protección y promoción de la biodiversidad?
                                                        </td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>5.4 ¿existen medidas preventivas para la 
                                                        protección de fuentes de agua?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>5.5 ¿la frecuencia y método de control de 
                                                        maleza cumple con la norma orgánica y 
                                                        reglamento interno?
                                                        </td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>Zonas de amortiguamiento</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>6.1 ¿la parcela tiene zonas con riesgo de 
                                                        contaminación por fuentes externas?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>6.2 ¿existen medidas de amortiguamiento; son 
                                                        acordes con el riesgo identificado y cumplen 
                                                        con el reglamento interno?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">7</th>
                                                    <td>Cosecha y post-cosecha</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>7.1 ¿Las herramientas, materiales y equipo de 
                                                        cosecha han sido lavados y almacenados 
                                                        correctamente?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>7.2 ¿existe registros de lavado de herramientas, 
                                                        materiales y equipo utilizados?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>7.3 ¿existen registros de cosecha, etiqueta 
                                                        interna, facturas?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>7.4 ¿existen registros de transporte y limpieza 
                                                        del mismo?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">8</th>
                                                    <td>8.1 ¿El croquis presentado es de acorde a los 
                                                        requisitos mínimos solicitados?</td>
                                                    <td>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > SI
                                                        </label>

                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NO
                                                        </label>
                                                        <br>
                                                        <labe class="radio-inline">
                                                            <input type="radio" id="evaluacion" name="evaluacion" > NA
                                                        </label>
                                                    </td>
                                                    <td><textarea name="explicacion"></textarea></td>
                                                </tr>    
                                            </thead>
                                        </table>
                                    </div>
                                    <h6> 9. Estimación de cosecha</h6>
                                    <p>Autoconsumo Kg: <input type="text" name="autoconsumo"size="20" autofocus required/>   
                                        Ventas al grupo $Kg: <input type="text" name="ventas" size="20" autofocus required/>
                                        Ventas a otros $Kg: <input type="text" name="ventasOtros" size="20" autofocus required/>   
                                    </p>

                                    <p>10.1 Cuáles son las Inconformidades del año pasado?
                                        <input type="text" name="inconformidades"size="70"autofocus required/>
                                    </p>

                                    <h6>10.2 Evaluación del Asesor asignado y capacitaciones internas</h6>
                                    <p>Nombre Asesor <input type="text" name="nombreAsesor"size="50" autofocus required/>   
                                        No. Visitas <input type="number" name="noVisitas" size="20" autofocus required/>
                                    </p>
                                    <p>Observaciones del inspector: 
                                        <input type="text" name="observaciones" size="70" autofocus required/>
                                    </p>

                                    <p>10.3 Cuáles son las inconformidades encontradas y/o recomendaciones:
                                        <input type="text" name="recomendaciones" size="70" autofocus required/>
                                    </p>
                                
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="row">Decisión del comité de aprobación interna</th>
                                        </tr>
        
                                        <tr>
                                            <th>Aprobado</th>
                                            <th>No aprobado</th>
                                        </tr>
                                    
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="desicionComite"/> Orgánico<br/>
                                                <input type="checkbox" name="desicionComite"/> Sancionado<br/>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="desicionComite"/> Conversión<br/>
                                                <input type="checkbox" name="desicionComite"/> Expulsado<br/>
                                            </td>
                                        </tr>
                                        
                                    </table>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                        
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>  
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2021 | MAYABIO |Certificadora de Productos Orgánicos</div>
                        <div>
                                <a href="../politicas.index.html">Politica de privacidad</a>
                                &middot;
                              
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Seguro que desea salir?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="../admi/logout.php">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>