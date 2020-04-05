
<div class="contact-area pd-top-80 pd-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-1 col-sm-6">
                <div class="contact-form">
                    <p>You can call, email or use the form below to contact us for any enquiry.</p>
                    <form id="submit_form">
                        <p>

                            <input type="text" name="FName" placeholder="First Name*" id="FName">
                        </p>
                        <p>

                            <input type="text" name="LName" placeholder="Last Name*" id="LName">
                        </p>
                        <p>

                            <input type="email" name="email" placeholder="Email*" id="email">
                        </p>
                        <p>

                            <input type="tel" name="phone" placeholder="Phone*" id="phone">
                        </p>

                        <p>

                            <input type="text" name="company" placeholder="Company*" id="company">
                        </p>

                        <p>

                            <input type="text" name="address1"  placeholder="Address Line1*" id="address1">
                        </p>

                        <p>

                            <input type="text" name="address2"  placeholder="Address Line2*" id="address2">
                        </p>

                        <p>

                            <input type="text" name="address1"  placeholder="ZIP/Postal Code*" id="zipc">
                        </p>

                        <p>

                            <textarea name="message" placeholder="Comment" id="comment"></textarea>
                        </p>
                        <p>
                         <input id="sub" type="submit" value="Submit">
                     </p>
                     <div id="response"></div>
                 </form>
             </div>
         </div>
         <div class="col-md-5 col-md-offset-1 col-sm-6">
            <div class="contact-info">
                <div class="info text-center">
                    <i class="fa fa-map-marker"></i>
                    <h3><?php officeWorksPL()?></h3>
                    <p><?php officeWorks();?></p>
                </div>
                <div class="info text-center">
                    <i class="fa fa-building-o"></i>
                    <h3>﻿Registered Address <br> for Communication:</h3>
                    <p><?php registeredAddress();?></p>
                </div>
                <div class="info text-center">
                    <i class="fa fa-phone"></i>
                    <h3><?php contactPL();?></h3>
                    <p>
                     Phone:<?php tel();?><br>
                     email:<?php email();?>
                 </p>
             </div>
         </div>
     </div>
 </div>
</div>
</div>
<script>

    $(document).ready(function()
    {
        $("#sub").click(function(e)
        {
            e.preventDefault();
            $.ajax({  
             url:"insert.php",  
             method:"POST",  
             data:$('#submit_form').serialize(),  
             beforeSend:function(){  
              $('#response').html('<span class="text-info">Loading response...</span>');  
          },  
          success:function(data){  
              $('form').trigger("reset");  
              $('#response').fadeIn().html(data);  
              setTimeout(function(){  
               $('#response').fadeOut("slow");  
           }, 5000);  
          }  
      }); 
        });

    });
</script>
