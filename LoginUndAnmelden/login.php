<?php

$conn = mysqli_connect('localhost', 'root', '', 'webSeite');




if(isset($_POST['vorname']))
{
 $vorname = $_POST['vorname'];
}

if(isset($_POST['nachname']))
{
$nachname = $_POST['nachname'];
}

if(isset($_POST['email']))
{
$email = $_POST['email'];
}

if(isset($_POST['psw']))
{
$psw = $_POST['psw'];
}

if(isset($_POST['submit']))
{
  $sql = "insert into kunde(vorname, nachname, email,passwort) values('$vorname', '$nachname', '$email',  md5('$psw'))";
  mysqli_query($conn , $sql);

}




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="login.css">
	<title>Login</title>
</head>
<body>

                     

<form action="login.php" method="POST">
  <div class="container">
    <h1>Registeren</h1>
    <p>Bitte füllen Sie dieses Formular aus, um ein Konto zu erstellen</p>
    <hr>


    <label for="vorname"><b>Vorname</b></label>
    <input type="text" placeholder="Vorname Eingeben" name="vorname" id="vorname"  required>

    <label for="nachname"><b>Nachname</b></label>
    <input type="text" placeholder="Nachname Eingeben" name="nachname" id="nachname"required >


    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email Eingeben" name="email" id="email"required >

    <label for="psw"><b>Passwort</b></label>
    <input type="password" placeholder="Passwort Eingeben" name="psw" id="psw" required>

   
    <hr>

    
    <button type="submit" class="registerbtn" name="submit">Registrieren</button>
  </div>

  <div class="container signin">
    <p>haben Sie bereits ein Konto? <a href="anmelde.php">Anmelden</a>.</p>
  </div>
</form>

</body>
</html>