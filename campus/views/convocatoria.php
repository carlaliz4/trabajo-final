<?php 

include_once '../template/header.php'; 
include_once '../template/aside.php';
include_once '../models/conexion.php';

?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Convocatorias</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Convocatorias</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <img src="../../img/cpt-inicio/portada-1.jpg" width="1210" height="450" alt="">
                <br><br>
                <p>
                  <a class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Nueva Convocatoria</a>
                </p>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="datatable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="disabled-sorting text-center">id</th>
                    <th class="disabled-sorting text-center">Codigo</th>
                    <th class="disabled-sorting text-center">Cargo</th>
                    <th class="disabled-sorting text-center">Cantidad</th>
                    <th class="disabled-sorting text-center">F. Public. Convoc.</th>
                    <th class="disabled-sorting text-center">F. Recepción</th>
                    <th class="disabled-sorting text-center">F. Evaluación</th>
                    <th class="disabled-sorting text-center">F. Public. Result.</th>
                    <th class="disabled-sorting text-center">Detalle</th>
                    <th class="disabled-sorting text-center">Ganador</th>
                    <th class="disabled-sorting text-center">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT * FROM convocatoria WHERE estado = 1";

                        $run_query = mysqli_query($con, $sql);

                        while($row = mysqli_fetch_array($run_query)){

                            $id = $row["id"];
                            $codigo = $row["codigo"];
                            $cargo = $row["cargo"];
                            $cantidad = $row["cantidad"];
                            $fecha_publi_convoca = $row["fecha_publi_convoca"];
                            $fecha_recepcion = $row["fecha_recepcion"];
                            $fecha_evaluacion = $row["fecha_evaluacion"];
                            $fecha_publi_result = $row["fecha_publi_result"];
                            $detalle = $row["detalle"];
                            $ganador = $row["ganador"];

                            echo '
                            <tr>
                                <td class="disabled-sorting text-center">'.$id.'</td>
                                <td class="disabled-sorting text-center">'.$codigo.'</td>
                                <td class="disabled-sorting text-center">'.$cargo.'</td>
                                <td class="disabled-sorting text-center">'.$cantidad.'</td>
                                <td class="disabled-sorting text-center">'.date('d/m/Y', strtotime($fecha_publi_convoca)).'</td>
                                <td class="disabled-sorting text-center">'.date('d/m/Y', strtotime($fecha_recepcion)).'</td>
                                <td class="disabled-sorting text-center">'.date('d/m/Y', strtotime($fecha_evaluacion)).'</td>
                                <td class="disabled-sorting text-center">'.date('d/m/Y', strtotime($fecha_publi_result)).'</td>
                                <td class="disabled-sorting text-center">'.$detalle.'</td>
                                <td class="disabled-sorting text-center">'.$ganador.'</td>
                                <td class="disabled-sorting text-center">
                                    <a title="Editar datos" codigo="'.$id.'" class="btn btn-primary btn-sm traerDatos"><i class="fa fa-edit"></i></a>
                                    <a title="Eliminar" codigo="'.$id.'" class="btn btn-danger btn-sm eliminarDatos"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            ';
                        }
                    ?>
               </tbody>  
             </table>
           </div>
           <!-- /.card-body -->
         </div>
         <!-- /.card -->
       </div>
       <!-- /.col -->
     </div>
   <!-- /.container-fluid -->
 </section>
 <!-- /.content -->
</div>

<!-- MODAL NUEVA CONVOCATORIA -->

<div class="modal fade bd-modal-example-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel" style="text-align: center;">Agregar Convocatoria</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_register" method="POST" enctype="multipart/form-data">
                    <input type="text" hidden readonly name="funcion" value="registrar">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Codigo</label>
                                <input type="text" name="codigo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Cargo</label>
                                <input type="text" name="cargo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Cantidad Vacantes</label>
                                <input type="number" name="cantidad" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fecha Publicación Convocatoria</label>
                                <input type="date" name="fecha_publi_convoca" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fecha Recepción</label>
                                <input type="date" name="fecha_recepcion" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fecha Evaluación</label>
                                <input type="date" name="fecha_evaluacion" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fecha de Publicación Resultados</label>
                                <input type="date" name="fecha_publi_result" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Detalle</label>
                                <textarea name="detalle" rows="1" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ganador</label>
                                <input type="text" name="ganador" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="text-center" style="text-align: center;">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- MODAL ACTUALIZAR CONVOCATORIA -->

