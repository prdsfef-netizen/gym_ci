<!DOCTYPE html>
<html lang="en">
<head>
     <title>Registro de alumnos</title>
     <link rel="stylesheet" href="neon/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
     <link rel="stylesheet" href="neon/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
     <link rel="stylesheet" href="neon/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
     <link rel="stylesheet" href="neon/css/neon.css"  id="style-resource-5">
     <link rel="stylesheet" href="neon/css/custom.css"  id="style-resource-6">
     <!-- jQuery UI -->
     <link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery-ui.css">
     <link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
     <!-- Tagsinput -->
     <link rel="stylesheet" href="css/plugins/tagsinput/jquery.tagsinput.css">
     <!-- chosen -->
     <link rel="stylesheet" href="css/plugins/chosen/chosen.css">



    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
    <script src="js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
    <script src="js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
    <script src="js/plugins/jquery-ui/jquery.ui.spinner.js"></script>
    <script src="js/plugins/jquery-ui/jquery.ui.slider.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Datepicker -->
    <script src="js/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Timepicker -->
    <script src="js/plugins/timepicker/bootstrap-timepicker.min.js"></script>

    <!-- Theme framework -->
    <script src="js/eakroko.min.js"></script>
    <!-- Theme scripts -->
    <script src="js/application.min.js"></script>
    <!-- Just for demonstration -->
    <script src="js/demonstration.min.js"></script>
    <script type="text/javascript">
    </script>

