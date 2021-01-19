<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GYMUTZAC- <?php echo $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->

    <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- Bootstrap 3.3.6 -->
</head>
<body>
    <div class="content">
        <div class="header">
            <h1>Sistema de control de Gimnasio | GYMUTZAC</h1>
        </div>
        <div class="container content-search">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Mediante los cuadros de texto puede buscar cualquier usuario</p>
                </div>
            </div>
            <div class="row">
                <form class="form-horizontal form-search" action="<?php echo base_url(); ?>cUsuario/buscar" method="GET">
                    <div class="form-group">
                        <div class="col-md-2">
                            <select name="campo" class="form-control">
                                <option value="1" <?php echo $this->session->flashdata('campo') && $this->session->flashdata('campo') == 1 ? 'selected' : ''; ?>>Nombre</option>
                                <option value="2" <?php echo $this->session->flashdata('campo') && $this->session->flashdata('campo') == 2 ? 'selected' : ''; ?>>Matricula</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="matricula" class="form-control" value="<?php echo $this->session->flashdata("matricula") == true ? $this->session->flashdata("matricula") : '' ?>" placeholder="Introduzca matricula o nombre">
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" name="carrera">
                                <option value="">Seleccione carrera...</option>
                                <?php foreach ($carrera as $carrera): ?>
                                    <?php if ($this->session->flashdata('carrera') && $this->session->flashdata('carrera') == $carrera->idcarrera): ?>
                                        <option value="<?php echo $carrera->idcarrera; ?>" selected="selected"><?php echo $carrera->carrera; ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $carrera->idcarrera; ?>"><?php echo $carrera->carrera .$carrera->area ; ?></option>
                                    <?php endif;?>
                                <?php endforeach;?>
                             </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-success btn-block"><i class="entypo-search" aria-hidden="true"></i> Buscar</button>
                        </div>
                        <div class="col-md-2">
                            <a href="<?php echo base_url(); ?>cUsuario/buscar" class="btn btn-success btn-block"><i class="entypo-eye" aria-hidden="true"></i> Ver Todo</a>
                        </div>
                       <div class="col-md-2">
                       </div>
                       <div class="col-md-2">
                     </div>
                        <div class="col-md-2">
    
                        </div>
                        <div class="col-md-2">
                   <br>
                        </div>

                          <div class="col-md-3">
                            <a href="<?php echo base_url(); ?>cUsuario/buscar" class="btn btn-success btn-block"><i class="entypo-eye" aria-hidden="true"></i>Registrar entrada/salida</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table id="carrera" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Matricula</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno </th>
                                <th>Apellido Materno</th>
                                <th>Carrera</th>
                                <th>Area</th>
                                <th>Cuatimestre</th>
                                <th>Fecha</th>
                                <th>Hora de entrada</th>
                                <th>Hora de salida</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($alumno)): ?>
                            <?php foreach ($alumno as $alumno): ?>
                                <tr>
                                            <td><?php echo $alumno->matricula;?></td>
                                            <td><?php echo $alumno->nombre;?></td>
                                            <td><?php echo $alumno->apellidop;?></td>
                                            <td><?php echo $alumno->apellidom;?></td>
                                            <td><?php echo $alumno->carrera;?></td>
                                            <td><?php echo $alumno->area;?></td>
                                            <td><?php echo $alumno->cuatrimestre;?></td>
                                            <td><?php echo $alumno->fecha_chk?></td>
                                            <td><?php echo $alumno->horae_chk?>;</td>  
                                            <td><?php echo $alumno->horas_chk?></td>       
                                </tr>
                            <?php endforeach;?>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>



        $('#carrera').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "language": {
                            "lengthMenu": "Mostrar _MENU_ registros por pagina",
                            "zeroRecords": "No se encontraron resultados en su busqueda",
                            "searchPlaceholder": "Buscar registros",
                            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
                            "infoEmpty": "No existen registros",
                            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                            "search": "Buscar:",
                            "paginate": {
                                    "first":    "Primero",
                                    "last":    "Último",
                                    "next":    "Siguiente",
                                    "previous": "Anterior"
                            },
                        }
        });

  

</script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/neon/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/neon/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
</body>
</html>