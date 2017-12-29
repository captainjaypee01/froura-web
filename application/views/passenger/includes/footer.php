

 <!-- Payment Modal-->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $this->session->userid ?>" >
                    <input type="hidden" name="type_id" id="type_id" value="" >
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" id="price" class="form-control" value="" readonly>
                    </div>
                    <div class="form-group">
                        <label>Payment</label>
                        <input type="text" name="payment" id="payment" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Change</label>
                        <input type="text" name="price_change" id="price_change" class="form-control" readonly>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" id="paybutton" disabled>Pay</a>
            </div>
                </form>
        </div>
    </div>
</div>
    

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
    <!--
    <script src="<?= base_url() ?>assets/datatables/jquery.dataTables.js"></script> 
    <script src="<?= base_url() ?>assets/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url() ?>assets/datatables/sb-admin-datatables.js"></script> 
    -->
    <?php if ( isset($payment) == TRUE ) {
        ?>

        <script>
            $(document).ready(function() {
                console.log ("wew");
                $('#payment').keyup(function(){
                    var ch = $('#payment').val() - $('#fare').val();
                    if(ch >= 0){
                        $('#change').val(ch);
                        $('#paybutton').prop('disabled',false);
                        //element.setAttribute('disabled', 'enabled');
                    }
                    else{
                        $('#change').val("Can't Be Done");
                        $('#paybutton').prop('disabled',true);
                        //element.setAttribute('disabled', 'disabled');
                    }
                });
            });
        </script>

        <?php
    }
    ?>

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
    <?php /*
    <script>
    
    $(document).ready(function() {
            /*
        $('#paymentModal').on('show.bs.modal', function(e) {
            console.log("ew");
            var userid = $(e.relatedTarget).data('price');
            var typeid = $(e.relatedTarget).data('prodid');
            $(e.currentTarget).find('#price').val(userid);
            $(e.currentTarget).find('#type_id').val(typeid);
        });

        var element = document.getElementById('paybutton');
    
        $('#payment').keyup(function(){
            var ch = $('#payment').val() - $('#price').val();
            if(ch >= 0){
                $('#price_change').val(ch);
                $('#paybutton').prop('disabled',false);
                //element.setAttribute('disabled', 'enabled');
            }
            else{
                $('#price_change').val("Can't Be Done");
                $('#paybutton').prop('disabled',true);
                //element.setAttribute('disabled', 'disabled');
            }
        });
        
    });
    </script>
    */
    ?>

  </body>
</html>
