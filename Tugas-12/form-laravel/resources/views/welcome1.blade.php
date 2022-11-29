<!DOCTYPE html>
<html>
<head>
	<title>Berlatih HTML</title>
</head>
<body>
	<h1>SELAMAT DATANG!</h1>
	<h3>Terima Kasih telah bergabung di GC-INS. Social Media kita bersama!</h3>
    <?php
    $firstname = $_GET['namadepan'];
    $lastname = $_GET['namabelakang'];
    echo 'Nama Depan : ' . $_GET['namadepan'] . '<br/>';
    echo 'Nama Belakang : ' . $_GET['namabelakang'] . '<br/>';
    ?>
</body>
</html>
