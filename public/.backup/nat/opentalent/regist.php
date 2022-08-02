		<section id="leaderForm">
			<div class="content avoid-header">
				<div class="container bg-form">
					<div class="card">
						<div class="card-header">
							Form Pendaftaran
						</div>
						<div class="card-body">
							<?= $this->session->flashdata('message'); ?>
							<form action="" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="talentOptions">Talent</label>
									<select name="talentOptions">
										<?php foreach ($talents as $t) : ?>
											<?php if ($selectedTalent == $t) : ?>
												<option selected value="<?= $t['id_talent'] ?>" selected><?= $t['nama_talent']; ?></option>
											<?php endif; ?>
										<?php endforeach ?>
									</select>
								</div>
								<div class="form-group">
									<label for="namaTeam">Nama Team</label>
									<input type="text" class="form-control" id="namaTeam" name="namaTeam">
									<?= form_error('namaTeam', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="form-group">
									<label for="teamLeader">Nama Team Leader</label>
									<input type="text" class="form-control" id="teamLeader" name="teamLeader" value="<?= $_SESSION['nama']; ?>" readonly>
									<p></p>
									<?= form_error('teamLeader', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="form-group">
									<label for="nimLeader">NIM Team Leader</label>
									<input type="text" class="form-control" id="nimLeader" name="nimLeader" value="<?= $_SESSION['nim']; ?>" readonly>
									<?= form_error('nimLeader', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="form-group">
									<label for="lineLeader">ID Line Team Leader</label>
									<input type="text" class="form-control" id="lineLeader" name="lineLeader">
									<?= form_error('lineLeader', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="form-group">
									<label for="noHpLeader">Nomor HP Team Leader</label>
									<input type="text" class="form-control" id="noHpLeader" name="noHpLeader">
									<?= form_error('noHpLeader', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="form-group">
									<label for="ktmLeader">Upload KTM Leader</label>
									<input type="file" class="form-control" id="ktmLeader" name="ktmLeader">
									<p>*ukuran max 1MB</p>
								</div>
								<div class="form-group">
									<label for="ktmLeader">Link Video</label>
									<input type="text" class="form-control" id="linkVideo" name="linkVideo">
									<?= form_error('linkVideo', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="" id="terms" onchange="activeButton(this)">Saya setuju dan patuh kepada syarat & ketentuan yang ada.</label>
								</div>
								<button type="submit" name="reg" id="submit-lead" class="btn reg-submit float-right">Tambah Data</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>