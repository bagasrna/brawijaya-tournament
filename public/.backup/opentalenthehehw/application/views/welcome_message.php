<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title><?= $title; ?></title>
</head>

<body>

	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="<?= base_url('opentalent/leaders'); ?>">Open Talent</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="<?= base_url('opentalent/leaders') ?>">Leaders <span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="content mt-3">
		<div class="container">
			<div class="card">
				<div class="card-header">
					Form Tambah Team
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="nama">ID Team</label>
							<input type="text" class="form-control" id="idTeam" name="idTeam">
						</div>
						<div class="form-group">
							<label for="nim">Nama Team</label>
							<input type="text" class="form-control" id="namaTeam" name="namaTeam">
						</div>
						<div class="form-group">
							<label for="email">Nama Team Leader</label>
							<input type="text" class="form-control" id="teamLeader" name="teamLeader">
							<small class="form-text text-danger"><?= form_error('teamLeader'); ?></small>
						</div>
						<div class="form-group">
							<label for="email">NIM Team Leader</label>
							<input type="text" class="form-control" id="nimLeader" name="nimLeader">
						</div>
						<div class="form-group">
							<label for="email">ID Line Team Leader</label>
							<input type="text" class="form-control" id="lineLeader" name="lineLeader">
						</div>
						<div class="form-group">
							<label for="email">Nomor HP Team Leader</label>
							<input type="text" class="form-control" id="noHpLeader" name="noHpLeader">
						</div>
						<div class="form-group">
							<label for="email">Upload KTM Leader</label>
							<input type="text" class="form-control" id="ktmLeader" name="ktmLeader">
						</div>
						<button type="submit" name="reg" class="btn btn-primary float-right">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
