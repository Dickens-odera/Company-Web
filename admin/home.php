<?php include_once("../include/dbconnect.php");
include_once("include/header.php");
?>


        <!-- Left navbar-header end -->
        <!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"> </h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-primary">
                            <?php
                            $sql="SELECT * FROM subscribers";
                            $query=mysqli_query($conn,$sql);
                            $num_rows=mysqli_num_rows($query);
                            ?>
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo "$num_rows"?></div>
                                        <div>Subscribers!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="view_subscribers.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-primary">
                            <?php
                            $sql="SELECT * FROM pricing";
                            $query=mysqli_query($conn,$sql);
                            $num_rows=mysqli_num_rows($query);
                            ?>
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo "$num_rows"?></div>
                                        <div>New Orders!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="view_orders.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-primary">
                            <?php
                            $sql="SELECT * FROM contact";
                            $query=mysqli_query($conn,$sql);
                            $num_rows=mysqli_num_rows($query);
                            ?>
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo "$num_rows"?></div>
                                        <div>New Messages!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="view_messages.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-primary">
                            <?php
                            $sql="SELECT * FROM subscribers";
                            $query=mysqli_query($conn,$sql);
                            $num_rows=mysqli_num_rows($query);
                            ?>
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo "$num_rows"?></div>
                                        <div>New Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <!--row -->
                <!-- /.row -->
    <div class="row">
        <div class="col-md-7 col-lg-9 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Yearly Sales</h3>
                <ul class="list-inline text-right">
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #888;"></i>iPhone</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #e20b0b;"></i>iPad</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #f1c411;"></i>iPod</h5>
                    </li>
                </ul>
                <div id="morris-area-chart" style="height: 340px;"></div>
            </div>
        </div>
        <div class="col-md-5 col-lg-3 col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-theme-dark m-b-15">
                        <div class="row weather p-20">
                            <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6 m-t-40">
                                <h3>&nbsp;</h3>
                                <h1>VSOFT<sup>LTD</sup></h1>
                                <p class="text-white">Technologies</p>
                            </div>
                            <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6 text-right">
                                <br/>
                                <br/>
                                <b class="text-white">Branded</b>
                                <p class="w-title-sub">Software Company</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" >
                    <div class="bg-theme m-b-15"  style="height: 240px">
                        <div id="myCarouse2" class="carousel vcarousel slide p-20">
                            <!-- Carousel items -->
                            <div class="carousel-inner ">
                                <div class="active item">
                                    <h4 class="text-white">We have been established as a software development company based in <strong>western Kenya</strong>.<span class="font-bold"></span></h4>
                                    <div class="twi-user"><img src="../plugins/images/users/admin.png" alt="user" class="img-circle img-responsive pull-left">
                                        <h4 class="text-white m-b-0">Govinda</h4>
                                        <p class="text-white">Admin</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Orders</a></li>
                <li><a data-toggle="tab" href="#menu1">Subscribers</a></li>
                <li><a data-toggle="tab" href="#menu2">Messages</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="white-box">
                        <div class="">
                            <h2>List of all orders</h2>
                            <div class="">
                                <?php
                                $sql = "SELECT * FROM pricing";
                                $result = mysqli_query($conn, $sql);
                                ?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-condensed table-hover dataTables" >
                                        <thead>
                                        <tr>
                                            <th><strong>#</strong></th>
                                            <th><strong>Name</strong></th>
                                            <th><strong>Phone</strong></th>
                                            <th><strong>Email</strong></th>
                                            <th><strong>Organization</strong></th>
                                            <th><strong>Employees</strong></th>
                                            <th><strong>Required product</strong></th>
                                            <th><strong>Current System</strong></th>
                                            <th><strong>Action</strong></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        while($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        ?>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['fname'] ?> <?php echo $row['lname'] ?></td>
                                        <td><?php echo $row['phone'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['organization'] ?></td>
                                        <td><?php echo $row['emp_number'] ?></td>
                                        <td><?php echo $row['new_software'] ?></td>
                                        <td><?php echo $row['old_software'] ?></td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="compose_orders.php?user_id=<?php echo $row['id']?>">Reply</a>
                                            <a class="btn btn-sm btn-danger" href="?action = transview&id=<?php echo $row['id']?>&act=delete" onclick="return confirm('Are your sure you want to delete')">Delete</a>

                                        </td>
                                        </tbody>
                                        <?php
                                        echo "</tr>";

                                        }
                                        ?>


                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <div class="white-box">
                        <div class="">
                            <h2>List of all subscribers</h2>
                            <div class="">
                        <?php
                        $sql = "SELECT * FROM subscribers";
                        $result = mysqli_query($conn, $sql);
                        ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-condensed table-hover dataTables">
                                <thead>
                                <tr>
                                    <th><strong>#</strong></th>
                                    <th><strong>Name</strong></th>
                                    <th><strong>Email</strong></th>
                                    <th><strong>Action</strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tbody>

                                <?php
                                while($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                ?>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="compose_subscribers.php?user_id=<?php echo $row['id']?>">Reply</a>
                                    <a class="btn btn-sm btn-danger" href="?action = transview&id=<?php echo $row['id']?>&act=delete" onclick="return confirm('Are your sure you want to delete')">Delete</a>

                                </td>
                                </tbody>
                                <?php
                                echo "</tr>";

                                }
                                ?>
                                </tbody>
                            </table>
                        </div></div></div>
                    </div>
                </div>

                <div id="menu2" class="tab-pane fade">
                    <div class="white-box">
                        <div class="">
                            <h2 class="panel-heading">List of all messages received</h2>
                            <div class="">
                                <?php
                                $sql = "SELECT * FROM contact";
                                $result = mysqli_query($conn, $sql);
                                ?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-condensed table-hover dataTables" >
                                        <thead>
                                        <tr>
                                            <th><strong>#</strong></th>
                                            <th><strong>First Name</strong></th>
                                            <th><strong>Last Name</strong></th>
                                            <th><strong>Email</strong></th>
                                            <th><strong>Message</strong></th>
                                            <th><strong>Action</strong></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        while($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        ?>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['fname'] ?></td>
                                        <td><?php echo $row['lname'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['message'] ?></td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="compose_messages.php?user_id=<?php echo $row['id']?>">Reply</a>
                                            <a class="btn btn-sm btn-danger" href="?action = transview&id=<?php echo $row['id']?>&act=delete" onclick="return confirm('Are your sure you want to delete')">Delete</a>

                                        </td>
                                        </tbody>
                                        <?php
                                        echo "</tr>";

                                        }
                                        ?>


                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
            </div>

        </div>
</div>

<?php include_once("include/footer.php");?>