
<div class="contact-area pd-top-80 pd-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <div class="contact-form">
                        <p>You can call, email or use the form below to contact us for any enquiry.</p>
                        <form action="http://formspree.io/syedraziul@gmail.com" method="POST">
                            <p>
                               
                                <input type="text" name="name" placeholder="First Name*" required>
                            </p>
                            <p>
                              
                                <input type="text" name="name" placeholder="Last Name*" required>
                            </p>
                            <p>
                               
                                <input type="email" name="email" placeholder="Email*" required>
                            </p>
                            <p>
                               
                                <input type="tel" name="phone" placeholder="Phone*">
                            </p>

                             <p>
                             
                                <input type="text" name="company" placeholder="Company*">
                            </p>

                            <p>
                              
                                <input type="text" name="address1"  placeholder="Address Line1*">
                            </p>

                            <p>
                              
                                <input type="text" name="address2"  placeholder="Address Line2*">
                            </p>

                            <p>
                              
                                <input type="text" name="address1"  placeholder="ZIP/Postal Code*">
                            </p>

                            <p>
                              
                                <textarea name="message" placeholder="Comment"></textarea>
                            </p>
                            <p>
                               <input type="submit" value="Submit">
                            </p>
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