<div class="modal fade bd-modal-example-lg" id="actualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel" style="text-align: center;">Actualizar Convocatoria</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_update" enctype="multipart/form-data">
                    <input type="text" hidden readonly name="funcion" value="update">
                    <input type="text" hidden readonly name="id" id="id">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Codigo</label>
                                <input type="text" id="codigo" name="codigo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Cargo</label>
                                <input type="text" id="cargo" name="cargo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Cantidad Vacantes</label>
                                <input type="number" id="cantidad" name="cantidad" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fecha Publicación Convocatoria</label>
                                <input type="date" id="fecha_publi_convoca" name="fecha_publi_convoca" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fecha Recepción</label>
                                <input type="date" id="fecha_recepcion" name="fecha_recepcion" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fecha Evaluación</label>
                                <input type="date" id="fecha_evaluacion" name="fecha_evaluacion" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fecha de Publicación Resultados</label>
                                <input type="date" id="fecha_publi_result" name="fecha_publi_result" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Detalle</label>
                                <textarea id="detalle" name="detalle" rows="1" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ganador</label>
                                <input type="text" name="ganador" id="ganador" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="text-center" style="text-align: center;">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODAL ELIMINAR REGISTRO -->
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="text-align: center;" class="modal-title" id="exampleModalLabel">Eliminar Convocatoria</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_delete" method="POST">
                <div class="modal-body">
                    <input type="text" hidden readonly name="funcion" value="delete">
                    <input type="text" hidden readonly name="id_eliminar" id="id_eliminar">
                    <p>¿Esta seguro que desea eliminar esta convocatoria?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("#form_register").on('submit', function(event){
    event.preventDefault();
    
        $.ajax({
        url: "../models/convocatoria_model.php",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(res){
            console.log(res);
            if(res == "true"){
                swal("Registro Guardado", "Actualice para revisar los cambios", "success");
            }else {
                swal("No se pudo guardar el registro", "Comuniquese con soporte", "error");
            }
        }
        });

    });

    $(".traerDatos").click(function(event) {
    event.preventDefault();

        var codigo = $(this).attr('codigo');
        var funcion = "traer_datos";

        $.ajax({
            url: "../models/convocatoria_model.php",
            method: "POST",
            data: {funcion:funcion,codigo:codigo},
            dataType:'json',
            success: function(res)
            {
                console.log(res);
                if (res != "no_data")
                {
                    $('#id').val(res.id);
                    $('#codigo').val(res.codigo);
                    $('#cargo').val(res.cargo);
                    $('#cantidad').val(res.cantidad);
                    $('#fecha_publi_convoca').val(res.fecha_publi_convoca);
                    $('#fecha_recepcion').val(res.fecha_recepcion);
                    $('#fecha_evaluacion').val(res.fecha_evaluacion);
                    $('#fecha_publi_result').val(res.fecha_publi_result);
                    $('#detalle').val(res.detalle);
                    if(res.archivo != "") {
                        $('#a_icon_archivo').removeAttr('hidden');
                    }
                    $('#actualizar').modal('show');
                } else {
                    alertify.error("Ocurrio un Problema");
                }
            }
        });
    });

    $("#form_update").on('submit', function(event){
    event.preventDefault();
    
        $.ajax({
        url: "../models/convocatoria_model.php",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(res){
            console.log(res);
            if(res == "true"){
                swal("Registro Actualizado", "Actualice para revisar los cambios", "success");
            }else {
                swal("No se pudo actualizar el registro", "Comuniquese con soporte", "error");
            }
        }
        });

    });

    $(".eliminarDatos").click(function(event) {
    event.preventDefault();

        var codigo = $(this).attr('codigo');
        $('#id_eliminar').val(codigo);
        $('#eliminar').modal('show');

    });

    $("#form_delete").on('submit', function(event){
    event.preventDefault();
    
        $.ajax({
        url: "../models/convocatoria_model.php",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(res){
            console.log(res);
            if(res == "true"){
                swal("Registro Eliminado", "Actualice para revisar los cambios", "success");
            }else {
                swal("No se pudo eliminar el registro", "Comuniquese con soporte", "error");
            }
        }
        });

    });
</script>

<?php include_once '../template/footer.php'; ?>