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
              <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Booking List</h4>
              </div>
              <!-- end card header -->
              <div class="card-body">
                <div class="live-preview">
                  <div class="table-responsive">
                     <table id="example" class="table table-striped table-bordered" style="width:100%">                     
                      <thead class="table-light">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Date</th>
                          <th scope="col">Client Name</th>
                          <th scope="col">Mobile No.</th>
                          <th scope="col">Email</th>
                          <th scope="col">Booking Amt:</th>
                          <th scope="col">Estimated Amt.</th>
                          <th  scope="col">Varified By</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <?php 
                      if($booking_list){
                        $cnt = 0;
                        foreach($booking_list as $row){
                          $cnt++;
                          $create_date = date("d-m-Y", strtotime($row->create_date));
                      ?>

                      <tbody>
                        <tr>
                            <td><?php echo $cnt;?></td>
                            <td><?php echo $create_date;?></td>
                            <td><a href="" data-bs-toggle="modal" data-bs-target="#myModal"><?php echo $row->client_name;?></a> </td>
                            <td><?php echo $row->mobile_no;?></td>
                            <td><?php echo $row->email_id;?></td>
                            <td><?php echo number_format($row->booking_amt);?></td>
                            <td><?php echo number_format(550000);?></td>
                            <td><small>Client</small><br><small>Marketing</small></td>
                            <td>
                              <a href="<?php echo base_url()."index.php/booking/booking_details/".$row->id; ?>"><img src="<?php echo base_url();?>assets/images/icons/eye.png" height="20px;" width="20px;" alt="View" title="View"></a> |
                              <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/icons/edit.png" height="20px;" width="20px;" alt="Edit" title="Edit"></a> |
                              <a href="<?php echo base_url('index.php/welcome/client_booking_pdf/'.$row->id);?>"><img src="<?php echo base_url();?>assets/images/icons/download.png" height="20px;" width="20px;" alt="Download" title="Download"></a> |
                              <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/icons/delete.png" height="20px;" width="20px;" alt="Delete" title="Delete"></a>
                              <a href="<?php echo base_url('index.php/mail/mail/'.$row->id);?>" target="_blank">mail</a>
                            </td>
                        </tr>
                      <?php } }?>  
                    </tbody>
                      <!--tfoot class="table-light">
                        <tr>
                          <td colspan="5" style="font-weight: bold;">Total</td>
                          <td style="font-weight: bold;">Rs. 90 Cr</td>
                        </tr>
                      </tfoot-->
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
                      <h5 class="modal-title" id="myModalLabel">Booking Full Details</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                  </div>
                  <div class="modal-body">
                      <h5 class="fs-15">
                        Bookinng Details
                      </h5>
                      <div class="row">
                        <div class="col-md-6">
                            <span>
                              <img src="images/icons/user_icon.png" alt="User_Icon"> <span>UKC Designer</span>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span>
                              <img src="images/icons/phone.png" alt="User_Icon"> <span>1234567898</span>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span>
                              <img src="images/icons/email.png" alt="User_Icon"> <span>info@gmail.com</span>
                            </span>
                        </div>
                        <div class="col-md-3">
                          <span>
                            <img src="images/icons/age.png" alt="User_Icon"> <span>Age: 60</span>
                          </span>
                        </div>
                        <div class="col-md-3">
                          <span>
                            <img src="images/icons/age.png" alt="User_Icon"> <span>Male</span>
                          </span>
                        </div>
                       <hr>
                        <div class="col-md-6">
                          <span class="text-primary">Pan:</span> <span>ABCD1234EF</span>
                        </div>
                        <div class="col-md-6">
                          <span class="text-primary">Adhaar:</span> <span>ABCD1234EF</span>
                        </div>                        
                        <div class="col-md-12">
                          <img src="images/icons/location.png" alt="Location"> <span>NH 53, GE Road, beside Signature Homes 2, Labhandih, Chhattisgarh 492001</span>
                        </div>
                        <br><br>
                        <div class="col-md-12">
                          <span class="badge bg-primary">Present</span>
                        </div>
                        <div class="col-md-12">
                          <img src="images/icons/location.png" alt="Location"> <span>NH 53, GE Road, beside Signature Homes 2, Labhandih, Chhattisgarh 492001</span>
                        </div>

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

</body>
</html>