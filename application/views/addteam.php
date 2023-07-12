
<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Add Team Member</h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Admin Panel</a>
                  </li>
                  <li class="breadcrumb-item active">Add Team </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- end page title -->
        <!-----Add Stages--------->
        <form id="frmTeam">
          <div class="row">
            <div class="col-xl-12">
              <div class="card">
                <div class="card-header align-items-center d-flex">
                  <h4 class="card-title mb-0 flex-grow-1">Add Team Member</h4>
                  <div class="flex-shrink-0">
                      <a href="<?php echo site_url('/clientmanager/teamlist')?>" class="btn btn-success btn-sm"><i class="ri-file-list-2-line align-bottom"></i>&nbsp; Team List</a>
                  </div>
                </div>
                <!-- end card header -->
                <div class="card-body">
                  <div class="live-preview">
                    <div class="row">
                        <div class="col-xxl-6 col-md-6 mt-3">
                          <label for="">User Name</label>
                          <input type="text" id="" name="user_name" class="form-control" value="<?= $editData->user_name ?? ''?>" placeholder="Enter User Name" required/>
                        </div>
                        <div class="col-xxl-6 col-md-6 mt-3">
                          <label for="">Mobile Number</label>
                          <input type="text" id=""  name="mobile" class="form-control" value="<?= $editData->mobile ?? ''?>" placeholder="Enter User Number" required>
                        </div>
                        
                        <div class="col-xxl-12 col-md-12 mt-3">
                          <label for="">Select User Designation</label>
                          <select id="" name="user_type" class=" js-example-basic-multiple select2_single form-control"  placeholder="Select User Designation" tabindex="-1" required>    
                            <option value="" >Select Role for User</option>
                            <?php
                               foreach($result as $data)
                              {
                             ?>
                            <option value="<?= $data->id ?>" <?php if($data->id==$editData->user_type)echo 'selected'; ?>><?= $data->user_type ?></option>
                          <?php } ?>
                          </select>
                        </div>   
                        
                    </div>
                    <center><div class="mt-3">
                      <input type="hidden" name="id" value="<?= $editData->id ?? ''?>"></input>
                    <button type="submit" class="btn btn-success btn-label"><i class="ri-check-double-line label-icon align-middle fs-16 me-2"></i> Submit</button>
                    </div></center>

                    <!-- end table responsive -->
                  </div>
                  
                </div>
                <!-- end card-body -->
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->
          </div>
        </form>
        <!-----End of Add Stages--------->    
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="assets/js/app.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<script type="text/javascript"> 
$(document).ready(function(){

  $('#frmTeam').validate({
      rules: {             
        
      },
      messages: {                
        
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
          var url = "<?php echo base_url();?>index.php/clientmanager/ajax_addteam";
          var frmdata = new FormData($('#frmTeam')[0]);
          //console.log(frmdata);
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
                    window.location.href = "<?php echo base_url();?>index.php/clientmanager/teamlist";
                  }
                  else if(spl_txt[1] == 2)
                  { 
                    alert("Successfully Updated...");
                    window.location.href = "<?php echo base_url();?>index.php/clientmanager/teamlist";
                    
                  }
                  else
                  { 
                    alert("Something went wrong...");                   
                  }   
              }
          });
      }
}); 




  

  $(document).on("change", ".switcher", function(e){
    
    var id = $(this).attr("id");
    var status = 0;

    if(e.target.checked)
    {
      status = 1;
    }
          
  $.ajax({

      url:'ajax_login_user.php',
        type: "POST",
        data: ({id: id, status: status, source: "users"}),
        dataType: 'json',
        success: function(data){
          
          if(data == parseInt(1))
          {
              /*Toast.fire({
                  icon: 'success',
                  title: 'Successfully Updated...'
              });
              if(status == 1)
              {
                $("#lbl_sw_"+id).html("Active");
                $("#lbl_sw_"+id).attr("title", "Checked");
              }
              else
              {
                $("#lbl_sw_"+id).html("Inactive");
                $("#lbl_sw_"+id).attr("title", "Unchecked");
              }*/
              //alert("Successfully deleted...");
          } 

        }

    }); 
    
});

$(".view").on("click", function(){    
    var id = $(this).attr("cid");   
    $.ajax({
      url:'ajax_cost_calc.php',
      type: "POST",
      data: ({id: id, type: "model_client"}),
      success: function(data){
        $(".modal-body").html(data);   
      }

    });

});

  $(".trash").on("click", function(){
    
      var id = $(this).attr("id");

      $.ajax({
        url:'ajax_cost_calc.php',
        type: "POST",
        data: ({id: id, type: "delete_list"}),
        success: function(data){

          var spl_txt = data.split("~~~");
          if(spl_txt[1] == 1)
          {
            $("#tr_"+id).remove();
            alert(spl_txt[2]);
          } 

        }

    }); 

  });

});

</script>