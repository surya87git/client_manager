<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">
              <span class="badge badge-soft-danger" style="font-size:1rem;">Site: Rakesh Bisen</span>
            </h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                  <a href="javascript: void(0);">Site Master</a>
                </li>
                <li class="breadcrumb-item active">Footing Excavation</li>
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
              <h4 class="card-title mb-0 flex-grow-1" style="text-decoration: underline;">Footing Excavation</h4>
            </div>
            <!-- end card header -->
            <div class="card-body">
              <div class="col-xl-12">
                <div>
                  <span class="badge badge-soft-danger" style="font-size:0.75rem;">Current Rate: Rs. 9 per cft</span> &nbsp; <a href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#flipModal">
                    <i class="ri-edit-2-line"></i>
                  </a>
                </div>
                <div class="table-responsive">
                  <table class="table" id="tbl_list">
                    <tr>
                      <th>Floor Name</th>
                      <th>Number Of Footing</th>
                      <th>Length</th>
                      <th>Width</th>
                      <th>Action</th>
                    </tr>
                    <tbody>
                      <tr>
                        <td>
                          <input type="text" class="form-control" value="F1">
                        </td>
                        <td>
                          <input type="number" id="" name="" class="form-control">
                        </td>
                        <td>
                          <input type="number" id="" name="" class="form-control">
                        </td>
                        <td>
                          <input type="number" id="" name="" class="form-control">
                        </td>
                        <td>
                          <img src="<?php echo base_url();?>assets/images/plus.png" alt="" height="15px" width="15px">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" class="form-control" value="F2">
                        </td>
                        <td>
                          <input type="number" id="" name="" class="form-control">
                        </td>
                        <td>
                          <input type="number" id="" name="" class="form-control">
                        </td>
                        <td>
                          <input type="number" id="" name="" class="form-control">
                        </td>
                        <td>
                          <img src="<?php echo base_url();?>assets/images/close.png" alt="" height="15px" width="15px">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" class="form-control" value="F3">
                        </td>
                        <td>
                          <input type="number" id="" name="" class="form-control">
                        </td>
                        <td>
                          <input type="number" id="" name="" class="form-control">
                        </td>
                        <td>
                          <input type="number" id="" name="" class="form-control">
                        </td>
                        <td>
                          <img src="<?php echo base_url();?>assets/images/close.png" alt="" height="15px" width="15px">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" class="form-control" value="F4">
                        </td>
                        <td>
                          <input type="number" id="" name="" class="form-control">
                        </td>
                        <td>
                          <input type="number" id="" name="" class="form-control">
                        </td>
                        <td>
                          <input type="number" id="" name="" class="form-control">
                        </td>
                        <td>
                          <img src="<?php echo base_url();?>assets/images/close.png" alt="" height="15px" width="15px">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" class="form-control" value="F5">
                        </td>
                        <td>
                          <input type="number" id="" name="" class="form-control">
                        </td>
                        <td>
                          <input type="number" id="" name="" class="form-control">
                        </td>
                        <td>
                          <input type="number" id="" name="" class="form-control">
                        </td>
                        <td>
                          <img src="<?php echo base_url();?>assets/images/close.png" alt="" height="15px" width="15px">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <br>
              <center>
                <a href="<?php echo base_url();?>index.php/booking/full_footing_excavation" type="button" class="btn btn-primary bg-gradient waves-effect waves-light">Calculate </a>
              </center>
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- container-fluid -->
      <!-- Modal flip -->
      <div id="flipModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title" id="flipModalLabel"> Footing Excavation Current Rate</h6>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr>
            <div class="modal-body">
              <p class="text-danger" style="text-decoration: underline;">Want to change the rate of:</p>
              <!-- Basic Input -->
              <label for="">Cement</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"> Rs </span>
                </div>
                <input type="number" id="" name="" class="form-control" value="">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary ">Save Changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
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
<!-- JAVASCRIPT -->
<script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/feather-icons/feather.min.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins.js"></script>
<!-- prismjs plugin -->
<script src="<?php echo base_url();?>assets/libs/prismjs/prism.js"></script>
<!-- Lord Icon -->
<script src="../../../../cdn.lordicon.com/mssddfmo.js"></script>
<!-- Modal Js -->
<script src=<?php echo base_url();?>assets/js/pages/modal.init.js"></script>
<!-- App js -->
<script src="<?php echo base_url();?>assets/js/app.js"></script>
<!-- App js -->
<script src="<?php echo base_url();?>assets/js/app.js"></script>
<script>
  // In your Javascript (external .js resource or 
  < script > tag)
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
  });
</script>
</body>
<!-- Mirrored from themesbrand.com/velzon/html/default/ui-cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Jul 2022 12:36:43 GMT -->
</html>