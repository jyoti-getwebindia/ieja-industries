 <!-- ===== TOP CONTACT BAR ===== -->
 <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<!-- ===== TOP CONTACT HEADER ===== -->
<div class="top-header">
    <div class="container">

        <!-- LEFT CONTACT DETAILS -->
        <div class="top-contact-info">

            <!-- Phone -->
            <div class="top-info-item">
                <i class="fas fa-phone-alt"></i>
                <a href="tel:+916396576430">+91 63965 76430</a>
            </div>

            <span class="top-separator">|</span>

            <!-- Email -->
            <div class="top-info-item">
                <i class="far fa-envelope"></i>
                <a href="mailto:iejaracks@gmail.com">
                    iejaracks@gmail.com
                </a>
            </div>

            <span class="top-separator">|</span>

            <!-- Address -->
            <div class="top-info-item">
                <i class="fas fa-map-marker-alt"></i>
                <span>Haldwani, Nainital, Uttarakhand 263139</span>
            </div>

        </div>

        <!-- RIGHT SOCIAL MEDIA -->
        <div class="top-social">

            <a href="#" target="_blank" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>

            <a href="#" target="_blank" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="#" target="_blank" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>

            <a href="#" target="_blank" aria-label="YouTube">
                <i class="fab fa-youtube"></i>
            </a>

        </div>

    </div>
</div>

<!-- ===== TOP HEADER CSS ===== -->
<style>

/* MAIN HEADER */
.top-header {
    width: 100%;
    background: #080c70;
    color: #ffffff;
    padding: 8px 0;
    font-size: 12px;
    font-weight: 500;
}

/* CONTAINER */
.top-header .container {
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
    padding: 0 15px;

    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: nowrap;
    gap: 10px;
}

/* CONTACT DETAILS LEFT */
.top-contact-info {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 12px;
    min-width: 0;
    flex: 1;
}

.top-info-item {
    display: flex;
    align-items: center;
    gap: 6px;
    white-space: nowrap;
}

.top-info-item i {
    color: #ffffff;
    font-size: 12px;
}

.top-info-item a,
.top-info-item span {
    color: #ffffff;
    text-decoration: none;
}

.top-separator {
    color: #ffffff;
    opacity: 0.7;
}

/* SOCIAL MEDIA RIGHT */
.top-social {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 7px;
    flex-shrink: 0;
}

.top-social a {
    width: 25px;
    height: 25px;
    display: flex;
    align-items: center;
    justify-content: center;

    background: #ffffff;
    color: #080c70;
    border-radius: 50%;
    text-decoration: none;
    font-size: 12px;

    transition: all 0.3s ease;
}

.top-social a:hover {
    background: #ed145b;
    color: #ffffff;
    transform: translateY(-2px);
}

/* TABLET */
@media (max-width: 991px) {

    .top-header {
        font-size: 10px;
    }

    .top-header .container {
        padding: 0 10px;
        gap: 6px;
    }

    .top-contact-info {
        gap: 7px;
    }

    .top-info-item {
        gap: 4px;
    }

    .top-info-item i {
        font-size: 10px;
    }

    .top-social {
        gap: 4px;
    }

    .top-social a {
        width: 22px;
        height: 22px;
        font-size: 10px;
    }
}

/* MOBILE - ALL IN ONE LINE */
@media (max-width: 767px) {

    .top-header {
        padding: 7px 0;
        font-size: 9px;
    }

    .top-header .container {
        display: flex !important;
        flex-direction: row !important;
        flex-wrap: nowrap !important;
        justify-content: space-between;
        align-items: center;
        gap: 4px;
        padding: 0 6px;
    }

    .top-contact-info {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        align-items: center;
        justify-content: flex-start;
        gap: 4px;
        flex: 1;
        min-width: 0;
        overflow: hidden;
    }

    .top-info-item {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 3px;
        white-space: nowrap;
        font-size: 9px;
    }

    .top-info-item i {
        font-size: 9px;
    }

    .top-info-item a,
    .top-info-item span {
        white-space: nowrap;
    }

    .top-separator {
        display: inline;
        font-size: 9px;
    }

    .top-social {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        align-items: center;
        justify-content: flex-end;
        gap: 3px;
        flex-shrink: 0;
    }

    .top-social a {
        width: 19px;
        height: 19px;
        font-size: 9px;
    }

}

