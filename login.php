<?php
session_start();
include 'db.php';
if(isset($_SESSION['logged_in'])){
header('location:admin.php');
}
if(isset($_POST['username'],$_POST['password'])){
$username= $_POST['username'];
$password= md5($_POST['password']);

if(empty($_POST['username']) or empty($_POST['password'])){
$error = 'all feild required !';
}else{
$qeury = $pdo->prepare("SELECT * FROM user WHERE user_name = ? AND user_psw = ? ");
$qeury->bindValue(1, $username);
$qeury->bindValue(2, $password);
$qeury->execute();
$num = $qeury->rowCount();
if($num == 1){
//user entered 
$_SESSION['logged_in'] = true ;
header('location:admin.php');
exit();
}else{
$error ='Username/password is wrong !';
}
}

}


?>
<html>
<head><title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css" />


</head>
<body>
<center>
<h1><font color="#FFFFFF">Admin login</font></h1><br />
<form method="POST" action="login.php">

<div class="error" >
<?php
if(isset($error)){
echo $error ;
}
?>
</div>
</br>
</br>
<font color="#FFFFFF">Admin id :</font>  &nbsp;<input type="text" placeholder="Admin" id="username" name="username"><br />
</br>
<font color="#FFFFFF">Password :</font> <input type="password" placeholder="Password" id="password" name="password"><br />
</br></br>
<input type="submit" value="Login">
<div class="logo">
<?php
$query= $pdo->query('SELECT * FROM info ;');
while($row= $query->fetch(PDO::FETCH_ASSOC)){
echo htmlspecialchars($row['name']);
}
?>
</div>
</body>
</html>