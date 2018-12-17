<?php
  $_SESSION['Username'] = NULL;
  $_SESSION['IDUser'] = NULL;
  unset($_SESSION['Username']);
  unset($_SESSION['IDUser']);
  session_destroy();
  ?><script language="javascript"> document.location.href='../index.php' </script><?php  
?>