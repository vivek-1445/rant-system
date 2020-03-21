<?php
include 'Front_header.php';
include 'database.php';

    if(isset($_POST['submitreview']))
    {
        $first_name = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $password= $_POST['password'];
        $confirm_password= $_POST['confirm_password'];
        $email = $_POST['email'];

       $insert_user = "insert into `Front-user` (`first_name`,`last_name`,`user_name`,`mobile`,`password`,`confirm_password`,`email`) values('$first_name','$lastname','$username','$phone','$password','$confirm_password','$email')";

        $fire_insert = mysqli_query($database_connection,$insert_user);
    }


?>

    <section class="section bg-primary contact-section" id="next-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6" >
                    <form  method="post"  enctype="multipart/form-data" style="margin-top: -670px;">
                        <h1 style="color: #5190c7;">REGISTER</h1>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="name"><b>First Name</b></label>
                                <input type="text" id="firstname" name="firstname" class="form-control" style="color: #4b8edc;">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="name"><b>Last Name</b></label>
                                <input type="text" id="lastname" name="lastname" class="form-control " style="color: #4b8edc;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="phone"><b>User Name</b></label>
                                <input type="text" id="username" name="username" class="form-control " style="color: #4b8edc;">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="phone"><b>Phone</b></label>
                                <input type="number" id="phone" name="phone" class="form-control " style="color: #4b8edc;">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="phone"><b>password</b></label>
                                <input type="password" id="password" name="password" class="form-control " style="color: #4b8edc;">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="phone"><b>Confirm password</b></label>
                                <input type="password" id="confirm_password" name="confirm_password" class="form-control " style="color: #4b8edc;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label for="email"><b>Email</b></label>
                                <input type="email" id="email" name="email" class="form-control " style="color: #4b8edc;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <input type="submit" value="Register" name="submitreview" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php include 'Front.footer.php'; ?>