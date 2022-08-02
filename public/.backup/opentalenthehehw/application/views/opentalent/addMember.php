<div class="content mt-3 avoid-header">
	<div class="container">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="card">
				<div class="card-header">
					Form Tambah Anggota
				</div>
				<div class="card-body">
					<div id="1smember">
						<div class="form-group">
							<label for="teamMember">Nama Team member 1</label>
							<input type="text" class="form-control" id="teamMember[]" name="teamMember[]">
						</div>
						<div class="form-group">
							<label for="nimMember">NIM Team Member</label>
							<input type="text" class="form-control" id="nimMember[]" name="nimMember[]">
							<?= form_error('nimMember[]', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="ktmMember">Upload KTM Member</label>
							<input type="file" class="form-control" id="ktmMember[]" name="ktmMember[]">
						</div>
					</div>
				</div>
				<div class="card-body">
					<div id="2smember">
						<div class="form-group">
							<label for="teamMember">Nama Team member 2</label>
							<input type="text" class="form-control" id="teamMember[]" name="teamMember[]">
						</div>
						<div class="form-group">
							<label for="nimMember">NIM Team Member</label>
							<input type="text" class="form-control" id="nimMember[]" name="nimMember[]">
							<?= form_error('nimMember[]', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="ktmMember">Upload KTM Member</label>
							<input type="file" class="form-control" id="ktmMember[]" name="ktmMember[]">
						</div>
					</div>
					<button type="submit" name="reg" class="btn reg-submit float-right">Tambah Data</button>
				</div>
		</form>
	</div>
</div>
</div>