<div class="content">
	<div class="container">
		<div class="card mt-5" style="width: 18rem;">
			<div class="card-header">
				Daftar Member <?= $leader['nama_team']; ?>
			</div>
			<ul class="list-group list-group-flush">
				<?php foreach ($members as $m) : ?>
					<li class="list-group-item">Nama: <?= $m['nama_member'] ?><br>NIM: <span><b><?= $m['nim_member']; ?></b></span>
						<br><span><img style="width: 135px" src="<?= base_url('/upload/ktm/') . $m['ktm'] ?>" alt="ktm"></span></li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
</div>
</div>
