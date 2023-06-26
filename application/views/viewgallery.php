<?php
include("../admin_portal/header.php")
?>
<!-- Begin page -->
<div id="layout-wrapper"> <?php
include("../admin_portal/top-sidebar.php")
?>
 
 <div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Media Gallery</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Project Stages</a></li>
                            <li class="breadcrumb-item active">View Gallery</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row gallery-wrapper">
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo base_url();?>assets/images/con1.jpg" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo base_url();?>assets/images/con1.jpg" alt="" />
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project development" data-category="development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo base_url();?>assets/images/con1.jpg" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo base_url();?>assets/images/con1.jpg" alt="" />
                                                   
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project development" data-category="development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo base_url();?>assets/images/con1.jpg" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo base_url();?>assets/images/con1.jpg" alt="" />
                                                   
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project development" data-category="development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo base_url();?>assets/images/con1.jpg" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo base_url();?>assets/images/con1.jpg" alt="" />
                                                   
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project development" data-category="development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo base_url();?><?php echo base_url();?>assets/images/con1.jpg" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo base_url();?>assets/images/con1.jpg" alt="" />
                                                   
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project development" data-category="development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="<?php echo base_url();?>assets/images/con1.jpg" title="">
                                                    <img class="gallery-img img-fluid mx-auto" src="<?php echo base_url();?>assets/images/con1.jpg" alt="" />
                                                   
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- ene card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Velzon.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Themesbrand
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- end main content-->
<!-- END layout-wrapper -->
<!-- JAVASCRIPT -->
<script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/node-waves/waves.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins.js"></script>

    <!-- glightbox js -->
    <script src="<?php echo base_url();?>assets/libs/glightbox/js/glightbox.min.js"></script>

    <!-- isotope-layout -->
    <script src="<?php echo base_url();?>assets/libs/isotope-layout/isotope.pkgd.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/pages/gallery.init.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url();?>assets/js/app.js"></script>


<?php
  include("footer.php");
?>