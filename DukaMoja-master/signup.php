<?php
require 'header.php';
require 'config.php';
$username=$email=$password1=$password2=$user_type='';
$username_err=$email_err=$password1_err=$password2_err='';

//steps
//1.grab user data from form
if(isset($_POST['btn_signup'])){
    //2.clean data
    if(isset($_POST['username'])){
        $username =$_POST['username'];
    }else{
        $username_err = "Fill this field";
    }

    if(isset($_POST['email'])){
        $email =$_POST['email'];
    }else{
        $email_err = "Fill this field";
    }

    if(isset($_POST['user-type'])){
       $user_type =$_POST['user-type'];
    }

    if(isset($_POST['password1'])){
        $password1 =$_POST['password1'];
    }else{
        $password1_err = "Fill this field";
    }

    if(isset($_POST['password2'])){
        $password2 =$_POST['password2'];
    }else{
        $password2_err = "Fill this field";
    }
    //3.check password matched
    if($password1 != $password2){
        $password1_err = "password did not match";
    }else{
        //4.check if user exists
        $sql="SELECT * FROM `users` WHERE email='$email'";
//        result from db
        $results = mysqli_query($conn, $sql);
        if(mysqli_num_rows($results) > 0){
//            user exists, got to login
            header("location:login.php");
            exit();
        }
        //4.add user into db
//        4.1 hash password
        $password1 = md5($password1);
//        4,2 add user
        $sql = "INSERT INTO `users`(`id`, `username`, `email`, `password`, `user_type`) VALUES (NULL,'$username','$email','$password1','$user_type')";
        if(mysqli_query($conn, $sql)){
            //5.take user to login page
            header("location:login.php");
            exit();
        }else{
            echo "Error:".mysqli_error($conn);
        }

    }

}

 //4.check if user exists
    //4.add user into db
    //5.take user to login page



?>
<!--reg form-->
<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-md-6 col-lg-6 col-xl-6">
            <div id="form-section">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password1" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" name="password2" class="form-control" required>
                        </div>
                        <div class="input-group">
                            <span>
                                Supper <input type="radio" name="user-type" value="1">
                            </span>
                            <span>
                                Customer <input type="radio" checked name="user-type" value="0">
                            </span>
                        </div>
                        <button class="btn btn-warning btn-block" name="btn_signup">Create account</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
    </div>
</div>
<?php
require 'footer.php';
?>