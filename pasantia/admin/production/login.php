<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icono web -->
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>Intership</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="validar.php" method="post">
              <h1>Formulario Login</h1>
              <div>
                <h3>Correo:</h3>
                <input name="mail" type="email" id="email" class="form-control" placeholder="Usuario" ata-parsley-trigger="change" required/>
              </div>
              <div>
                <h3>Contraseña:</h3>
                <input name="pass" type="password" class="form-control" placeholder="Contraseña" required="" />
              </div>
              <div>
                <input class="btn btn-default" type="submit" value="Ingresar">
                <a class="reset_pass" href="#">Olvido su Contraseña..?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <!--<p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p> -->
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i>INTERSHIP</h1>
                  <p>©2018 Sistema de Control y Seguimiento de Pasantias</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i>INTERSHIP</h1>
                  <p>©2018 Sistema de Control y Seguimiento de Pasantias</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