/* VERY SMALL MOBILE */
@media (max-width: 380px) {

    .top-header {
        font-size: 8px;
    }

    .top-header .container {
        padding: 0 4px;
        gap: 3px;
    }

    .top-contact-info {
        gap: 3px;
    }

    .top-info-item {
        font-size: 8px;
        gap: 2px;
    }

    .top-info-item i {
        font-size: 8px;
    }

    .top-social {
        gap: 2px;
    }

    .top-social a {
        width: 17px;
        height: 17px;
        font-size: 8px;
    }

}

.floating-contact {
    position: fixed !important;
    left: 20px !important;
    right: auto !important;
    bottom: 25px !important;
    width: auto !important;
    z-index: 999999;
    display: flex !important;
    flex-direction: column !important;
    align-items: flex-start !important;
    gap: 12px;
}

.floating-contact .float-btn {
    width: auto !important;
    min-width: 145px;
    max-width: 180px;
    height: 52px;
    padding: 0 22px !important;
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    border-radius: 50px;
    white-space: nowrap;
    text-decoration: none !important;
    box-sizing: border-box;
    box-shadow: 0 5px 20px rgba(0,0,0,0.25);
    transition: 0.3s ease;
}

.floating-contact .float-btn:hover {
    transform: translateX(5px);
}

.floating-contact .call-btn {
    background: #e60000 !important;
    color: #fff !important;
}

.floating-contact .whatsapp-btn {
    background: #16bd62 !important;
    color: #fff !important;
}

@media(max-width: 600px) {
    .floating-contact {
        left: 12px !important;
        bottom: 15px !important;
    }
}

</style>
<!-- ===== END TOP CONTACT HEADER ===== -->

 <!--==================================================-->
 <!-- Start Euildint Header Area -->
 <!--==================================================-->
 <div class="header-area style-two" style="margin-bottom:-2px;     margin-right: 256px;">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-lg-2 col-md-6">
             <div class="header-logo">
                <a href="index.php"><img src="assets/images/logo.png" alt="logo"></a>
             </div>
          </div>
          <div class="col-lg-10 col-md-12">

             <!--start header menu -->
             <div class="header-munu style-two">
                <ul>

                   <li>
                      <a href="index.php">Home</a>
                   </li>

                   <li>
                      <a href="about-company.php">About Company</a>
                   </li>

                   <li>
                      <a href="products.php">
                         Products <i class="fas fa-chevron-down"></i>
                      </a>

                      <div class="sub-menu">
                         <ul>

                            <li>
                               <a href="wall-display-rack.php">
                                  Wall Display Rack
                               </a>
                            </li>

                            <li>
                               <a href="center-display-rack.php">
                                  Center Display Rack
                               </a>
                            </li>

                            <li>
                               <a href="end-cap-racks.php">
                                  End Cap Racks
                               </a>
                            </li>

                            <li>
                               <a href="vegetable-fruits-rack.php">
                                  Vegetable & Fruits Rack
                               </a>
                            </li>

                            <li>
                               <a href="cash-billing-counter.php">
                                  Cash / Billing Counter
                               </a>
                            </li>

                            <li>
                               <a href="slotted-angle-rack.php">
                                  Slotted Angle Rack
                               </a>
                            </li>

                            <li>
                               <a href="ss-shopping-trolley.php">
                                  SS Shopping Trolley
                               </a>
                            </li>

                            <li>
                               <a href="plastic-basket.php">
                                  Plastic Basket
                                   
                               </a>
                            </li>

                             

                         </ul>
                      </div>
                   </li>

          

                   <li>
         <a href="#">Our Catalogues</a>

