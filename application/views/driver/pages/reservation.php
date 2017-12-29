
<div class="app-content content container-fluid">

    <div class="content-wrapper">

        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                <h2 class="content-header-title">Reservation</h2>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('passenger') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Reservation</a>
                        </li>
                        <li class="breadcrumb-item active"><a href="#">Current Reservation</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END CONTENT HEADER ROW -->
    
        <!-- BODY -->

        <!-- Responsive tables start -->
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Passenger's Request</h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block card-dashboard">
                            <p>This table shows your current <code class="highlighter-rouge">Reservation</code>. Also, it shows you the status of the reservations you made.</p>
                            <dl class="row">
                                <dt class="col-sm-3"><span class="tag tag-info">On Process</span></dt>
                                <dd class="col-sm-9 text-info">The system is currently looking for available drivers. Please Wait.</dd>
                                <dt class="col-sm-3"><span class="tag tag-danger">Not Paid</span></dt>
                                <dd class="col-sm-9 text-danger">You haven't make any payment.</dd>
                                <dt class="col-sm-3"><span class="tag tag-warning">On Trip</span></dt>
                                <dd class="col-sm-9 text-warning">You are currently on the trip. Enjoy!</dd>
                                <dt class="col-sm-3"><span class="tag bg bg-purple">On Trip Not Paid</span></dt>
                                <dd class="col-sm-9 purple">You are currently on the trip but Not yet Paid. Enjoy!</dd>
                                <dt class="col-sm-3"><span class="tag bg bg-blue-grey">There are No Current Reservation</span></dt>
                                <dd class="col-sm-9 blue-grey">No reservation yet!</dd>
                            </dl>
                         
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pick Up Location</th>
                                        <th>Drop Off Location</th>
                                        <th>Date</th>
                                        <th>Estimated Duration</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Pick Up Location</th>
                                        <th>Drop Off Location</th>
                                        <th>Date</th>
                                        <th>Estimated Duration</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php if(!$reservation){ ?> <tr> <td colspan="6" align="center"><span class="tag bg bg-blue-grey">There are No Current Reservation</span></td><?php } else { $ctr = 0; foreach($reservation as $c):?> 
                                    <tr>
                                        <?php if($c->status <= 3) { ?>
                                        <th scope="row"><?= ++$ctr; ?></th>
                                        <td><?= $c->start_destination ?></td>
                                        <td><?= $c->end_destination ?></td>
                                        <td><?php $date = date_create($c->reservation_date);echo date_format($date,"Y-M-d h:i A") ?></td>
                                        <td><?= $c->duration ?></td>
                                        <td><?= $c->price ?></td>
                                        <td>
                                            <?php 
                                                if( $c->status == 0 ) echo '<span class="tag tag-info">On Process</span>'; 
                                                else if ($c->status == 1) echo '<span class="tag tag-danger">Not Paid</span>';
                                                else if ($c->status == 2) echo '<span class="tag bg bg-purple">On Trip Not Paid</span>';
                                                else if ($c->status == 3) echo '<span class="tag tag-warning">On Trip</span>';
                                            ?>
                                        </td>
                                        <?php }  ?>
                                        <td> 
                                        <?php if ( $c->status == 0 ){ ?>  
                                                <a href="<?= base_url()?>driver/getpassenger/<?= $c->id?>" class="btn btn-info"> Get Passenger </a>
                                        <?php } else if ($c->status > 0 && $c->status < 4){  ?>
                                        
                                            <span class="tag tag-success">Already Have A Driver</span>
                                        <?php } ?>
                                        </td>
                                    </tr>
                                <?php endforeach;
                                    if($ctr == 0) { ?> <td colspan="6" align="center"><span class="tag bg bg-blue-grey">There are No Current Reservation</span></td> <?php }
                                    } ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- END BODY -->

    </div>
    <!-- END CONTENT WRAPPER -->
</div>
<!-- END CONTENT -->