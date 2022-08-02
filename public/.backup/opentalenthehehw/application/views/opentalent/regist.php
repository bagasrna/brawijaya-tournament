        <section id="leaderForm">
        	<div class="content avoid-header">
        		<div class="container bg-form">
        			<div class="card">
        				<div class="card-header">
        					Form Tambah Team
        				</div>
        				<div class="card-body">
        					<form action="" method="post" enctype="multipart/form-data">
        						<div class="form-group">
        							<label for="nim">Talent</label>
        							<select name="talentOptions">
        								<?php foreach ($talents as $t) : ?>
        									<option value="<?= $t['id_talent'] ?>"><?= $t['nama_talent']; ?></option>
        								<?php endforeach ?>
        							</select>
        						</div>
        						<div class="form-group">
        							<label for="nim">Nama Team</label>
        							<input type="text" class="form-control" id="namaTeam" name="namaTeam">
        						</div>
        						<div class="form-group">
        							<label for="email">Nama Team Leader</label>
        							<input type="text" class="form-control" id="teamLeader" name="teamLeader">
        						</div>
        						<div class="form-group">
        							<label for="email">NIM Team Leader</label>
        							<input type="text" class="form-control" id="nimLeader" name="nimLeader">
        							<?= form_error('nimLeader', '<small class="text-danger pl-3">', '</small>') ?>
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
        							<input type="file" class="form-control" id="ktmLeader" name="ktmLeader">
        						</div>
        						<button type="submit" name="reg" class="btn reg-submit float-right">Tambah Data</button>
        					</form>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
