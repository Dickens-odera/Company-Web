
<?php   include_once("include/header.php");
include_once("../include/dbconnect.php");?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"> </h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                <ol class="breadcrumb">
                    <li><a href="#"> </a></li>
                    <li class="active"> </li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
<div class="col-md-6">
    <div class="white-box">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
            <?php
            if(isset($_POST['submit'])){
                $tech = $_POST['tech'];

                $sql = "INSERT INTO technologies VALUES (NULL, 'visual basics')";
                if (mysqli_query($conn, $sql)) {
                      echo "<div class='alert alert-success'>

                            <button class='close' data-dismiss='alert'>&times;</button>added successfully</div>";
                                }
                            else {

                            echo "<div class='alert alert-danger'>
                            <button class='close' data-dismiss='alert'>&times;</button>could not be added
                            </div>";
                            }

                    mysqli_close($conn);

            }
            ?>
                <form method="post"  class="floating-labels ">
                    <div class="form-group m-b-40">
                        <input type="text" name="tech" id = 'tect' class="form-control" id="input1" required><span class="highlight"></span> <span class="bar"></span>
                        <label for="input1">Add Technology</label>
                    </div>
                    <button type="submit" name = 'submit' class="btn btn-success waves-effect waves-light m-r-10">Add</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php   include_once("include/footer.php");