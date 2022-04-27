<?php
	// Initialize connection variables.
	$host = "localhost";
	$database = "MainDatabase";
	$user = "postgres";
	$password = "postgres";

	// Initialize connection object.
	$connection = pg_connect("host=$host dbname=$database user=$user password=$password")
				or die("Failed to create connection to database: ". pg_last_error(). ".<br/>");

	print "Successfully created connection to database. <br/>";

	// Modify some data in table.
	$new_quantity = 200;
	$name = '\'banana\'';
	$query = "UPDATE inventory SET quantity = $new_quantity WHERE name = $name;";
	pg_query($connection, $query) 
		or die("Encountered an error when executing given sql statement: ". pg_last_error(). ".<br/>");
	print "Updated 1 row of data. </br>";

	// Closing connection
	pg_close($connection);
?>