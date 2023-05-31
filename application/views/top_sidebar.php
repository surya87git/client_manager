<header id="page-topbar">
<div class="layout-width">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box horizontal-logo">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo base_url();?>assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo base_url();?>assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?php echo base_url();?>assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo base_url();?>assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
            </div>


        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                <span class="hamburger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
        </div>

        <div class="d-flex align-items-center">

            <div class="dropdown d-md-none topbar-head-dropdown header-item">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                    id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-search fs-22"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">
                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="ms-1 header-item d-none d-sm-flex">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                    data-toggle="fullscreen">
                    <i class='bx bx-fullscreen fs-22'></i>
                </button>
            </div>

            <div class="ms-1 header-item d-none d-sm-flex">
                <button type="button"
                    class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                    <i class='bx bx-moon fs-22'></i>
                </button>
            </div>
            
            <!--------Bell Icon---------->


            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell fs-22"></i>
                    <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
                </button>
                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart" aria-labelledby="page-header-cart-dropdown" style="">
                    <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                        <div class="row align-items-center">
                            <div class="col">
                            <h6 class="m-0 fs-16 fw-semibold"> Messages</h6>
                            </div>
                            <div class="col-auto">
                            <span class="badge badge-soft-danger fs-13">
                                <span class="cartitem-badge">10</span> Unread Messages</span>
                            </div>
                        </div>
                    </div>
                        <div class="p-2">
                            <div class="text-center empty-cart" id="empty-cart" style="display: none;">
                                <div class="avatar-md mx-auto my-3">
                                    <div class="avatar-title bg-soft-info text-info fs-36 rounded-circle">
                                        <i class="bx bx-message-detail"></i>
                                    </div>
                                </div>
                                <h5 class="mb-3">No Messages Found</h5>
                            </div>
                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1 fs-14">
                                            <a href="javascript:void(0);" class="text-reset">Chetan Sahu</a>
                                        </h6>
                                        <p class="mb-0 fs-12 text-muted">
                                            
                                        </p>
                                    </div>
                                    <div class="px-2">
                                        <span class="text-success">Link Request</span>
                                    </div>
                                    <div class="ps-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1 fs-14">
                                            <a href="javascript:void(0);" class="text-reset">Ruchika Sable</a>
                                        </h6>
                                        <p class="mb-0 fs-12 text-muted">
                                            
                                        </p>
                                    </div>
                                    <div class="px-2">
                                        <span class="text-danger">Link Expired</span>
                                    </div>
                                    <div class="ps-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1 fs-14">
                                            <a href="javascript:void(0);" class="text-reset">Ajay Jain</a>
                                        </h6>
                                        <p class="mb-0 fs-12 text-muted">
                                            
                                        </p>
                                    </div>
                                    <div class="px-2">
                                        <span class="text-success">Recently Booking Done</span>
                                    </div>
                                    <div class="ps-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

            <!------End of Bell Icon--------->  

            

            <div class="dropdown ms-sm-3 header-item topbar-user">
                <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="d-flex align-items-center">
                    <img class="rounded-circle header-profile-user" src="<?php echo base_url();?>pdf2/logo.png"
                        alt="Header Avatar">
                    <span class="text-start ms-xl-2">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Mohit Solanki</span>
                        <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">admin@gmail.com</span>
                    </span>
                </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <h6 class="dropdown-header">Welcome Anna!</h6>
                    <a class="dropdown-item" href="pages-profile.html"><i
                            class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                            class="align-middle">Profile</span></a>
                    <a class="dropdown-item" href="apps-chat.html"><i
                            class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span
                            class="align-middle">Messages</span></a>
                    <a class="dropdown-item" href="apps-tasks-kanban.html"><i
                            class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span
                            class="align-middle">Taskboard</span></a>
                    <a class="dropdown-item" href="pages-faqs.html"><i
                            class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span
                            class="align-middle">Help</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <br>
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <h3 style="color: white;height: 22px;text-decoration: underline;">UKC</h3> 
                </span>
                <span class="logo-lg">
                    <h3 style="color: white;height: 17px;text-decoration: underline;">UK Concept Designer</h3> 
                </span>
            </a>
            <!-- Light Logo-->
            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <h3 style="color: white;height: 22px;text-decoration: underline;">UKC</h3> 
                </span>
                <span class="logo-lg">
                    <h3 style="color: white;height: 17px;text-decoration: underline;">UK Concept Designer</h3> 
                </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>
        <br>
        <div id="scrollbar">
            <div class="container-fluid">
                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Dashboard</span></li>
                    <li class="nav-item">
                      <a class="nav-link menu-link" href="dashboard.html" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-home-2-line"></i> <span data-key="t-dashboards">Home</span>
                      </a>
                    </li> <!-- end Dashboard Menu -->
                    <!--li class="nav-item active">
                        <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <i class="ri-calculator-line"></i> <span data-key="t-apps">Cost Calculator</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarApps">
                           <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                  <a href="index.php" class="nav-link" data-key="t-calendar">Calculate</a>
                                </li>
                                <li class="nav-item">
                                  <a href="cost_calculation_list.php" class="nav-link" data-key="t-chat">List</a>
                                </li>

                                <li class="nav-item">
                                    <a href="ac.html" class="nav-link" data-key="t-calendar"> Automatic Calculator </a>
                                </li>
                                <li class="nav-item">
                                    <a href="apps-chat.html" class="nav-link" data-key="t-chat"> Manual Calculator </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li-->

                    <!--li class="nav-item active">
                        <a class="nav-link menu-link" href="#sidebarApps2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps2">
                          <i class="ri-calculator-line"></i><span data-key="t-apps">Payment Plans</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarApps2">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                  <a href="payment_plan.php" class="nav-link" data-key="t-calendar">Add Payment Plan</a>
                                </li>
                                <li class="nav-item">
                                  <a href="payment_plan_list.php" class="nav-link" data-key="t-chat">Payment Plan List</a>
                                </li>
                            </ul>
                        </div>
                    </li-->
                    <li class="nav-item active">
                        <a class="nav-link menu-link" href="#anubadh" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps2">
                          <i class="ri-calculator-line"></i><span data-key="t-apps">Anubandh</span>
                        </a>
                        <div class="collapse menu-dropdown" id="anubadh">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                  <a href="<?php echo site_url('anubandh/anubandh_column')?>" class="nav-link" data-key="t-calendar">Add Column</a>
                                </li>
                                <li class="nav-item">
                                  <a href="<?php echo site_url('anubandh/anubandh_column_list')?>" class="nav-link" data-key="t-chat">Column List</a>
                                </li>
                                <li class="nav-item">
                                  <a href="<?php echo site_url('anubandh/add_anubandh')?>" class="nav-link" data-key="t-calendar">Add Anubandh</a>
                                </li>
                                <li class="nav-item">
                                  <a href="<?php echo site_url('anubandh/anubadh_agreement_list')?>" class="nav-link" data-key="t-chat">Agreement List</a>
                                </li>
                                <li class="nav-item">
                                  <a href="<?php echo site_url('anubandh/anubandh_details')?>" class="nav-link" data-key="t-calendar">Anubandh Details</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link menu-link" href="#booking" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps2">
                          <i class="ri-calculator-line"></i><span data-key="t-apps">Booking</span>
                        </a>
                        <div class="collapse menu-dropdown" id="booking">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                  <a href="<?php echo base_url('index.php/booking/')?>" class="nav-link" data-key="t-calendar">Add Booking Form</a>
                                </li>
                                <li class="nav-item">
                                  <a href="<?php echo base_url('index.php/booking/booking_list')?>" class="nav-link" data-key="t-calendar">Booking List</a>
                                </li>
                                <li class="nav-item">
                                  <a href="<?php echo base_url('index.php/booking/manage_commitment/')?>" class="nav-link" data-key="t-calendar">Manage Commitment</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--li class="nav-item">
                        <a class="nav-link" href="loginuser.php">
                           <i class="ri-profile-line"></i> <span>User Logs</span>
                        </a>        
                    </li-->
                    <li class="nav-item">
                        <a href="<?php echo base_url('index.php/booking/logout/')?>" class="nav-link" href="logout.php">
                           <i class="ri-logout-box-line"></i> <span>Sign Out</span>
                        </a>        
                    </li>
                    
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>