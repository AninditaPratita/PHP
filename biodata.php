<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hasil Biodata</title>
</head>
<style>
	*{
		background-color: paleturquoise;
		font-family: cursive;
	}
	.judul{
		margin-top: 30px;
		box-shadow: 2px 2px 2px teal;
	}
	.button{
		font-weight: bold;
		width: 80px;
		height: 30px;
		border-radius: 5px 5px;
		cursor: pointer;
		box-shadow: 2px 2px 2px teal;
		position: initial;
		font-family: cursive;
		margin-right: 30px;
	}
	.button:hover{
	background: cadetblue;
	box-shadow: 2px 2px 2px black;
	}
	.tabel{
	border-radius: 5px 5px;
	box-shadow: 2px 2px 2px teal;
	}
</style>
<body>
	<center><table border="1" cellpadding="10" width="30%" class="judul">
	<tr><td><h2 align="center">Dokumen Biodata</h2></td></tr></table></center><br>
	<center><table border="1" class="tabel">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $_POST['nama'];?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><?php echo $_POST['tglLahir'];?></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td><?php echo $_POST['agama'];?></td>
		</tr>
		<tr>
			<td>Kewarganegaraan</td>
			<td>:</td>
			<td><?php echo $_POST['kwn'];?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $_POST['jenisk'];?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?php echo $_POST['email'];?></td>
		</tr>
		<tr>
			<td>No. Telp</td>
			<td>:</td>
			<td><?php echo $_POST['noTelp'];?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $_POST['alamat'];?></td>
		</tr>
		<tr>
			<td>NPM</td>
			<td>:</td>
			<td><?php echo $_POST['npm'];?></td>
		</tr>
		<tr>
			<td>Mahasiswa Angkatan</td>
			<td>:</td>
			<td><?php echo $_POST['angkatan'];?></td>
		</tr>
	</table></center>
</body>
</html>