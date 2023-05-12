<?php
$conn = mysqli_connect("localhost", "root", "", "dbr1");
if($conn===false){
    die("ERROR" . mysqli_connect_error());
}
$sid = $_REQUEST['sid'];
$sname = $_REQUEST['sname'];
$gender = $_REQUEST['gender'];

$sql = "INSERT INTO tblstud VALUES ('$sid', '$sname', '$gender')";
if($conn->query($sql)){
    echo "RECORD INSERTED SUCCESSFULY";
}else{
    echo "FAILED INSERTION";
}
echo $sid . $sname . $gender;
header("Location:index.php");
?>