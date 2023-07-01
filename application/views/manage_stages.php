
<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Add Stages</h4>
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
        <!-----Add Stages--------->
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Add Stages</h4>
              </div>
              <!-- end card header -->
              <div class="card-body">
                
              <form id="frmStage">
                <div class="live-preview">
                  <div class="row">
                    <div class="col-xxl-6 col-md-6">
                      <label for="">Enter Stage Name</label>
                      <input type="text" id="stage_name" name="stage_name" class="form-control" placeholder="Enter Stage Name" required/>
                    </div>
                  </div>
                  <div class=" col-md-6" style="float: right">
                    <input type="hidden" name="stage_id" id="stage_id">
                    <button type="submit" class="btn btn-success btn-label"><i class="ri-check-double-line label-icon align-middle fs-16 me-2"></i> Submit</button>
                  </div>
                </div>
              </form>

              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
        </div>
        <!-----End of Add Stages--------->
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Stages List</h4>
              </div>
              <!-- end card header -->
              <div class="card-body">
                <div class="live-preview">
                <div class="table-responsive">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">                     
                      <thead class="table-light">
                        <tr>
                          <th nowrap>#</th>                        
                          <th>Stage Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="tbody">
                        <?php if($stage_list){
                          $cnt = 0;
                          foreach($stage_list as $res){
                            $cnt++;
                        ?>
                        <tr id="tr_<?php echo $res->id;?>">                
                          <td class="td_list"><?php echo $cnt;?></td>
                          <td>
                            <span id="lbl_<?php echo $res->id;?>"><?php echo $res->stage_name;?></span>
                            <input type="hidden" id="hdn_sid_<?php echo $res->id;?>" name="hdn_stage_name" value="<?php echo $res->stage_name;?>">
                          </td>
                          <td>
                            <div class="hstack gap-3 flex-wrap">
                              <a href="javascript:void(0);" id="<?php echo $res->id;?>" class="edit link-success fs-15"><i class="ri-edit-2-line"></i></a>
                              <a href="javascript:void(0);"  rid="<?php echo $res->id;?>" class="trash link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                            </div>
                          </td>
                        </tr>                        
                        <?php 
                          }
                        }?>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/app.js"></script>

<script>

function row_template(id, sname)
{
    var tr_row = "";
    tr_row += '<tr id="tr_'+id+'">';
      tr_row += '<td class="td_list">&nbsp;</td>'
      tr_row += '<td><span id="lbl_'+id+'">'+sname+'</span><input type="hidden" id="hdn_sid_'+id+'" name="hdn_stage_name" value="'+sname+'"></td>';
      tr_row += '<td>'
          tr_row += '<div class="hstack gap-3 flex-wrap">';
          tr_row += '<a href="javascript:void(0);" id="'+id+'" class="edit link-success fs-15"><i class="ri-edit-2-line"></i></a>';
          tr_row += '<a href="javascript:void(0);" rid="'+id+'" class="trash link-danger fs-15"><i class="ri-delete-bin-line"></i></a>';
          tr_row += '</div>';
      tr_row += '</td>';
    tr_row += '</tr>';
  return tr_row;

}
 
$(document).ready(function(){   

  $(document).on("click",".edit", function(){
        var stage_id = $(this).attr('id');
        $("#stage_id").val(stage_id);
        $("#stage_name").val($("#hdn_sid_"+stage_id).val());    
        $("#stage_name").focus(); 
    });

  $('#frmStage').validate({
          rules: {                  
            stage_name:{
              required: true
            }  
          },
          messages: {                
            stage_name:{
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
              var url = "<?php echo site_url('clientmanager/ajax_work_stages')?>";
              var frmdata = new FormData($('#frmStage')[0]);
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
                       
                        var stage_name = $("#stage_name").val();
                        $("#tbody").append(row_template(spl_txt[2], stage_name));
                        var cnt = 0;
                          $(".td_list").each(function(){
                            cnt++;
                            $(this).html(cnt);
                          });
                          $("#stage_name").val("");
                      }
                      else if(spl_txt[1] == 2)
                      { 
                        alert("Successfully Updated...");
                       
                        var stage_name = $("#stage_name").val();                        
                        $("#lbl_"+spl_txt[2]).html(stage_name);
                        $("#hdn_sid_"+spl_txt[2]).val(stage_name);

                        $("#stage_name").val("");
                      }
                      else
                      { 
                        alert("Something went wrong...");                   
                      }   
                  }
              });
          }
      }); 
      
      
//$(".trash").on("click", function(e){

$(document).on("click", ".trash", function(e){  
  var id = $(this).attr("rid");
  $.ajax({
  url:'<?php echo site_url('booking/ajax_trash')?>',
    type: "POST",
    data: ({id: id, source: "tbl_work_stages"}),
    dataType: 'json',
    success: function(data){
      if(data == parseInt(1))
      {
        $("#tr_"+id).remove();
        alert("Successfully deleted...");
        var cnt = 0;
        $(".td_list").each(function(){
          cnt++;
          $(this).html(cnt);
        });
      } 
    }
  }); 
}); 



  });
</script>

</body>
</html>