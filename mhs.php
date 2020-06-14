<?php
echo '<table width = 50% border= 1>';
echo '<tr><td><b>'.'NIM '.'<b></td><td>'.$_POST["NIM"].'</td></tr>';
echo '<tr><td><b>'.'NAMA '.'</b></td><td>'.$_POST['NAMA'].'</td></tr>';
echo '<tr><td><b>'.'JENIS KELAMIN '.'</b></td><td>'.$_POST['KELAMIN'].'</td></tr>';
echo '<tr><td><b>'.'ALAMAT '.'</b></td><td>'.$_POST['ALAMAT'].'</td></tr>';
echo '<tr><td><b>'.'PROGRAM STUDI '.'</b></td><td>'.$_POST['PRODI'].'</td></tr>';
echo "<tr>
	<td><b> BAHASA PEMOGRAMAN YANG DIKUASAI </b></td>";
	echo "<td>";
	if(isset($_POST['kirim']))
	{
		if (isset($_POST['PASCAL/DELPHI'])){
			echo $_POST['PASCAL/DELPHI']."<BR>";
		}
		if (isset($_POST['C/C++'])){
			echo $_POST['C/C++']."<BR>";
		}
		if (isset($_POST['VISUALBASIC'])){
			echo $_POST['VISUALBASIC']."<BR>";
		}
	}; "</td></tr>";
	
echo '</table>';
?>
