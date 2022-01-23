<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      
        <title>Registro de Actividades</title>
        <link rel="stylesheet" href="../css/productos.css">
        <link href="../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../css/form.css">
        
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
       <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

       

    </head>
    <style>
        .logo img {padding: 10px;  margin: 1px; left: -right; width: 100px; }
        .datos{font-family: serif;}

        p{ margin: .4rem ;}

        input{border-radius: 4px; margin: 1px; padding: 5px; }

        .registro{float: right; padding: 50px; margin: 10px;}
    
    
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
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Configuración
                        </a>
                        <div class="dropdown-divider"></div>
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
                            <a class="nav-link" href="../ficha.inspeccion/agregar.inspeccion.php">
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
                        <h1 class="mt-4">Registro de Actividades</h1>
                        <p><a href="mostrar_actividades.php">Registro</a> &raquo; Registro:</p>

                        <div class="card mb-4">
                            
                            <?php
                                if (isset($_POST["Guardar"])) {
                                    $nombreOperacion=$_POST["nombreOperacion"];
                                    $nomProductor=$_POST["nomProductor"];
                                    $codigFinca=$_POST["codigFinca"];
                                    $codgProductor=$_POST["codgProductor"];
                                    $nombreTecnico=$_POST["nombreTecnico"];
                                    $actividades=$_POST["actividades"];
                                    $cicloCosecha=$_POST["cicloCosecha"];
                                    $cantidad=$_POST["cantidad"];
                                    $fuente=$_POST["fuente"];
                                    
                                    require_once("conexion-registro.php");

                                    $insertar=mysqli_query($conexion, "INSERT INTO registroactividades VALUES (
                                        NULL, 
                                        '$nombreOperacion',
                                        '$nomProductor',
                                        '$codigFinca',
                                        '$codgProductor',
                                        '$nombreTecnico',
                                        '$actividades',
                                        '$cicloCosecha',
                                        '$cantidad',
                                        '$fuente'
                                    )");
                                    echo "<h2 class='registrado'>Registro de actividades realizado con exito</h2>'";
                                }
                            ?>

                            <form action="#" method="POST"  class="formulario">   
                                <p style="text-align: center;">Nombre de la operación 
                                    <input type="text" name="nombreOperacion" size="50" required></p>

                                <p>Nombre del productor <input type="text" name="nomProductor"size="42" required/>   
                                    Código de la finca <input type="text" name="codigFinca" size="40" /></p>

                                <p>Código del productor  <input type="text" name="codgProductor" size="40" required/>   
                                    Nombre del técnico/asesor <input type="text" name="nombreTecnico" size="40"required/></p>  
                                <br>
                                <div class="contenedor-inputs">   
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Actividades</label>
                                            <select name="actividades" class="form-select" aria-label="Default select example">
                                                <option value="Seleccione una opción">Seleccione una opción</option>
                                                <option value="Recolección de semillas">Recolección de semillas</option>
                                                <option value="Siembra">Siembra</option>
                                                <option value="Control de plaga/enfermedad">Control de plaga/enfermedad</option>
                                                <option value="Nombre de la plaga/enfermedad">Nombre de la plaga/enfermedad</option>
                                                <option value="Nombre del producto">Nombre del producto</option>
                                                <option value="Cantidad aplicada  (Bombas, litros, Kg, sacos)">Cantidad aplicada  (Bombas, litros, Kg, sacos)</option>
                                                <option value="Elaboración de fertilizante /abono">Elaboración de fertilizante /abono</option>
                                                <option value="Nombre del fertilizante">Nombre del fertilizante</option>
                                                <option value="Cantidad fertilizante aplicado Kg.">Cantidad fertilizante aplicado Kg.</option>
                                                <option value="Control de malezas y limpieza de fincas">Control de malezas y limpieza de fincas</option>
                                                <option value="Manejo de Zonas de amortiguamiento">Manejo de Zonas de amortiguamiento</option>
                                                <option value="Establecimiento de barreras vivas o muertas">Establecimiento de barreras vivas o muertas</option>
                                                <option value="Limpieza de instalación/equipo de proceso">Limpieza de instalación/equipo de proceso</option>
                                                <option value="Cosecha de producto/cantidad">Cosecha de producto/cantidad </option>
                                                <option value="Transporte/comercialización">Transporte/comercialización </option>
                                                <option value="No. Documento de recibo">No. Documento de recibo </option>
                                                <option value="Capacitación/ Temas">Capacitación/ Temas</option>
                                                <option value="Visita supervisor/Técnico">Visita supervisor/Técnico</option>
                                                <option value="Inspecciones internas/firma y nombre">Inspecciones internas/firma y nombre</option>
                                                <option value="Inspecciones Externa">Inspecciones Externa</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ciclo de cosecha:</label>
                                            <input type="text" class="form-control" name="cicloCosecha" required/>
                                        </div>
                                    </div>
                                    <br><br><br>
                                    <p>Observaciones</p>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Cantidad:</label>
                                            <input type="number" class="form-control" name="cantidad" required/>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Fuente:</label>
                                            <input type="text" class="form-control" name="fuente" />
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                        <input type="reset" class="btn btn-danger" value="Borrar">
                                    <input type="submit" class="btn btn-success" value="Guardar" name="Guardar">
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
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                              
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
                            <span aria-hidden="true">×</span>
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