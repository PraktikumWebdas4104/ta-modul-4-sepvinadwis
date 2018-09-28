<!DOCTYPE html>
<html lang="en">
<body>
	<form action="#" method="post" enctype="multipart/form-data">
		<table>
			<tr>HOBI : <br/>
				<input type="checkbox" name="hobi[]" value="bersepeda">Bersepda<br/><br/>
				<input type="checkbox" name="hobi[]" value="lari">Lari<br/><br/>
				<input type="checkbox" name="hobi[]" value="Berenang">Berenang<br/><br/>
				<input type="checkbox" name="hobi[]" value="menari">Manari<br/><br/>
				<input type="checkbox" name="hobi[]" value="menulis">Menulis<br/><br/>
				<input type="submit" name="kirim1" value="kirim"/><br/><br/>
			</tr>

			<tr>GENRE FILM :<br/>
				<input type="checkbox" name="film[]" value="Horror">Horror<br/><br/>
				<input type="checkbox" name="film[]" value="Triller">Triller<br/><br/>
				<input type="checkbox" name="film[]" value="Animasi">Animasi<br/><br/>
				<input type="checkbox" name="film[]" value="Anime">Anime<br/><br/>
				<input type="checkbox" name="film[]" value="Action">Action<br/><br/>
				<input type="submit" name="kirim2" value="kirim"/><br/><br/>
			</tr>

			<tr>TUJUAN TRAVELLING :<br/>
				<input type="checkbox" name="travelling[]" value="berenang">Raja Ampat<br/><br/>
				<input type="checkbox" name="travelling[]" value="hiking">Bali<br/><br/>
				<input type="checkbox" name="travelling[]" value="diving">Laboan Bajo<br/><br/>
				<input type="checkbox" name="travelling[]" value="mancing">Pulau Derawan<br/><br/>
				<input type="checkbox" name="travelling[]" value="nonton film">Bangka Belitung<br/><br/>
				<input type="submit" name="kirim3" value="kirim"/><br/><br/>
			</tr>	
		</table>
	</form>
	<hr/>
</body>
</html>

<br/>
<?php 
if (isset($_POST ['kirim1'])) {
	$data=$_POST["hobi"];
	foreach ($data as $nilai) {
		echo "HOBI = ".$nilai."<br/>";
		echo "<br>";
	}
}
elseif (isset($_POST ['kirim2'])) {
	$datafilm=$_POST["film"];
	foreach ($datafilm as $nilaifilm) {
		echo "FILM KESUKAAN = ".$nilaifilm."<br/>";
		echo "<br>";
	}
}
elseif (isset($_POST ['kirim3'])) {
	$datatravelling=$_POST["travelling"];
	foreach ($datatravelling as $nilaitravel) {
		echo "TRAVELLING YANG DIINGINKAN = ".$nilaitravel."<br/>";
	}
}
else{
	echo "Tidak ada yang dinginkan";
}
?>
