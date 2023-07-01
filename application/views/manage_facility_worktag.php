
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Master</h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Admin Panel</a>
                  </li>
                  <li class="breadcrumb-item active">Master</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- end page title -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Add Facilities and Work Tag</h4>
              </div>
              <!-- end card header -->
              <div class="card-body">
                <div class="live-preview">
                  <form id="frmFacility" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Category</label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <select class=" js-example-basic-multiple select2_single form-control" name="facility" tabindex="-1">
                              <option value="">Select Category</option>
                              <option value="1">Facility</option>
                              <option value="2">Work Tag</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group mt-3">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Enter Name</label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" class="form-control col-md-7 col-xs-12" name="fac_name" placeholder="Enter Name" required>
                          </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group mt-3">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-primary" type="button">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                  </form>
                  <!--end row-->
                </div>
              </div>
            </div>
          </div>
          <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
          <div class="col-xl-6">
            <div class="card">
              <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Facility Table</h4>
              </div>
              <!-- end card header -->
              <div class="card-body">
                <div class="live-preview">
                  <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Category</th>
                          <th scope="col">Facility Name</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">
                            <a href="#" class="fw-medium">1</a>
                          </th>
                          <td>Role</td>
                          <td>Admin</td>
                          <td>
                            <div class="hstack gap-3 flex-wrap">
                              <a href="javascript:void(0);" class="link-success fs-15">
                                <i class="ri-edit-2-line"></i>
                              </a>
                              <a href="javascript:void(0);" class="link-danger fs-15">
                                <i class="ri-delete-bin-line"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <a href="#" class="fw-medium">1</a>
                          </th>
                          <td>Role</td>
                          <td>Admin</td>
                          <td>
                            <div class="hstack gap-3 flex-wrap">
                              <a href="javascript:void(0);" class="link-success fs-15">
                                <i class="ri-edit-2-line"></i>
                              </a>
                              <a href="javascript:void(0);" class="link-danger fs-15">
                                <i class="ri-delete-bin-line"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <a href="#" class="fw-medium">1</a>
                          </th>
                          <td>Role</td>
                          <td>Admin</td>
                          <td>
                            <div class="hstack gap-3 flex-wrap">
                              <a href="javascript:void(0);" class="link-success fs-15">
                                <i class="ri-edit-2-line"></i>
                              </a>
                              <a href="javascript:void(0);" class="link-danger fs-15">
                                <i class="ri-delete-bin-line"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
          <!----------Start of Designation Table-------->
          <div class="col-xl-6">
            <div class="card">
              <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Work Tag Table</h4>
              </div>
              <!-- end card header -->
              <div class="card-body">
                <div class="live-preview">
                  <div class="table-responsive">
                    <table class="table table-striped table-nowrap align-middle mb-0">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Category</th>
                          <th scope="col">Work Tag Name</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">
                            <a href="#" class="fw-medium">1</a>
                          </th>
                          <td>Designation </td>
                          <td>Admin</td>
                          <td>
                            <div class="hstack gap-3 flex-wrap">
                              <a href="javascript:void(0);" class="link-success fs-15">
                                <i class="ri-edit-2-line"></i>
                              </a>
                              <a href="javascript:void(0);" class="link-danger fs-15">
                                <i class="ri-delete-bin-line"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <a href="#" class="fw-medium">1</a>
                          </th>
                          <td>Designation </td>
                          <td>Admin</td>
                          <td>
                            <div class="hstack gap-3 flex-wrap">
                              <a href="javascript:void(0);" class="link-success fs-15">
                                <i class="ri-edit-2-line"></i>
                              </a>
                              <a href="javascript:void(0);" class="link-danger fs-15">
                                <i class="ri-delete-bin-line"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <a href="#" class="fw-medium">1</a>
                          </th>
                          <td>Designation </td>
                          <td>Admin</td>
                          <td>
                            <div class="hstack gap-3 flex-wrap">
                              <a href="javascript:void(0);" class="link-success fs-15">
                                <i class="ri-edit-2-line"></i>
                              </a>
                              <a href="javascript:void(0);" class="link-danger fs-15">
                                <i class="ri-delete-bin-line"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->
          </div>
          <!----------End of Designation Table-------->
          <!-- end col -->
        </div>
        <!-- end row -->
        <!-- end row -->
      </div>
      <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6"> Design &amp; Develop By <a href="https://ukcdesigner.in/" target="_blank">UKConcept Designer</a>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/feather-icons/feather.min.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="<?php echo base_url();?>assets/libs/prismjs/prism.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/app.js"></script>

<script>
  
</script>
</body>
</html>
