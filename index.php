<?php
require "__MODULE__/__module.php";
$views = query("SELECT * FROM data");
#var_dump($views);
?>
<!Doctype html>
<html lang="id">
	<head>
		<link rel="short icon" href="#"/>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no"/>
		<title>RYUGEN STORY</title>
		<link rel="stylesheet" href="./css/daftar.css"/>
	</head>
	<body>
		<div class="container">
		<!-- JUDUL HALAMAN -->
			
			<div class="title">
				<h1>BIODATA</h1>
			</div>
			
		<!-- End Judul -->
	   <br>
	   <!-- BUTTON ADD DATA -->
		<a class="link" href="./__INDEX__/add.php"><span class="add">
			ADD LIST
		</span></a>
		<!-- END BUTTON ADD-->
			
		<!--- LIST DATA -->
		<?php $nomor=1;?>
		<!--Scroll-->
		<div class="scroll">
		<table color="white" class="list" border="1" cellpadding="5" cellspacing="10">
			<!-- fix bug tabel loop 2x : jangan di loop di sini -->
			<thead class="label" style="background:#00BBFF;">
				<tr>
					<th>NO</th>
					<th>FOTO</th>
					<th>BIOGRAFI</th>
					<th>SETTING</th>
				</tr>
			</thead>
			<?php foreach($views as $vi) :?>
			
			<tbody class="bio">
				<tr>
					<td class="isi"><?=$nomor;?>.</td>
					<td><img alt="GAMBAR" width="100px"  src="<?=$vi['gambar'];?>"/></td>
					<td class="isi"><?=$vi['bio'];?></td>
					<td><a  id="btn-delete" class="link" href="./__INDEX__/delete.php?id=<?=$vi['id'];?>">DELETE</a>
                    <br><a id='btn-edit' class="link" href="
./__INDEX__/edit.php?id=<?=$vi['id'];?>">EDIT</a></td>
				</tr>
			</tbody>
			
			<?php $nomor++;?>
			<?php endforeach;?>
				
		</table>
		<div>
		<!-- end scroll -->
		<!-- END LIST DATA -->
		</div>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script src="./js/add.js"></script>
	</body>
</html>