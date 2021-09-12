<?
if ($_POST[mes] <>"")
{
$hostname="localhost";
$user="";
$password="";
$dbname="datatest";
$connect=mysql_connect($hostname,$user,$password) or die("cannot connect");
$db=mysql_select_db($dbname)or die("cannot connect database!");
$sql="INSERT INTO chatroom ( mes)VALUES ('$_POST[mes]');";
$dbquery=mysql_db_query($dbname,$sql);
}
?>
<html >
<head>
<META HTTP-EQUIV="REFRESH" CONTENT="5">
<? //<META HTTP-EQUIV="REFRESH" CONTENT="5">REFRESH ทุก 5 วินาที ?>
<title>Untitled Document</title>
</head>

<body>
<table width="70%" border="0" cellspacing="0" cellpadding="0">
<tr>
<th bgcolor="f2f2f2" scope="row"><form name="form2" method="post" action="<?=$PHP_SELF;?>">
<label>
<div align="left">
<?
$hostname="localhost";
$user="";
$password="";
$dbname="datatest";//ชื่อฐานข้อมูล
$connect=mysql_connect($hostname,$user,$password) or die("cannot connect");
$db=mysql_select_db($dbname)or die("cannot connect database!");
$sql="select * from chatroom order by id DESC limit 0,10";//เรียกข้อมูล
$dbquery=mysql_db_query($dbname,$sql);
$row=mysql_num_rows($dbquery);
while($result=mysql_fetch_array($dbquery)) {
$a[] = $result[mes]; //เก็บช้อความ 10 อันดับล่าสุดลงตัวแปร
}

for($i=count($a)-1;$i>=0;$i--) {
echo $a[$i]."<br>";
}
?>
</div>
</label>
</form> </th>
</tr>
<tr>
<th scope="row"><form name="form1" method="post" action="">
<table width="88%" border="1" cellspacing="0" cellpadding="0">
<tr>
<th scope="row"><font size="2">พิมพ์ข้อความที่นี่</font></th>
<td><label>
<div align="center">
<input name="mes" type="text" id="mes" size="60">
</div>
</label></td>
<td><label>
<input name="Submit" type="submit" id="Submit" value="Send">
</label></td>
</tr>
</table>
</form> </th>
</tr>
</table>
</body>
</html>



