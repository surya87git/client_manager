<div class="auth-page-wrapper pt-5">
    <!-- auth page bg -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
    </div>

    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                            <a href="index.html" class="d-inline-block auth-logo">
                                <img src="<?php echo base_url();?>assets/images/icons/LOGO.png" alt="" height="100">
                            </a>
                        </div>
                        <p class="mt-3 fs-15 fw-bold">Welcome Back</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary"></h5>
                                <p class="text-muted">Login to your existant account of Uk Concept</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form id="#frmLogin" class="needs-validation">

                                    <div class="mb-3">
                                        <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" id="user_email" name="user_email" class="form-control"  placeholder="Enter email address" required>
                                        <div class="invalid-feedback">
                                            Please enter email
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label" for="password-input">Password <span class="text-danger">*</span></label>
                                        <div class="position-relative auth-pass-inputgroup">
                                            <!--input type="password" id="user_pass" name="user_pass" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" required-->
                                            <input type="password" id="user_pass" name="user_pass" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" required>
                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            <div class="invalid-feedback">
                                                Please enter password
                                            </div>
                                        </div>
                                    </div>

                                    <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                        <h5 class="fs-13">Password must contain:</h5>
                                        <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                        <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                        <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                        <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                    </div>

                                    <div class="mt-4">
                                        <input type="hidden" name="type" value="login">
                                        <!--button class="btn btn-success" id="btnSubmit" type="submit">Sign In</button-->
                                        <input type="submit" id="btn_submit" class="btn btn-success" name="submit" value="Sign In"/>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

</div>
    <!-- end auth-page-wrapper -->

<!-- JAVASCRIPT -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/feather-icons/feather.min.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<!--script src="assets/js/plugins.js"></script-->

<!-- prismjs plugin -->
<script src="<?php echo base_url();?>assets/libs/prismjs/prism.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/form-input-spin.init.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url();?>assets/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url();?>assets/toastr/toastr.min.js"></script>

<script>

$(function () {

        // var Toast = Swal.mixin({
        //     toast: true,
        //     position: 'top',
        //     showConfirmButton: false,
        //     timer: 3000
        // });
       $('form').on('submit', function(e){

          e.preventDefault();
          
          var req_url = "<?php echo site_url('booking/ajax_login_user')?>";
          $.ajax({
            type: 'post',
            url: req_url,
            data: $('form').serialize(),
            success: function(data) {

              console.log(data);
              var spl_txt = data.split("~~~");

            if(spl_txt[1] == 1)
               {
                    // Toast.fire({
                    //     icon: 'success',
                    //     title: 'Successfully logged in...'
                    // });
                    alert("Successfully logged in...");
                    setTimeout(() => {                                               
                      window.location.href = "<?php echo site_url('booking/')?>";
                    }, 200);

                }
            else
               {
                    alert("Invalid user id or password...");
                    // Toast.fire({
                    //     icon: 'info',
                    //     title: 'Invalid user id or password...'
                    // });  
               }
              
            }

        });

    });

});
   

</script>

</body>
</html>