<?php include_once("include/dbconnect.php");
include_once("include/header.php");
?>

  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
           
            <li><strong>Contact Us</strong></li>
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
                    <li style="text-transform: uppercase;"><?php echo $row["tech"] ?></li>
                   </tr>
                </table>
                </ul>
                </div>
				<?php } ?>
                <?php } ?>
          </div>
              </div>
              <div class="col-md-7">
                <?php
                if(isset($_POST['submit'])){
                  $fname=$_POST['fname'];
                  $lname=$_POST['lname'];
                  $email=$_POST['email'];
                  $message=$_POST['message'];

                  $sql="INSERT INTO contact(fname,lname,email,message) VALUES('$fname','$lname','$email','$message')";
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
                                $mail->Body = 'Dear admin, a new member ' .$fname .'  ' .$lname .'  and email  ' .$email .'  has send  a message to VSoft';

                                if (!$mail->send()) {
                                echo 'Mailer Error: ' . $mail->ErrorInfo;
                                    echo"<div class='alert alert-danger'>failed</div>".mysqli_error($conn);
        //
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

             <form  method="post">
                <h3 class="page-subheading" style="margin-top = 10px">SEND US A QUICK MESSAGE</h3>
                <div class="contact-form-box">
                  <div class="form-selector">
                    <label >First Name</label>
                    <input style="border-radius: 3px" name="fname" type="text" class="form-control input-sm" id="name" />
                  </div>
                   <div class="form-selector">
                    <labhel>Last Name</labhel>
                    <input style="border-radius: 3px" name="lname" type="text" class="form-control input-sm" id="name" />
                  </div>
                  <div class="form-selector">
                    <label >Email</label>
                    <input required = 'required' style="border-radius: 3px" name="email" type="text" class="form-control input-sm" id="email" />
                  </div>
                  <div class="form-selector">
                    <label>Message</label>
                    <textarea name="message" class="form-control input-sm" rows="10" id="message"></textarea>
                  </div>
                  <div class="form-selector">
                    <button class="button" name="submit"  type="submit"><i class="fa fa-send"></i>&nbsp; <span>Send Message</span></button>
                    &nbsp; <a href="#" class="button">Clear</a> </div>
                </div>
                </form>
</div>
<div class="col-md-2">

</div>
              </div>
              <div class="col-sm-2"></div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>

<?php include_once("include/footer.php")?>