<?php include_once("dbconnect.php");?>
<div class="our-clients">
    <div class="container">
        <div class="slider-items-products">
            <div id="our-clients-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col6">

                    <!-- Item -->
                    <div class="item"> <a href="#"><img src="images/brand1.png" alt="Image" class="grayscale"></a> </div>
                    <!-- End Item -->

                    <!-- Item -->
                    <div class="item"> <a href="#"><img src="images/brand2.png" alt="Image" class="grayscale"></a> </div>
                    <!-- End Item -->

                    <!-- Item -->
                    <div class="item"> <a href="#"><img src="images/brand3.png" alt="Image" class="grayscale"></a> </div>
                    <!-- End Item -->

                    <!-- Item -->
                    <div class="item"> <a href="#"><img src="images/brand4.png" alt="Image" class="grayscale"></a> </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item"> <a href="#"><img src="images/brand5.png" alt="Image" class="grayscale"></a> </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item"> <a href="#"><img src="images/brand6.png" alt="Image" class="grayscale"></a> </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item"> <a href="#"><img src="images/brand7.png" alt="Image" class="grayscale"></a> </div>
                    <!-- End Item -->

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="footer-newsletter">
                <div class="container">
                    <div class="row">

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xs-12 col-lg-3">
                <div class="footer-logo"><a href="index.php"><img src="images/slider/Vsoft.png" class=".img-rounded" alt="fotter logo"></a> </div>
                <div class="footer-content">
                    <?php
                    $sql = "SELECT * FROM contact_info";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="email"> <i class="fa fa-envelope"></i>
                        <p><?php echo $row["email"] ?></p>
                    </div>
                    <div class="phone"> <i class="fa fa-phone"></i>
                        <p><?php echo $row["numb1"] ?></p>
                    </div>
                    <div class="address"> <i class="fa fa-map-marker"></i>
                        <p><?php echo $row["loc"] ?></p>
                    </div>
                    <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
                <div class="footer-links">
                    <h3 class="links-title">Products<a class="expander visible-xs" href="#TabBlock-1">+</a></h3>
                    <div class="tabBlock" id="TabBlock-1">
                        <ul class="list-links list-unstyled">
                            <li><a href="products">Mobile Apps</a></li>
                            <li><a href="products">Web Apps</a></li>
                            <li><a href="products">Backend Development</a></li>
                            <li><a href="products">Application Development</a></li>
                            <li><a href="products">E-commerce Applications</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
                <div class="footer-links">
                    <h3 class="links-title">Services<a class="expander visible-xs" href="#TabBlock-3">+</a></h3>
                    <div class="tabBlock" id="TabBlock-3">
                        <ul class="list-links list-unstyled">
                            <li> <a href="services">It Consultancy </a> </li>
                            <li> <a href="services">Helpdesk Maintainance</a> </li>
                            <li> <a href="services">system Recovery</a> </li>
                            <li> <a href="services">Data Analytics</a> </li>
                            <li> <a href="services">System Testing</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 col-xs-12 col-lg-3 collapsed-block">
                <div class="footer-links">
                    <h1 class="links-title" style="color: gray">FOLLOW US ON..<a class="expander visible-xs" href="#TabBlock-4"></a></h1>

                        <div class="social">
                            <ul class="inline-mode">
                                <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="https://plus.google.com/u/4/102551568188987403300"><i class="fa fa-google-plus"></i></a></li>
                                <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/vsoftlimited"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a></li>
                                <li class="social-network rss"><a title="Connect us on Instagram" target="_blank" href="https://github.com/VSoft-Tech"><i class="fa fa-github"></i></a></li>
                                <li class="social-network instagram"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>


                </div>
                <h4 style="color: white;">Subscribe with us</h4>
                <form method="post">
                    <?php
                    if(isset($_POST['submit'])){
                        $name=$_POST['name'];
                        $email=$_POST['email'];

                        $sql="INSERT INTO subscribers(name,email) VALUES('$name','$email')";
                        $query=mysqli_query($conn,$sql);
                        if($query){
                            require 'PHPMailer/PHPMailerAutoload.php';

                            $mail = new PHPMailer;
                            //production for  SMTP for GMAIL
                            $mail->Mailer = "smtp";
                            $mail->Host = 'smtp.gmail.com';
                            $mail->SMTPSecure = 'ssl';
                            $mail->SMTPAuth = true;
                            $mail->Username = 'jecihjoy@gmail.com';
                            $mail->Password = 'mmust.ac.ke';
                            $mail->SMTPSecure = 'tls';
                            $mail->Port = 587;
                            $mail->setFrom('jecihjoy@gmail.com');
                            $mail->addAddress('jecihjoy23@gmail.com');
                            $mail->isHTML(true);

                            $mail->Subject = 'VSOFT Contact Us Message';
                            $mail->Body = 'Dear Sir/Madam, new member '.$name.'email '.$email.'has subscribed to VSoft.<br><br>';
//                      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                            if (!$mail->send()) {
                                echo 'Mailer Error: ' . $mail->ErrorInfo;
                                echo"<div class='alert alert-danger'>failed</div>".mysqli_error($conn);
//
                            }
                            else {
                                echo "<div class='alert alert-success'>Email has been sent successfully</div>";
                            }

                        }else{
                            echo"<div class='alert alert-danger'>failed</div>".mysqli_error($conn);
                        }
                        mysqli_close($conn);
                    }
                    ?>
                    <div class="contact-form-box">
                        <div class="form-selector">
                            <input class="form-control" style="margin-bottom: 10px; border-radius: 3px" name="name" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-selector">
                            <input class="form-control" style="margin-bottom: 10px; border-radius: 3px" name="email" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-selector">
                            <button class="btn btn-sm btn-info" class="button" name="submit" type="submit"><i class="fa fa-send"></i>Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-coppyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12 coppyright"> Copyright &copy; 2017 <a href="#"> VSoft </a>. All Rights Reserved. </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="payment">
                        <ul>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="totop"> </a>
<!-- End Footer -->

<!-- End Footer -->
<!-- mobile menu -->
<div id="jtv-mobile-menu" class="jtv-mobile-menu">
    <ul>
        <li class=""><a href="index.php">Home</a></li>
        <li><a href="about_us">About Us</a></li>
        <li><a href="products">Products</a></li>
        <li class=""><a href="services">Services</a></li>
        <li><a href="pricing">Pricing</a>
        </li>
        <li><a href="contact_us">Contact</a>
        </li>
    </ul>
</div>

<!-- jquery js -->


<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- owl.carousel.min js -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>

<!-- Mean Menu js -->
<script type="text/javascript" src="js/jquery.meanmenu.min.js"></script>

<!--jquery-ui.min js -->
<script type="text/javascript" src="js/jquery-ui.js"></script>

<!-- countdown js -->
<script type="text/javascript" src="js/countdown.js"></script>

<!-- wow JS -->
<script type="text/javascript" src="js/wow.min.js"></script>

<!-- mobile menu JS -->
<script type="text/javascript" src="js/jtv-mobile-menu.js"></script>

<!-- main js -->
<script type="text/javascript" src="js/main.js"></script>

<!-- nivo slider js -->
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

</body>

</html>