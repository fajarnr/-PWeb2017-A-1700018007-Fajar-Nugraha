<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<style type="text/css">

body {
	font-family: 	Arial, Helvetica, sans-serif;
}
    #halaman { width:100%; height: 100%;}
    #header { height:200px; width: 500px; background-color: #006400;padding: 0px; margin-top: 0px; border-radius:15px; }
    #menu { height:50px; background-color: #006400;padding: 2px; margin-top: 1px; border-radius:15px; }
    #tengah { height:60px; background-color: #FFD700;padding: 100px; margin-top: 65px; border-radius:15px; }
    #footer { clear:both; height:50px;padding:10px; border-radius:15px; background-color:#006400; margin-top:10px;}
    .warnafontheader{
    	color: 	black;
   		vertical-align: bottom;
   		text-align: center; text-align: center; text-align: left;			
    }
    .warnafontfooter{
    	color: 	white;
    }
    ul{
      list-style-type: none;
      margin:3px;
      padding: 5px;
      overflow: hidden;
      background-color: #006400;;
      position: fixed;
      bottom: center;
      width: 98%;
      border-radius:10px;
    }
    li{
      float: left;
    }
    li a{
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    li a:hover:not(.active){
      background-color: #FFD700;
      border-radius: 5px;
    }
    .active{
      background-color: #FFD700;
      border-radius: 5px;
    }

</style>
</head>
<body>
	<div id="halaman">
  <?php
    date_default_timezone_get('asia/jakarta');
    $tanggal=date('l, j F Y');
    echo"<br>$tanggal";
  ?>
<h1 class="warnafontheader"><img src="logo.png" width="100" height="140" align="center">&nbsp;&nbsp;&nbsp;Makamah Agung Republik Indonesia Pengadilan Tinggi/Tipikor Jayapura</h1><h4>&nbsp;&nbsp;JL. Tanjung Ria No.98 Base"G,JAYAPURA-PAPUA 99117
Telp: (0967)541248, Fax:(0967)541045, Email: ptjayapura@yahoo.co.id</h4></div>
  <div>
    <ul>
      <li><a class="active" href="header2.php">Home</a>
      <li><a class="" href="form.html">Tambah</a>
      <li><a href="view.php">Tampil & edit data</a>
    </ul>
  </div>
</div>
<div id="tengah">
	 <h2 align="center">Selamat Datang
Selamat Datang di Website Resmi Pengadilan Tinggi Jayapura. Website ini merupakan website pengadilan yang sudah memenuhi standar SK KMA 1-144/2011 tentang Pedoman Pelayanan Informasi di Pengadilan.</h2><a href="http://pt-jayapura.go.id/new/">lebih lanjut</a>
</div>
<div id="footer">
	<h5 class="warnafontfooter" align="right">@fajar nugraha 1700018007</h5>
	
</div>
</body>
</html>