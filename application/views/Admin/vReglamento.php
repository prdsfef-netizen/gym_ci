<!DOCTYPE html>
<html lang="en">
<head> 

    
    <title>Reglamento</title>
     <link rel="stylesheet" href="neon/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
    <link rel="stylesheet" href="neon/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
    <link rel="stylesheet" href="neon/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
    <link rel="stylesheet" href="neon/css/neon.css"  id="style-resource-5">
    <link rel="stylesheet" href="neon/css/custom.css"  id="style-resource-6">

    <!-- jQuery UI -->
    <link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
    <!-- Fullcalendar -->
    <link rel="stylesheet" href="css/plugins/fullcalendar/fullcalendar.css">
    <link rel="stylesheet" href="css/plugins/fullcalendar/fullcalendar.print.css" media="print">

    <!-- Tagsinput -->
    <link rel="stylesheet" href="css/plugins/tagsinput/jquery.tagsinput.css">
    <!-- chosen -->
    <link rel="stylesheet" href="css/plugins/chosen/chosen.css">
    <!-- multi select -->
    <link rel="stylesheet" href="css/plugins/multiselect/multi-select.css">
    <!-- timepicker -->
    <link rel="stylesheet" href="css/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- colorpicker -->
    <link rel="stylesheet" href="css/plugins/colorpicker/colorpicker.css">
    <!-- Datepicker -->
    <link rel="stylesheet" href="css/plugins/datepicker/datepicker.css">
    <!-- Plupload -->
    <link rel="stylesheet" href="css/plugins/plupload/jquery.plupload.queue.css">


    <!-- jQuery -->
    <script src="http://localhost/gym/js/jquery.min.js"></script>
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
       <SCRIPT LANGUAGE="JavaScript">
        function checkIt(evt) {
            evt = (evt) ? evt : window.event
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                status = "This field accepts numbers only."
                return false
            }
            status = ""
            return true
        }
    </SCRIPT>

  
</head>
<body class="page-body   page-fade">

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
             <a href="<?php echo base_url();?>cAlumno">
              <i class="entypo-user-add"></i>
             <span>Nuevo Registro</span>
             </a>
          </li>

          <li>
             <a href="category.php">
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
    <h3>Reglamento</h3>

    <hr />
    
  

                 </div>
              
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

  <link rel="stylesheet" href="neon/js/select2/select2-bootstrap.css"  id="style-resource-1">
  <link rel="stylesheet" href="neon/js/select2/select2.css"  id="style-resource-2">

  <script src="neon/js/jquery.dataTables.min.js" id="script-resource-7"></script>
  <script src="neon/js/dataTables.bootstrap.js" id="script-resource-8"></script>
  <script src="neon/js/select2/select2.min.js" id="script-resource-9"></script>

    </body>
</html>
