<?php
$p=$_GET['p'];
$link=mysql_connect("localhost","root","root");
mysql_select_db("chatbox",$link);
$q="SELECT  `msg`,`p1`,`p2`,`sender`,`index` FROM `chat`";
$a=mysql_query($q);
while($b=mysql_fetch_array($a))
{
	if($b[$p]==0)
	{
		if($b['sender']==$p)
		{
			echo("<div style=\"padding-top:10px; padding-left:10px; padding-right:10px; padding-bottom:10px;  float: right; width:40%; height:auto; background-color:red; clear:both; text-overflow: ellipsis; word-wrap: break-word;\">". $b['msg']."</div><br><br>");
		}
		else
		{
			echo("<div style=\" padding-top:10px; padding-left:10px; padding-right:10px; padding-bottom:10px;  float: left; width:40%; height:auto; background-color:green; clear:both; text-overflow: ellipsis; word-wrap: break-word; \">". $b['msg']."</div><br><br>");
		}
		$snk=" UPDATE `chat` SET `$p` = 1 WHERE `index` = \" $b[index] \" ";
		//echo($snk);
		mysql_query($snk);
	}
	
}
?>