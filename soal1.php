<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Login</title>
</head>
<style>
	*{
		background-color: paleturquoise;
		font-family: cursive;
	}
	.judul{
		margin-top: 80px;
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
	height: 20px;
	border-radius: 5px 5px;
	box-shadow: 2px 2px 2px teal;
	}
</style>
<body>
	<center><table border="1" cellpadding="10" width="21%" class="judul">
	<tr><td><h2 align="center">Form Login</h2></td></tr></table></center><br>
	<form method="GET" action="proses.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="140" align="center">Nama</td>
				<td><input type="text" name="nama" class="input"></td>
			</tr>
			<tr>
				<td width="140" align="center">Email</td>
				<td><input type="text" name="email" class="input"></td>
			</tr>
		</table>
		<center><br><table>
			<tr>
				<td> <input type="submit" name="btnLogin" value="Login" class="button"></td>
				<td><input type="reset" name="reset" value="Reset" class="button"></td></tr></table></center>
	</form>
</body>
</html>