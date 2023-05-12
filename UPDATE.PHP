<?php
$conn = mysqli_connect("localhost", "root", "", "dbr1");
if($conn===false){
    die("ERROR" . mysqli_connect_error());
}

$sid = $_REQUEST['sid'];
$sname = $_REQUEST['sname'];
$gender = $_REQUEST['gender'];

$sql = "UPDATE tblstud SET sid='$sid', sname='$sname', gender='$gender' WHERE sid='$sid'";
if($conn->query($sql)===true){
    echo "UPDATED SUCCESSFULLY";
}else{
    echo "FAILED UPDATE";
}
$conn->close();
header("Location:index.php");
?>