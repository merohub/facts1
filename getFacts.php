<?php

    $country = $_POST['ch'];
	
	//echo $country;

    //$password = $_POST['ch'];

   // echo $word;

    //echo $lastName;

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("facts") or die(mysql_error());
//mysql_connect("mysql11.000webhost.com","a4377512_hitlar","!webhost123") or die(mysql_error());
//mysql_select_db("a4377512_login") or die(mysql_error());
$sql = mysql_query("SELECT * FROM datas ORDER BY RAND() LIMIT 5");

$row = mysql_num_rows($sql);

if($row>0)
{
	while($row = mysql_fetch_array($sql)){

		$id = $row[0];
		$datas = $row[1];
		


		echo "<br/>" .$datas."<br/>" ; }   	
}

else
echo "No such word found";



?>