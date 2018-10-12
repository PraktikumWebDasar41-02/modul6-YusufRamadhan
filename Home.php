<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'jurnal6');
	$nim = $_SESSION["NIM"];
	$query = "SELECT * FROM data WHERE NIM = $nim";
 	$view = mysqli_query($db,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
	<br><br><br><br>
	<center>
		<h1>Welcome to Homepage</h1>
		<h3>here's your information!</h3>
		<table border="2">
			<form action="" method="POST">
				<?php 	while ($data = mysqli_fetch_array($view)) { ?>
				<tr>
					<td>Nim</td>
					<td>:</td>
					<td><?php echo $data['NIM'];?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo $data['Nama'];?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?php echo $data['Jenis_Kelamin']; ?></td>
				</tr>
				<tr>
					<td>Hobi</td>
					<td>:</td>
					<td><?php echo $data['Hobi']; ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><?php echo $data['Alamat']; ?></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td><?php echo $data['Kelas']; ?></td>
				</tr>
				<tr>
					<td>Fakultas</td>
					<td>:</td>
					<td><?php echo $data['Fakultas'];; ?></td>
				</tr>
				<tr>
					<td colspan="3"><center><input type="submit" name="submit" value="Logout"></center></td>
				</tr>
				<?php }
				if (isset($_POST['submit'])) {
					session_destroy();
					header("Location: Login.php");
				}
				?>
			</form>
		</table>
	</center>
</body>
</html>