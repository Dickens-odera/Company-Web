<?php include_once("include/header.php")?>
  <!-- end header --> 
  <!-- Main Slider Area -->
  <div class="main-slider-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12"> 
          <!-- Main Slider -->
          <div class="main-slider">
            <div class="slider">
              <div id="mainSlider" class="nivoSlider slider-image"> <img src="images/slider/latest.jpg" alt="main slider" title="#htmlcaption1"/>
              <img src="images/slider/whychoseus.jpg" alt="main slider" title="#htmlcaption2"/>
              <img src="images/slider/bg2.jpg" alt="main slider" title="#htmlcaption3"/></div>

               <!-- Slider Caption 1 -->
              <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                  <?php
                $sql = "SELECT * FROM slider where slider.id = 1";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {

                 ?>
                <div class="slider-progress"></div>
                <div class="slide-text">
                  <div class="middle-text">
                    <div class="cap-dec">
                      <h1 style="margin-top: -50px" class="cap-dec wow fadeInUp animated" data-wow-duration="2.3s" data-wow-delay="0s"><?php echo $row['captionA']?></h1>
                      <h2 class="cap-dec wow fadeInUp animated" data-wow-duration="1.1s" data-wow-delay="0s"><?php echo $row['captionB']?></h2>
                      <h1 class="cap-dec wow fadeInUp animated" data-wow-duration="2.3s" data-wow-delay="0s"><?php echo $row['captionC']?></h1>
                    </div>
                    <div class="cap-readmore wow zoomInRight" data-wow-duration=".9s" data-wow-delay=".5s"> <a href="products.php">Read More</a> </div>
                  </div>
                </div>
                <?php } ?>
                <?php } ?>
              </div>
                <!-- Slider Caption 3 -->
              <div id="htmlcaption3" class="nivo-html-caption slider-caption-1">
              <?php
                $sql = "SELECT * FROM slider where slider.id = 3";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {

                 ?>
                <div class="slider-progress"></div>
                <div class="slide-text">
                  <div class="middle-text"  >
                    <div class="cap-dec">
                      <h1 style="margin-top: -50px; color: #080808;font-family: cursive; color: royalblue" class="cap-dec wow fadeInUp animated" data-wow-duration="2.3s" data-wow-delay="0s"><?php echo $row['captionA']?></h1>
                      <h2 style="color: #080808; color: royalblue;" class="cap-dec wow fadeInUp animated" data-wow-duration="1.1s" data-wow-delay="0s"><?php echo $row['captionB']?></h2>
                      <h1 style="color: #080808; color: royalblue; font-family: cursive" class="cap-dec wow fadeInUp animated" data-wow-duration="2.3s" data-wow-delay="0s"><?php echo $row['captionC']?></h1>
                    </div>
                    <div class="cap-readmore wow zoomInRight" data-wow-duration=".9s" data-wow-delay=".5s"> <a href="products.php">Read More</a> </div>
                  </div>
                </div>
                <?php } ?>
                <?php } ?>
              </div>

              <div id="htmlcaption1" class="nivo-html-caption slider-caption-2">
                <div class="slider-progress"></div>
                <div class="slide-text">
                  <div class="middle-text">
                    <div class="cap-dec">
                      <h2 class="cap-dec wow fadeInUp animated" data-wow-duration="1.1s" data-wow-delay="0s">Empowering strategic markets We Develop Business</h2>
                      <h1 class="cap-dec wow fadeInUp animated" data-wow-duration="2.3s" data-wow-delay="0s">Applications & products</h1>
                      <p class="cap-dec wow lightSpeedIn hidden-xs" data-wow-duration="1.5s" data-wow-delay="0s"> Loren ipsum dolorsit amet, consectetur adipisicing, sed do eiusmod.</p>
                    </div>
                    <div class="cap-readmore wow zoomInRight" data-wow-duration=".9s" data-wow-delay=".5s"> <a href="#">Shop Now</a> </div>
                  </div>
                </div>
              </div>
              <!-- Slider Caption 2 -->
              <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
               <?php
                $sql = "SELECT * FROM slider where slider.id = 2";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {

                 ?>
                <div class="slider-progress"></div>
                <div class="slide-text slide-text-2">
                  <div class="middle-text">
                    <div class="cap-dec">
                      <h2 class="cap-dec wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0s"><?php echo $row['captionA']?></h2>
                      <h1 class="cap-dec wow fadeInUp" data-wow-duration="2.3s" data-wow-delay="0s"><?php echo $row['captionB']?></h1>
                      <p class="cap-dec wow lightSpeedIn hidden-xs" data-wow-duration="1.5s" data-wow-delay="0s"><?php echo $row['captionC']?></p>
                    </div>
                  </div>
                </div>
                <?php } ?>
                <?php } ?>
              </div>


            </div>
          </div>
          <!-- End Main Slider --> 
          
        </div>
      </div>
    </div>
  </div>
  <!-- End Main Slider Area -->
  <div style="margin-left: 60px" class="container">

      <!-- main container -->
      <div class="home-tab">
          <div class="container">
              <div style="margin-left: 60px" class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <!-- Home Tabs  -->
                      <div class="container">
                          <div style="margin-left: 60px" class="tab-info">
                              <!--                                                  <h3 class="new-product-title pull-left">Products category</h3>-->
                              <ul class="nav home-nav-tabs home-product-tabs new-product-title pull-left">
                                  <li class="active"  ><a href="#who" data-toggle="tab" aria-expanded="false">Who We Are </a></li>
                                  <li style="border-left: thin solid #ff0000"> <a href="#women" data-toggle="tab" aria-expanded="false">Why Choose Us</a> </li>
                                  <li style="border-left: thin solid #ff0000"> <a href="#men" data-toggle="tab" aria-expanded="false">Our Technologies</a> </li>
                              </ul>
                              <!-- /.nav-tabs -->
                          </div>
                      </div>

                      <div id="productTabContent" class="tab-content">



                          <div class="tab-pane active" id="who">
                              <div class="product-item col-md-4 col-sm-6">
                                  <div class="">
                                      <p><img class="pull-left" style="width: 350px; height: 240px;" src="images/tab/tab-1.png" alt="" /></p>
                                  </div>
                              </div>
                              <div class="product-item col-md-8 col-sm-6">
                                  <div class="">
                                      <p>VSOFT is a new class of software concern committed to catalyzing the competence and competitiveness of its clients by
                                          helping them succeed through the power of information technology. Driven by the credo that solutions are effective only when
                                          organizational needs are accurately ascertained and partly addressed; VSOFT looks upon itself as an intergral part of it's client
                                          organization.We have varied and extensive expertise in software development, web portal development, mobile develoment and application
                                          software development among others.</p><hr>
                                      <p> VSOFT come into existence with a pioneering vision of "Bringing people and Computer together" and help to build requisitetalent for
                                          the emerging information based economy. VSOFT has a strong conviction in the power of internetworking skills. We believe the internet
                                          is a revolutionary, interractive medium which if used skillfully can greatly enhance and improve your marketing effectiveness as well as
                                          increase theefficiency of your business processes</p><hr>
                                      <p>VSOFT combines a worldwide reach with personalized service, offering a high degreeof personal involvement and commitment to meet all the
                                          special and specific requirements of our clients. We are a progressive group of professionals who deliver world class solutions to our clients.
                                          We recognize that the use of the internet for marketing your products and services can be challenging endeavor.At VSOFT we charter the cost</p><hr>
                                      <p>At VSOFT we listen to our clients, we figure the best methods of achieving our client's goals. We offer cost-effective and innovative solutions
                                          based on our client's inputs. We always deliver what we promise</p><hr>

                                  </div>
                              </div>
                          </div>



                          <div  class="tab-pane fade" id="women">
                              <div  class="product-item col-md-4 col-sm-6">
                                  <div class="">
                                      </br></br>
                                      <p><img class="pull-left" style="width: 350px; height: 240px;" src="images/slider/why.jpg" alt="" /></p>
                                  </div>
                              </div>
                              <div  class="product-item col-md-8 col-sm-6">
                                  <div class="">
                                      <h4>Loyalty</h4>
                                      <p>We promise to deliver valuable solutions to our esteemed customers </p>
                                      </br>
                                      <h4>Profitable Growth</h4>
                                      <p>We provide quality and pocket friendly solutions for institutions, organizations and corporations with exemplary support services.</p>
                                      </br>
                                      <h4>Customer satisfaction</h4>
                                      <p>Our knowledge and expertise has resulted in added value to our ever-growing list of satisfied clients.</p>
                                      <h4>Improving Always</h4>
                                      <p>Through constant innovation, VSOFT is pushing the boundaries of the software universe.</p>
                                      </br>
                                     </div>
                              </div>

                          </div>

                          <div  class="tab-pane fade" id="men">

                              <div   class="product-item col-md-4 col-sm-6" >
                                  <div class="">
                                        <p><img class="pull-left" style="width: 350px; height: 240px;" src="images/slider/Drawing1.jpg" alt="" /></p>
                                      </div>
                                    </div>
                                    <div class="product-item col-md-8 col-sm-6">
                                      <h4>PHP $ PHP frameworks</h4>
                                        <p>We use PHP frameworks such as Codeigniter and Laravel to create both backends and fron ends of our applications.</p>
                                         <h4>Javascript && Javascript Frameworks</h4>
                                        <p>We use Javascripts frameworks such as Node, Hapi Js, Angular Js, Ember and react to create both backends and fron ends of our applications.</p>
                                         <h4>JAVA</h4>
                                        <p>We use java spring framework to create backends of our clients applications</p>
                                        <h4>ANDROID</h4>
                                        <p>We use Android, Java2,xamarin, Ionic framework, Cordova, NativeScript to develop cross platform mobile applications</p>
                                        <h4>MSSQL, MySQL</h4>
                                        <p>We use database tools and technologies to design and Implement big databases as per clients requests</p>
                                         </br>
                                        </div>
                              </div>

                          </div>
                      </div>
                  </div>

                  <!-- prom banner-->
