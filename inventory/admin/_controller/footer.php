  <footer class="main-footer">
    <strong>Copyright &copy; 2019 - <?php echo date ('Y')?> <a href="http://adminlte.io">PT. Globalnine Indonesia</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Beta Version</b> 2.1
    </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>


<script src="../template/plugins/jquery/jquery.min.js"></script>
<script src="../template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../template/dist/js/adminlte.min.js"></script>
<script src="../template/dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
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
