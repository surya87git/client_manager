<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Stages Details List</h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Masters</a>
                  </li>
                  <li class="breadcrumb-item active">Project Stages </li>
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
                <h4 class="card-title mb-0 flex-grow-1">Stages Details List</h4>
                <a href="index.php/clientmanager/manage_stage_details" class="btn btn-success btn-sm btn-label waves-effect waves-light"><i class=" ri-file-add-fill label-icon align-middle fs-16 me-2"></i>Add Stage Destails</a>
              </div>
              <!-- end card header -->
              <div class="card-body">
                <div class="live-preview">
                <form action="">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Client</label>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <select class=" js-example-basic-multiple select2_single form-control" name="states[]" tabindex="-1">
                            <option value="ajayjain">Ajay Jain</option>
                            <option value="Rahul Bansal">Rahul Bansal</option>
                            <option value="Lalit Yadav">Lalit Yadav</option>
                            <option value="Surya">Surya Narayan</option>
                            <option value="Srini">Srini</option>
                        </select>
                      </div>
                    </div>
                </form>
                <div class="table-responsive mt-3">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">                     
                      <thead class="table-light">
                        <tr>
                          <th nowrap>Client Name</th>
                          <th>Stages Name</th>
                          <th>Start Date</th>
                          <th>Total Payable</th>
                          <th>Payment Status</th>
                          <th>Pay Now</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>Ajay Jain</td>
                            <td class="text-primary"><b>Footing</b><br>
                            <small class="text-info">Stage Number: 1</small>
                            </td>
                            <td>13 July 2022<br>
                            <small class="text-danger">End Date: 21 July 2022</small>
                            </td>
                            <td>Rs. 20,000 <br>
                            <small class="text-danger"> Days: 10 Days Left</small>
                            </td>
                            <td><span class="badge rounded-pill badge-soft-success" style="font-size:10px">Paid</span><br>
                            <small class="text-info">Paid: Rs. 20,000  &nbsp;&nbsp;&nbsp; Due: Rs. 0</small></td>
                            <td>
                            <a type="button" class="btn btn-primary btn-label btn-sm waves-effect waves-light rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModalgrid"><i class="ri-bank-card-fill label-icon align-middle rounded-pill fs-16 me-2"></i>Pay Now</a>
                            <td>
                                <div class="hstack gap-3 flex-wrap">
                                    <a href="javascript:void(0);" class="link-success fs-15"><i class="ri-gallery-fill"></i></a>
                                    <a href="javascript:void(0);" class="link-primary fs-15"><i class="ri-edit-2-line"></i></a>
                                    <a href="javascript:void(0);" class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                                </div>
                            </td>
                        </tr>   
                        <tr>
                            <td>Ajay Jain</td>
                            <td class="text-primary"><b>Plinth</b><br>
                            <small class="text-info">Stage Number: 2</small>
                            </td>
                            <td>25 July 2022<br>
                            <small class="text-danger">End Date: 31 July 2022</small>
                            </td>
                            <td>Rs. 10,000 <br>
                            <small class="text-danger"> Days: 10 Days Left</small>
                            </td>
                            <td><span class="badge rounded-pill badge-soft-danger" style="font-size:10px">Pending</span><br>
                            <small class="text-info">Paid: Rs. 5,000  &nbsp;&nbsp;&nbsp; Due: Rs. 5,000</small></td>
                            <td>
                            <a type="button" class="btn btn-primary btn-label btn-sm waves-effect waves-light rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModalgrid"><i class="ri-bank-card-fill label-icon align-middle rounded-pill fs-16 me-2"></i>Pay Now</a>
                            <td>
                                <div class="hstack gap-3 flex-wrap">
                                    <a href="javascript:void(0);" class="link-success fs-15"><i class="ri-gallery-fill"></i></a>
                                    <a href="javascript:void(0);" class="link-primary fs-15"><i class="ri-edit-2-line"></i></a>
                                    <a href="javascript:void(0);" class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                                </div>
                            </td>
                        </tr>                    
                    </tbody>
                      
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
        </div>
      </div>
      
      <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
    <!-----Pay Now Modal------->
    <div class="modal zoomIn" id="exampleModalgrid" tabindex="-1" aria-labelledby="paynow" aria-modal="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-primary" id="paynow" style="text-decoration: underline;">Pay Now</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="javascript:void(0);">
                      <div class="row">
                          <div class="col-xxl-12">
                              <div>
                                  <h5 class="text-primary">Toat Payable on Stage <b>Plinth</b> : Rs. 2,00,000 </h5>  
                              </div>
                          </div><!--end col-->
                          <div class="col-xxl-12">
                              <div>
                                  <label for="enteramount" class="form-label">Enter Amount</label>
                                  <input type="number" class="form-control" id="enteramount" placeholder="Enter Amount">
                              </div>
                          </div><!--end col-->
                          <div class="col-xxl-12 mt-2">
                              <div>
                                  <label for="entertransaction" class="form-label">Enter Transaction</label>
                                  <input type="number" class="form-control" id="entertransaction" placeholder="Enter Transaction number">
                              </div>
                          </div><!--end col-->
                          <div class="col-xxl-12 mt-2">
                              <div>
                                  <label for="receivedby" class="form-label">Enter Received By</label>
                                  <input type="text" class="form-control" id="receivedby" placeholder="Enter Receiver Name">
                              </div>
                          </div><!--end col--> 
                          <div class="col-lg-12 mt-2">
                              <div class="hstack gap-2 justify-content-end">
                                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </div><!--end col-->
                      </div><!--end row-->
                  </form>
              </div>
          </div>
      </div>
    </div>
    <!-----End of Pay Now Modal--------->

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
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>

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
  $(".js-example-basic-multiple").select2({
    placeholder: "---Select---",
    allowClear: true
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