</head>
<body class="page-body  page-fade">

      <div class="page-container">

      <div class="sidebar-menu">

      <header class="logo-env">

      <!-- logo -->
     <div class="logo">
          <img src="img/logo.png" alt="" width="192" height="80"/>
      </div>

      <div class="sidebar-collapse">

  <div class="sidebar-collapse">

        <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
          <i class="entypo-menu"></i>
        </a>
      </div>
      </header>
      <ul id="main-menu" class="">
          <li class="active opened active">
             <a href="<?php echo base_url(); ?>cAdmin">
             <i class="entypo-gauge"></i>
             <span>Inicio</span>
             </a>
          </li>


          <li>
             <a href="<?php echo base_url();?>cCreditos">
             <i class="entypo-star"></i>
             <span>Creditos</span>
             </a>
          </li>

          <li>
             <a href="">
             <i class="entypo-users"></i>
             <span>Miembros</span>
             </a>

    <ul>
      <li class="active">
        <a href="<?php echo base_url();?>cAlumnos">
        <span>Ver Miembros</span>
        </a>
      </li>

      <li>
         <a href="<?php echo base_url();?>cAlumnosa">
         <span>Ver miembros activos</span>
         </a>
      </li>

    </ul>
  </li>

        <li>
          <a href="<?php echo base_url();?>cCalendario">
          <i class="entypo-calendar"></i>
          <span>Calendario</span>
          </a>
        </li>
        <li>
           <a href="<?php echo base_url();?>cReglamento">
          <i class="entypo-doc-text-inv"></i>
          <span>Reglamento</span>
           </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>cLogout"><i class="entypo-logout"></i><span>Cerrar Sesión</span></a>
        </li>

      </ul>
    </div>
    <div class="main-content">
        <div class="row">

                    <!-- Profile Info and Notifications -->
                    <div class="col-md-6 col-sm-8 clearfix">

                    </div>


                    <!-- Raw Links -->
                    <div class="col-md-6 col-sm-4 clearfix hidden-xs">

                        <ul class="list-inline links-list pull-right">

                           <li>Bienvenido <?php echo $this->session->userdata('sessionA');?> </li>

                            <li>
                                <a href="logout.php">
                                    Cerrar Sesión<i class="entypo-logout right"></i>
                                </a>
                            </li>
                        </ul>

                    </div>


                </div>
                   <h3>Nuevo Registro</h3>
                <form action="<?php echo base_url(); ?>cAlumno/guardar" method="POST" class="form-horizontal form-groups-bordered">

                     <div class="form-group">
                     <label for="field-1" class="col-sm-3 control-label">Matricula :</label>
                     <div class="col-sm-5">
                     <input type="text" name="matricula" id="matricula" class="form-control" data-rule-required="true" data-rule-minlength="4" placeholder="Matricula del interesado" maxlength="30" required>
                    </div>
                    </div>
                     <div class="form-group">
                     <label for="field-1" class="col-sm-3 control-label">Nombre :</label>
                     <div class="col-sm-5">
                     <input type="text" name="nombre" id="nombre" class="form-control" data-rule-required="true" data-rule-minlength="4" placeholder="Nombre del interesado" maxlength="30" required>
                    </div>
                    </div>
                    <div class="form-group">
                       <label for="field-1" class="col-sm-3 control-label">Apellido Paterno :</label>
                     <div class="col-sm-5">
                     <input type="text" name="apellidop" id="apellidop" class="form-control" data-rule-required="true" data-rule-minlength="4" placeholder="Apellido del interesado" maxlength="30">
                     </div>
                    </div>
                    <div class="form-group">
                     <label for="field-1" class="col-sm-3 control-label">Apellido Materno:</label>
                     <div class="col-sm-5">
                     <input type="text" name="apellidom" id="apellidom" class="form-control" data-rule-required="true" data-rule-minlength="4" placeholder="Apellido del interesado" maxlength="30" required>
                    </div>
                    </div>


                    <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Genero :</label>
                   <div class="col-sm-5">
                   <select name="genero" id="genero" data-rule-required="true" class="form-control">
                   <option value="">-- Porfavor seleccione --</option>
                   <option value="Masculino">Masculino</option>
                   <option value="Femenino">Femenino</option>
                   <option value="Otro">Otro</option>
                  </select>
                  </div>
                 </div>

                    <div class="form-group">
                    <label class="col-sm-3 control-label">Carrerra</label>
                     <div class="col-sm-5">
                    <!-- SELECT-->
                     <select id="idcarrera" name="idcarrera" class="form-control" data-rule-required="true" data-rule-minlength="4" required>
                     <option value="0" >-- Porfavor seleccione --</option>
                     <?php
                      foreach ($carrera as $i) {
                        echo '<option value=" '. $i->idcarrera . '  "> ' . $i->carrera .  $i->area .'</option>';
                    }
                     ?>
                     </select>
                     </div>
                  </div>

                   <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Cuatrimestre:</label>
                        <div class="col-sm-5">
                        <select name="cuatrimestre" id="cuatrimestre" data-rule-required="true" class="form-control">
                               <option value="">-- Porfavor seleccione --</option>
                               <option value="1º">1º</option>
                               <option value="2º">2º</option>
                               <option value="3º">3º</option>
                               <option value="4º">4º</option>
                               <option value="5º">5º</option>
                               <option value="6º">6º</option>
                               <option value="7º">7º</option>
                               <option value="8º">8º</option>
                               <option value="9º">9º</option>
                               <option value="10º">10º</option>
                               <option value="11º">11º</option>
                  </select>
                  </div>
                 </div>
                   <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Grado:</label>
                        <div class="col-sm-5">
                        <select name="grado" id="grado" data-rule-required="true" class="form-control">
                               <option value="">-- Porfavor seleccione --</option>
                               <option value="A">A</option>
                               <option value="B">B</option>
                               <option value="C">C</option>
                               <option value="D">D</option>
                               <option value="E">E</option>
                             </select>
                           </div>
                         </div>

            <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
            </div>

                   </form>

        <hr>
    </div>

    <script src="neon/js/gsap/main-gsap.js" id="script-resource-1"></script>
    <script src="neon/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
    <script src="neon/js/bootstrap.min.js" id="script-resource-3"></script>
    <script src="neon/js/joinable.js" id="script-resource-4"></script>
    <script src="neon/js/resizeable.js" id="script-resource-5"></script>
    <script src="neon/js/neon-api.js" id="script-resource-6"></script>
    <script src="neon/js/jquery.validate.min.js" id="script-resource-7"></script>
    <script src="neon/js/neon-login.js" id="script-resource-8"></script>
    <script src="neon/js/neon-custom.js" id="script-resource-9"></script>
    <script src="neon/js/neon-demo.js" id="script-resource-10"></script>
    <script src="neon/js/bootstrap-datepicker.js" id="script-resource-11"></script>


    </body>
</html>
