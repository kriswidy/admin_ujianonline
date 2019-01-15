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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/soal/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Id Mapel</th>
										<th>Pertanyaan</th>
										<th>Pilihan A</th>
										<th>Pilihan B</th>
										<th>Pilihan C</th>
										<th>Pilihan D</th>
										<th>Skor A</th>
										<th>Skor B</th>
										<th>Skor C</th>
										<th>Skor D</th>
										<th>Kunci</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($tbl_soal as $soal): ?>
									<tr>
										<td width="150">
											<?php echo $soal->id_mapel ?>
										</td>
										<td class="small">
											<?php echo substr($soal->pertanyaan, 0, 120) ?>...</td>
										<td>
											<?php echo $soal->pilihan_a ?>
										</td>
										<td>
											<?php echo $soal->pilihan_b ?>
										</td>
										<td>
											<?php echo $soal->pilihan_c ?>
										</td>
										<td>
											<?php echo $soal->pilihan_d ?>
										</td>
										<td>
											<?php echo $soal->skor_a ?>
										</td>
										<td>
											<?php echo $soal->skor_b ?>
										</td>
										<td>
											<?php echo $soal->skor_c ?>
										</td>
										<td>
											<?php echo $soal->skor_d ?>
										</td>
										<td>
											<?php echo $soal->kunci ?>
										</td>

										<td width="250">
											<a href="<?php echo site_url('admin/soal/edit/'.$soal->id_soal) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/soal/delete/'.$soal->id_soal) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
