<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/soal/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/soal/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Id Mata Pelajaran*</label>
								<input class="form-control <?php echo form_error('id_mapel') ? 'is-invalid':'' ?>"
								 type="text" name="id_mapel" placeholder="Masukkan Id mapel" />
								<div class="invalid-feedback">
									<?php echo form_error('id_mapel') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Pertanyaan*</label>
								<textarea class="form-control <?php echo form_error('pertanyaan') ? 'is-invalid':'' ?>"
								 name="pertanyaan" placeholder="Masukkan pertanyaan..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('pertanyaan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Pilihan A*</label>
								<input class="form-control <?php echo form_error('pilihan_a') ? 'is-invalid':'' ?>"
								 type="text" name="pilihan_a" placeholder="Masukkan pilihan_a" />
								<div class="invalid-feedback">
									<?php echo form_error('pilihan_a') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Pilihan B*</label>
								<input class="form-control <?php echo form_error('pilihan_b') ? 'is-invalid':'' ?>"
								 type="text" name="pilihan_b" placeholder="Masukkan pilihan_b" />
								<div class="invalid-feedback">
									<?php echo form_error('pilihan_b') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Pilihan C*</label>
								<input class="form-control <?php echo form_error('pilihan_c') ? 'is-invalid':'' ?>"
								 type="text" name="pilihan_c" placeholder="Masukkan pilihan_c" />
								<div class="invalid-feedback">
									<?php echo form_error('pilihan_c') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Pilihan D*</label>
								<input class="form-control <?php echo form_error('pilihan_d') ? 'is-invalid':'' ?>"
								 type="text" name="pilihan_d" placeholder="Masukkan pilihan_d" />
								<div class="invalid-feedback">
									<?php echo form_error('pilihan_d') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="skor_a">Skor A*</label>
								<input class="form-control <?php echo form_error('skor_a') ? 'is-invalid':'' ?>"
								 type="number" name="skor_a" min="0" placeholder="Masukkan Skor A" />
								<div class="invalid-feedback">
									<?php echo form_error('skor_a') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="skor_b">Skor B*</label>
								<input class="form-control <?php echo form_error('skor_b') ? 'is-invalid':'' ?>"
								 type="number" name="skor_b" min="0" placeholder="Masukkan Skor B" />
								<div class="invalid-feedback">
									<?php echo form_error('skor_b') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="skor_c">Skor C*</label>
								<input class="form-control <?php echo form_error('skor_c') ? 'is-invalid':'' ?>"
								 type="number" name="skor_c" min="0" placeholder="Masukkan Skor C" />
								<div class="invalid-feedback">
									<?php echo form_error('skor_d') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="skor_d">Skor D*</label>
								<input class="form-control <?php echo form_error('skor_d') ? 'is-invalid':'' ?>"
								 type="number" name="skor_d" min="0" placeholder="Masukkan Skor D" />
								<div class="invalid-feedback">
									<?php echo form_error('skor_d') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Kunci*</label>
								<input class="form-control <?php echo form_error('kunci') ? 'is-invalid':'' ?>"
								 type="text" name="kunci" placeholder="Masukkan Kunci Jawaban" />
								<div class="invalid-feedback">
									<?php echo form_error('kunci') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
