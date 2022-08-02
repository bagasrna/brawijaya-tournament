<div class="content mt-3 avoid-header">
	<div class="container">
		<div class="container bg-form">
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
								<?= form_error('teamMember[]', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="nimMember">NIM Team Member 1</label>
								<input type="text" class="form-control" id="nimMember[]" name="nimMember[]">
								<?= form_error('nimMember[]', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="ktmMember">Upload KTM Member 1</label>
								<input type="file" class="form-control" id="ktmMember[]" name="ktmMember[]">
							</div>
						</div>
					</div>
					<div class="card-body">
						<div id="2smember">
							<div class="form-group">
								<label for="teamMember" id="testaje">Nama Team member 2</label>
								<input type="text" class="form-control" id="teamMember[]" name="teamMember[]">
							</div>
							<div class="form-group">
								<label for="nimMember">NIM Team Member 2</label>
								<input type="text" class="form-control" id="nimMember[]" name="nimMember[]">
								<?= form_error('nimMember[]', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="ktmMember">Upload KTM Member 2</label>
								<input type="file" class="form-control" id="ktmMember[]" name="ktmMember[]">
							</div>
						</div>
					</div>
					<div id="form-memb">

					</div>
					<div class="container">
						<div id="cont-btn" class="btn btn-secondary float-right">
							Tambah Anggota
						</div>
						<button name="regs" class="btn reg-submit float-right">Tambah Data</button>
					</div>
			</form>
		</div>
	</div>
</div>
</div>