<?php
    require_once('../../controlador.php');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro de Vehiculos</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php require ('../../topnav.php')?>
        <div id="layoutSidenav">

             <?php 
             
                if ($_SESSION['tipo']=="operario")
                require ('../../sidenavbarOP.php');
             
             ?>
             

            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registro de Vehiculos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Total de registros
                            </div>
                                <div class="card-body">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>Id Registro</th>
                                                <th>Placa</th>
                                                <th>Id cliente</th>
                                                <th>Id operario</th>
                                                <th>Id plaza</th>
                                                <th>Fecha Ingreso</th>
                                                <th>Fecha Salida</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $registros = $registro_vehiculodao->consultar_registro();
                                            foreach($registros as $registro){
                                                echo "<tr>".
                                                        "<td>".$registro['id_registro']."</td>".
                                                        "<td>".$registro['placa']."</td>".
                                                        "<td>".$registro['id_cliente']."</td>".
                                                        "<td>".$registro['id_operario']."</td>".
                                                        "<td>".$registro['id_plaza']."</td>".
                                                        "<td>".$registro['fecha_ingreso']."</td>".
                                                        "<td>".$registro['fecha_salida']."</td>".
                                                        "<td><a href='eliminar_vehiculo.php?id_registro=".$registro['id_registro']."' class='btn btn-danger'>Eliminar</a> - 
                                                             <a href='actualizar_vehiculo.php?id_registro=".$registro['id_registro']."' class='btn btn-danger'>Actualizar</a> </td>".
                                                        "</tr>";
                                            }
                                        ?> 
                                                
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </main>
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; ParkBill Website 2023</div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../../assets/demo/chart-area-demo.js"></script>
        <script src="../../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../../js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php

?>