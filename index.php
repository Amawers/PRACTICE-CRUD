<html>
    <head>
    </head>
<body>
<center>
    <form action="CREATE.php" method="post">
        <input type="text" name="sid" id="sid"><br>
        <input type="text" name="sname" id="sname"><br>
        <input type="text" name="gender" id="gender"><br>
        <input type="submit" value="add record">
        <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for first names..">    
</form>

<?php
$conn = mysqli_connect("localhost", "root", "", "dbr1");
if($conn===false){
    die("ERROR" . mysqli_connect_error());
}

$sql = "SELECT * FROM tblstud";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "<table id='myTable' border=1><tr><td>Student ID</td><td>Name</td><td>Gender</td><td colspan=2>Action</td></tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr><td>" . $row["sid"] . "</td><td>" . $row["sname"] . "</td><td>" . $row["gender"] . "</td><td><a href='DELETE.php? sid=" . $row["sid"] . "'>delete</a></td><td> <a href='UPDATEHTML.php? sid=" . $row["sid"] . "&sname=" . $row["sname"] . "&gender=" . $row["gender"] . "'>edit</a></td></tr>";
    }   
}else{
    echo "FAILED QUERY";
}
echo "</table>";
?>
</center>

<script>
function myFunction(){
    var input, filter, table, tr, td, i, txtValue; 
    input = document.getElementById("myInput"); 
    filter = input.value.toUpperCase(); 
    table = document.getElementById("myTable"); 
    tr = table.getElementsByTagName("tr"); 
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1]; 
        if (td){
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1){ 
                tr[i].style.display = ""; 
            } else{
                tr[i].style.display = "none";
            }
        }
    }
}
</script>
</body>
</html>