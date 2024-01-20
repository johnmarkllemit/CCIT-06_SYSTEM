<!DOCTYPE html>
<html lang="en">
<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<center>
   <div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-warning">Student-Info</h3>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<?php
				if(ISSET($_GET['id'])){
					require_once 'conn.php';
					$id = $_GET['id'];
					$sql = $conn->prepare("SELECT * FROM `member` WHERE `mem_id`='$id'");
					$sql->execute();
					$row = $sql->fetch();
				}
			?>
			<form method="POST" action="update.php?id=<?php echo $id?>">
				<div class="form-group">
					<label>Firstname</label>
					<input class="form-control" type="text" value="<?php echo $row['firstname']?>" name="firstname"/>
				</div>
				<div class="form-group">
					<label>Lastname</label>
					<input class="form-control" type="text" value="<?php echo $row['lastname']?>" name="lastname"/>
				</div>
				<div class="form-group">
					<label>Address</label> 
					<input class="form-control" type="text" value="<?php echo $row['address']?>" name="address"/>
				</div><br>
				<div class="form-group">
					<button class="btn btn-warning form-control" type="submit" name="update">Update</button>
				</div>
			</form>
			<?php
				$conn = null;
			?>
		</div>
	</div>
</center>
</body>
</html>
	