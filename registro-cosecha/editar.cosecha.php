<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>Editar registro de Cosechas</title>

        <!--Estilos-->
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

        .btn-success{
            border-radius: 4px; margin: 20px; padding: 3px; width: 10%;
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
                            Configuraci??n
                        </a>
                        <div class="dropdown-divider"></div>-->
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400" ></i>
                            Cerrar sesi??n
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
                                </div> Ficha de Inspecci??n
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
                                </div> Configuraci??n
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
                        <h1 class="mt-4">Editar registro Cosecha</h1>
                        <div class="card mb-4">
                            <p><a href="cosecha.php">Cosecha</a> &raquo; Editar:</p>

                            <?php
                                if (isset($_POST["enviar"])) {
                                    $idCosecha=$_POST["idCosecha"];
                                    $nombreOperacion=$_POST["nombreOperacion"];
                                    $nmbreProductor=$_POST["nmbreProductor"];
                                    $codigoFinca=$_POST["codigoFinca"];
                                    $codigoProductor=$_POST["codigoProductor"];
                                    $productoCosecha=$_POST["productoCosecha"];
                                    $sacos=$_POST["sacos"];
                                    $kg=$_POST["kg"];
                                    $cajas=$_POST["cajas"];
                                    $otro=$_POST["otro"];
                                    $mes=$_POST["mes"];
                                    $semana=$_POST["semana"];
                                    $productorEncargado=$_POST["productorEncargado"];

                                    require_once("conexion.php");

                                    $actualizar=mysqli_query($conexion,
                                    "
                                    UPDATE 
                                        cosecha
                                            SET 
                                                nombreOperacion='$nombreOperacion',
                                                nmbreProductor='$nmbreProductor',
                                                codigoFinca='$codigoFinca',
                                                codigoProductor='$codigoProductor',
                                                productoCosecha='$productoCosecha',
                                                sacos='$sacos',
                                                kg='$kg',
                                                cajas='$cajas',
                                                otro='$otro',
                                                mes='$mes',
                                                semana='$semana',
                                                productorEncargado='$productorEncargado'
                                                
                                            WHERE
                                                idCosecha='$idCosecha'
                                    ");
                                    echo "<h2 class='registrado'>Registro de cosecha actualizado.</h2>";
                                }

                                if (isset($_GET["idCosecha"])) {
                                    $idCosecha=$_GET["idCosecha"];

                                    require_once("conexion.php");

                                    $consulta=mysqli_query($conexion, "SELECT * FROM cosecha WHERE idCosecha='$idCosecha' ");
                                    $fila=mysqli_fetch_array($consulta);
                                    $semana=$fila["semana"];

                                    if ($semana=="Seleccione una opcion") {
                                        $semana='
                                            <option value="Seleccione" selected>Seleccione una opci??n</option>
                                            <option value="Lunes">Lunes</option>
                                            <option value="Martes">Martes</option>
                                            <option value="Miercoles">Miercoles</option>
                                            <option value="Jueves">Jueves</option>
                                            <option value="Viernes">Viernes</option>
                                            <option value="Sabado">Sabado</option>
                                            <option value="Domingo">Domingo</option>
                                        
                                            ';
                                        } elseif ($semana=="Lunes") {
                                            $semana='
                                            <option value="Seleccione" >Seleccione una opci??n</option>
                                            <option value="Lunes" selected>Lunes</option>
                                            <option value="Martes">Martes</option>
                                            <option value="Miercoles">Miercoles</option>
                                            <option value="Jueves">Jueves</option>
                                            <option value="Viernes">Viernes</option>
                                            <option value="Sabado">Sabado</option>
                                            <option value="Domingo">Domingo</option>
                                            ';
                                        } elseif ($semana=="Martes") {
                                            $semana='
                                            <option value="Seleccione" >Seleccione una opci??n</option>
                                            <option value="Lunes" >Lunes</option>
                                            <option value="Martes" selected>Martes</option>
                                            <option value="Miercoles">Miercoles</option>
                                            <option value="Jueves">Jueves</option>
                                            <option value="Viernes">Viernes</option>
                                            <option value="Sabado">Sabado</option>
                                            <option value="Domingo">Domingo</option>
                                            ';
                                        } elseif ($semana=="Miercoles") {
                                            $semana='
                                            <option value="Seleccione" >Seleccione una opci??n</option>
                                            <option value="Lunes" >Lunes</option>
                                            <option value="Martes" >Martes</option>
                                            <option value="Miercoles" selected>Miercoles</option>
                                            <option value="Jueves">Jueves</option>
                                            <option value="Viernes">Viernes</option>
                                            <option value="Sabado">Sabado</option>
                                            <option value="Domingo">Domingo</option>
                                            ';
                                        } elseif ($semana=="Jueves") {
                                            $semana='
                                            <option value="Seleccione" >Seleccione una opci??n</option>
                                            <option value="Lunes" >Lunes</option>
                                            <option value="Martes" >Martes</option>
                                            <option value="Miercoles">Miercoles</option>
                                            <option value="Jueves" selected>Jueves</option>
                                            <option value="Viernes">Viernes</option>
                                            <option value="Sabado">Sabado</option>
                                            <option value="Domingo">Domingo</option>
                                            ';
                                        } elseif ($semana=="Viernes") {
                                            $semana='
                                            <option value="Seleccione" >Seleccione una opci??n</option>
                                            <option value="Lunes" >Lunes</option>
                                            <option value="Martes" >Martes</option>
                                            <option value="Miercoles">Miercoles</option>
                                            <option value="Jueves">Jueves</option>
                                            <option value="Viernes" selected>Viernes</option>
                                            <option value="Sabado">Sabado</option>
                                            <option value="Domingo">Domingo</option>
                                            ';
                                        } elseif ($semana=="Sabado") {
                                            $semana='
                                            <option value="Seleccione" >Seleccione una opci??n</option>
                                            <option value="Lunes" >Lunes</option>
                                            <option value="Martes" >Martes</option>
                                            <option value="Miercoles">Miercoles</option>
                                            <option value="Jueves">Jueves</option>
                                            <option value="Viernes">Viernes</option>
                                            <option value="Sabado" selected>Sabado</option>
                                            <option value="Domingo">Domingo</option>
                                            ';

                                        } elseif ($semana=="Domingo") {
                                            $semana='
                                            <option value="Seleccione" >Seleccione una opci??n</option>
                                            <option value="Lunes" >Lunes</option>
                                            <option value="Martes" >Martes</option>
                                            <option value="Miercoles">Miercoles</option>
                                            <option value="Jueves">Jueves</option>
                                            <option value="Viernes">Viernes</option>
                                            <option value="Sabado">Sabado</option>
                                            <option value="Domingo" selected>Domingo</option>
                                            ';
                        
                                        } 
                                        
                                    printf('
                                        <form action="#" method="POST" class="formulario">
                                            <div class="contenedor-inputs">
                                                
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label>Nombre de la Operaci??n</label>
                                                        <input type="text" class="form-control" name="nombreOperacion" required value="%s"/>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Nombre del productor</label>
                                                        <input type="text" class="form-control" name="nmbreProductor" required value="%s"/>
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>C??digo Finca </label>
                                                        <input type="text" class="form-control" name="codigoFinca" required value="%s"/>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>C??digo del Productor</label>
                                                        <input type="text" name="codigoProductor" class="form-control" value="%s"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Producto a cosechar</label>
                                                        <input type="text" name="productoCosecha" class="form-control" value="%s"/>
                                                    </div>
                                                </div>
                                                <p>Unidad de medida:</p>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Sacos:</label>
                                                        <input type="text" name="sacos" class="form-control" value="%s"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Kg:</label>
                                                        <input type="text" name="kg" class="form-control" value="%s"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Cajas:</label>
                                                        <input type="text" name="cajas" class="form-control" value="%s"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Otros:</label>
                                                        <input type="text" name="otro" class="form-control" value="%s"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Mes:</label>
                                                        <input type="text" name="mes" class="form-control" value="%s"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Semana</label>
                                                        <select name="semana" class="form-select" aria-label="Default select example">
                                                            '.$semana.'
                                                        </select>
                                                    </div>
                                                </div> 
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Productor ?? encargado:</label>
                                                        <input type="text" name="productorEncargado" class="form-control" value="%s"/>
                                                    </div>
                                                </div>
                                                
                                                <input type="hidden" value="%s" name="idCosecha"></td>
                                                <input type="submit" class="btn btn-success" value="Actualizar" name="enviar"></td
                                            </div>
                                        </form>
                                        ', $fila["nombreOperacion"], $fila["nmbreProductor"], $fila["codigoFinca"], $fila["codigoProductor"], $fila["productoCosecha"], $fila["sacos"], $fila["kg"], $fila["cajas"], $fila["otro"], $fila["mes"], $fila["productorEncargado"], $fila["idCosecha"]);
                                }
                            ?>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2021 | MAYABIO |Certificadora de Productos Org??nicos</div>
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
                        <h5 class="modal-title" id="exampleModalLabel">??Seguro que desea salir?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">??</span>
                        </button>
                    </div>
                    <div class="modal-body">Seleccione "Cerrar sesi??n" a continuaci??n si est?? listo para finalizar su sesi??n actual.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="../admi/logout.php">Cerrar sesi??n</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
      <!--  <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>-->
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>