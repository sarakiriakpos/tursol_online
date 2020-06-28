<?php include 'include/header.php'; ?>

         
     
        <!--================Hero Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="container">
                <div class="banner_content">
                    <h2 class="br_title">Contact Us</h2>
                    <ul class="bread_cumb list_style">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================Hero banner Area =================-->
       
        <!--================Hero Contact Area =================-->
        <section class="contact_area">
            <div class="container">
                <div class="section_title mb_50">
                    <h2>Send us a message</h2>
                    <p class="title_p">We will get back to you soon</p>
                    <span class="bottom_line"></span>
                </div>
                <div class="row contact_us_inner">
                    <div class="col-md-7">
                        <form class="row contact_us_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="name2" name="name2" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="organization" name="organization" placeholder="Organization">
                            </div>
                       
                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" value="submit" class="btn submit_btn theme_btn">submit now</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <div class="contact_address">
                            <div class="c_address_item">
                                <h5>Address:</h5>
                                <p>Lekki Phase1, Lagos, <br>Nigeria</p>
                            </div>
                            <div class="c_address_item">
                                <h5>Phone:</h5>
                                <a href="tel:18004567890">+0800000000</a>
                                <a href="tel:985841789621">+0800000000</a>
                            </div>
                            <div class="c_address_item">
                                <h5>email:</h5>
                                <a href="mailto:support@evolutionmining.ltd">support@tursol.online.com</a>
                                <a href="mailto:contact@evolutionmining.ltd">contact@tursol.online.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php include 'include/footer.php'; ?>
     