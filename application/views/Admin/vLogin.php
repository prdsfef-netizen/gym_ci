<!DOCTYPE html>
<html>
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>GYMUTZAC</title>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style type="text/css">
/*    --------------------------------------------------
  :: Login
  -------------------------------------------------- */
#login {
    padding-top: 50px
}
#login h1 {
    color: #32543c;
    font-size: 18px;
    text-align: center;
    font-weight: bold;
    padding-bottom: 20px;
}
#login .checkbox {
    margin-bottom: 20px;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
#login .checkbox.show:before {
    content: '\e013';
    color: #1fa67b;
    font-size: 17px;
    margin: 1px 0 0 3px;
    position: absolute;
    pointer-events: none;
    font-family: 'Glyphicons Halflings';
}
#login .checkbox .character-checkbox {
    width: 25px;
    height: 25px;
    cursor: pointer;
    border-radius: 3px;
    border: 1px solid #ccc;
    vertical-align: middle;
    display: inline-block;
}
#login .checkbox .label {
    color: #6d6d6d;
    font-size: 13px;
    font-weight: normal;
}
#login .btn.btn-custom {
    font-size: 14px;
  margin-bottom: 20px;
}


/*    --------------------------------------------------
  :: Inputs & Buttons
  -------------------------------------------------- */
.form-control {
    color: #212121;
}
.btn-custom {
    color: #fff;
  background-color: #32543c;
}
.btn-custom:hover,
.btn-custom:focus {
    color: #fff;
}

/*    --------------------------------------------------
    :: Footer
  -------------------------------------------------- */
#footer {
    color: #6d6d6d;
    font-size: 12px;
    text-align: center;
}
#footer p {
    margin-bottom: 0;
}
#footer a {
    color: inherit;
}
</style>
</head>
<body>

     <section id="login">
     <div align="center" class="container">
     <center>
             <img src="<?php echo base_url()?>assets/img/logo.png" width="150" height="150">
     </center>

     <div class="row">
          <div class="col-xs-12">
               <h1>Estimado usuario, inicie sesion para acceder al área administrativa!</h1>
          <form action="<?php echo base_url(); ?>cLogin/ingresar" method="POST" class="form-horizontal">
                <div class="field">
                     <p class="control has-icons-left has-icons-right">
                     <input class="input" type="text" name="txtNickName" placeholder="Ingrese el usuario" required>
                     <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                     </span>
                     </p>
                </div>
                <div class="field">
                     <p class="control has-icons-left">
                     <input class="input" type="password" name="txtPass" placeholder="Ingrese la contraseña" required>
                     <span class="icon is-small is-left">
                     <i class="fas fa-lock"></i>
                     </span>
                     </p>
                </div>
                <div class="field">
                     <p class="control">
                     <button class="button is-success">Iniciar Sesión</button>
                     </p>
                </div>
          </form>
          </div>
                <?php echo $msje; ?>
     </div> <!-- /.col-xs-12 -->
     </div> <!-- /.row -->
     </div> <!-- /.container -->
     </section>


</body>
</html>
