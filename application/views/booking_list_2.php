<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Boking List</h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Cost Calculator</a>
                  </li>
                  <li class="breadcrumb-item active">Booking List</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- end page title -->
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between">
                      <h4 class="card-title mb-0">Booking List</h4> <a href="<?php echo base_url("index.php/booking");?>" class="btn btn-primary btn-sm">Book Now</a>
                  </div>        
                </div><!-- end card header -->
              <!-- end card header -->
              <div class="card-body">
                <div class="live-preview">
                  <div class="table-responsive">
                     <table id="example" class="table table-bordered" style="width:100%">                     
                      <thead class="table-light">
                        <tr>                         
                          <th>Date</th>
                          <th>Client Name</th>
                          <th>Mobile No.</th>           
                          <th>Booking Amt:</th>                      
                          <th>Varified By</th>
                          <th width="8%">Commitment</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php 
                      if($booking_list){
                        $cnt = 0;
                        foreach($booking_list as $row){

                          $cnt++;
                          $create_date = date("d-m-Y", strtotime($row->create_date));

                          $admin_verify = $row->admin_verify;
                          $marketing_verify = $row->marketing_verify;
                          $client_verify = $row->client_verify;

                      ?>
                      <tbody>
                        <tr id="tr_<?php echo $row->id;?>">                           
                            <td style="width:100px;"><?php echo $create_date;?></td>
                            <td class="text-primary "><?php echo $row->client_name;?>
                            <br><small class="text-success">Create By: <?php echo $row->create_by;?></small></td>
                            <td><?php echo $row->mobile_no;?>
                            <br><small><?php echo $row->email_id;?></small>
                            </td>                
                            <td style="width:150px;"><?php echo number_format($row->booking_amt);?>
                            <br>
                            <!--small>Est. Amt: Rs. <?php //echo number_format(550000);?> </small-->
                            </td>                           
                            <td style="width:120px; font-weight: 500;" class="">
                            <small>Client 
                              <?php 
                              if($client_verify == "yes"){
                                echo '<i class="ri-check-line" style="color: #027148; font-size: 20px;"></i>';
                              }
                              else{
                                echo '<i class="ri-close-line" style="color: red; font-size: 20px;"></i>';
                              }  
                              ?>
                            </small>
                            <br>
                            <small>Marketing 
                              <?php 
                                if($marketing_verify == "yes"){
                                  echo '<i class="ri-check-line" style="color: #027148; font-size: 20px;"></i>';
                                }
                                else{
                                  echo '<i class="ri-close-line" style="color: red; font-size: 20px;"></i>';
                                }  
                                ?>
                            </small>
                            <br>
                            <small>Admin 
                            <?php 
                              if($admin_verify == "yes"){
                                echo '<i class="ri-check-line" style="color: #027148; font-size: 20px;"></i>';
                              }
                              else{
                                echo '<i class="ri-close-line" style="color: red; font-size: 20px;"></i>';
                              }  
                              ?>
                            </small>
                            </td>
                            <td align="center">                           
                              <a href="<?php echo base_url()."index.php/booking/add_commitment/".$row->id; ?>">
                                <img src="<?php echo base_url();?>assets/images/icons/comit.png" alt="">
                              </a>
                              <?php if($row->client_review != ""){?>
                              <input type="hidden" name="client_review" id="hdn_c_r_<?php echo $row->id;?>" value="<?php echo $row->client_review ?? "";?>">
                              <a href="" rid="<?php echo $row->id;?>" class="review" data-bs-toggle="modal" data-bs-target="#myModal"> 
                                <img src="<?php echo base_url();?>assets/images/icons/review.png" alt="">
                              </a>
                              <?php }?>
                            </td>
                            <td>
                              <a href="<?php echo base_url()."index.php/booking/booking_details/".$row->id; ?>"><img src="<?php echo base_url();?>assets/images/icons/file.png" height="20px;" width="20px;" alt="View" title="View"></a> |                   
                              <a href="<?php echo base_url('index.php/booking/client_booking_pdf/'.$row->id);?>"><img src="<?php echo base_url();?>assets/images/icons/download.png" height="20px;" width="20px;" alt="Download" title="Download"></a> |
                              <a href="javascript:void(0)" id="<?php echo $row->id;?>" class="trash"><img src="<?php echo base_url();?>assets/images/icons/delete.png" height="20px;" width="20px;" alt="Delete" title="Delete"></a>
                            </td>
                        </tr>
                        <?php } }?>  
                      </tbody>           
                    </table>
                    <!-- end table -->
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
      </div>
      <!------------------Modal Start--------------------->
      <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="myModalLabel">Client Review</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                  </div>
                  <div class="modal-body">                    
                    
                    <hr class="mt-1">
                      <div class="col-md-12 mt-1">
                       <span id="txt_client_review" class="text-muted">
                          
                        </span>                     
                      </div>                     
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary ">Save Changes</button>
                  </div>

              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-----------MODAL END-------------------------------->
      </div>
    <!-- End Page-content -->
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
<!-- JAVASCRIPT -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/feather-icons/feather.min.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="<?php echo base_url();?>assets/libs/prismjs/prism.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/app.js"></script>

<script type="text/javascript"> 
$(document).ready(function(){
  
  $(document).on("click", ".review", function(){

    var rid = $(this).attr("rid");
    var txt = $("#hdn_c_r_"+rid).val();
    
    $("#txt_client_review").html(txt);

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

$(document).on("click", ".trash", function(e){

  var id = $(this).attr("id");
  
if(confirm('Are you sure you want to delete from the list...?')) {

    $.ajax({
      url:'<?php echo site_url('booking/ajax_truncate')?>',
          type: "POST",
          data: ({id: id, source: "bkf_booking_form"}),
          dataType: 'json',
          success: function(data){
          
              if(data == parseInt(1))
              {        
                 
                  alert("Successfully deleted from the list..");
                  $('#tr_'+id).remove();
                  // var cnt = 0;
                  // $(".td_list").each(function(){
                  //   cnt++;
                  //   $(this).html(cnt);
                  // });
                  //   Toast.fire({
                  //   icon: 'success',
                  //   title: 'Successfully Deleted...'
                  // });
              } 
          }
      }); 

  }  

});     


});


    
</script>

</body>
</html>