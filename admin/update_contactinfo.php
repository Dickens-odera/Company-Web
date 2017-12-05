<?php   include_once("include/header.php");
include_once("../include/dbconnect.php");

?>
<?php
$id=$_GET['user_id'];
if ($id !=""){
    $mail=mysqli_query($conn,"SELECT * FROM contact_info WHERE id='$id' LIMIT 1");
    $row=mysqli_fetch_assoc($mail);
}
else{
    header('Location: ContactInfo.php');
}
?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Starter Page</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-md-6">
            <div class="white-box">
                <h3 class="box-title m-b-0">Update Contact Information</h3>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <?php
                        if(isset($_POST['submit'])){
                            $box = $_POST['box'];
                            $numb1 = $_POST['numb1'];
                            $numb2 = $_POST['numb2'];
                            $email = $_POST['email'];
                            $location = $_POST['location'];

                            $sql="UPDATE contact_info SET box = '$box', numb1 = '$numb1', numb2 = '$numb2', email = '$email', loc = '$location' WHERE id = '$id'";
                           $result = mysqli_query($conn, $sql);
                            if($result){
                                echo "<div class='alert alert-success'>
                                <button class='close' data-dismiss='alert'>&times;</button>Successfully Updated</div>";
                            }else{
                                echo 'update not successfull';
                            }
                            mysqli_close($conn);
                        }

                        ?>
                        <form method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="box" id="exampleInputEmail1" value="<?php echo $row['box']?>" placeholder="Enter Box">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="numb1" id="exampleInputEmail1" value="<?php echo $row['numb1']?>" placeholder="Enter Number1">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="numb2" id="exampleInputEmail1" value="<?php echo $row['numb2']?>" placeholder="Enter Number2">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" id="exampleInputEmail1" value="<?php echo $row['email']?>" placeholder="Enter Location">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="location" id="exampleInputEmail1" value="<?php echo $row['loc']?>" placeholder="Enter Location">
                            </div>


                            <button type="submit" name="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                            <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php   include_once("include/footer.php");