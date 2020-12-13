<!DOCTYPE html>
<html>
<head>
	<title>UTS</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
</head>
<style>
		#card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
}"
		#card-content {
			padding: 12px 44px;
		}
		#card-title {
			font-family: "Ralewy Thin", sans serif;
			letter-spacing: 4px;
			padding-top: 13px;
			text-align: center;
		}
		.underline-title {
			background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
			height: 2px;
			margin: -1.1rem auto 0 auto;
			width: 200px;
		}
		a {
			text-decoration: none;
		}
		label {
			font-family: "Ralewy Thin", sans-serif;
			font-size: 12px;
		}
		.form {
			align-items: left;
			display: flex;
			flex-direction: column;
			}
		.form-border {
			background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    	height: 1px;
    	width: 100%;
		}
			.form-content {
				background: #fbfbfb;
				border: none;
				outline: none;
				padding-top: 2px
			}
			#submit-btn {
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
}
    #submit-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
	</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shadow " style="background-color:#3175bf "> 
	<a href="" class="navbar-brand">	
	</a>
	<div class="navbar-nav">
			<a href="<?php echo site_url('CController') ?>" class="nav-link" >Home</a>
			<a href="<?php echo site_url('CController/tambah') ?>" class="nav-link" >Tambah Data</a>

		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active"></a>
			
		</div>
	</nav>	
	<div class="alert alert-warning text-center mt-0">
		DATA JURUSAN
	</div>
	<div class="container">
		<div class="container">

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>id_10</th>
						<th>kolom_jurusan</th>
						<th>kolom_kelas</th>
						<th>kolom_isi</th>
					</tr>

				</thead>
				<tbody>
					<?php foreach ($isi as $key) {
						?>
						<tr>
							<td><?php echo $key->id_10; ?></td>
							<td><?php echo $key->kolom_jurusan; ?></td>
							<td><?php echo $key->kolom_kelas; ?></td>
							<td><?php echo $key->kolom_isi; ?></td>

						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</body>
	</html>