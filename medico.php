<!DOCTYPE html>
<?php 
session_start();
require_once("connect.php");?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
          <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="index.php"><b>Assinatura</b>Plantão</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Confirme sua prensença aqui!</p>
        <form action="plantao.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="crm" placeholder="Digite seu CRM">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
      <div class="box-body">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="date" placeholder="Informa a data do plantão" name="data">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
<label>Plantão:</label>
          <input type="radio" name="r1" class="minimal" value="1"/><label>Diurno</label>
          <input type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;"  value="2"><label id="noturno">Noturno</label>
          <input type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;" value="3"><label id="apoio">Apoio</label><br />
          <label>Tipo Plantao:</label><select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tipo">
                    <?php
                 $sql = "SELECT * FROM tp_plantao";
                 $result = mysqli_query($conn,$sql);
          echo "<option value=''>Selecione um tipo!</option>";
            while($row = mysqli_fetch_array($result))
            {
                echo "<option value='".$row['idTp_Plantao']."'>".$row['Descricao']."</option>";
            }
                     ?>
                    </select><br />
          <label>Feriado: </label><input type="radio" name="r2" class="minimal" value="0"/><label>Sim</label>
          <input type="radio" name="r2" class="minimal" value="1" checked="true"/><label>Não</label>
            </div>
          <div class="row">
            <div class="col-xs-8">
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Validar</button>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
