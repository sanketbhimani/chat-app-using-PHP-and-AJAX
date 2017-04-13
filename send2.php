<?php
$mssg=$_GET['msg'];
$sender="p2";
$a=mysql_connect("localhost","root");
mysql_select_db( "chatbox", $a );
$qry="INSERT INTO `chat` (`msg`,`sender`,`p1`,`p2`) VALUES (\"$mssg\",\"$sender\",\"0\",\"0\")";
//echo($qry);
mysql_query($qry)
or die(mysql_error());
//header("location:index2.html");

?>