<?php include 'header.php'; 

if(!isset($_SESSION['logged_in'])){
    header("location: login.php");
    ob_end_flush();
}
?>
<center>
 <br>
  <div class="col-md-3"></div>
  <div class="col-md-6 well">
		<h3 class="text-warning">Student-Info</h3>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form method="POST" action="add.php">
				<div class="form-group">
					<label for="pass" class="col-sm-2 col-form-label">Firstname</label>
					<input class="form-control" type="text" name="firstname"/>
				</div>
				<div class="form-group">
					<label for="pass" class="col-sm-2 col-form-label">Lastname</label>
					<input class="form-control"  type="text" name="lastname"/>
				</div>
				<div class="form-group">
					<label for="pass" class="col-sm-2 col-form-label" >Address</label> 
					<input class="form-control" type="text" name="address"/>
				</div><br>
				<div class="form-group">
					<button class="btn btn-primary form-control" type="submit" name="save">Save</button>
				</div>
			</form>
		</div><br>
		<table class="table table-bordered">
			<thead class="alert-danger">
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Address</th>
					<th>Action</th>
				</tr>
                </thead>
			<tbody class="alert-warning">
				<?php
					require 'conn.php';
					$sql = $conn->prepare("SELECT * FROM `member` ORDER BY `mem_id` DESC");
					$sql->execute();
					while($row = $sql->fetch()){
				?>
				<tr>
					<td><?php echo $row['firstname']?></td>
					<td><?php echo $row['lastname']?></td>
					<td><?php echo $row['address']?></td>
					<td><a href="edit.php?id=<?php echo $row['mem_id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['mem_id']?>">Delete</a></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
 </center>	
</body>
</html>