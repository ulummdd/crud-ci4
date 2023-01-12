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
		<h3>Data Karyawan</h3>
		<table border="1">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Umur</th>
					<th>Jenis kelamin</th>
					<th>Role</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach($getKaryawan as $datak){ ?>
				<tr>
					<td><?= $no; ?></td>
					<td><?= $datak['nama']; ?></td>
					<td><?= $datak['umur']; ?></td>
					<td><?= $datak['jenis_kelamin']; ?></td>
					<td><?= $datak['role']; ?></td>
					<td>
						<a href="<?= base_url('beranda/edit/'.$datak['id']);?>">Edit</a>
						<a href="#">Hapus</a>
					</td>
				</tr>
				<?php $no++;} ?>
			</tbody>
		</table>
	</div>
</body>
</html>