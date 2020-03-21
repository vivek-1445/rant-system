<?php include "header.php"; ?>
<?php include "left-sider.php"; ?>
<?php
include '../database.php';




//Active (renter) user data
if(isset($_GET['id']))
{
    $id1 = $_GET['id'];
    $se1 = "select * from item_rent_details WHERE  `item_id`='$id1' AND `status`='active'";
    $fire1 = mysqli_query($database_connection, $se1);
}

if(isset($_GET['id']))
{
//All renter data view
    $id = $_GET['id'];
    $se = "select * from item_rent_details WHERE  `item_id`='$id' ";
    $fire = mysqli_query($database_connection, $se);
}

?>
<form action="renter-payment-data.php" method="post" >
    <div class="content-wrapper">
        <section class="content">

            <div class="box" style="width: 50%;">
                <?php while($w1 = mysqli_fetch_array($fire1)){ ?>
                    <?php
                    if(@$w1['status']=='active'){ ?>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="#"><i class="fa fa-circle text-success"></i>&nbsp;&nbsp;Active Renter</a>
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th>Renter name</th>
                                            <td><?php echo @$w1['renter_name']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Renter mobile</th>
                                            <td><?php echo @$w1['renter_mobile_number']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Renter address</th>
                                            <td><?php echo @$w1['renter_address']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Rent strat date</th>
                                            <td><?php echo @$w1['rent_start_date']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Renter deposite amount</th>
                                            <td><?php echo @$w1['deposite_amount']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td><?php echo @$w1['status']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Payment(Rent)</th>
                                            <td><input type="submit" value="Payment" name="payment" style="font-size:15px; color: #3c8dbc;"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </section>
    </div>
</form>
<form action="add-Proparty-renter-details.php" method="post" style="margin-top: -560px;">
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- /.box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><b><u>Uploded Item</u></b></h3>
                </div>
                <button style="font-size:15px; color: #3c8dbc; margin-left:90%;"><i class="fa fa-plus"></i>Add Renter </button>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Sr.no</th>
                            <th>Renter name</th>
                            <th>Renter mobile</th>
                            <th>Renter address</th>
                            <th>Rent strat date</th>
                            <th>Renter deposite amount</th>
                            <th>Status</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $counter = 0; ?>
                        <?php while($w1 = mysqli_fetch_array($fire)){ ?>
                        <tr>
                            <td><?php echo ++$counter; ?></td>
                            <td><?php echo @$w1['renter_name']; ?></td>
                            <td><?php echo @$w1['renter_mobile_number']; ?></td>
                            <td><?php echo @$w1['renter_address']; ?></td>
                            <td><?php echo @$w1['rent_start_date']; ?></td>
                            <td><?php echo @$w1['deposite_amount']; ?></td>
                            <td><?php echo @$w1['status']; ?>
                                <?php if(@$w1['status']=='active') { ?>
                                    <i class="fa fa-circle" style="font-size:15px;color:green"></i>
                                <?php }
                                else {?>
                                    <i class="fa fa-circle " style="font-size:15px;color:red"></i>
                                <?php } ?>
                            </td>
                            <td><a href="view-Proparty-renter-details.php?id=<?php echo $w1['item_id']; ?>" class="btn btn-danger btn-md delete-data"><span class="fa fa-trash-o"></span>Delete</a></td>
                            <td><a href="#?id=<?php echo $w1['item_id']; ?>" class="btn btn-primary btn-md edit-data"><span class="fa fa-edit"></span>Edit</a></td>
                            <?php } ?>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
    </div>
</form>
<?php include "footer.php"; ?>
<?php include "right-sider.php"; ?>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>