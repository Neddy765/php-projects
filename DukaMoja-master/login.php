<?php
require 'header.php';
require 'config.php';
$email=$password='';
$email_err=$password_err='';

//steps
//1.grab user data from form
if(isset($_POST['btn_login'])){
    //2.clean data

    if(isset($_POST['email'])){
        $email =$_POST['email'];
    }else{
        $email_err = "Fill this field";
    }

    if(isset($_POST['password'])){
        $password =$_POST['password'];
    }else{
        $password_err = "Fill this field";
    }
    /////////////////////////////////////////////////////
       //4.check if user exists
//        4.1 hash password
        $password = md5($password);
//        4,2 add user
//      use password and email to ccheck if user exists
    $sql ="SELECT `id`, `username`, `email`, `password`, `user_type` FROM `users` WHERE email='$email' AND password='$password'";
    $results = mysqli_query($conn, $sql);
    if(mysqli_num_rows($results) > 0){
//        grab indiv data about user the from db
        while($rows=mysqli_fetch_assoc($results)){
            $id = $rows['id'];
            $email = $rows['email'];
//            create session for user
            session_start();
            $_SESSION['kipande'] = $id;
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $_user = $rows['user_type'];
            if ($_user ==  'supplier'){
                $_SESSION['aina_ya_mtumizi'] = true;
            }else{
                $_SESSION['aina_ya_mtumizi'] = false;
            }
//            return user to index page

            header("location:index.php?msg_login");
            exit();

        }
//
    }else{
//        wrong password or email
        header("location:login.php");
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
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button class="btn btn-warning btn-block" name="btn_login">Login</button>
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