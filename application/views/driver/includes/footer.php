
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
    <script>
      var app_url = "<?= base_url()?>";
      function readURL(input) {

        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
        }
      }

      $("#imgInp").change(function() {
        readURL(this);
      });

    </script>
  </body>
</html>
