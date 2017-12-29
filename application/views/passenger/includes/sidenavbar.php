
    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- main menu header-->
    <div class="main-menu-header">
      <input type="text" placeholder="Search" class="menu-search form-control round"/>
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
      <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
        <li class=" nav-item"><a href="<?= base_url('passenger') ?>"><i class="icon-home3"></i><span class="menu-title">Dashboard</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2">1</span></a>
          
        </li>
        
        <li class=" nav-item"><a href="<?= base_url('passenger/profile') ?>"><i class="icon-user4"></i><span class="menu-title">My Account</span></a>
          
        </li>
        <li class=" nav-item"><a href=""><i class="icon-group"></i><span class="menu-title">Contact List</span></a>
          
        </li>
        <li class=" nav-item"><a href="#"><i class="icon-ios-book"></i><span  class="menu-title">Booking</span></a>
          <ul class="menu-content">
            <li><a href="#" class="menu-item">Recent Bookings</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="icon-calendar4"></i><span class="menu-title">Reservation</span></a>
          <ul class="menu-content">
            <li><a href="<?= base_url()?>passenger/reservation" class="menu-item">Reserve Schedules</a>
            </li>
            <li><a href="<?= base_url()?>passenger/reservation/current" class="menu-item">Check My Reservation</a>
            </li>
            <li><a href="<?= base_url()?>passenger/reservation/recent" class="menu-item">Recent Reservations</a>
            </li>

          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="icon-bullhorn"></i><span dclass="menu-title">Announcements</span></a>
          <!-- ANNOUNCEMENTS -->
        </li>
        <li class=" nav-item"><a href="#"><i class="icon-comment"></i><span class="menu-title">Feedback</span></a>
          <!-- FEEDBACK -->
        </li>
        <li class=" nav-item"><a href="#"><i class="icon-exchange"></i><span class="menu-title">Transactions</span></a>
          <!-- TRANSACTIONS -->
        </li>
        <li class=" nav-item"><a href="#"><i class="icon-history2"></i><span class="menu-title">Recent Activities</span></a>
          <!-- HISTORY -->
        </li>
        <li class=" navigation-header" style="left:0px;bottom:0px;">
          <span ></span><i data-toggle="tooltip" data-placement="right" data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i><hr color="white">
        </li>
        <li class=" nav-item"><a href="<?= base_url('execute/logout')?>"><i class="icon-sign-out"></i><span class="menu-title">LOGOUT</span></a>
        </li>
        
      </ul>
    </div>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
  </div>
  <!-- / main menu-->
