<?php
include '../model/database.php';
$db = new database();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<title>Admin || FLORIST Data</title>
<body>
<div class="contrainer">
<table border="1" class="gaya table table-success table-striped">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Password</th>
        <th>Opsi</th>
    </tr>
    <?php
    $no = 1;
    foreach($db->tampil_data() as $x){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['nama']; ?></td>
        <td><?php echo $x['email']; ?></td>
        <td><?php echo $x['password']; ?></td>
        <td>
            <a class="btn btn-success" href="../view/edit.php?id=<?php echo $x['id']?>&aksi=edit">Edit</a>
            <a class="btn btn-danger"href="../controller/proses.php?id=<?php echo $x['id']?>&aksi=hapus">Hapus</a>
        </td>
    </tr>
    <?php
    }
?>
</table>
</div>
    
</body>