<?php
	// Initialize connection variables.
	$db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=postgres")
				or die("Failed to create connection to database: ". pg_last_error(). "<br/>");

	print "Successfully created connection to database. <br/>";

	// Perform some SQL queries over the connection.
	$query = "SELECT * from book ";
	$result_set = pg_query($db, $query) 
		or die("Encountered an error when executing given sql statement: ". pg_last_error(). "<br/>");
	while ($row = pg_fetch_row($result_set))
	{

        // print_r($row);
		print "Data row = ($row[0], $row[1] ). <br/>";
	}

	// Free result_set
	pg_free_result($result_set);

	// Closing connection
	pg_close($db);
?>