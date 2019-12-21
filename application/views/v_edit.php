<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	
	<?php foreach($ijin as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
        <table  style="margin:20px auto;">
            <tr>
                <td>id</td>
                <td>
                   <input class="form-control" type="text" name="id" value="<?php echo $u->id ?>">
                </td>
            </tr>
			<tr>
                <td>id marketing:</td>
                <td><input class="form-control" type="text" name="id_marketting" value="<?php echo $u->id_marketting ?>" ></td>
            </tr>
            <tr>
                <td>jenis:</td>
                <td><input class="form-control" type="text" name="jenis" value="<?php echo $u->jenis ?>" ></td>
            </tr>
            <tr>
                <td>tanggal a:</td>
                <td><input class="form-control" type="date" name="tgl_a" value="<?php echo $u->tgl_a ?>" ></td>
            </tr>
            <tr>
                <td>tanggal b:</td>
                <td><input class="form-control" type="date" name="tgl_b" value="<?php echo $u->tgl_b ?>" ></td>
            </tr>
            <tr>
                <td>keterangan :</td>
                <td><input class="form-control" type="text" name="keterangan" value="<?php echo $u->ket ?>" ></td>
            </tr>
            <tr>
                <td>
                <input type="submit" name="submit" >
                </td>
            </tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>