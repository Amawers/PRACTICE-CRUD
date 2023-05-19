<?php
$conn = mysqli_connect("localhost", "root", "", "dbr1");
if($conn===false){
    die("ERROR" . mysqli_connect());
}
$sql = "DELETE FROM tblstud WHERE sid= '" . $_REQUEST['sid'] . "'";
if($conn->query($sql)===true){
    echo "SUCCESSFUL DELETION";
}else{
    echo "FAILED DELETION";
}
$conn->close();
header("Location:index.php");
?>