<center>
    <form action="UPDATE.php" metho="post">
        <input type="text" name="sid" id="sid" value= <?php echo $_REQUEST['sid'] ?>><br>
        <input type="text" name="sname" id="sname" value= <?php echo $_REQUEST['sname'] ?>><br>
        <input type="text" name="gender" id="gender" value= <?php echo $_REQUEST['gender'] ?>><br>
        <input type="submit" value="save edit">
</form>
</center>