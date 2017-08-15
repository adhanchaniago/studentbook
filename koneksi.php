<?php
	$server = '202.67.10.18,25000';
		$username = 'db1082_anton';
			$password = 'r@gil08';
				$database = 'DB1082_sekolah';
				$link = mssql_connect($server, $username, $password);
				mssql_select_db($database);
				if ($link)
				{
				/*echo 'READY CONNECT TO SERVER'; */
				}
			else
			{
 	 	echo 'FAILED CONNECT TO SERVER'; die('ERROR: Could not connect: ' . mssql_get_last_message());
	}
?>