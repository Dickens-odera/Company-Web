<?php include_once("include/dbconnect.php");
include_once("include/header.php");
?>

  <!-- end header -->

     <!-- Breadcrumbs -->

  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>

            <li><strong>About Us</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End -->

  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-12">

          <div id="contact" class="page-content page-contact">

            <div class="row">
              <div class="col-md-3" id="contact_form_map">

              <div class="page-title">
          </div>

         <div>
            <h4 id="message-box-conact">Find Us...</h4>

            <?php
            $sql = "SELECT * FROM contact_info";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {

             ?>
                <br/>
                <ul class="store_info">
                  <li><i class="fa fa-home"></i><?php echo $row["box"] ?></li>
                  <li><i class="fa fa-phone"></i><span><?php echo $row["numb1"] ?></span></li>
                  <li><i class="fa fa-fax"></i><span><?php echo $row["numb2"] ?></span></li>
                  <li><i class="fa fa-envelope"></i><span><a href="mailto:support@justtheme.com"><?php echo $row["email"] ?></a></span></li>
                </ul>
                </br>

                <?php } ?>
                <?php } ?>
          </div>

          <div style="background-color: red; padding: 20px">
          <div class="page-title">
            <h3 style="border-bottom: 1px dotted white ;">Core Technologies</h3>
          </div>
          <?php
                    $sql = "SELECT * FROM technologies";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                    ?>

                <br/>
                <div>
                <ul style="color: white" class = "store_info">
                 <table style="width:100%">
                  <tr>
                    <li style="text-transform: uppercase;"><?php echo $row["tech"] ?></li>
                   </tr>
                </table>
                </ul>
                </div>
				<?php } ?>
                <?php } ?>
              </div>
              </div>

            <div>
                <p style="color:darkslateblue">  We have been established as a software development company based in western Kenya. We boast of proven ability for development
                    of high-performance <br> software solutions. We believe in innovation, best practices, employee recognition and delivering high levels
                    of customer satisfaction. As a show of commitment <br> to innovation we consistently provide our customers with new enhancements to confirm a solid dedication to help them achieve success.
                </p>

              <div class="col-md-5">
              <p><img src="images/tab/about-us.jpg" alt="" /></p>
               <h4>Vision</h4>
                      <p>To be a leading software company in the world providing quality technological services and products that provide
                    equal opportunity to all while improving the livelihood of the society.
                    </p><hr>
                          </br>
                       <h4>Mision</h4>
                      <p>To achieve excellence in knowledge dissemination, development and implementation of Computing and Information and Communication Technologies through quality teaching, research,
                       consultancy and corporate social outreach programmes.</p><hr>
                        </br>
                       <h4>Core Values</h4>
                      <p>In order to achieve our vision and execute our mission, VSOFT upholds the following values;</p>
                      <ul style="list-style: none" >
                      <li><i class="glyphicon glyphicon-ok" style="color: blue"></i>   Professionalism</li>
                      <li><i class="glyphicon glyphicon-ok" style="color: blue" ></i>  Teamwork</li>
                      <li><i class="glyphicon glyphicon-ok" style="color: blue"></i>  Accountability</li>
                      <li><i class="glyphicon glyphicon-ok" style="color: blue"></i>  Integrity</li>
                      <li><i class="glyphicon glyphicon-ok" style="color: blue"></i>  Quality</li>
                      <li><i class="glyphicon glyphicon-ok" style="color: blue"></i>  Zero tolerance on corruption</li>
                      </ul>

                  </div>
              <div class="col-md-4">
              <br><br>
                 <h4>Our Objectives</h4>
                      <p>To engage in professional analysis, design and development of quality software products and services while enhancing knowledge sharing and
                      new solutions for addressing local and global socio-economic and technological issues</p><hr><br>

                      <p>To provide high quality software products to address cross-cutting socio-economic and technological challenges.</p><hr><br>
                      <p>To provide highly professional technological services to the human race without discrimination.</p><hr><br>
                      <p>To endeavor to serve our clients efficiently, effectively and with .</p><hr><br>
                      <p>To guarantee quality services, processes and products.</p><hr><br>

              </div>
                </div>

              </div>

            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
  <!-- Main Container End -->
   <!-- our clients Slider -->

<?php include_once("include/footer.php")?>