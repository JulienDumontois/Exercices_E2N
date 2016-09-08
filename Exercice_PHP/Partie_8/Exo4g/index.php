<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (isset($_COOKIE['login']) && isset($_COOKIE['password'])){
    echo $_COOKIE['login'] . ' ' . $_COOKIE['password'];
  };
     ?>
  </body>
</html>
