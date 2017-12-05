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

            <li><strong>Pricing</strong></li>
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

            <h2>Contact Us</h2>
          </div>
          <div>
            <div id="message-box-conact">Find Us...</div>

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
                    <li><?php echo $row["tech"] ?></li>
                   </tr>
                </table>
                </ul>
                </div>
				<?php } ?>
                <?php } ?>
              </div>
              </div>
              <div class="col-md-7">
              <form method="post">
                <h3 class="page-subheading">Make an enquiry</h3>

                <?php
                if(isset($_POST['submit'])){
                     $fname=$_POST['fname']; 
                  $lname = $_POST['lname'];
                  $phone=$_POST['phone'];
                  $email=$_POST['email'];
                  $organization=$_POST['organization'];
                  $employees=$_POST['employees'];
                  $new_software=$_POST['new_software'];
                  $old_software=$_POST['old_software'];

                  $sql="INSERT INTO pricing(fname,lname,phone,email,organization,emp_number,new_software,old_software) VALUES('$fname','$lname','$phone','$email','$organization',$employees,'$new_software','$old_software')";
                  $query=mysqli_query($conn,$sql);
                  if($query){
                                require 'PHPMailer/PHPMailerAutoload.php';

                                $mail = new PHPMailer;
                                //production for  SMTP for GMAIL
                                $mail->Mailer = "smtp";
                                $mail->Host = 'smtp.gmail.com';
                                $mail->SMTPSecure = 'ssl';
                                $mail->SMTPAuth = true;
                                $mail->Username = 'vsoftlimited@gmail.com';
                                $mail->Password = 'vsoft@2017';
                                $mail->SMTPSecure = 'tls';
                                $mail->Port = 587;
                                $mail->setFrom('jecihjoy@gmail.com');
                                $mail->addAddress('vsoftlimited@gmail.com');
                                $mail->isHTML(true);

                                $mail->Subject = 'VSOFT New Message';
                                $mail->Body = 'Dear admin, a new client ' .$fname .'  ' .$email.'  of organization  ' .$organization .'  has placed a quotation';

                                if (!$mail->send()) {
                                echo 'Mailer Error: ' . $mail->ErrorInfo;
                                    echo"<div class='alert alert-danger'>failed</div>".mysqli_error($conn);
                                }
                                else {
                                    echo "<div class='alert alert-success'>Email has been sent successfully</div>";
                                }

                                $mail = new PHPMailer;
                                //production for  SMTP for GMAIL
                                $mail->Mailer = "smtp";
                                $mail->Host = 'smtp.gmail.com';
                                $mail->SMTPSecure = 'ssl';
                                $mail->SMTPAuth = true;
                                $mail->Username = 'vsoftlimited@gmail.com';
                                $mail->Password = 'vsoft@2017';
                                $mail->SMTPSecure = 'tls';
                                $mail->Port = 587;
                                $mail->setFrom('vsoftlimited@gmail.com');
                                $mail->addAddress($email);
                                $mail->isHTML(true);

                                $mail->Subject = 'VSoft Thank You';
                                $mail->Body = 'Thank you for contacting us, we will get back to you soonest';
                                $mail->send();

                          }else{
                            echo"<div class='alert alert-danger'>failed</div>".mysqli_error($conn);
                          }
                          mysqli_close($conn);
                        }
                        ?>
                <div class="contact-form-box">
                  <div class="form-selector">
                    <label>First Name</label>
                    <input style="border-radius: 3px" name="fname" type="text" class="form-control input-sm" id="fname" />
                  </div>
                  <div class="form-selector">
                    <label>Last Name</label>
                    <input style="border-radius: 3px" name="lname" type="text" class="form-control input-sm" id="lname" />
                  </div>
                  <div class="form-selector">
                    <label>Phone</label>
                    <input  style="border-radius: 3px" name="phone" type="text" class="form-control input-sm" id="phone" />
                  </div>
                  <div class="form-selector">
                    <label>Email</label>
                    <input style="border-radius: 3px" name="email" type="text" class="form-control input-sm" id="email" />
                  </div>
                  <div class="form-selector">
                    <label>Organization</label>
                    <input style="border-radius: 3px" name="organization" type="text" class="form-control input-sm" id="organization" />
                  </div>
                  <div class="form-selector">
                    <label>Number Of Employees</label>
                    <select class="form-control" style="border-radius: 3px" name="employees">
                    <option value="">Select </option>
                    <option value="1-10">1-10</option>
                    <option value="10-20">10-20</option>
                    <option value="20-50">20-50</option>
                    <option value="50-100">50-100</option>
                    <option value="100>>">100>></option>
                    </select>
                  </div>
                  <div class="form-selector">
                  <div class="form-group">
                   <label>Select Service/product</label>
                    <select class="form-control" style="border-radius: 3px" id = "new_software" name="new_software">
                    <option value="">Select ....</option>
                    <option value="training">IT training and consultancy</option>
                    <option value="helpdesk">Helpdesk support and maintainance</option>
                    <option value="recovery">System and data recovery</option>
                    <option value="analytics">Data Analytics</option>
                    <option value="desktop">Desktop Application</option>
                    <option value="mobile">Mobile application</option>
                    <option value="ecommerce">E-commerce applications</option>
                    <option value="web">Web Applications</option>
                    </select>
                  </div>
                  </div>
                  <div class="form-selector">
                    <label>Current System</label>
                    <textarea name="old_software" class="form-control input-sm" rows="10" id="old_soft" ></textarea>
                  </div>
                  <div class="form-selector">
                    <button class="button" name="submit" type="submit"><i class="fa fa-send"></i>&nbsp; <span>Send Message</span></button>
                    &nbsp; <a href="pricing.php" class="button">Clear</a> </div>
                </div>
                </form>
              </div>
              <div class="col-md-2"></div>
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