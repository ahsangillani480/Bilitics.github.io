<style>
td
{
	padding:10px;
}
</style>

<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM `website`";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total!=0)
{
     ?>
		<table>
			<tr>
			     <th>Name</th>
				 <th>Image</th>
				 <th>Email</th>
				 <th>Subject</th>
				 <th>Message</th>
				 <th colspan ="2">Operations</th>

			</tr>
		
      <?php
	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
			     <td>".$result['Name']."</td>
				 <td><a href = '$result[picsource]'><img src='".$result['picsource']."' height='100'  width = '100' /></a></td>
				 <td>".$result['Email']."</td>
				 <td>".$result['Subject']."</td>
				 <td>".$result['Message']."</td>
				 <td><a href='update.php?Nam=$result[Name]&image=$result[picsource]&Email=$result[Email]&Subject=$result[Subject]&Message=$result[Message]'>Edit</a></td>
				 <td><a href = 'delete.php?Nam=$result[Name]' onclick='return checkdelete()'>Delete</a></td> 
			</tr>";
	}	
	//remember,Javascript is used between html and php.
}
else
{
	echo "No Record Found";
}
?>
</table>
<script>
     function checkdelete(){
       return confirm('Are you sure you want to delete this data?');
	 }
</script>