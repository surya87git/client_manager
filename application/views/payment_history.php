<?php 
$CI = & get_instance();
$client_name = $CI->get_name("bkf_booking_form","client_name",$booking_id);
?>
<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Payment History</h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Admin Panel</a>
                  </li>
                  <li class="breadcrumb-item active">Payment History</li>
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
                <h4 class="card-title mb-0 flex-grow-1"><?php echo $client_name?></h4>
                <a href="<?php echo base_url("index.php/clientmanager/stage_detail_list/".$booking_id)?>" class="btn btn-success btn-sm btn-label waves-effect waves-light"><i class=" ri-file-list-fill label-icon align-middle fs-16 me-2"></i>Stage List</a>&nbsp;&nbsp;
              </div>
              <!-- end card header -->
              <div class="card-body">
                <div class="live-preview">
                  <div class="row">
                    <form id="frmFilter" method="post">
                      <div class="col-xxl-12 col-md-12 mt-2">
                        <label for="">Select Stage</label>
                        <select id="stage_id" name="stage_id" class=" js-example-basic-multiple select2_single form-control"  placeholder="Select" tabindex="-1">    
                          <option value="" Selected>Select</option>
                          <?php if($stage_list){

                              $cnt =0;
                              foreach($stage_list as $res)
                                {
                                    $cnt++;
                                    if($res->id == $stage_id){
                                      $selected = 'selected="selected"';
                                    }
                                    else{
                                      $selected = '';
                                    }

                                  echo '<option '.$selected.' value="'.$res->id.'"> Stage -'.$cnt.' [ '.$res->stage_name.' ]</option>';
                                } 
                              }
                              ?> 
                        </select>
                      </div>
                            </form>
                      <div class="table-responsive mt-3">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">                     
                      <thead class="table-light">
                        <tr>                        
                          <th>Stages Name</th>
                          <th>Payment Date</th>
                          <th>Payable</th>
                          <th>Amount Paid</th>
                          <th>Pay As</th>
                          <th>Received</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php                    
                      if($payment_list){
                        foreach($payment_list as $res)
                          {
                            //$stage_name = $CI->get_name("bkf_work_stages","stage_name",$res->stage_id);
                            $create_date = date("d-M-Y", strtotime($res->create_date));
                            $create_time = date("H:i:sa", strtotime($res->create_date));
                            
                            $paid_amt = $res->payable_amt - $res->pending_amt;
                            $running_status = $CI->getStatus($res->running_status);
                        ?>
                        <tr>                          
                            <td class="text-primary"><b><?php echo $res->stage_name;?></b><br>
                            <!--small class="text-info">Stage Number: 1</small-->
                            </td>
                            <td><?php echo $create_date;?><br><small class="text-info"><?php echo $create_time;?></small></td>
                            <td>Rs. <?php echo $res->payable_amt;?> 
                            </td>
                            <td>Rs. <?php echo $res->paid_amt;?><br>
                              <small class="text-danger">Pending: Rs. <?php echo $res->pending_amt;?></small>
                            </td>
                            
                            <td><?php echo $res->received_as;?></td>
                            <td><?php echo $res->received_by;?></td>
                            <td>
                                <div class="hstack gap-3 flex-wrap">
                                    <!--a href="javascript:void(0);" class="link-primary fs-15"><i class="ri-edit-2-line"></i></a-->
                                    <a href="javascript:void(0);" class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php }
                      }?>
                       
                    </tbody>
                      
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                  </div>
                  <center><div class="mt-3">
                  <button type="button" class="btn btn-success btn-label"><i class="ri-check-double-line label-icon align-middle fs-16 me-2"></i> Submit</button>
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

  $(document).on("change", "#stage_id", function(e){      
        e.preventDefault();
        $("#frmFilter").submit();
    });




  $(".js-example-basic-multiple").select2({
    placeholder: "---Select---",
    allowClear: true
  });



  $(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
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
</body>
</html>