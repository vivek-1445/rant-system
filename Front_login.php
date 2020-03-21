<?php
include 'Front_header.php';
include 'database.php';
?>
<?php

if (isset($_POST['submit']))
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
   echo $compare_data = "select * from `Front-user` where `user_name`='$user_name' AND `password`='$password'";
    $compare_data1 = mysqli_query($database_connection,$compare_data);

    if ($compare_data1 == 1)
    {
        ?>
        <script type="text/javascript">
    window.location.href = "index.php ?>";
    </script>
        <?php } else {?>

           <?php  $msg = "Enter Valid User Name & password"; ?>

           <?php } ?>


<?php } ?>



    <section class="section bg-primary contact-section" id="next-section" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="index.php" method="post"  enctype="multipart/form-data" style="margin-top: -670px">
                             <h1 style="margin-left: 15px; color: #5190c7;">LOG IN</h1>
                        <span style="color: red;margin-left: 15px;"><?php echo @$msg;?></span>
                        <div class="col-md-8 form-group">
                                <label for="name"><b>User Name</b></label>
                                <input type="text" id="name" name="user_name" class="form-control" style="font-size:20px; color: #4b8edc;">
                            </div>
                            <div class="col-md-8 form-group">
                                <label for="name"><b>Password</b></label>
                                <input type="password" id="name" name="password" class="form-control" style="font-size:20px; color: #4b8edc; ">
                            </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input style="margin-left: 15px;" type="submit" value="Login" name="submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php include 'Front.footer.php'; ?>