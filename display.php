<table border="1" cellspacing="5" bgcolor="lightpink">
	<tr>
		<th> Enrno</th>
		<th> name </th>
		<th> dept </th>
	</tr>
<?php 
$con=mysqli_connect("localhost","root","","computer");
if(!$con)
{
	die("not");
}
$qry= "SELECT * FROM students";
$result=mysqli_query($con,$qry);

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td>" . $row['Enrno'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
   		echo "<td>" . $row['dept'] . "</td>";
		echo "</tr>";
	}
}
echo "</table>";
?>