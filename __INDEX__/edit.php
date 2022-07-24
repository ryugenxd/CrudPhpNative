<?php
require "../__MODULE__/__module.php";

$id = $_GET['id'];
$data = query("SELECT * FROM data WHERE id = $id")[0];
#var_dump($data);

if(isset($_POST["edit"])){
	if(edit($_POST) > 0){
		echo "<script>alert(\"Data Berhasil Di Ubah\");</script>";
	}else{
      echo "<script>alert(\"Data Gagal Di Ubah\");</script>";
    }
}

?>
<!Doctype html>
<html lang="id">
	<head>
		<link rel="short icon" href="#"/>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no"/>
		<title>Edit List</title>
		<link rel="stylesheet" href="../css/add.css"/>
	</head>
	<body>
		<!-- JUDUL HALAMAN -->
			
			<div class="title">
				<h1>EDIT DATA</h1>
			</div>
			
		<!-- End Judul -->
	   <!-- BUTTON ADD DATA -->
		<br>
		<a class="link" href="../index.php"><span class="add">
			BACK TO LIST
		</span></a>
		<!-- END BUTTON ADD-->
		<br>
		<div class="container">
			
			<div class="wrapper">
			<!-- Tabel formulir -->
			<table class="add-data">
				<form action="" method="post"  enctype="multipart/form-data" >
				<input type='hidden' name='id' value='<?=$data['id']?>'/>
				<input type='hidden' name='gambarlama' value='<?=$data['gambar']?>'/>
				<!-- input data -->
				<tr>
					<td><label for="img" >image: </label>
                    <input id="img" name="gambar" type="file" accept="image/*" />
                    </td>
				</tr>
				<tr>
					<td class="form">
						<center><img src="../<?=$data['gambar'];?>" width="100px"/></center>
						<br>
						<h1>BIOGRAFI: </h1>
						<textarea id="bio" name="bio" cols="30" rows="5"><?=$data['bio'];?></textarea>
                    </td>
				</tr>
				<tr>
					<td><div class="foto"></div></td>
				</tr>
				<tr class="container">
					<td>
						<input   class="btn-add" name="edit" type='submit' value="EDIT DATA"/>
					</td>
				</tr>
				</form>
			</table>
			<!-- End tabel -->
			<div>
		</div>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script src="../js/add.js"></script>
	</body>
</html>