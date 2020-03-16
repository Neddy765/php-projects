<?php

require "config.php";

if (isset($_POST["id"]) and !empty($_POST[
    'id'])) {
    $idvalue = $_POST["id"];
    $sql = "DELETE FROM `employees` WHERE id='$idvalue'";
    $deleterecord = mysqli_query($link, $sql);
    if ($deleterecord) {
        echo "Record deleted succesfully";
        header("location:welcome.php");

    } else {
        echo "Record was not deleted $sql" . mysqli_error($link);
    }
}
else{ if (empty($_GET["id"])){
        echo"URL does not contain id";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="alert alert-danger">
        <h2>Delete Record</h2>
        <form action="delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
            <p>Are you sure you want to delete this record?</p>
            <input type="submit" value="Yes" class="btn btn-danger">
            <a href="welcome.php" class="btn btn btn-outline-danger">No</a>

        </form>
        </div>
    </div>


</div>


</body>
</html>













