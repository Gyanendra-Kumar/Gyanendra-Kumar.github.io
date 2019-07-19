<html>
<body>
    <form method="post">
        enter the first name<input type="text" name="fname"><br>
        enter the last name<input type="text" name="lname"><br>
        <input type="submit" name="submit" value="save">
    </form>
</body>
</html>




<?php
  if($_POST["submit"]=="save")
  {
    $uname=$_POST["uname"];
    $psw=$_POST["psw"];
    $repsw=$_POST["repsw"];
    $email=$_POST["email"];

    $db=mysqli_connect("localhost","root","","test");

    $s = "insert into register(uname,psw,repsw,email)values('".$uname."','".$psw."','".$repsw."','".$email."')";
    mysqli_query($db,$s);
  }
?>