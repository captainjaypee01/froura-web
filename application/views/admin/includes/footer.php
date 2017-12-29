
    <!-- BEGIN VENDOR JS-->
    <script src="<?= base_url() ?>assets/app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>assets/datatables/dataTables.bootstrap4.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->

    <?php if(isset($index)): ?>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>

    <?php endif; ?>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="<?= base_url() ?>assets/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <?php if(isset($index)): ?>
    
    <script src="<?= base_url() ?>assets/app-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    
    <?php endif; ?>
    <!-- END PAGE LEVEL JS-->
    
    <script src="<?= base_url() ?>assets/datatables/sb-admin-datatables.min.js"></script>
  </body>
</html>