<div class="sub-menu">
                         <ul>

                            <li>
                               <a href="assets/images/2.pdf" target="blank">
                           DISPLAY RACKS CATALOG
                               </a>
                            </li>


                          <li>
                               <a href="assets/images/3.pdf" target="blank">
                                 VEGETABLE FURNITURE Catalogue
                               </a>
                            </li>

                             

                         </ul>
                      </div>


      </li>

                   <li>
                      <a href="contact.php">Contact Us</a>
                   </li>

                </ul>
             </div>
             <!-- end header menu -->
          </div>
       </div>
    </div>
 </div>

 <!--Mobile Menu Area -->
 <div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none">
    <div class="mobile-menu">
       <nav class="Edulin_menu">
          <ul class="nav_scroll">

             <li>
                <a href="index.php">Home</a>
             </li>

             <li>
                <a href="about-company.php">About Company</a>
             </li>

             <!-- Products -->
             <li>
                <a href="products.php">
                   Products
                   <i class="fas fa-chevron-down"></i>
                </a>

                <div class="sub-menu">
                   <ul>

                      <li>
                         <a href="wall-display-rack.php">
                            Wall Display Rack
                         </a>
                      </li>

                      <li>
                         <a href="center-display-rack.php">
                            Center Display Rack
                         </a>
                      </li>

                      <li>
                         <a href="end-cap-racks.php">
                            End Cap Racks
                         </a>
                      </li>

                      <li>
                         <a href="vegetable-fruits-rack.php">
                            Vegetable & Fruits Rack
                         </a>
                      </li>

                      <li>
                         <a href="cash-billing-counter.php">
                            Cash / Billing Counter
                         </a>
                      </li>

                      <li>
                         <a href="slotted-angle-rack.php">
                            Slotted Angle Rack
                         </a>
                      </li>

                      <li>
                         <a href="ss-shopping-trolley.php">
                            SS Shopping Trolley
                         </a>
                      </li>

                      <li>
                         <a href="plastic-basket.php">Plastic Basket</a>
                      </li>

                      

                   </ul>
                </div>
             </li>

             <li>
                <a href="blog.php">Blogs</a>
             </li>

             <li>
                <a href="career.php">Career</a>
             </li>

             <li>
                <a href="contact.php">Contact Us</a>
             </li>

          </ul>
       </nav>
    </div>
 </div>
 <!--==================================================-->
 <!-- End Euildint Header Area -->
 <!--==================================================-->













 <style>  .hero-banner {
         position: relative;
         width: 100%;
         min-height: 620px;

         background-image: url("assets/images/5.jpg");
         background-size: cover;
         background-position: center center;
         background-repeat: no-repeat;

         display: flex;
         align-items: center;
         justify-content: center;

         overflow: hidden;
      }

      /* Dark overlay - second image jaisa */
      .hero-overlay {
         position: absolute;
         inset: 0;
         background: rgba(0, 0, 0, 0.58);
         z-index: 1;
      }

      /* Content */
      .hero-content {
         position: relative;
         z-index: 2;

         width: 90%;
         max-width: 1000px;

         text-align: center;
         color: #fff;
      }

      .hero-content span {
         display: block;
         font-size: 16px;
         font-weight: 600;
         letter-spacing: 1px;
         margin-bottom: 25px;
      }

      .hero-content h1 {
         margin: 0 0 40px;

         font-size: 58px;
         line-height: 1.15;
         font-weight: 700;
         color: #fff;
      }

      .hero-btn {
         display: inline-block;

         padding: 17px 38px;

         background: #f21b0c;
         color: #fff;

         text-decoration: none;
         font-size: 15px;
         font-weight: 700;

         border-radius: 4px;

         transition: 0.3s ease;
      }

      .hero-btn:hover {
         background: #d91408;
         color: #fff;
      }


      /* =========================
   TABLET
========================= */

      @media (max-width: 992px) {

         .hero-banner {
            min-height: 520px;
         }

         .hero-content h1 {
            font-size: 46px;
         }
      }


      /* =========================
   MOBILE
========================= */

      @media (max-width: 768px) {

         .hero-banner {
            min-height: 450px;

            background-position: center center;
         }

         .hero-overlay {
            background: rgba(0, 0, 0, 0.60);
         }

         .hero-content {
            width: 92%;
         }

         .hero-content span {
            font-size: 13px;
            margin-bottom: 15px;
         }

         .hero-content h1 {
            font-size: 34px;
            line-height: 1.2;
            margin-bottom: 28px;
         }

         .hero-btn {
            padding: 13px 28px;
            font-size: 14px;
         }
      }
      
