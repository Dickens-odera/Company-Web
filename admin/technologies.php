<?php   include_once("include/header.php");
include_once("../include/dbconnect.php");
$x = @$_GET['id'];
$y = @$_GET['act'];

if(@$_GET['act'] == "delete"){
    $sql = "delete from technologies where id='$x'" ;
    $result = mysqli_query($conn, $sql);
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
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-4">
                        <a class="btn btn-primary" href="addtech.php" type="button">Create New</a>
                    </div>

                </div></br>
                <div class="panel panel-success">
                    <div class="panel-heading">List of all our key technologies</div>
                    <div class="panel-body">
                        <?php
                        $sql = "SELECT * FROM technologies";
                        $result = mysqli_query($conn, $sql);
                        ?>

                        <div class="table-responsive">
                            <table class="table table-striped table-condensed table-hover dataTables" >
                                <thead>
                                <tr>
                                    <th><strong>Number</strong></th>
                                    <th><strong>Technology</strong></th>
                                    <th><strong>Action</strong></th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                while($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                ?>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['tech'] ?>
                                <td>
                                    <a class="btn btn-sm btn-info" href="#">Update</a>
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
