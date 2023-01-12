<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title; ?></title>
</head>
<body>
	<h1>Milik <?= $author; ?></h1>
	<a href="<?= base_url(); ?>">Beranda</a> -
	<a href="<?= base_url('beranda/tambah'); ?>">Tambah Data</a>
	<div class="data-karyawan">
		<h3>Edit Data <?= $datak->nama; ?></h3>
		<form method="post" action="<?= base_url('beranda/update'); ?>">
			<input type="text" style="margin-bottom:10px;" value="<?= $datak->nama; ?>" name="nama" placeholder="Nama" required autocomplete="off"><br>
			<input type="number" style="margin-bottom:10px;" value="<?= $datak->umur; ?>" name="umur" placeholder="Umur" required autocomplete="off"><br>
			<input type="text" style="margin-bottom:10px;" value="<?= $datak->jenis_kelamin; ?>" name="jenis_kelamin" placeholder="Jenis kelamin" required autocomplete="off"><br>
			<input type="text" style="margin-bottom:10px;" value="<?= $datak->role; ?>" name="role" placeholder="Role" required autocomplete="off"><br>
			<button>Edit data</button>
		</form>
	</div>
</body>
</html>