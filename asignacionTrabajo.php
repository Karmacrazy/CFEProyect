<?php require_once 'phpLogin/login.class.php';?>
<!DOCTYPE html>
<html lang="en">
    <?php include("home.encabezado.php");?>
    <body>
      
        <?php include("modalDeleteAsigTrabajo.php");?>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">SB Admin v2.0</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <?php
                    include("home.profilemenu.php");
                    ?>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <?php
                        include("home.menu.php");
                        ?>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Añadir Supervisores</h1>
                    </div>                    
                </div>
                <div class="row" style="padding-bottom: 10px">
                    <div class="col-xs-10">
                    
                        <div id="ajax_delete"></div>
                    
                    </div>
                    <div class="col-xs-2">
                        <div class="pull-right ">
                            <button type="button" class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal" data-target="#addData"> Nuevo</button>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <div class="pull-right">
                                        <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="addLabel">Añadir Datos del Supervisor</h4>
                                                    </div>
                                                    <form role="form" id="addData" method="post">
                                                        <div class="modal-body">
                                                            <div id="ajax_add"></div>
                                                            <input type="hidden" id="supId" value="<?php echo $_SESSION['idUsuario'] ?>">
                                                            <div class="form-group">
                                                            <label for="verId"> Verificador</label>
                                                                <select class="form-control" name="cbx_verificador" id="cbx_verificador">
                                                                <option value="0">Seleccionar Verificador</option>
                                                              <?php
                                                                $nuevoSingleton = Login::singleton_login();
                                                                $request = $nuevoSingleton->getAll_verificador();
                                                                foreach( $request as $row){
                                                                  ?>
                                                                  <option value="<?php echo $row['idVerificador']; ?>"><?php echo $row['nombre']; ?></option>
                                                               <?php
                                                                  } ?>
                                                                 </select>
                                                              
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="rpu"> RPU</label>
                                                                <input type="text" class="form-control" id="rpu" placeholder="RPU.." maxlength="12">
                                                            </div>
                                                            <div class="form-group">
                                                                   <label for="dateStart"> Fecha Programada</label>
                                                                   <div class="input-group date col-lg-4" id="fj-date" name="fj-date">
                                                                   <input id="fp-date" type="text" class="form-control">
                                                                       <span class="input-group-addon">
                                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                                       </span>
                                                                   </div>
                                                            </div>                                                             
                                                            </div>                                                      
                                                        <div class="modal-footer">
                                                            <button type="button" id="btnSave" class="btn btn-primary">Guardar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="editAsigTrabajo" tabindex="-1" role="dialog" aria-labelledby="editLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="editLabel">Actualizar Datos del Supervisor</h4>
                                                </div>
                                                <form role="form" id="updateData" method="post">
                                                <div class="modal-body"> 
                                                    <div id="ajax_update"></div>
                                                    <input type="hidden" id="ids0" name="ids0">
                                                    <div class="form-group">
                                                    <label for="verId0"> Verificador</label>
                                                        <select class="form-control" name="cbx_verificador0" id="cbx_verificador0">
                                                        <option value="0">Seleccionar Verificador</option>
                                                      <?php
                                                        foreach( $request as $rows){
                                                          ?>
                                                          <option value="<?php echo $rows['idVerificador']; ?>"><?php echo $rows['nombre']; ?></option>
                                                       <?php
                                                          }?>
                                                         </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="rpu0"> RPU</label>
                                                        <input type="text" class="form-control" id="rpu0" placeholder="RPU.." maxlength="12">
                                                    </div>
                                                    <div class="form-group">
                                                           <label for="dateStart0"> Fecha Programada</label>
                                                           <div class="input-group" id="fj-date0"  name="fj-date0">
                                                           <input id="fp-date0" type="text" class="form-control">
                                                           </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" id="btnUpdate" class="btn btn-primary">Actualizar</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>                                        
                                    </div> 
                                </div>
                                <div class="col-lg-12" >
                                 <div class="table-responsive">
                                    <table class="table table-hover" id="asigTrabajo_data">
                                     <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Supervisor</th>
                                            <th>Verificador</th>
                                            <th>RPU</th>
                                            <th>Fecha Programada</th>
                                            <th>No. Solicitud</th>
                                            <th>Fecha Atendido</th>
                                            <th>Notificacion Ajuste</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                                
                                    </tbody>
                                </table>
                                </div>
                                <!-- /.row (nested) -->
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="assets/bootstrapHome/vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="assets/bootstrapHome/vendor/bootstrap/js/bootstrap.min.js"></script>
        
        <script src="assets/bootstrapHome/vendor/metisMenu/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="assets/bootstrapHome/dist/js/sb-admin-2.js"></script>
        <script src="assets/datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/datepicker/locales/bootstrap-datepicker.es.min.js"></script>
        <script src="assets/paginacion/js/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/paginacion/js/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="assets/paginacion/js/datatables-responsive/dataTables.responsive.js"></script>
        <script src="assets/sweetalert-master/dist/sweetalert.min.js"></script>
        <script src="js/scriptsAsigTrabajo.js"></script>
      
    </body>

</html>