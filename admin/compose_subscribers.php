<?php include_once("../include/dbconnect.php");
include_once("include/header.php");
$id=$_GET['user_id'];
if ($id !=""){
    $mail=mysqli_query($conn,"SELECT email FROM subscribers WHERE id='$id' LIMIT 1"); // WHERE id='$id' LIMIT 1
    $row=mysqli_fetch_assoc($mail);
}
else{
    header('Location: view_subscribers.php');
}

?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Compose Mail</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- row -->
        <div class="row">
            <!-- Left sidebar -->
            <div class="col-md-12">
                <div class="white-box">
                    <div class="row">
                        <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12 inbox-panel">
                            <div> <a href="#" class="btn btn-custom btn-block waves-effect waves-light">Compose</a>
                                <div class="list-group mail-list m-t-20"> <a href="#" class="list-group-item active">Inbox <span class="label label-rouded label-success pull-right">5</span></a> <a href="#" class="list-group-item ">Starred</a> <a href="#" class="list-group-item">Draft <span class="label label-rouded label-warning pull-right">15</span></a> <a href="#" class="list-group-item">Sent Mail</a> <a href="#" class="list-group-item">Trash <span class="label label-rouded label-default pull-right">55</span></a> </div>
                                <h3 class="panel-title m-t-40 m-b-0">Labels</h3>
                                <hr class="m-t-5">
                                <div class="list-group b-0 mail-list"> <a href="#" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Work</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-warning m-r-10"></span>Family</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-purple m-r-10"></span>Private</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-danger m-r-10"></span>Friends</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-success m-r-10"></span>Corporate</a> </div>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 mail_listing">
                            <h3 class="box-title">Reply to all subscribers</h3>
                            <?php
                            if(isset($_POST['submit'])){
                                $to  = $_POST['to'];
                                $subject = $_POST['subject'];
                                $message   = $_POST['message'];
                                require 'PHPMailer/PHPMailerAutoload.php';
                                $mail = new PHPMailer;
                                $mail->Mailer = "smtp";
                                $mail->Host = 'smtp.gmail.com';
                                $mail->SMTPSecure = 'ssl';
                                $mail->SMTPAuth = true;
                                $mail->Username = 'vsoftlimited@gmail.com';
                                $mail->Password = 'vsoft@2017';
                                $mail->SMTPSecure = 'tls';
                                $mail->Port = 587;
                                $mail->setFrom('vsoftlimited@gmail.com', 'VSOFT TECHNOLOGIES');
                                $mail->addAddress($to);
                                $mail->isHTML(true);

                                $mail->Subject = $subject;
                                $mail->Body = $message;

                                if (!$mail->send()) {

                                    echo "<div class='alert alert-danger'>
                            <button class='close' data-dismiss='alert'>&times;</button>Message could not be sent.</div>";

                                }
                                else {
                                    echo "<div class='alert alert-success'>

                            <button class='close' data-dismiss='alert'>&times;</button>Email successfuly sent </div>";
                                }
                                foreach($email as $val => $uemail){
                                    $email = $uemail;
                                    $mail->addAddress($email);
                                    $mail->MsgHTML("Dear $email <br>".$body);
                                    $mail->isHTML(true);
                                    $mail->Subject = $subject;
                                    $mail->Body = $body;

                                    if ($mail->send()) {
                                                                echo "<div class='alert alert-success'>
                                    <button class='close' data-dismiss='alert'>&times;</button>Email successfuly sent </div>";
                                                            }
                                                            else {
                                                                echo "<div class='alert alert-danger'>
                                    <button class='close' data-dismiss='alert'>&times;</button>Email could not be sent.</div>";
                                                            }
                                                        }
                                                        mysqli_close($conn);
                                                    }
                                                    ?>
                            <form method="post" method="post">
                            <div class="form-group">
                                <input class="form-control" id="to" name="to" placeholder="To:" value="<?php echo $row['email'];?>">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="subject" name="subject" placeholder="Subject:">
                            </div>
                            <div class="form-group">
                                <textarea class="textarea_editor form-control" id="message" name="message" rows="15" placeholder="Enter text ..."></textarea>
                            </div>
                            <h4><i class="ti-link"></i> Attachment</h4>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            <hr>
                            <button name="submit" type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                            <button class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <?php include_once("include/footer.php");?>