.floating-contact {
    position: fixed;
    right: 20px;
    bottom: 25px;
    z-index: 99999;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.float-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 13px 20px;
    border-radius: 50px;
    color: #fff !important;
    text-decoration: none !important;
    font-size: 15px;
    font-weight: 600;
    box-shadow: 0 5px 18px rgba(0,0,0,0.25);
    transition: all 0.3s ease;
    animation: floatPulse 2s infinite;
}

.float-btn i {
    font-size: 21px;
}

.call-btn {
    background: linear-gradient(135deg, #e60000, #b90000);
}

.whatsapp-btn {
    background: linear-gradient(135deg, #25D366, #128C7E);
}

.float-btn:hover {
    transform: translateY(-4px) scale(1.05);
    color: #fff !important;
}

@keyframes floatPulse {
    0% {
        box-shadow: 0 5px 18px rgba(0,0,0,0.2);
    }
    50% {
        box-shadow: 0 5px 22px rgba(0,0,0,0.35);
    }
    100% {
        box-shadow: 0 5px 18px rgba(0,0,0,0.2);
    }
}

/* Mobile Responsive */
@media (max-width: 600px) {
    .floating-contact {
        right: 12px;
        bottom: 15px;
    }

    .float-btn {
        padding: 12px 16px;
        font-size: 13px;
    }

    .float-btn i {
        font-size: 19px;
    }
}

      .whatsapp-btn i {
    font-size: 24px;
    color: #fff;
    display: inline-block;
}
      
      </style>





   <!-- Section product detail -->
   <!-- Modal -->

   </div>
   <script>
      function generateCaptcha() {
         let captcha = Math.floor(1000 + Math.random() * 9000); // Generate 4-digit random number
         document.getElementById("captcha-code").textContent = captcha;
         document.getElementById("captcha-value").value = captcha; // Store the value in a hidden field
      }

      function validateCaptcha() {
         let enteredCaptcha = document.getElementById("captcha-input").value;
         let correctCaptcha = document.getElementById("captcha-value").value;
         if (enteredCaptcha !== correctCaptcha) {
            alert("Incorrect Captcha. Please try again.");
            return false;
         }
         return true;
      }
   </script>
   <div class="sticklist vibrate-3">
      <input type="hidden" id="ismobile" value="0">

      <ul class="">

       <div class="floating-contact">
    <a href="tel:+919872372261" class="float-btn call-btn">
        <i class="fa fa-phone"></i>
        <span>Call Now</span>
    </a>

 <a href="https://wa.me/919872372261"
   class="float-btn whatsapp-btn" target="_blank">
    <i class="fa-brands fa-whatsapp"></i>
    <span>WhatsApp</span>
</a>
</div>

      </ul>
   </div>


   <!-- Button trigger modal -->
   <!-- jquery js -->
   <script src="assets/js/vendor/jquery-3.6.2.min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <!-- bootstrap js -->
   <script src="assets/js/bootstrap.min.js"></script>
   <!-- carousel js -->
   <script src="assets/js/owl.carousel.min.js"></script>
   <!-- counterup js -->
   <script src="assets/js/jquery.counterup.min.js"></script>
   <!-- waypoints js -->
   <script src="assets/js/waypoints.min.js"></script>
   <!-- wow js -->
   <script src="assets/js/wow.min.js"></script>
   <!-- imagesloaded js -->
   <script src="assets/js/imagesloaded.pkgd.min.js"></script>
   <!-- venobox js -->
   <script src="venobox/venobox.js"></script>
   <!--  animated-text js -->
   <script src="assets/js/animated-text.js"></script>
   <!-- venobox min js -->
   <script src="venobox/venobox.min.js"></script>
   <!-- isotope js -->
   <script src="assets/js/isotope.pkgd.min.js"></script>
   <!-- jquery meanmenu js -->
   <script src="assets/js/jquery.meanmenu.js"></script>
   <!-- jquery scrollup js -->
   <script src="assets/js/jquery.scrollUp.js"></script>
   <script src="assets/js/jquery.barfiller.js"></script>
   <!-- jquery js -->
   <!-- theme js -->
   <script src="assets/js/theme.js"></script>

   <script>
      window.addEventListener('load', function() {
         var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
         myModal.show();
      });
   </script>
   <!-- /Javascript -->
</body>

<!-- Mirrored from www.specialitytapes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Sep 2026 05:40:14 GMT -->

</html>