
<!-- Begin page -->
<div id="layout-wrapper"> 

    <!-----Start of Main Content--------> 
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->

                    <!----Start of Breadcrum---->
                    <div class="row">
                        <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Dashboard</h4>
                            <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                <a href="javascript: void(0);">Cost Calculator</a>
                                </li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!----End  of Breadcrum---->

                <!-- end page title -->

                    <!--------Start of the Main Row--------->
                    <div class="row">   
                        <!--------Start of Book Now and make anubadh-------->   
                        <div class="col-md-6">
                            <div class="card overflow-hidden card-animate">
                                <div class="card-body bg-marketplace d-flex">
                                    <div class="flex-grow-1">
                                    <h4 class="fs-18 lh-base mb-0">Lets make there dream house comes <span class="text-success"> true.</span>
                                    </h4>
                                    <p class="mb-0 mt-2 pt-1 text-muted">The best construction company to make your dream house</p>
                                    <div class="d-flex gap-3 mt-4">
                                        <a href="booking_form.php" class="btn btn-primary">Book Now </a>
                                        <a href="anubandh_details.php" class="btn btn-success">Make an Anubandh</a>
                                    </div>
                                    </div>
                                    <img src="<?php echo base_url();?>assets/images/bg.png" alt="" class="img-fluid" />
                                </div>
                            </div>
                        </div><!--end col-->
                        <!--------End of Book Now and make anubadh-------->

                        <!-------Start of Total Booking-------->
                        <div class="col-md-3">
                            <div class="card card-height-100 card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-info rounded fs-3">
                                            <i class="bx bx-book-open text-info"></i>
                                        </span>
                                        </div>
                                        <div class="flex-grow-1 ps-3">
                                        <h5 class="text-muted text-uppercase fs-13 mb-0">Total Booking</h5>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-1">
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-primary"><span class="counter-value" data-target="125">0</span> / <span class="counter-value" data-target="56"></span>L</h4>
                                        <p class="mt-4 mb-0 text-muted">
                                        <span class="badge bg-soft-success text-success mb-0 me-1">30 New Booking Done </span> in previous month
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <!-------End of Total Booking-------->

                        <!----Start of Total Anubadh--------->
                        <div class="col-md-3">
                            <div class="card card-height-100 card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-info rounded fs-3">
                                            <i class="bx bx-book-bookmark text-info"></i>
                                        </span>
                                        </div>
                                        <div class="flex-grow-1 ps-3">
                                        <h5 class="text-muted text-uppercase fs-13 mb-0">Total Anubadh</h5>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-1">
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-primary"><span class="counter-value" data-target="25">0</span> / <span class="counter-value" data-target="125"></span> Cr.</h4>
                                        <p class="mt-4 mb-0 text-muted">
                                        <span class="badge bg-soft-success text-success mb-0">10 Anubadh Done </span> in previous month
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----End of Total Anubadh--------->

                        <!-------Start of the Total Calculation----->
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Calculation</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-primary"><span class="counter-value" data-target="125">0</span></h4>
                                            <a href="cost_calculation_list.php" class="text-decoration-underline">View Calculation List</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info rounded fs-3">
                                                <i class="bx bx-calculator text-info"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <!----------End of Total Calculation--------->

                        <!-----------Total Employee---------->
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Employee</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-primary"><span class="counter-value" data-target="100"></span></h4>
                                                <a href="javascript:void(0)" class="text-decoration-underline">View Employee List</a>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-info rounded fs-3">
                                                    <i class="bx bxs-user-detail text-info"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        <!-----------End of Total Employee---------->

                        <!--------Channel Partner-------->
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Channel Partner</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h5 class="text-success fs-14 mb-0">
                                                    <i class="ri-arrow-right-up-line fs-13 align-middle"></i> 20 Active
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-primary"><span class="counter-value" data-target="50"></span></h4>
                                                <a href="javascript:void(0)" class="text-decoration-underline">Channel Partner List</a>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-info rounded fs-3">
                                                    <i class="bx bx-group text-info"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        <!-----End of Channel Partner-------->

                        <!--------Extra-------->
                        <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Channel Partner</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h5 class="text-success fs-14 mb-0">
                                                    <i class="ri-arrow-right-up-line fs-13 align-middle"></i> 20 Active
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-primary"><span class="counter-value" data-target="50"></span></h4>
                                                <a href="javascript:void(0)" class="text-decoration-underline">Channel Partner List</a>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-info rounded fs-3">
                                                    <i class="bx bx-group text-info"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        <!-----End of Extra-------->
                    </div>
                    <!--------End of the Main Row--------->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!--------Footer-------->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                <div class="col-sm-6">
                    <script>
                    document.write(new Date().getFullYear())
                    </script> UKC
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block"> Design & Develop by UKC </div>
                </div>
                </div>
            </div>
        </footer>                                                               
        <!--------End of Footer-------->
    </div>
    <!-----End of Main Content-------->
</div>
<!-- END layout-wrapper -->


<!-- JAVASCRIPT -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/feather-icons/feather.min.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>

<!--script src="assets/js/plugins.js"></script-->
<!-- prismjs plugin -->
<script src="<?php echo base_url();?>assets/libs/prismjs/prism.js"></script>

<script src="<?php echo base_url();?>https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>


<script src="<?php echo base_url();?>https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/app.js"></script>


<?php
  include("footer.php");
?>