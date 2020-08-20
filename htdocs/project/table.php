<?php
require("data.php");
$query="SELECT * FROM names";
$query_run=mysqli_query($db,$query);
if($query_run)
{
	while($row=mysqli_fetch_assoc($query_run))
	{
		echo $row['first_name'];
		echo $row['Last_name'];
	}
}
else
{
	echo'failed';
}



?>