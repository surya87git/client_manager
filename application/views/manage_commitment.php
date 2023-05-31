<?php 
   $cid = $this->uri->segment(3) ?? "";
?>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                               <h4 class="mb-sm-0">Commitment</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Commitment</li>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Add Commitment</h4>                  
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <form id="frmCommit">
                                        <div class="live-preview">
                                            <div class="row">
                                                <div class="col-xxl-6 col-md-12">
                                                    <label for="basiInput" class="form-label">Write Commitments here.</label>
                                                    <textarea class="form-control" id="commitment" name="commitment" value=""></textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-xxl-6 col-md-12">
                                                   <input type="hidden" id="cid" name="cid">
                                                   <button type="submit" style="float:right;" class="btn btn-secondary waves-effect waves-light">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>                                       
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                    <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Commitment List</h4>                                   
                                </div><!-- end card header -->
                                <div class="card-body">   
                                    <div class="live-preview">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-nowrap align-middle mb-0">
                                                <thead>
                                                    <tr>
                                                       <th scope="col">#</th>
                                                       <th scope="col">Commitment</th>                         
                                                       <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                if($commitment_list){
                                                  $cnt = 0;
                                                  foreach($commitment_list as $row){
                                                    $cnt++;
                                                    $create_date = date("d-m-Y", strtotime($row->create_date));
                                                ?>
                                                    <tr id="tr_<?php echo $row->id;?>">
                                                        <td class="td_list fw-medium"><?php echo $cnt;?></td>
                                                        <td>
                                                           <?php echo $row->commitment;?>
                                                           <input type="hidden" id="hdn_cid_<?php echo $row->id;?>" name="hdn_commitment" value="<?php echo $row->commitment;?>">
                                                        </td>                     
                                                        <td>
                                                           <div class="hstack gap-3 flex-wrap">
                                                              <a href="javascript:void(0);" id="<?php echo $row->id;?>" value="<?php echo $row->id;?>" class="edit link-success fs-15"><i class="ri-edit-2-line"></i></a>
                                                              <a href="javascript:void(0);" uid="<?php echo $row->id;?>" class="trash link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                                                           </div>
                                                        </td>
                                                    </tr>
                                                <?php } }?>  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>                                 
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container-fluid -->
            </div><!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            Design &amp; Develop By <a href="https://ukcdesigner.in/" target="_blank">UKConcept Designer</a>
                        </div>
                        <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Copyright 2023 © All Right Reserved. 
                        </div>
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
    <!-- prismjs plugin -->
    <script src="<?php echo base_url();?>assets/libs/prismjs/prism.js"></script>
    <script src="<?php echo base_url();?>assets/js/app.js"></script>
    
<script>
   $(document).ready(function(){

    
    $(document).on("click",".edit", function(){
        var cid = $(this).attr('id');
        $("#cid").val(cid);
        $("#commitment").val($("#hdn_cid_"+cid).val());    
        $("#commitment").focus(); 
    });

$(document).on("click", ".trash", function(e){

    var id = $(this).attr("uid");

    if(confirm('Are you sure you want to delete from the list...?')) {

      $.ajax({
        url:'<?php echo site_url('booking/ajax_trash')?>',
            type: "POST",
            data: ({id: id, source: "bkf_commitment_list"}),
            dataType: 'json',
            success: function(data){
            //console.log(data);         
                if(data == parseInt(1))
                {
                    
                  $('#tr_'+id).remove();
                  var cnt = 0;
                  $(".td_list").each(function(){
                    cnt++;
                    $(this).html(cnt);
                  });
                    Toast.fire({
                    icon: 'success',
                    title: 'Successfully Deleted...'
                  });

                } 
            }
        }); 

    }  

});          



    $('#frmCommit').validate({
            rules: {  
                commitment:{
                    required: true
                },   
            },
            messages: { 
                commitment:{
                  required: 'Enter client Name'
              },     
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
                var url = "<?php echo site_url('booking/ajax_commitment')?>";
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
                    
                        var spl_txt = data.split("~~~");
                        if(spl_txt[1] == 1)
                        { 
                            alert("Successfully Saved...");
                            location.reload();
                        }
                        else if(spl_txt[1] == 2)
                        { 
                            alert("Successfully Updated...");
                            location.reload();
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