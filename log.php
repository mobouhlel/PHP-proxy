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

</div>
</body>
</html>