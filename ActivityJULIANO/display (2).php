<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title> Demo</title>
</head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style type="text/css">
	*{
		margin: 0;
	}
	.nav a{
		color: #000;
	}
	.nav{
		background-color: #C1C1C1;
		padding: 10px;
	}
	footer{
		background-color: #C1C1C1;
		border-radius: 5px;
		height: 30px;
		text-align: center;
	}

</style>
<body>
	<div class="container">
		<?php
			include 'include/nav.php';
		?>

		<table border="1">
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Gender</th>
			<th>Course</th>
			<th>Action</th>
		<?php
			//retrieving of records from mysql database
			$sqlSelect = "SELECT * FROM user";
			$query = mysqli_query($connect,$sqlSelect);
			$num = mysqli_num_rows($query);
			while($row = mysqli_fetch_array($query)){
			?>	
				<tr>
					<td><?=$row['firstname']?></td>
					<td><?=$row['lastname']?></td>
					<td><?=$row['gender']?></td>
					<td><?=$row['course']?></td>
					<td><a href="delete.php?userid=<?=$row['id']?>">DELETE</a>
						<a href="edit.php?userid=<?=$row['id']?>">Edit</a>
					</td>
				</tr>

			<?php
		}
		?>
			<tr>
				<td colspan="5"><?=$num?> Record(s) Found!</td>
			</tr>
		</table>
	</div>
</body>
</html>