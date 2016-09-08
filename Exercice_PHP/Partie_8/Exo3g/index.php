<?php
if (isset($_POST['login']) && isset($_POST['password'])){
$cookieLoginValue = $_POST['login'];
$cookiePasswordValue = $_POST['password'];
setcookie('login', htmlspecialchars($cookieLoginValue), time() + 365*24*3600, '/', null, false, true);
setcookie('password', htmlspecialchars($cookiePasswordValue), time() + 365*24*3600, '/', null, false, true);
};
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form method="post" action="index.php">
       <input type='text' name='login' placeholder="login"/>
       <input type='text' name='password' placeholder="password"/>
       <input type='submit' value='Send'/>
     </form>
     <?php
     if (isset($_COOKIE['login']) && isset($_COOKIE['password'])){
     echo $_COOKIE['login'] . ' ' . $_COOKIE['password'];
   };
      ?>
   </body>
 </html>
