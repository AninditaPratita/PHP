<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Isi Biodata</title>
</head>
<style>
	*{
		background-color: paleturquoise;
		font-family: cursive;
	}
	.judul{
		margin-top: 50px;
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
	.input{
	width: 180px;
	height: 25px;
	border-radius: 5px 5px;
	box-shadow: 2px 2px 2px teal;
	}
</style>
<body>
	<center><table border="1" cellpadding="10" width="40%" class="judul">
	<tr><td><h2 align="center">Silahkan Isi Biodata dengan Benar</h2></td></tr></table></center><br>
	<form method="POST" action="biodata.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="180">Nama</td>
				<td><input class="input" type="text" name="nama" placeholder="Masukkan nama lengkap"></td>
			</tr>
			<tr>
				<td width="130">Tanggal lahir</td>
				<td><input class="input" type="date" name="tglLahir"></td>
			</tr>
			<tr>
				<td width="130">Agama</td>
				<td><select class="input" name="agama" id="">
					<option class="input" value="Islam"> Islam </option>
					<option class="input" value="Kristen"> Kristen </option>
					<option class="input" value="Katolik"> Katolik </option>
					<option class="input" value="Buddha"> Buddha </option>
					<option class="input" value="Hindu"> Hindu </option>
					<option class="input" value="Konghucu"> Konghucu </option>
				</select></td>
			</tr>
			<tr>
				<td width="130">Kewarganegaraan</td>
				<td><select class="input" name="kwn" id="">
					<option class="input" value="Warga Negara Indonesia"> Warga Negara Indonesia </option>
					<option class="input" value="Warga Negara Asing"> Warga Negara Asing </option>
				</select></td>
			</tr>
			<tr>
				<td width="130">Jenis Kelamin</td>
				<td><input type="radio" name="jenisk" value="Laki-laki">Laki-laki
					<input type="radio" name="jenisk" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input class="input" type="text" name="email" placeholder="Masukkan alamat email"></td>
			</tr>
			<tr>
				<td width="130">No. Telpon</td>
				<td><input class="input" type="text" name="noTelp" placeholder="Masukkan nomor telpon"></td>
			</tr>
			<tr>
				<td width="130">Alamat</td>
				<td><input class="input" type="text" name="alamat" placeholder="Masukkan alamat lengkap"></td>
			</tr>
			<tr>
				<td width="130">NPM Mahasiswa</td>
				<td><input class="input" type="text" name="npm" placeholder="Masukkan NPM lengkap"></td>
			</tr>
			<tr>
				<td width="130">Mahasiswa Angkatan</td>
				<td><select class="input" name="angkatan" id="">
					<option class="input" value="2018"> 2018 </option>
					<option class="input" value="2019"> 2019 </option>
					<option class="input" value="2020"> 2020 </option>
					<option class="input" value="2021"> 2021 </option>
				</select></td>
			</tr>
		</table>
		<center><br><table>
			<tr>
				<td> <input type="submit" name="btnsubmit" value="Kirim" class="button"></td>
				<td><input type="reset" name="reset" value="Reset" class="button"></td></tr></table></center>
	</form>

</body>
</html>