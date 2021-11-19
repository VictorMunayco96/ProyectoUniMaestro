
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
                          <h1 class="box-title">Escritorio </h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body">

                       

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><a href="IngresoQuiebre.php" style="decoration:none; color:white;">Ingreso Quiebre</a></h3>

          <p>Ingreso Quiebre </p>
        </div>
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <a href="IngresoQuiebre.php" class="small-box-footer">Ingreso Quiebre<i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>


    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <!-- small box -->
      <div class="small-box bg-blue">
        <div class="inner">
          <h3><a href="ReporteGestionDetalle.php" style="decoration:none; color:white;">Reporte Gestion Detalle</a></h3>

          <p>Reporte Gestion Detalle </p>
        </div>
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <a href="ReporteGestionDetalle.php" class="small-box-footer">Reporte Gestion Detalle<i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>






    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><a href="IngresoQuiebre.php" style="decoration:none; color:white;">Reporte Resumen</a></h3>

          <p>Reporte Resumen</p>
        </div>
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <a href="ReporteResumen.php" class="small-box-footer">Reporte Resumen<i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    















                    
                 


                    <div class="panel-body">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="box box-primary">
                              <div class="box-header with-border">
                                Ventas de los últimos 12 meses
                              </div>
                              <div class="box-body">
                                <canvas id="ventas" width="400" height="100"></canvas>
                              </div>
                          </div>
                        </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <div class="box box-primary">
                              <div class="box-header with-border">
                                Compras de los últimos 10 días
                              </div>
                              <div class="box-body">
                              <canvas id="compras" width="400" height="200"></canvas>
                              </div>
                          </div>
                        </div>

             

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <div class="box box-primary">
                              <div class="box-header with-border">
                                Resumen de Ventas por Tienda
                              </div>
                              <div class="box-body">
                                <canvas id="resumenventas" width="400" height="400"></canvas>
                              </div>
                          </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="box box-primary">
                              <div class="box-header with-border">
                                Resumen de Ventas por Tienda
                              </div>
                              <div class="box-body">
                                <canvas id="resv" width="400" height="200"></canvas>
                              </div>
                          </div>
                        </div>

                        <div class="row">
                        
        
      

  
        </div>
      </div>
      


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

<script src="../Public/js/Chart.min.js"></script>
<script src="../Public/js/Chart.bundle.min.js"></script> 
<script type="text/javascript">
var ctx = document.getElementById('compras').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById('ventas').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
        datasets: [{
            label: '# of Votes',
            data: [56478,4566,4878,45148,45812,74845],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById("resumenventas");
var myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['OK', 'WARNING', 'CRITICAL', 'UNKNOWN'],
    datasets: [{
      label: '# of Tomatoes',
      data: [12, 19, 3, 5],
      backgroundColor: [
        'rgba(255,99,132,1)',
        'rgba(255, 240, 125, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(255, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
   	//cutoutPercentage: 40,
    responsive: false,

  }
});


var ctx = document.getElementById('resv').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
        datasets: [{
            label: '# of Votes',
            data: [56478,4566,4878,45148,45812,74845],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
        

        
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


</script>






