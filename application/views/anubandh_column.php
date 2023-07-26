<style>
       
        #editor {
            border: #ccced1 1px solid;
            margin-top: 10px;
        }

        .boxes {
            margin-top: 10px;
            display: flex;
        }

        .box {
            margin-top: 0px;
            width: 50%;
        }

        /*
            Make the editable "fill" the whole box.
            The box will grow if the other box grows too.
            This makes the whole box "clickable".
         */
        .box .ck-editor__editable {
            height: 100%;
        }

        .box-left {
            margin-right: 10px;
        }

        /*
            When toolbar receives this class, it becomes sticky.
            If the toolbar would be scrolled outside of the visible area,
            instead it is kept at the top edge of the window.
         */
        #toolbar.sticky {
            position: sticky;
            top: 0px;
            z-index: 10;
        }
    </style>

<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->

        <!----Breadcrum----------->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Add Anubadh Column</h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Payment</a>
                  </li>
                  <li class="breadcrumb-item active">Payment Plan</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!----End of Breadcrum----------->
        <!-- end page title -->
        <!----main contain---------->
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-0">Column Details</h4><a href="<?php echo base_url("index.php/anubandh/anubandh_column_list");?>" class="btn btn-primary btn-sm">Column List</a>
                </div>  
              </div>
              <div class="card-body">
                <form id="frmColumn">
                  <div class="live-preview">
                    <br/>
                    <div class="col-xxl-12 col-md-12">
                      <label for="labelInput" class="form-label">Select Column</label>
                      <select class="form-select mb-3" aria-label="Default select example" name="column_name" id="column_name">
                        <option value="Select">Select Column</option>
                        <?php 
                        if($col_head){
                          foreach($col_head as $row){

                            if($row->anu_head_name == $row_data[0]->column_name){
                              $selected = 'selected="selected"';
                            }else{
                              $selected="";
                            }
                            
                            echo '<option '.$selected.' value="'.$row->anu_head_name.'">&nbsp;&nbsp;&nbsp;'.$row->anu_head_name.'</option>';    

                          }
                        }
                        ?>
                      </select>
                    </div>
                    <!-- Textarea -->
                    <div class="col-md-12">
                      <textarea name="column_desc" rows="10" cols="170" id="column_desc"><?php echo $row_data[0]->column_desc;?></textarea>
                    </div>
                    
                    <!-- end card-body -->
                    <div class="mt-3" style="float: right;">
                      <input type="hidden" id="column_id" name="column_id" value="<?php echo $row_data[0]->id;?>">
                      <a href="<?php echo base_url();?>index.php/anubandh/anubandh_column_list" class="btn btn-secondary" id="btn_cancel">Cancle</a>
                      <button type="submit" class="btn btn-primary" id="btn_save" value="submit">Save</button>     
                    </div>

                  </div>
                </form>
                <!---------------------END FORM--------------------------------------------->
              </div>
              <!--end row-->
            </div>
          </div>
        </div>
        <!----End of Main Contain---------->
      </div>
      <!--end col-->
    </div>
    <!--end row-->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6"> Design & Develop By <a href="https://ukcdesigner.in/" target="_blank">UKConcept Designer</a>
          </div>
          <div class="col-sm-6">
            <div class="text-sm-end d-none d-sm-block"> Copyright <?php echo date("Y");?> © All Right Reserved. </div>
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
<!-- Theme Settings -->
<!-- JAVASCRIPT -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/feather-icons/feather.min.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>

<!--script src="<?php //echo base_url();?>assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script-->
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<!-- init js -->
<!--script src="<?php //echo base_url();?>assets/js/pages/form-editor.init.js"></script-->
<!--script src="<?php echo base_url();?>assets/js/plugins.js"></script-->
<!-- prismjs plugin -->
<script src="<?php echo base_url();?>assets/libs/prismjs/prism.js"></script>

<script src="<?php echo base_url();?>assets/js/pages/form-input-spin.init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/app.js"></script>
<script type="text/javascript">

// CKEDITOR.replace('editor', {
//   height: 200
// });
  

$(document).ready(function() {
  
/**-----------Save Data------------------ */

$('#frmColumn').validate({
      rules: {},
      messages: {},
      errorElement: 'span',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      },

      submitHandler: function(form) {
        
        var column_id = $("#column_id").val();
        var column_name = $("#column_name").val();
        var column_desc = $("#column_desc").val(); 
               
        //var editorData = CKEDITOR.instances.editor.getData();
        //console.log(editorData);

        var url = "<?php echo site_url('anubandh/ajax_anubandh_column')?>"; 
        $.ajax({
          type: "POST",
          url: url,
          data: {column_id: column_id, column_name: column_name, column_desc: column_desc },
          success: function(data) {
            console.log(data);
            var spl_txt = data.split("~~~");
            if (spl_txt[1] == 1) {
              alert("Successfully Saved...");
              window.location.href = "anubandh_column_list";
            }
            else if(spl_txt[1] == 2) {
              alert("Successfully Updated...");
              window.location.href = "<?php echo base_url('index.php/anubandh/anubandh_column_list');?>";
            }
            else{
              alert("Something went Wrong...");
            }
          }
        });
      }
    });
  });
</script> 