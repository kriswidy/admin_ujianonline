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

				<!--DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<h4> <center> Daftar User </center></h4>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Email</th>
										<th>Username</th>
										<th>Password</th>
										<th>Level</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($tbl_user as $user): ?>
									<tr>
										<td width="150">
											<?php echo $user->nama_user ?>
										</td>
										<td>
											<?php echo $user->email ?>
										</td>
										<td>
											<?php echo $user->username ?>
										</td>
										<td>
											<?php echo $user->password ?>
										</td>
										<td>
											<?php echo $user->level ?>
										</td>

										<td width="250">
											<a onclick="deleteConfirm('<?php echo site_url('admin/user/delete/'.$user->id_user) ?>')"
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
			<!-- /.container-fluid

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
 -->