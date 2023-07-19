
<div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Facilities</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin Panel</a></li>
                                        <li class="breadcrumb-item active">Manage Facilities</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1 text-primary" style="text-decoration:underline;">Manage Facilities</h4>  
                                    <a href="<?php echo base_url("index.php/clientmanager/project_list/".$booking_id)?>" class="btn btn-primary btn-sm btn-label waves-effect waves-light"><i class=" ri-file-list-fill label-icon align-middle fs-16 me-2"></i>Project List</a>&nbsp;&nbsp;                             
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4"> 
                                        <form id="frmCommit">
                                            <div class="row mt-3">                         
                                            <?php 
                                            if($facility_list)
                                            {
                                                $fa_arr = explode(',', $my_facility);
                                                
                                                foreach($facility_list as $row)
                                                {  
                                                    if(in_array($row->id, $fa_arr)){
                                                        $checked =  'checked';
                                                    }
                                                    else{
                                                        $checked = '';
                                                    }

                                                ?>
                                                <div class="col-md-12 mt-3">
                                                    <div>
                                                        <div class="icheck-success d-inline">
                                                            <input type="checkbox" name="chk_facility[]" <?php echo $checked;?> value="<?php echo $row->id;?>" id="chk_<?php echo $row->id;?>" >
                                                            <label for="chk_<?php echo $row->id;?>" title="">
                                                             <?php echo $row->name;?>
                                                            </label>
                                                        </div>
                                                    </div> 
                                                </div>
                                              <?php } 

                                            }?>                                           
                                            </div>                                      
                                        </div>
                                        <!--end row-->
                                        <!-- Start of row--->
                                        
                                        <!-- End of row--->
                                        <!-- star of row----->
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                               <input type="hidden" id="booking_id" name="booking_id" value="<?php echo $booking_id; ?>">
                                               <button type="submit" class="btn btn-primary bg-gradient waves-effect waves-light">Submit</button>
                                            </div>
                                        </div><!-- End of row--->
                                    </form>
                                  </div>                                   
                               </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                    
                </div> <!-- container-fluid -->
            </div><!-- End Page-content -->

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
    <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/prismjs/prism.js"></script>
    <script src="<?php echo base_url();?>assets/js/app.js"></script>

<script>

$(document).ready(function(){
    
$('#frmCommit').validate({
        rules: {                  
          est_cost:{
            required: true
          }  
        },
        messages: {                
          est_cost:{
            required: 'Estimate Cost'
          }
        },
        errorElement: 'span',
            errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: function(form) {      
            var url = "<?php echo site_url('clientmanager/ajax_add_facility')?>";
            var frmdata = new FormData($('#frmCommit')[0]);
            console.log(frmdata);
            $.ajax({            
                type: "POST",
                url: url,
                data: frmdata,
                processData: false,
                contentType: false,  
                success: function(data)
                {                 
                    //console.log(data);
                    var spl_txt = data.split("~~~");
                    if(spl_txt[1] == 1)
                    { 
                       alert("Successfully Saved...");                        
                       window.location.href = "<?php echo base_url()."index.php/clientmanager/project_list/".$booking_id; ?>";
                    }
                    else if(spl_txt[1] == 2)
                    { 
                       alert("Successfully Updated...");
                       window.location.href = "<?php echo base_url()."index.php/clientmanager/project_list/".$booking_id; ?>";                        
                    }
                    else
                    { 
                       alert("Something went wrong...");                   
                    }   
                }
            });
        }
    });
        
});

</script>

</body>
</html>