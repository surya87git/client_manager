
<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Manage Team &nbsp;&nbsp;&nbsp;<span class="badge badge-soft-primary">Ajay Jain</span></h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Admin Panel</a>
                  </li>
                  <li class="breadcrumb-item active">Manage Team </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- end page title -->
        <!-----Add Stages--------->
        <div class="row">
          <div class="col-xl-6">
              <div class="card">
                  <div class="card-header align-items-center d-flex">
                      <h4 class="card-title mb-0 flex-grow-1">Employee List</h4>
                  </div><!-- end card header -->
                  <div class="card-body">
                      <div class="table-responsive table-card">
                      <table id="example" class="table table-striped table-bordered" style="width:100%">                     
                          <thead class="table-light">
                          <tr>                             
                              <th>Employee</th>
                              <th>Mobile No.</th>
                              <th>Designation</th>
                          </tr>
                          </thead>
                          <tbody id="emp_list">
                            <?php if($user_list){
                              foreach($user_list as $res){

                              ?>
                                <tr id="tr_<?php echo $res->id;?>">
                                  <td>
                                    <input type="checkbox" class="switcher form-check-input ms-0" id="<?php echo $res->id;?>"> 
                                    <label for="<?php echo $res->id;?>"><?php echo $res->user_name;?></label>
                                  </td>
                                  <td><?php echo $res->mobile;?></td>
                                  <td>
                                    <span class="badge rounded-pill badge-soft-primary"><?php echo $res->designation;?></span>
                                  </td>                                 
                                </tr>
                              <?php                 
                                }
                              }
                            ?>  
                          </tbody>
                        </table>
                       <input type="hidden" id="booking_id" name="booking_id" value="<?php echo $booking_id ?? ""; ?>">
                    </div><!-- end table responsive -->
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

          <div class="col-xl-6">
              <div class="card">
                  <div class="card-header align-items-center d-flex">
                      <h4 class="card-title mb-0 flex-grow-1">Assigned Team</h4>
                      <a href="<?php echo base_url("index.php/clientmanager/project_list/".$booking_id)?>" class="btn btn-primary btn-sm btn-label waves-effect waves-light"><i class=" ri-file-list-fill label-icon align-middle fs-16 me-2"></i>Project List</a>&nbsp;&nbsp;
                  </div><!-- end card header -->
                  <div class="card-body">
                      <div class="table-responsive table-card">
                      <table id="example" class="table table-striped table-bordered" style="width:100%">                     
                          <thead class="table-light">
                          <tr>
                              <th>Employee</th>
                              <th>Mobile No.</th>
                              <th>Designation</th>
                              <th>Action</th>
                          </tr>
                          </thead>
                          <tbody id="team_list">
                            <?php if($team_list){
                              foreach ($team_list as $key => $val) {
                                
                              ?>
                              <tr id="tr_<?php echo $val->id;?>">
                                  <td><?php echo $val->user_name;?></td>
                                  <td><?php echo $val->mobile;?></td>
                                  <td><span class="badge rounded-pill badge-soft-primary"><?php echo $val->designation;?></span></td>
                                  <td><button type="button" class="btn btn-sm btn-danger btn-label waves-effect right waves-light rounded-pill"><i class="ri-close-fill label-icon align-middle rounded-pill fs-16 ms-2"></i> Remove</button></td>
                              </tr>
                             <?php 
                                }
                              }
                            ?>   
                          </tbody>
        
                        </table>
                      </div><!-- end table responsive -->
                  </div><!-- end card body -->
              </div><!-- end card -->
          </div><!-- end col -->

      </div><!-- end row -->
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

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<!-------Daterange Picker------------>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/date_range.min.js"></script>
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/app.js"></script>

<script type="text/javascript"> 
$(document).ready(function(){

$(document).on("change", ".switcher", function(){
  
    var user_id = $(this).attr("id");
    var booking_id  = $("#booking_id").val();
   
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>index.php/clientmanager/ajax_my_team",
        data: ({user_id: user_id, booking_id: booking_id, source: "tbl_users"}),
        success: function (data) {   
          
          var spl_txt = data.split("~~~");

            if(spl_txt[1] == 1)
            {
              location.reload();
            }
            else{
              alert("Something went wrong...");
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




  $('#example').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": false,
      "responsive": true,
  });


});

</script>
<body>
  
</html>    