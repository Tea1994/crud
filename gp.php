
<?php include 'templates/header.php'; ?>
<?php require_once 'actiongp.php'; ?>

	<?php 
	if (isset($_SESSION['message'])):
	?>

	<div class="alert alert-<?=$_SESSION['msg_type']?>">
		<?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
	</div>

	<?php endif ?>


	<div class="container">
		<?php
			$mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
			$result = $mysqli->query("SELECT * FROM grupeproizvoda");
		?>
		<div class="row justify-content-center">
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Naziv</th>
						<th>Status</th>
						<th><a href="ngp.php" class="btn btn-primary">Kreiraj</a></th>
					</tr>
				</thead>
				<?php 
				while ($row = $result->fetch_assoc()): 
				?>		
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['naziv']; ?></td>
						<td><?php echo $row['status']; ?></td>
						<td>
							<a href="ngp.php?editid=<?php echo $row['id']; ?>" class="btn btn-info">
							Edit
							</a>
							<a href="actiongp.php?obrisati=<?php echo $row['id']; ?>" class="btn btn-danger">
							Delete
							</a>
						</td>
					</tr>
				<?php endwhile; ?>
			</table>
		</div>
	</div>

	
	
<?php include 'templates/footer.php'; ?>