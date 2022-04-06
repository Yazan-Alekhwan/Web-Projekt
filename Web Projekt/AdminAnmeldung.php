<?php 

$host="localhost";
$user="root";
$password="";
$db="webSeite";

$mysqli = new mysqli("localhost", "root", "", "webSeite");

if(isset($_POST['email'])){
    
    $email=$_POST['email'];
    $psw=$_POST['psw'];

    
    $sql="select * from kunde where email='".$email."' AND passwort='". md5($psw)."' And ist_Admin = true limit 1";
    

    $result=$mysqli->query($sql);
    
    if(mysqli_num_rows($result)==1){

      echo 'Admin';
     /* header('Location:adventure.php'); */
      exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }

 
}

?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="anmelde.css">
	<title>Admin Anmeldung</title>
</head>
<body>

  <form action="AdminAnmeldung.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>E-Mail</b></label>
    <input type="text" placeholder="E-Mail eingeben" name="email" required>

    <label for="psw"><b>Passwort</b></label>
    <input type="password" placeholder="Passwort eingeben" name="psw" required>

    <button type="submit">Login</button>

  </div>

  <div class="container" style="background-color:#f1f1f1">
  </div>
</form>

</body>
</html>