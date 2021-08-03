<?php
 echo "Session may be Courrupted or Destroyed!";
 //date('Y-M-D H:I:S', strtotime('+'.4, strtotime(date("Y-M-D H:I:S"))));
   header("refresh:3; url=../index.php");
?>