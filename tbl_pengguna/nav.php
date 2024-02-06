<!DOCTYPE html>
<html>
<head>
	<title>Navbar CSS</title>
	<style>
 	* {
 		margin:0; 
 		padding:0;
 	}
 
	nav {
		margin:auto;
		text-align: center;
		width: 100%;
		font-family: arial;
	} 
	
	nav ul {
		background:#37988e;
		padding: 0 20px;
		list-style: none;
		position: relative;
		display: inline-table;
		width: 100%;
	 }

	nav ul li{
		float:left;
	}

	nav ul li:hover{
		background:#d68d9a;
	}

	nav ul li:hover a{
	 	color:#000;
	}

	nav ul li a{
	 	display: block;
	 	padding: 25px;
	 	color: #fff;
	 	text-decoration: none;
	}
	</style>

</head>
<body>
<nav>
 	<ul>
		<li style="float: light;"><img align="center" src="1.JPEG.jpg" width="50" height="50" align="center" alt="my-avatar"><li style="float: light;"><a href="#">Buku Tamu</a></li>
 	    <li style="float: right;"><a href="#">D Buku Keluar</a></li>
	 	<li style="float: right;"><a href="#">Data Pegawai</a></li>
	 	<li style="float: right;"><a href="#">Home</a></li>
 	</ul>
</nav>
   <marquee direction='right'> SELAMAT DATANG </marquee>
    <marquee direction='left'> DI WEBSITE KAMI</marquee>
</body>
</html>