<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body style="display:flex;justify-content:center;" >
	
	<div style="margin-top:10px;display:flex;justify-content:center;width:90%;flex-direction:column" >
	<a href="http://localhost/ciijin/index.php/crud/tambah">
	<button style="width:100%" class="btn btn-danger">Tambah Data Baru</button>
	</a>
	<table class="table" style="margin:20px auto;" border="1">
	<thead class="thead-dark" >
	<tr>
			<th>No</th>
			<th>id_marketing</th>
			<th>jenis</th>
			<th>tgl_a</th>
            <th>tgl_b</th>
			<th>ket</th>
			<th>Aksi</th>
            
	</tr>
	</thead>
		<?php 
		$no = 1;
		foreach($ijin as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->id_marketting ?></td>
			<td><?php echo $u->jenis ?></td>
            <td><?php echo $u->tgl_a ?></td>
			<td><?php echo $u->tgl_b ?></td>
			<td><?php echo $u->ket ?></td>
			<td>
			<?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
				<?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>		
			</td>
		</tr>
		<?php } ?>
	</table>
	</div>
</body>
</html>