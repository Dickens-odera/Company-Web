<?php   include_once("include/header.php");
    include_once("../include/dbconnect.php");?>

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
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">Our contact information</div>
                        <div class="panel-body">
                            <?php
                            $sql = "SELECT * FROM contact_info";
                            $result = mysqli_query($conn, $sql);
                            ?>

                            <div class="table-responsive">
                                <table class="table table-striped table-condensed table-hover dataTables" >
                                    <thead>
                                    <tr>
                                        <th><strong>Number</strong></th>
                                        <th><strong>box</strong></th>
                                        <th><strong>Telephone</strong></th>
                                        <th><strong>Telephone</strong></th>
                                        <th><strong>Email</strong></th>
                                        <th><strong>Location</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    ?>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['box'] ?>
                                    <td><?php echo $row['numb1'] ?></td>
                                    <td><?php echo $row['numb2'] ?>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['loc'] ?>
                                    <td>
                                        <a class="btn btn-sm btn-info" href="update_contactinfo.php?user_id=<?php echo $row['id']?>">Update</a>
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

<?php   include_once("include/footer.php"); ?>