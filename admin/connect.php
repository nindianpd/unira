<?php
$conn = mysqli_connect("localhost","root","","uniraweb");
if(!$conn)
    die("Koneksi Error");


/*function combo_berita() {
	echo "<option value='' selected>- Pilih berita  -</option>";
	
	$query = mysqli_query($conn,"SELECT kodekeg, namakeg FROM berita order by kodekeg");
	
	while ($row = mysqli_fetch_array($query)) {
		
			echo "<option value='$row[0]'> " . $row[1] . " </option>";
		
	}
}*/

?>