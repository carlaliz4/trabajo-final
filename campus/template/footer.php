<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer text-sm">
  <strong>Copyright &copy; CALIDAD COMPETITIVA 2021</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 2
  </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- Bootstrap -->
<script src="../../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../public/plugins/jszip/jszip.min.js"></script>
<script src="../../public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE -->
<script src="../../public/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../../public/alertifyJS/alertify.js"></script>
<script src="../../public/plugins/chart.js/Chart.min.js"></script>
<!-- SweetAlert 2 -->
 <script src="../../sweetalert2/sweetalert2.all.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../public/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../public/dist/js/pages/dashboard3.js"></script>
<!-- Page specific script -->
<script>
  $('#modal-confirma').on('show.bs.modal', function(e){
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
  });
</script>

<script>
  $(function () {
    $("#datatable").DataTable({
      "responsive": true,
      dom:
      "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>"
      , 
      "lengthChange": true, 
      "autoWidth": false,
      "buttons": ["excel", "pdf", "print", "colvis"],
      "order": [[ 0, 'desc' ]],
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Buscar registros",
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ ",
        "infoEmpty": "Mostrando 0 to 0 of 0",
        "infoFiltered": "(Filtrado de _MAX_ R.)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      }
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>