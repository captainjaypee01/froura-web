
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
          <li class=" nav-item"><a href="<?= base_url('driver') ?>"><i class="icon-home3"></i><span class="menu-title">Dashboard</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2">1</span></a>
            
          </li>
          
          <li class=" nav-item"><a href="<?= base_url('driver/profile') ?>"><i class="icon-user4"></i><span class="menu-title">My Account</span></a>
            
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-calendar4"></i><span class="menu-title">Reservation</span></a>
            <ul class="menu-content">
              </li>
              <li><a href="<?= base_url()?>driver/reservation" class="menu-item">Check Passengers</a>
              </li>
            </ul>
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
