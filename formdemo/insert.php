<!DOCTYPE html>
<html lang="en">

<head>
	<title>GFG- Store Data</title>
</head>

<body>
	<center>
		<h1>Storing Form data in Database</h1>

		<form action="insert.php" method="post">
		<p>
				<label for="id">id</label>
				<input type="integer" name="id" id="id">
			</p>
			
			
<p>
				<label for="first_name">first_name</label>
				<input type="text" name="first_name" id="first_name">
			</p>

				<label for="last_name">last_name</label>
				<input type="text" name="last_name" id="last_name">
			</p>
		
<p>
				<label for="education">education</label>
				<input type="text" name="education" id="education">
</p>
<p>
				<label for="addr">addr</label>
				<input type="text" name="addr" id="addr">
</p>


			<br>
			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>


<?php
//connection To Database

$conn=pg_connect("host=localhost port=5432 dbname=MainDatabase user=postgres password=postgres");
// $conn=pg_connect($connection_string);
if(!$conn){
echo "ERROR: Connecting Database";
}else{
  echo "Connection Succesfull";  
}
// print_r($connection_string);

/*$query="select * from MainDatabase";
$result=pg_query($conn,$query);

while ($row = pg_fetch_row($result)) {
  echo .$row['id']. , .$row['first_name']. , .$row['last_name']. ,  .$row['education'];

}

*/		
$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$education = $_POST['education'];  
$addr  = $_POST['addr']; 
    

$query="INSERT INTO student_details (first_name,last_name,education,addr,id) VALUES ( '$first_name',' $last_name', '$education','$addr','$id')";
pg_query($query);
     
//print_r($query);
//   echo "<html>
//   <body>
//   <table>
//     <tr>
//       <th>id</th>
//       <th>Std_fname</th>
//       <th>Std_lname</th>
//       <th>std_education</th>
//     </tr>";
// while ($row=pg_fetch_assoc($result)
// {
//    echo     "<tr>
//             <td>".$row['id']."</td>
//             <td>".$row['Std_fname']."</td>
//             <td>".$row['Std_lname']."</td>
//             <td>".$row['std_education']."</td>
//         </tr>";
        
// }   
// echo "</table></body></html>";
 ?>