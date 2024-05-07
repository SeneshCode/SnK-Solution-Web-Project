 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">

     <div class="container" data-aos="fade-up">

         <header class="section-header">
             <h2>Contact</h2>
             <p>Contact Us</p>
         </header>

         <div class="row gy-4">

             <div class="col-lg-6">

                 <div class="row gy-4">
                     <div class="col-md-6">
                         <div class="info-box">
                             <i class="bi bi-geo-alt"></i>
                             <h3>Address</h3>
                             <p>Karandeniya,<br>Sri Lanka, (online)</p>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="info-box">
                             <i class="bi bi-telephone"></i>
                             <h3>Call Us</h3>
                             <p>+94 779 284 002<br>+94 768 364 472</p>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="info-box">
                             <i class="bi bi-envelope"></i>
                             <h3>Email Us</h3>
                             <p>snksolutions@gmail.com
                                <br>senesh.development@gmail.com
                                <br>kaushalpremarathne.23@gmail.com

                            </p>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="info-box">
                             <i class="bi bi-clock"></i>
                             <h3>Open Hours</h3>
                             <p>Monday - Sunday<br>8:00AM - 09:00PM</p>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-6">
                 <form action="#" method="POST" id="contactForm" class="php-email-form"
                     enctype="multipart/form-data">
                     @csrf
                     <div class="row gy-4">

                         <div class="col-md-12 text-center" id="load_hide" >
                             <div class="loading">Sending</div>
                         </div>

                         <div class="col-md-6">
                             <input type="text" name="c_name" class="form-control" placeholder="Your Name" required>
                         </div>

                         <div class="col-md-6 ">
                             <input type="email" class="form-control" name="email" placeholder="Your Email"
                                 required>
                         </div>

                         <div class="col-md-12">
                             <input type="text" class="form-control" name="c_number"
                                 placeholder="Your Contact Number" required>
                         </div>

                         <div class="col-md-12">
                             <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                         </div>

                         <div class="col-md-12">
                             <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                         </div>

                         <div class="col-md-12 text-center">
                             <button type="submit" id="contactButton">Contact Us</button>
                         </div>

                     </div>
                 </form>

             </div>

         </div>

     </div>

 </section><!-- End Contact Section -->
