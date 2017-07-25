# PHP-proxy
PHP proxy is simple [PHProxy](https://sourceforge.net/projects/poxy/) based with nice UI and admin panel . It was my first development project I did in 2013 .

You use it to view webpages as sever IP address for privacy issue .  

Defualt login is Username: `admin1` , Password : `asd123`
 
 
 I used `Referer` check to block CSRF attacks ,  PDO `prepare` statments to prevent SQLi attacks, and  `htmlentities` to prevent XSS attacks .
 
 
 And there was a XSS issue in `index.inc.php`
 
 
 In line 94 was echoing the URL without filtering 
 
 
 `<form method="post" action="<?php echo  $_SERVER["PHP_SELF"]; ?>">` 
 
  I fixed it by adding `htmlspecialchars`
  
 `<form method="post" action="<?php echo  htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>">` 

## Features

* Remove client-side scripting.
* Allow cookies to be stored.
* Use base64 encodng on the address.
* Social media links control.


## Screen shot 
 
 
 ![alt text](https://s21.postimg.org/60a954w9z/proxy.png "proxy")




