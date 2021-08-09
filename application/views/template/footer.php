</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div></div>
  <div class="text-right mr-2">
    &copy; 2021 Bagian Keuangan. All rights reserved.
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  // $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/dist/js/adminlte.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
  $('.datepicker').datepicker();

  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  });
</script>
</body>


</html>