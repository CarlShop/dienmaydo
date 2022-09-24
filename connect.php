<?php
	/*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	$Connect = pg_connect("postgres://zwicraqyvdahlk:ac413e4e4b67b10b13f635cabbaf0674d62315a776950f1ec04ab4781649ec59@ec2-3-93-206-109.compute-1.amazonaws.com:5432/dbp5dc5hhhfgra");
    //$Connect = pg_connect("host=localhost port=5432 dbname=postgres");
	//$Connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");
	
    if (!$Connect) {
        die("Connection failed");
    }
?>
