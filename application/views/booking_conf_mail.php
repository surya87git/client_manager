<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Welcome</title>
  </head>
  <body style="margin:0;padding:0;word-spacing:normal;background-color:#ffffff;">
    <div role="article" aria-roledescription="email" lang="en" style="-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#ffffff;">
      <table role="presentation" style="width:100%;border:0;border-spacing:0;">
        <tr>
          <td align="center">
            <div class="outer" style="width:96%;max-width:660px;margin:20px auto;">
            <table role="presentation" style="width:100%;border:0;border-spacing:0;">
                <tr>
                  <td style="padding:10px;text-align:left;">
                    <h1 style="margin-top:0;margin-bottom:5px;font-family:Arial,sans-serif;font-size:40px;line-height:32px;font-weight:bold;text-align:center;color: #ac9c72;"><i>Greeting!</i>
                    </h1>
                    <center><p style="margin-top:30px;font-family: 'Geneva';font-size:20px;color: #ac9c72;"> Dear <?php echo $gen;?>, <span style="font-weight: bold; color: #ac9c72; text-decoration: underline;"> <?php echo $name ;?> </span>
                    </p></center>
                    <p style="margin:0;font-family:Arial,sans-serif; font-size: medium; color: #ac9c72; text-align:center;">
                      Welcome to <span style="color: #ac9c72; font-weight: bolder;text-decoration:underline;text-align:center;"> UK Concept Designer Family.</span> 
                    </p>
                  </td>
                </tr>
              </table>
              <div class="spacer" style="">&nbsp;</div>
              <div class="two-col" style="text-align:center;font-size:0;direction:rtl;">
                
                <div class="column" style="width:100%;max-width:330px;display:inline-block;vertical-align:top;direction:ltr;">
                  <div style="padding:10px;font-size:14px;line-height:18px;text-align:center;">
                    <p style="margin:0;font-family:Arial,sans-serif; font-size: medium; color: #ac9c72;">
                      Your Booking has been <span style="color: #ac9c72; font-weight: bolder;">Successfully Done</span> 
                    </p>
                  </div>
                </div>
              </div>
              <table role="presentation" style="width:100%;border:0;border-spacing:0;">
                <tr>
                  <td style="text-align:center;">
                    <h1 style="margin-bottom:10px;font-family:Arial,sans-serif;font-size:14px;font-weight:normal; color: black;color: #ac9c72;">We received the booking amount of</h1>
                    <p style="margin:0;font-family:Arial,sans-serif;">
                      <button style="background: #ffffff; border: 2px solid #a6976e; text-decoration: none; padding: 10px 25px; color: #ab8238; border-radius: 4px; display:inline-block; mso-padding-alt:0;text-underline-color:#ffffff"><span style="mso-text-raise:10pt;font-weight:700;">Rs. <?php echo $amount?></span></button>
                    </p>
                  </td>
                </tr>
              </table>     
              <div style="padding:10px;font-size:14px;line-height:18px;text-align:center;">
                  <p style="margin:0;font-family:Arial,sans-serif; font-size: medium; color: #ac9c72;">
                    Please find your  <span style="color: #ac9c72; font-weight: bolder;">attached booking form...</span> 
                  </p>
              </div>  
              <img src="<?php echo base_url();?>assets/email_images/Welcoome.png" alt="" style="width: 300px; height: 300px; align-items: center;"-->     
          </td>   
        </tr>
      </table>
    </div>
  </body>
</html>