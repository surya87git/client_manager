<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>
    <meta charset="utf-8" />
    <title>Maintenance | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="<?php echo base_url();?>/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo base_url();?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo base_url();?>/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?php echo base_url();?>/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>
<?php 

$encode_data = urldecode($this->uri->segment(3));
$new_data = json_decode(base64_decode($encode_data));
$booking_id = $new_data->id ?? "";

?>
<body>

    <div class="auth-page-wrapper pt-5">
        
        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 pt-4">
                            <div class="mb-5 text-white-50">
                                <h1 class="display-5 coming-soon-text" style="color: #d98888; text-shadow: 3px 4px #ffcc00">Expired...!</h1>
                                <p class="fs-14 text-danger">Your Booking link has been expired.</p>
                                <p class="text-danger">Click the below button to send the request for new Booking link.</p>
                                <div class="mt-4 pt-2" id="div_request">
                                   <a href="javascript:void(0);" id="btnRequest" value="<?php echo $booking_id;?>" class="btn btn-success"><i class="mdi mdi-email-send-outline me-1"></i> Send Request</a>
                                </div>
                                <div id="div_loader" style="display:none;">  
                                   <a href="javascript:void(0);" id="a_loader" class="btn btn-success"><i class="mdi mdi-email-send-outline me-12"></i>Processing...</a>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-5">
                                <div class="col-xl-4 col-lg-8">
                                    <div>
                                        <img src="<?php echo base_url();?>assets/images/maintenance.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-primary">UK Concept Designer</h3>
                            <span>Call us on: <a href="tel:7880055446">7880055446</a></span><br>  
                            <span>Email Us:<a href="mailto:info@ukcdesigner.in">&nbsp; info@ukcdesigner.in</a></span> <br>
                            <span>Adress: Office 441 4th floor, Magneto The Mall, Jivan Vihar, Labhandih, Chhattisgarh 492001</span>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        
        <!-- end Footer -->

    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>


<script>
    
$(document).ready(function(){

    /**-------Link Request -------- */

    $(document).on("click", "#btnRequest", function(){

        var booking_id = $(this).attr("value");

        $.ajax({ 
            url: "<?php echo site_url('welcome/booking_link_request')?>", 
            type: "POST",
            data: ({booking_id: booking_id}),
            beforeSend: function(){
               $("#div_request").hide();
               $("#div_loader").show(); 
            },
            success: function(data) {       
            var spl_txt = data.split("~~~");
                console.log(data);
                console.log(spl_txt[1]);
               if(spl_txt[1] == 1)
                { 
                    $("#a_loader").html("Your Request has been Successfully Sent..."); 
                    window.top.close();                  
                }
            },
            error: function() { 
               $("#a_loader").html("Something went wrong...");
            setTimeout(() => {
                $("#div_request").show();
                $("#div_loader").hide();        
              }, 5000);
            },
            complete: function() { 

             $("#a_loader").html("Your Request has been Successfully Sent...");

             setTimeout(() => {
                $("#div_request").show();
                $("#div_loader").hide(); 
                window.top.close();       
             }, 5000);  

           }

      });

  });

});
</script>

</body>
</html>