<!--                  <div class="jtv-promotion">-->
<!--                      <div class="container">-->
<!--                          <div class="row">-->
<!--                              <div class="col-md-4 col-sm-5 col-xs-12">-->
<!--                                  <div class="add-banner wow animated fadeInUp animated"> <a href="#"><img src="images/home-banner4.jpg" alt="banner"></a> </div>-->
<!--                              </div>-->
<!--                              <div class="col-md-8 col-sm-7 col-xs-12">-->
<!--                                  <div class="wrap">-->
<!--                                      <div class="wow animated fadeInRight animated">-->
<!--                                          <div class="box jtv-custom">-->
<!--                                              <div class="box-content">-->
<!--                                                  <div class="promotion-center">-->
<!--                                                      <p class="text_medium">Limited Time Only</p>-->
<!--                                                      <div class="text_large">-->
<!--                                                          <div class="theme-color">45% off</div>-->
<!--                                                          Flash Sale</div>-->
<!--                                                      <p class="text_small">Fashion for all outerwear, shirt &amp; accessories</p>-->
<!--                                                  </div>-->
<!--                                              </div>-->
<!--                                          </div>-->
<!--                                      </div>-->
<!--                                  </div>-->
<!--                              </div>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                  </div>-->
              </div>
          </div>

          <!-- Latest news start -->
      </div>
  </div>
</div>
<!-- our clients Slider -->

<!-- Footer -->
<?php include_once("include/footer.php")?>


