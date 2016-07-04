<?php
include_once('../Clases/Seguridad.php');
$seguridad=new Seguridad();
$seguridad->candado();

require_once('../Clases/frmcontactoInterior.php');
require_once('../Clases/frmcontactotour.php');
require_once('../Clases/frmcontacto.php');
require_once('../Clases/frmcontactopie.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>Mayanecotours - Dashboard</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="assets/css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body class="x-dashboard">
<!-- START PAGE CONTAINER -->
<div class="page-container">
    <!-- PAGE CONTENT -->
    <div class="page-content">
        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="x-hnavigation">
                <div class="x-hnavigation-logo">
                    <a href=".">Mayanecotours</a>
                </div>
                <div class="x-features">
                    <div class="x-features-nav-open">
                        <span class="fa fa-bars"></span>
                    </div>
                    <div class="pull-right">
                        <div class="x-features-profile">
                            <img src="assets/images/users/avatar.jpg">
                            <ul class="xn-drop-left animated zoomIn">
                                <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--START TABS-->
                <main>

                    <input id="tab1" type="radio" name="tabs" checked>
                    <label for="tab1">Contacto tours interior</label>

                    <input id="tab2" type="radio" name="tabs">
                    <label for="tab2">Contacto tours a la medida</label>

                    <input id="tab3" type="radio" name="tabs">
                    <label for="tab3">Contacto</label>

                    <input id="tab4" type="radio" name="tabs">
                    <label for="tab4">Contacto pie</label>

                    <section id="content1">
                        <!-- START DATATABLE EXPORT -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Contacto tours interior</h3>
                                <div class="btn-group pull-right">
                                    <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                    <ul class="dropdown-menu">
                                        <li><a href="data_contacto_inter.php" ><img src='assets/img/icons/xls.png' width="24"/> XLS</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table datatable">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Teléfono</th>
                                            <th>Email</th>
                                            <th>Comentarios</th>
                                            <th>Título</th>
                                            <th>Fecha</th>
                                            <th>Eliminar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $tmpfrmint = new frmContactoInterior(0,'','','','','','');
                                        $frminter = $tmpfrmint->listar();

                                        $cont=0;
                                        foreach($frminter as $e){
                                                $cont++;
                                            ?>
                                            <tr id="trow_<?php echo $e['idFrmContactoInterior']; ?>">
                                                <td width="5"><?php echo $cont ?></td>
                                                <td><?php echo $e['nombre'] ?></td>
                                                <td><?php echo $e['tel'] ?></td>
                                                <td><?php echo $e['email'] ?></td>
                                                <td><?php echo $e['comentarios'] ?></td>
                                                <td><?php echo $e['titulo'] ?></td>
                                                <td><?php echo $e['fecha'] ?></td>
                                                <td>
                                                    <button class="btn btn-danger btn-rounded btn-condensed btn-sm delte_row_data" onClick="delete_interior('trow_<?php echo $e['idFrmContactoInterior']; ?>',this);" data-idin="<?php echo $e['idFrmContactoInterior']; ?>"><span class="fa fa-times"></span></button>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END DATATABLE EXPORT -->
                    </section>

                    <section id="content2">
                        <!-- START DATATABLE EXPORT -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Contacto Tours a la medida</h3>
                                <div class="btn-group pull-right">
                                    <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                    <ul class="dropdown-menu">
                                        <li><a href="data_tour_medida.php" ><img src='assets/img/icons/xls.png' width="24"/> XLS</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table datatable">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Teléfono</th>
                                            <th>Email</th>
                                            <th>Comentarios</th>
                                            <th>Fecha</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $tmpfrmtour = new frmContactoTour(0,'','','','','');
                                        $frmtour = $tmpfrmtour->listar();

                                        $cont=0;
                                        foreach($frmtour as $e){
                                            $cont++;
                                            ?>
                                            <tr id="trow_<?php echo $e['idFrmContactoTour']; ?>">
                                                <td width="5"><?php echo $cont ?></td>
                                                <td><?php echo $e['nombre'] ?></td>
                                                <td><?php echo $e['tel'] ?></td>
                                                <td><?php echo $e['email'] ?></td>
                                                <td><?php echo $e['comentarios'] ?></td>
                                                <td><?php echo $e['fecha'] ?></td>
                                                <td>
                                                    <button class="btn btn-danger btn-rounded btn-condensed btn-sm delte_row_data" onClick="delete_tour('trow_<?php echo $e['idFrmContactoTour']; ?>',this);" data-idtour="<?php echo $e['idFrmContactoTour']; ?>"><span class="fa fa-times"></span></button>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END DATATABLE EXPORT -->
                    </section>

                    <section id="content3">
                        <!-- START DATATABLE EXPORT -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Contacto</h3>
                                <div class="btn-group pull-right">
                                    <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                    <ul class="dropdown-menu">
                                        <li><a href="data_contacto.php" ><img src='assets/img/icons/xls.png' width="24"/> XLS</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table datatable">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Teléfono</th>
                                            <th>Email</th>
                                            <th>País</th>
                                            <th>Estado</th>
                                            <th>Comentarios</th>
                                            <th>Fecha</th>
                                            <th>Eliminar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $tmpfrmcontacto = new frmContacto(0,'','','','','','');
                                        $frmcontacto = $tmpfrmcontacto->listar();

                                        $cont=0;
                                        foreach($frmcontacto as $e){
                                            $cont++;
                                            ?>
                                            <tr id="trow_<?php echo $e['idFrmContacto']; ?>">
                                                <td width="5"><?php echo $cont ?></td>
                                                <td><?php echo $e['nombre'] ?></td>
                                                <td><?php echo $e['tel'] ?></td>
                                                <td><?php echo $e['email'] ?></td>
                                                <td><?php echo $e['pais'] ?></td>
                                                <td><?php echo $e['estado'] ?></td>
                                                <td><?php echo $e['comentarios'] ?></td>
                                                <td><?php echo $e['fecha'] ?></td>
                                                <td>
                                                    <button class="btn btn-danger btn-rounded btn-condensed btn-sm delte_row_data" onClick="delete_contacto('trow_<?php echo $e['idFrmContacto']; ?>',this);" data-idcontacto="<?php echo $e['idFrmContacto']; ?>"><span class="fa fa-times"></span></button>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END DATATABLE EXPORT -->
                    </section>

                    <section id="content4">
                        <!-- START DATATABLE EXPORT -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Contacto pie</h3>
                                <div class="btn-group pull-right">
                                    <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                    <ul class="dropdown-menu">
                                        <li><a href="data_contacto_pie.php" ><img src='assets/img/icons/xls.png' width="24"/> XLS</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table datatable">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Teléfono</th>
                                            <th>Email</th>
                                            <th>País</th>
                                            <th>Estado</th>
                                            <th>Comentarios</th>
                                            <th>Título</th>
                                            <th>Fecha</th>
                                            <th>Eliminar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $tmpfrmcontactopie = new frmcontactoPie(0,'','','','','','','','');
                                        $frmcontactopie = $tmpfrmcontactopie->listar();

                                        $cont=0;
                                        foreach($frmcontactopie as $e){
                                            $cont++;
                                            ?>
                                            <tr id="trow_<?php echo $e['idFrmContactoPie']; ?>">
                                                <td width="5"><?php echo $cont ?></td>
                                                <td><?php echo $e['nombre'] ?></td>
                                                <td><?php echo $e['tel'] ?></td>
                                                <td><?php echo $e['email'] ?></td>
                                                <td><?php echo $e['pais'] ?></td>
                                                <td><?php echo $e['estado'] ?></td>
                                                <td><?php echo $e['comentarios'] ?></td>
                                                <td><?php echo $e['titulo'] ?></td>
                                                <td><?php echo $e['fecha'] ?></td>
                                                <td>
                                                    <button class="btn btn-danger btn-rounded btn-condensed btn-sm delte_row_data" onClick="delete_pie('trow_<?php echo $e['idFrmContactoPie']; ?>',this);" data-idpie="<?php echo $e['idFrmContactoPie']; ?>"><span class="fa fa-times"></span></button>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END DATATABLE EXPORT -->
                    </section>

                </main>
            <!--END TABS-->
            <div class="clearfix"></div>
            <div class="x-content-footer">
                Copyright © 2016 Mayanecotours. All rights reserved
            </div>
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-times"></span> Eliminar <strong>Datos</strong> ?</div>
            <div class="mb-content">
                <p>¿Seguro que quieres eliminar esta fila?</p>
                <p>Presione Sí, si Seguro.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-left">
                    <button class="btn btn-success btn-lg mb-control-yes">Si</button>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>
                <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="resources/logout.php" class="btn btn-success btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" src="assets/audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="assets/audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="assets/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/tabs/bootstrap-tabs-x.js"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type='text/javascript' src='assets/js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/scrolltotop/scrolltopcontrol.js"></script>

<script type="text/javascript" src="assets/js/plugins/morris/raphael-min.js"></script>
<script type="text/javascript" src="assets/js/plugins/morris/morris.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/rickshaw/d3.v3.js"></script>
<script type="text/javascript" src="assets/js/plugins/rickshaw/rickshaw.min.js"></script>
<script type='text/javascript' src='assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
<script type='text/javascript' src='assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
<script type='text/javascript' src='assets/js/plugins/bootstrap/bootstrap-datepicker.js'></script>
<script type="text/javascript" src="assets/js/plugins/owl/owl.carousel.min.js"></script>

<script type="text/javascript" src="assets/js/plugins/moment.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/daterangepicker/daterangepicker.js"></script>

<script type="text/javascript" src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/tableexport/tableExport.js"></script>
<script type="text/javascript" src="assets/js/plugins/tableexport/jquery.base64.js"></script>
<script type="text/javascript" src="assets/js/plugins/tableexport/html2canvas.js"></script>
<script type="text/javascript" src="assets/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="assets/js/plugins/tableexport/jspdf/jspdf.js"></script>
<script type="text/javascript" src="assets/js/plugins/tableexport/jspdf/libs/base64.js"></script>

<!-- END THIS PAGE PLUGINS-->

<!-- START TEMPLATE -->
<script type="text/javascript" src="assets/js/plugins.js"></script>
<script type="text/javascript" src="assets/js/actions.js"></script>
<script type="text/javascript" src="assets/js/demo_dashboard_x.js"></script>
<script type="text/javascript" src="assets/js/plugins/tabs/prefixfree.min.js"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
<script type="application/x-javascript">
    $(document).ready(function(){

        $(".fakeloader").fakeLoader({
            timeToHide:1200,
            bgColor:"#e5e5e5",
            spinner:"spinner1"
        });

    });


    /*DELETE ROW DATABASE*/

    function delete_interior(row,obj){

        var box = $("#mb-remove-row");
        box.addClass("open");

        var $_this = $(obj);

        box.find(".mb-control-yes").on("click",function(){
            box.removeClass("open");
            $("#"+row).hide("slow",function(){
                //alert($_this);
                //console.log($_this);
                $.ajax({
                    data:  {'op':'Eliminar', 'id':$_this.data('idin') },
                    url:   'opinterior.php',
                    type:  'post',
                    success:  function (response) {
                        //alert(response);
                    }
                });

                $(this).remove();
            });
        });

    }

    $(".mb-control-close").on("click",function(){
       $(this).parents(".message-box").removeClass("open");
       return false;
    });

/*****************************************/
    function delete_pie(row,obj){

        var box = $("#mb-remove-row");
        box.addClass("open");

        var $_this = $(obj);

        box.find(".mb-control-yes").on("click",function(){
            box.removeClass("open");
            $("#"+row).hide("slow",function(){
                //alert($_this);
                //console.log($_this);
                $.ajax({
                    data:  {'op':'Eliminar', 'id':$_this.data('idpie') },
                    url:   'opfooter.php',
                    type:  'post',
                    success:  function (response) {
                        //alert(response);
                    }
                });

                $(this).remove();
            });
        });

    }

    function delete_tour(row,obj){

        var box = $("#mb-remove-row");
        box.addClass("open");

        var $_this = $(obj);

        box.find(".mb-control-yes").on("click",function(){
            box.removeClass("open");
            $("#"+row).hide("slow",function(){
                //alert($_this);
                //console.log($_this);
                $.ajax({
                    data:  {'op':'Eliminar', 'id':$_this.data('idtour') },
                    url:   'optour.php',
                    type:  'post',
                    success:  function (response) {
                        //alert(response);
                    }
                });

                $(this).remove();
            });
        });

    }

    function delete_contacto(row,obj){

        var box = $("#mb-remove-row");
        box.addClass("open");

        var $_this = $(obj);

        box.find(".mb-control-yes").on("click",function(){
            box.removeClass("open");
            $("#"+row).hide("slow",function(){
                //alert($_this);
                //console.log($_this);
                $.ajax({
                    data:  {'op':'Eliminar', 'id':$_this.data('idcontacto') },
                    url:   'opcontacto.php',
                    type:  'post',
                    success:  function (response) {
                        //alert(response);
                    }
                });

                $(this).remove();
            });
        });

    }
    
    
    $(".x-features .x-features-profile").on("click",function(e){
        e.stopPropagation();
        $(this).toggleClass("active");
    });

</script>
</body>
</html>






