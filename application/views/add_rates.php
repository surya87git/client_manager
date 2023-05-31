
<style>
  .pagination {
    display: inline-block;
  }

  .pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
  }

  .pagination a.active {
    background-color: #4CAF50;
    color: white;
    border-radius: 5px;
  }

  .pagination a:hover:not(.active) {
    background-color: #ddd;
    border-radius: 5px;
  }
</style>
<!-- Begin page -->

<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Manage Rates</h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Master Entry</a>
                  </li>
                  <li class="breadcrumb-item active">Rates</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- end page title -->
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Rates</h4>
              </div>
              <!-- end card header -->
              <div class="card-body">
                <div>
                  <label for="basiInput" class="form-label">Select the Rates for</label>
                  <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>Select the Rates for</option>
                    <option value="civil_materials">Civil Materials</option>
                    <option value="steels">Steels</option>
                    <option value="bricks">Bricks</option>
                    <option value="other">Others</option>
                    <option value="painting">Painting</option>
                    <option value="flooring">Flooring</option>
                    <option value="door_window_grill">Door Window Grill</option>
                  </select>
                </div>
                <div class="table-responsive table-card">
                  <table class="table table-borderless  table-nowrap align-middle mb-0">
                    <tr>
                      <th>Material Name</th>
                      <th>Rate</th>
                      <th>Action</th>
                    </tr>
                    <tbody>
                      <tr>
                        <td>
                          <input type="text" id="" name="" class="form-control" value="Cement">
                        </td>
                        <td>
                          <input type="text" id="" name="" class="form-control" value="Rs. 320">
                        </td>
                        <td>
                          <img src="<?php echo base_url();?>assets/images/img_icon/plus.png" alt="" height="15px" width="15px">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" id="" name="" class="form-control" value="Sand">
                        </td>
                        <td>
                          <input type="text" id="" name="" class="form-control" value="Rs. 14">
                        </td>
                        <td>
                          <img src="<?php echo base_url();?>assets/images/img_icon/close.png" alt="" height="15px" width="15px">
                        </td>
                      </tr>
                    </tbody>
                    <!-- end tbody -->
                  </table>
                  <!-- end table -->
                </div>
                <!-- end table responsive -->
                <!-- Gradient Buttons -->
                <br>
                <a href="" type="button" class="btn btn-primary bg-gradient waves-effect waves-light" style="float:center;">Submit</a>
              </div>
              <!-- end card body -->
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
          <div class="col-sm-6"> Design & Develop By <a href="https://ukcdesigner.in/" target="_blank">UKConcept Designer</a>
          </div>
          <div class="col-sm-6">
            <div class="text-sm-end d-none d-sm-block"> Copyright 2023 © All Right Reserved. </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- end main content-->
</div>
<!-- END layout-wrapper -->
<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
  <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->
<!-- JAVASCRIPT -->
<script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/feather-icons/feather.min.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins.js"></script>
<!-- prismjs plugin -->
<script src="<?php echo base_url();?>assets/libs/prismjs/prism.js"></script>
<!-- Masonry plugin -->
<script src="<?php echo base_url();?>assets/libs/masonry-layout/masonry.pkgd.min.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/card.init.js"></script>
<!-- App js -->
<script src="<?php echo base_url();?>assets/js/app.js"></script>
</body>
<!-- Mirrored from themesbrand.com/velzon/html/default/ui-cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Jul 2022 12:36:43 GMT -->
</html>