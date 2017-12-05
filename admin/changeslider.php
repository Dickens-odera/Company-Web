
<?php   include_once("include/header.php");
include_once("../include/dbconnect.php");?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"></h4>
            </div>

            <!-- /.col-lg-12 -->
        </div>
        <div class="col-md-6">
            <div class="white-box">
                <div class="row">
                    <?php
                        if(isset($_POST['submit'])) {
                            move_uploaded_file($_FILES['image']['tmp_name'],"../images/slider/".$_FILES['image']['name']);
                            $slider = $_POST['slider'];
                            $cap1 = $_POST['cap1'];
                            $cap2 = $_POST['cap2'];
                            $cap3 = $_POST['cap3'];
                            $image = $_FILES['image']['name'];

                            if($slider === 'slider1') {

                                $sql = "UPDATE slider SET captionA = '$cap1', captionB = '$cap2', captionC = '$cap3', image = '$image'  WHERE id = 1";

                            }else if($slider === 'slider2'){
                                $sql = "UPDATE slider SET captionA = '$cap1', captionB = '$cap2', captionC = '$cap3', image = '$image'  WHERE id = 2";

                            }else{
                                $sql = "UPDATE slider SET captionA = '$cap1', captionB = '$cap2', captionC = '$cap3', image = '$image'  WHERE id = 3";

                            }
                            $result = mysqli_query($conn, $sql);
                            if($result){
                                echo "<div class='alert alert-success'>
                                <button class='close' data-dismiss='alert'>&times;</button>Successfully Updated</div>";
                            }else{
                                echo 'update not successfull'.mysqli_error($conn);
                            }
                            mysqli_close($conn);
                        }

                        ?>
                        <form method="post" enctype="multipart/form-data" class="floating-labels ">
                            <h4><strong>Change Slider</strong></h4></br>
                                <div class="form-group m-b-40">
                                    <select class="form-control p-0" id="input6" name="slider" required>
                                        <option></option>
                                        <option value="slider1">slider 1</option>
                                        <option value="slider2">slider 2</option>
                                        <option value="slider3">slider 3</option>
                                    </select><span class="highlight"></span> <span class="bar"></span>
                                    <label for="input6">select slider ...</label>
                                </div>
                                <div class="form-group m-b-40">
                                    <input type="text" class="form-control" name="cap1" id="input1" required><span class="highlight"></span> <span class="bar"></span>
                                    <label for="input1">Caption A</label>
                                </div>
                                <div class="form-group m-b-40">
                                    <input type="text" class="form-control" name="cap2" id="input4" required><span class="highlight"></span> <span class="bar"></span>
                                    <label for="input2">Caption B</label>
                                </div>
                                <div class="form-group m-b-40">
                                    <input type="text" class="form-control" name="cap3" id="input4" required><span class="highlight"></span> <span class="bar"></span>
                                    <label for="input4">Caption C</label>
                                </div>
                            <h6><i class="ti-link"></i> Attachment image</h6>
                            <div class="fallback">
                                <input name="image" type="file" multiple />
                            </div></br>
                                <button name="submit" type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i>Update</button>
                                <button class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                            <hr>

                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php   include_once("include/footer.php");