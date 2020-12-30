<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Accomodation</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="row" style="height: 90px; width: 100%; background-color: red; text-align: center; padding: 20px">
		<div class="col-sm" style="position:relative; left: 25%;">
			<h1 style="text-align: center; color: white;">ACCOMODATION</h1>
		</div>
		<div class="col-sm" style="position:relative; left: 10%; ">
		<?php
			$my_User = $_GET['getUsername'];
		?>
			<a href="index.php?getUsername=<?php echo $my_User; ?>"><button class="btn btn-lg btn-warning">Home</button></a>
		</div>
		
	</div>
	<?php require_once 'process.php'; ?>

	<?php 
		if(isset($_SESSION['message'])): ?>
		<div class="alert alert-<?=$_SESSION['msg_type'] ?>">
			<?php
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			?>
		</div>
		<?php endif; ?> 
		
		

	<div class="container">

	<?php 
		$mysqli = new mysqli('localhost', 'root', '', 'tour');
		$result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
	?>
	<div class="row justify-content-center">
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>From</th>
					<th>To</th>
					<th>Location</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>

			<?php
				while($row = $result->fetch_assoc()): ?>
				<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['fromDate']; ?></td>
					<td><?php echo $row['toDate']; ?></td>
					<td><?php echo $row['location']; ?></td>

					<td>
						<a href="Accomodations.php?edit=<?php echo $row['id']; ?>&getUsername=<?php echo $my_User; ?>" class="btn btn-info">Edit</a>
						<a href="process.php?delete=<?php echo $row['id']; ?>&getUsername=<?php echo $my_User; ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php endwhile; ?>

		</table>

	</div>
	<?php
		function pre_r($array){
			echo '<pre>';
			print_r($array);
			echo '</pre>';
		}
	?>

	<div class="row justify-content-center" style="background-color: #eadade; padding: 20px;">
		<form action="process.php?getUsername=<?php echo $my_User; ?>" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter your name">
			</div>
			<div class="form-group">
			<label>From</label>
			<input type="date" name="fromDate" class="form-control" value="<?php echo $fromDate; ?>" placeholder="Enter your Date From">
			</div>
			<div class="form-group">
			<label>To</label>
			<input type="date" name="toDate" class="form-control" value="<?php echo $toDate; ?>" placeholder="Enter your Date To">
			</div>
			<div class="form-group">
			<label>Location</label>
			<input type="text" name="location" class="form-control" value="<?php echo $location; ?>" placeholder="Enter your Location">
			</div>

			<div class="form-group">
			<?php 
				if($update == true):
					
			?>
				<button type="submit" class="btn btn-info" name="update" value="<?php echo $my_User; ?>">Update</button>
			<?php else: ?>
				<button type="submit" class="btn btn-primary"name="save">Save</button> 
			<?php endif; ?>
			</div>
		</form>
	</div>
	</div>
	<br>
	<br>
	<br>
</body>
</html>