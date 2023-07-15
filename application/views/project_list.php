
<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">PROJECT</h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Masters</a>
                  </li>
                  <li class="breadcrumb-item active">Project</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- end page title -->
        <!-----Add Stages--------->
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Project List</h4>
                <a href="<?php echo base_url('index.php/booking/booking_list');?>" class="btn btn-success btn-sm btn-label waves-effect waves-light"><i class="ri-file-list-fill label-icon align-middle fs-16 me-2"></i> Booking List</a>
              </div>
              <!-- end card header -->
              <div class="card-body">
                <div class="live-preview">
                  <div class="row">
                      <div class="table-responsive mt-3">
                    <table id="example" class="table table-striped table-bordered" style="width:100%" >                     
                      <thead class="table-light">
                        <tr>
                          <th>Aggrement Date</th>
                          <th>Client</th>
                          <th>Manage Project</th>
                          <!--th>Action</th-->
                        </tr>
                      </thead>
                      <tbody>

                      <?php 
                      if($project_list){
                          foreach($project_list as $res){  

                            $aggr_date = date("d-M-Y", strtotime($res->aggr_date));
                            $start_date = date("d-M-Y", strtotime($res->start_date));
                            $end_date = date("d-M-Y", strtotime($res->end_date));

                        ?>
                        <tr>
                            <td nowrap> <?php echo $aggr_date;?> <br>
                              <small class="text-primary">Start Date: <?php echo $start_date;?></small><br>
                              <small class="text-success">End Date: <?php echo $end_date;?></small>
                            </td>                          
                            <td nowrap>
                                <label for="">
                                  <a href="<?php echo base_url('index.php/booking/booking_details/'.$res->booking_id);?>">
                                  <?php echo $res->client_name ?? "";?>
                                  </a> 
                                </label>
                                <br>
                                <small class="text-primary"><?php echo $res->email_id ?? "";?></small><br>
                                <small class="text-success"><?php echo $res->mobile_no ?? "";?></small>
                            </td>
                            <td nowrap>
                                <a href="<?php echo site_url('/clientmanager/stage_detail_list/'.$res->booking_id)?>" class="btn btn-primary btn-sm btn-label waves-effect waves-light mt-2"><i class="ri-profile-fill label-icon align-middle fs-16 me-2"></i>Manage Stage</a>
                                <a href="<?php echo site_url('/clientmanager/payment_history/'.$res->booking_id)?>" class="btn btn-secondary btn-sm btn-label waves-effect waves-light mt-2"><i class=" ri-file-list-2-line label-icon align-middle fs-16 me-2"></i>Payment History</a>
                                <a href="<?php echo site_url('/clientmanager/manage_team/'.$res->booking_id)?>" class="btn btn-success btn-sm btn-label waves-effect waves-light mt-2"><i class="  ri-team-line label-icon align-middle fs-16 me-2"></i>My Team</a>
                                <a href="<?php echo site_url('/clientmanager/certificate_list/'.$res->booking_id)?>" class="btn btn-warning btn-sm btn-label waves-effect waves-light mt-2"><i class=" ri-file-paper-2-line label-icon align-middle fs-16 me-2"></i>Certificate</a>

                                <a href="javascript:void(0);" id="<?php echo $res->booking_id;?>" class="view btn btn-info btn-sm btn-label waves-effect waves-light mt-2" data-bs-toggle="modal" data-bs-target="#myModal"><i class="  ri-gift-2-fill label-icon align-middle fs-16 me-2"></i>Facilities</a>
                            </td>
                            <!--td nowrap>
                                <a  class="btn btn-primary btn-sm waves-effect waves-light mt-2"> Edit</a>
                                <a  class="btn btn-danger btn-sm waves-effect waves-light mt-2"> Delete</a>
                            </td-->
                        </tr>
                      <?php 
                        }
                      }
                      ?>      
                    </tbody>
                      
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                  </div>
                  <!-- end table responsive -->
                </div>
              
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
        </div>
        <!-----End of Add Stages--------->
        
      </div>
      
      <!-- container-fluid -->
    </div>
    <!-------Add FAcilities----------------->
      <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Facilities Provided</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <a href="javascript:void(0);" id="btnFacility" class="btn btn-primary ">Edit Facilities</a>
                      <input type="hidden" id="booking_id" name="booking_id">
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-------Add FAcilities----------------->
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

$("#btnFacility").on("click", function(){
  var booking_id = $("#booking_id").val();
  window.location.href = "<?php echo base_url().'index.php/clientmanager/manage_facility/'; ?>"+booking_id;
});

  $(".view").on("click", function(){    
      var booking_id = $(this).attr("id");   
      $("#booking_id").val(booking_id);   
      var url = "<?php echo site_url('clientmanager/ajax_my_facility')?>";
      $.ajax({
        url: url,
        type: "POST",
        data: ({booking_id: booking_id, type: "model_client"}),
        success: function(data){

          $(".modal-body").html(data); 

        }
      });
  });


  $('#example').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
  });

});
</script>

</body>
</html>