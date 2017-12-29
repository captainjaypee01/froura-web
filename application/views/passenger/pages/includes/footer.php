











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
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="<?= base_url() ?>assets/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->

    <script src="<?= base_url() ?>assets/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>assets/datatables/dataTables.bootstrap4.js"></script>

    
    <script src="<?= base_url() ?>assets/datatables/sb-admin-datatables.min.js"></script>
    <script>


    $(document).ready(function(){
        function hide_notify()
        {
            setTimeout(function() {
                $('#errorDiv').removeClass('alert alert-danger').text('');
                $('#successDiv').removeClass('alert alert-success').text('');
                $('#warningDiv').removeClass('alert alert-warning').text('');
            }, 3000);
        }
        hide_notify();
        /*
        $('#errorDiv').hide();

        setTimeout(function() {
            $('#errorDiv').fadeOut('fast');
        }, 1000); 
    */
    });

    </script>

  </body>
</html>