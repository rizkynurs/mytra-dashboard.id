<?php
	$host = "172.30.52.16";
	$port = "5432";
	$dbname = "mytra_dashboard";
	$user = "postgres";
	$password = "Mytr@123";
	$db = pg_connect( "host=$host port=$port dbname=$dbname user=$user password=$password" );

		$res = pg_query($db, "SELECT * from booking WHERE booking_from = now()::date");
                $val = pg_num_rows($res);

		echo $val;
?>
