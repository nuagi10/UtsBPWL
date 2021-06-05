<?php
include '../model/database.php';
$db = new database();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">


<form action="../controller/proses.php?aksi=ubah" method="post">
	<?php
foreach ($db->edit($_GET['id']) as $d){
?>

	<div class="contrainer2">
			<table class="t1">
				<tr>
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
						<input type="text" name="nama" value="<?php echo $d['nama'] ?>" class="form-control">
					</td>
				</tr>
				</div>
				<tr>
					<td>Email</td>
					<td>
						<input type="text" name="email" value="<?php echo $d['email'] ?>" class="form-control">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
					<input type="text" name="password" value="<?php echo $d['password'] ?>" class="form-control">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan" class="btn btn-success">
					</td>
				</tr>
			</table>
	</div>
	<?php
}
?>
</form>