<?php 
$mahasiswa = ["Koko NioR", "083865127691", "Universitas Genjot Madoka", "Email"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar Mahasiswa</title>
</head>
<body>

<ul>
	<?php foreach ($mahasiswa as $mhs) : ?>
		<li><?= $mhs; ?></li>
	<?php endforeach; ?>
</ul>

</body>
</html>
