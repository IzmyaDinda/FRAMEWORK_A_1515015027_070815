<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('page_tittle','Halaman Awal') | Labboratorium Pemrograman FW</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css//bootstrap.min.css)}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
	<style type="text/css">
	body {
		padding-top: 70px;
		padding-bottom: 70px;
	}
	.starter-template{
		padding: 40px 15px;
		text-align: center;
	}
	.form-horizontal{
		padding-top: 15px;
		text-align: right;
	}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span clas="icon-bar"></span>
					<span clas="icon-bar"></span>
					<span clas="icon-bar"></span>
				</button>
				<a href="{{url('/')}}" class="navbar-brand">Laravel-5</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Mahasiswa <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dlabel">
							<li><a href="{{url('mahasiswa')}}">Data Mahasiswa</a></li>
							<li class="divider"></li>
							<li><a href="{{url('jadwal_matakuliah')}}">Jadwal Mahasiswa</a></li>							
						</ul>					
					</li>
					<li class="dropdown active">
						<a href="#" data-toggle="dropdwon" role="button" aria-haspopup="true" aria-expanded="false"> Dosen <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labeleldby=""dlabel>
							<li><a href="{{url('dosen')}}">Data Dosen</a></li>
							<li><a href="{{url('dosen_matakuliah')}}">Jadwal Dosen Mengajar</a></li>
						</ul>
					</li>
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pengaturan <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dlabel">
							<li><a href="{{url('pengguna')}}">Pengguna</a></li>
							<li class="divider"></li>
							<li><a href="{{url('ruangan')}}">Ruangan</a></li>
							<li><a href="{{url('matakuliah')}}">Matakuliah</a></li>
						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse-->
		</div>	
	</nav>
	<div class="clearfix"></div>
	<div class="container">
		@if (Session::has('informasi'))
			<div class="alert alert-info">
				<strong>Informasi :</strong>{{Session::get('informasi')}}
			</div>
		@endif
		@yield('çontainer')
	</div>
	<nav class="conta">
		
	</nav>
</body>
</html>