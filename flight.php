<?php 
	include ("libs/connect.php");
	$qflight = "SELECT * FROM tb_flight";
	$rstflight = $connect->query($qflight);

?>
<html>
	<head>
		<title>Dinas Pariwisata Yogyakarta.</title>
		<link href="css/grid.css" rel="stylesheet"/>
		<link href="css/style.css" rel="stylesheet"/>
		<link href="css/slide.css" rel="stylesheet"/>
		<link href="css/modal.css" rel="stylesheet"/>
		<link href="css/font.css" rel="stylesheet"/>
	</head>
	<body>
		<header class="header-solid ">
			<div class="g12plus nomarg">
				<div class="g1 col"></div>
				<div class="g10 col">
					<div class="g6 col">
						<div class="g2 col center">
							<img src="img/icon/logo.png" width="65%"/>
						</div>
						<div class="g10 col head-logo">
							<h2>Dinas Pariwisata </h2>
							<h1>YOGYAKARTA</h1>
						</div>
					</div>
					<div class="g6 col">
						<ul>
							<li><a>Beranda</a></li>
							<li><a>Agenda & Berita</a></li>
							<li><a>Profil</a></li>
						</ul>
					</div>
				</div>
				<div class="g1 col"></div>
			</div>
		</header>
		<div class="g12plus nomarg content ">
			<div class="g1 col"></div>
			<div class="g10 col nomarg">
				<h1 class="title center paddingtop">Jadwal Penerbangan</h1>
				<div class="g12plus">
					<table>
						<thead>
							<td>Maskapai</td>
							<td>Kode</td>
							<td>Tanggal</td>
							<td>Pergi</td>
							<td>Tiba</td>
							<td>Harga</td>
						</thead>
						<tbody>
							<?php 
							while ($row_f = $rstflight ->fetch_assoc()) {
											echo "<tr>";
												echo "<td>".$row_f['flight_nama']."</td>";
												echo "<td>".$row_f['flight_kode']."</td>";
											echo "</tr>";	
								}
							 ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="g1 col"></div>
		</div>
		<div class="g12plus foot nomarg">
			<div class="g3 col nomarg">
				<div class="icon center">
					<img src="img/icon/map.png" width="80%"/>
				</div>
				<div class="desc">
					<a>Jl. Malioboro No.56, Suryatmajan</a>
				</div>
			</div>
			<div class="g3 col nomarg">
				<div class="icon center">
					<img src="img/icon/email.png" width="80%"/>
				</div>
				<div class="desc">
					<a>dinaspariwisata@yogyakarta.go.id</a>
				</div>
			</div>
			<div class="g3 col nomarg">
				<div class="icon center">
					<img src="img/icon/telp.png" width="80%"/>
				</div>
				<div class="desc">
					<a>+62 274 587486</a>
				</div>
			</div>
			<div class="g3 col nomarg">
				<div class="copy">
					<a> Copyrights &copy; 2016 ,<span>WDS-Squad</span></a>
				</div>
			</div>
		</div>

		
		

	</body>
</html>