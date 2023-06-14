
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
            <!-- start page title -->
              <!------Start of breadcrum------------->
              <div class="row">
                <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">List</h4>
                    <div class="page-title-right">
                      <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                          <a href="javascript: void(0);">Cost Calculator</a>
                        </li>
                        <li class="breadcrumb-item active">List</li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
              <!------End of breadcrum------------->
            <!-- end page title -->
              <!--------Start of Main File--------->
                <div class="row">
                  <div class="col-xl-12">
                    <div class="card">
                      <div class="card-header">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Calculation List</h4> <a href="<?php echo base_url("index.php/anubandh/anubandh_column");?>" class="btn btn-primary btn-sm">Add Column</a>
                        </div>  
                      </div>
                      <!-- end card header -->
                      <div class="card-body">
                        <div class="live-preview">
                          <!-------Select Column--------->
                            <!--div class="col-xxl-3 col-md-3">   
                              <label for="labelInput" class="form-label">Select Column Name</label>
                              <select class="form-select mb-3" aria-label="Default select example" name="" id="">
                                <option value="Select">Select </option>
                                <option value="A">Column A</option>
                                <option value="B">Column B</option>
                                <option value="C">Column C</option>
                                <option value="D">Column D</option>
                                <option value="E">Column E</option>
                                <option value="F">Column F</option>
                                <option value="G">Column G</option>
                                <option value="H">Column H</option>
                                <option value="I">Column I</option>
                                <option value="J">Column J</option>
                              </select>
                            </div-->
                          <!-------End of Select Column--------->

                          <!-------Start of Table--------->
                          <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">                     
                              <thead class="table-light">
                                <tr>
                                  <th scope="col" nowrap>&nbsp;</th>                              
                                  <th scope="col" nowrap>#</th>   
                                  <th scope="col">Column Content</th>                        
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                                <tbody>   
                                <?php 
                                  if($column_list){
                                    
                                    $cnt = 0;
                                    $tmp="";

                                    foreach($column_list as $row){
                                      
                                      $create_date = date("d-m-Y", strtotime($row->create_date));
                                      $cname = $row->column_name ?? "";
                                      if($cname != $tmp){
                                        $cnt = 1;
                                        $tmp = $cname;
                                      }
                                      else{
                                        $cnt++;
                                      }
                                  ?>                         
                                  <tr id="tr_<?php echo $row->id;?>">                                  
                                    <td><label style="color:#ff7f50; font-size:20px;"><?php echo $cname;?></label></td> 
                                    <td><label style="color:#405189; font-size:15px;"><?php echo $cnt;?></label></td>                                                                  
                                    <td><?php echo $row->column_desc ?? "";?></td>                                  
                                    <td nowrap>  
                                      <a href="<?php echo base_url('index.php/anubandh/anubandh_column/'.$row->id);?>" style="font-weight:bold; color:green;"><img src="<?php echo base_url();?>assets/images/edit.png" alt="Edit" title="Edit" srcset=""></a> |  
                                      <a href="javascript:void(0);" id="<?php echo $row->id;?>" class="trash" style="font-weight:bold; color:red;"><img src="<?php echo base_url();?>assets/images/icons/delete.png"  alt="Delete" title="Delete" srcset=""></a>
                                    </td>
                                  </tr> 
                                  <?php } }?>                                                              
                                </tbody>
                            </table>
                            <!-- end table -->
                          </div>
                          <!-------End of Table--------->
                          <!-- end table responsive -->
                        </div>
                        
                      </div>
                      <!-- end card-body -->
                    </div>
                    <!-- end card -->
                  </div>
                  <!-- end col -->
                </div>
              <!--------End of Main File--------->              
      </div>
    </div>
    <!-- End Page-content -->
    
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

<!--script src="<?php echo base_url();?>assets/js/plugins.js"></script-->
<!-- prismjs plugin -->
<script src="<?php echo base_url();?>assets/libs/prismjs/prism.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/app.js"></script>

<script type="text/javascript"> 
$(document).ready(function(){
  

  // $('#example').DataTable({
  //     "paging": true,
  //     "lengthChange": false,
  //     "searching": true,
  //     "ordering": false,
  //     "info": true,
  //     "autoWidth": false,
  //     "responsive": true,
  // });


/**------------Start Datatable pagination  with category-----------*/
var groupColumn = 0;
var table = $('#example').DataTable({

  "responsive": true,
  "lengthChange": false,
  "autoWidth": false,
  "ordering": false,

  columnDefs: [{ visible: false, targets: groupColumn }],
  order: [[groupColumn, 'asc']],
  displayLength: 10,
  drawCallback: function (settings) {
      var api = this.api();
      var rows = api.rows({ page: 'current' }).nodes();
      var last = null;
      api
      .column(groupColumn, { page: 'current' })
      .data()
      .each(function (group, i) {
          if (last !== group) {
            $(rows)
              .eq(i)
              .before('<tr class="group"><td colspan="4">' + group + '</td></tr>');
            last = group;
          }
      });
  },

});
// Order by the grouping
$('#example tbody').on('click', 'tr.group', function () {

    var currentOrder = table.order()[0];
    if (currentOrder[0] === groupColumn && currentOrder[1] === 'asc') {
        table.order([groupColumn, 'desc']).draw();
    } else {
        table.order([groupColumn, 'asc']).draw();
    }
    
});
/**------------END Datatable pagination  with category-----------*/





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
      url:'<?php echo site_url('booking/ajax_trash')?>',
          type: "POST",
          data: ({id: id, source: "anu_aggrement_column"}),
          dataType: 'json',
          success: function(data){          
              if(data == parseInt(1))
              {                         
                alert("Successfully deleted from the list..");
                $('#tr_'+id).remove();
              } 
          }
    });

  }  

});    

});

</script>


<?php echo include("footer.php");?>