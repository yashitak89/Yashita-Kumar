<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$cname = $_POST['cname'];
$mobno = $_POST['mobno'];
$pass = $_POST['pass'];
if (!empty($fname) || !empty($lname) || !empty($email) || !empty($cname) || !empty($mobno) || !empty($pass)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "jobs";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From hrsignup Where email = ? Limit 1";
     $INSERT = "INSERT Into hrsignup (fname, lname, email, cname, mobno, pass) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssis", $fname, $lname, $email, $cname, $mobno, $pass);
      $stmt->execute();
      header('Refresh:1; url=home.html');
      echo "<script type='text/javascript'>alert('Submitted Successfully!')</script>";
     } else {
      header('Refresh:1; url=signup.html');
      echo "<script type='text/javascript'>alert('Already Registered!')</script>";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
