<?php




require 'Header.php';


?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Ingreso Quiebre
                           
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->

                    <div class="panel-body" style="height: 200x;" id="FormularioRegistros">
                    
                    <form name="Formulario" id="Formulario" method="POST">

                    <div class="form-group col-log-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Local:</label>
                    <input type="hidden" name="idLocal" id="idLocal">
                    <input type="text" class="form-control" placeholder="Local" name="local" id="local" value="Maestro Chincha" >
                    </div>


                    <div class="form-group col-log-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Fecha Quiebre:</label>
                    <input type="date" class="form-control" placeholder="Fecha" name="fecha" id="fecha" required>
                    </div>

                    <div class="form-group col-log-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Codigo Producto:</label>
                   
                    <input type="text" class="form-control" placeholder="Codigo Producto" name="idProducto" id="idProducto" required>
                    </div>

                    <div class="form-group col-log-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Cantidad:</label>
                   
                    <input type="number" class="form-control" placeholder="Cantidad" name="cantidad" id="cantidad" required>
                    </div>




                  

                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <button class="btn btn-success" type="submit" name="BtnGuardar" id="BtnGuardar" ><i class="fa fa-save"></i> Agregar</button>


                   <!--    <button class="btn btn-danger" onclick="CancelarForm()" type="button"><i class="fa fa-arrow-circle-left"></i>
                    Cancelar</button> -->
                    <a href="escritorio.php"> <button class="btn btn-danger"  type="button"><i class="fa fa-arrow-circle-left"></i>
                    Cancelar</button></a>


                    </div>


                    </form>


                        </div>





                    <div class="panel-body table-responsive" id="ListadoRegistros">


                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover" >

                        <thead>

                        <th>Opciones</th>
                        <th>Codigo Producto</th>
                        <th>Producto</th>
                        <th>Marca</th>
                   
                        <th>Cantidad Solicitada</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>ubicacion</th>
                        <th>Unidad Medida</th>
                        <th>Fecha Solicitada</th>

                        </thead>

                        <tbody>
                        
</tbody>
                      <tfoot>

                      
                      <th>Opciones</th>
                      <th>Codigo Producto</th>
                        <th>Producto</th>
                        <th>Marca</th>
                   
                        <th>Cantidad Solicitada</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>ubicacion</th>
                        <th>Unidad Medida</th>
                        <th>Fecha Solicitada</th>


                    </tfoot>
                      
                       



                        </table>
                    </div>

                 


                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php


require 'Footer.php';
?>

<script type="text/javascript" src="Scripts/IngresoQuiebre.js"></script>

