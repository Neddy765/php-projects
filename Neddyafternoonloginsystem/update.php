<?php
require "handleupdate.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add employee</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
</head>
<body>

<nav aria-label="breadcrumb" class="pt-3">
    <ol class="breadcrumb">
        <h2>update records</h2>
    </ol>
</nav>

<div class="pt-4 col-sm-4">

    <form action="handleupdate.php" method="post">
        <div class="form-group">
            <label>Employee name</label>
            <input class="form-control" type="text" name="employeename"value="<?php echo $employeename?>" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input class="form-control" type="text" name="address" value="<?php echo $address?>"required>

        </div>
        <div class="form-group">
            <label>salary</label>
            <input class="form-control" type="number" name="salary"value="<?php echo $salary ?>" required>
        </div>
        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input class="btn btn-outline-success" type="submit" value="update">
            <a href="welcome.php" class="btn btn-warning">cancel</a>
        </div>
        <p>already have an account? <a href="login.html ">login here</a></p>
    </form>
</div>
</body>
</html>





















































































































