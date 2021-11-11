<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maestro</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../Public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Public/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../Public/css/style.css">  
    <!-- Theme style -->
    <link rel="stylesheet" href="../Public/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../Public/css/blue.css">
  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body >
    <div class="login-box2">
      
      <img src="../Public/img/logoMaestro.png" class="avatar">
     
     
      <h1>Maestro Chincha</h1>
        <form >
          <div class="form-group has-feedback">
          <p>Usuario</p>
            <input type="text" id="logina" name="logina" class="form-control" placeholder="Usuario">
            <span class="fa fa-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
          <p>Contraseña</p>
            <input type="password" id="clavea" name="clavea" class="form-control" placeholder="Password">
            <span class="fa fa-key form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              
            </div><!-- /.col -->
            <div >
              <button type="button" onClick="logueo()">Ingresar</button>
            </div><!-- /.col -->
          
        </form>

        
   
        

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery -->
    <script src="../Public/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../Public/js/bootstrap.min.js"></script>
     <!-- Bootbox -->
    <script src="../Public/js/bootbox.min.js"></script>

    <script type="text/javascript" src="Scripts/login.js"></script>


  </body>
</html> 