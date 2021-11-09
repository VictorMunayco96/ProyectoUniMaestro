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
                          <h1 class="box-title">Reporte Resumen
                           
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->

                    <div class="panel-body" style="height: 200x;" id="FormularioRegistros">
                    
                    <form name="Formulario" id="Formulario" method="POST">

                    <div class="form-group col-log-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Tienda:</label>
                    
                    <input type="number" class="form-control" placeholder="Local" name="local" id="local" required>
                    </div>


                    <div class="form-group col-log-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Familia</label>
                    <select name="Familia" id="Familia" class="form-control">
  <option value="Todos">Todos</option>
  <option value="Electronico">Electronico</option>
  <option value="Jardineria">Jardineria</option>
  <option value="Pintura">Pintura</option>
</select>
                    </div>

                    <div class="form-group col-log-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Desde:</label>
                    <input type="date" class="form-control" placeholder="Local" name="local" id="local" required>
                    </div>

                    <div class="form-group col-log-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Hasta:</label>
                    <input type="date" class="form-control" placeholder="Local" name="local" id="local" required>
                    </div>


                




                  

                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <button class="btn btn-success" type="submit" name="BtnGuardar" id="BtnGuardar" > Filtrar</button>


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

                        <th>Codigo</th>
                        <th>C.Barra</th>
                        <th>Descripcion</th>
                   
                        <th>HUA (A.P.M)</th>
                        <th>Nivel</th>
                        <th>Posicion</th>
                        <th>Precio</th>

                        </thead>

                        <tbody>
                        
</tbody>
                      <tfoot>

                      
                      <th>Codigo</th>
                        <th>C.Barra</th>
                        <th>Descripcion</th>
                   
                        <th>HUA (A.P.M)</th>
                        <th>Nivel</th>
                        <th>Posicion</th>
                        <th>Precio</th>



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

<script type="text/javascript" src="Scripts/Categoria.js"></script>

