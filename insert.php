  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title>My Home</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" type = "text/css" href="Mysheet.css" />
  
  <script src="Myjavasc.js" type="text/javascript"></script>
  
  </head>
  <body>
<?php include 'headder.inc';?>
<?php include 'contact1.inc';?>
<?php include 'footer.inc';?>




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$add = $_POST['message'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO MyGuests (name,email,contact,message)
VALUES ('$name','$email' ,'$contact','$add' )";
  
if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
    </body>
</html>