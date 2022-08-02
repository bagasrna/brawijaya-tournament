<div class="content mt-3 avoid-header">
	<div class="container">
		<a class="btn btn-primary mt-2" href="<?= base_url('opentalent/reg') ?>">Daftar</a>
		<table class="table table-hover mt-2">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nama Team</th>
					<th scope="col">Nama Ketua</th>
					<th scope="col">NIM Ketua</th>
					<th scope="col">ID Line</th>
					<th scope="col">No HP</th>
					<th scope="col">Kategori Talent</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; ?>
				<?php foreach ($leader as $k) : ?>
					<?php
					$id = $k['id_talent'];
					$category = $this->db->get_where('ot_talent', ['id_talent' => $id])->row_array();
					?>
					<tr>
						<th scope="row"><?= $i; ?></th>
						<td><?= $k['nama_team']; ?></td>
						<td><?= $k['nama_leader']; ?></td>
						<td><?= $k['nim_leader']; ?></td>
						<td><?= $k['id_line']; ?></td>
						<td><?= $k['no_hp']; ?></td>
						<td><?= $category['nama_talent'] ?></td>
						<td><a class="btn btn-primary" href="<?= base_url('opentalent/members/') . $k['id_team']; ?>">Lihat Member</a></td>
					</tr>
					<?php $i++; ?>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
