<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<?php 
	$conn = mysqli_connect('localhost', 'root', '', 'monitorizare') or   die('Could not connect: ' . mysqli_connect_error());;
	$data = mysqli_query($conn, "SELECT * FROM data order by Nr DESC limit 0,25");	
	mysqli_close($conn);
?> 
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="3" >

	<title>Richard Andronache WebSite</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="wrapper clearfix">
			<div id="logo">
				<a href="index.html"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li class="selected">
					<a href="start_stop.php">Start/Stop</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="wrapper clearfix">
			<div id="sidebar">
				<ul>
					<li>
						<a href="control.php"><img src="images/Control.jpg" alt="Img" height="154" width="213"></a>
					</li>
					<li>
						<a href="documents/proiect.pdf" target="_blank"><img src="images/Placa_Dezvoltare.jpg" alt="Img" height="154" width="213"></a>
					</li>
				</ul>
				<div class="click-here">
					<h1>Download program!</h1>
					<a href="documents/documents.rar" class="btn1">Click aici !</a>
				</div>
			</div>
			<div class="main">
				<table style="width:60%" align="left" color="white">
					<tr bgcolor="orange">
						<td width="10%" align="center">Nr.</td>
						<td width="35%" align="center">Data</td>
						<td width="10%" align="center">Temp</td>
						<td width="15%" align="center">Gaz</td>
						<td width="15%" align="center">Alcool</td>
						<td width="15%" align="center">Inclinare</td>
					</tr>
					<?php 
						while($info = mysqli_fetch_assoc($data)) 
						{
						?> 
						 <tr bgcolor="white">
							<td width="10%" align="center"><?php Print $info['Nr']; ?></td>
							<td width="35%" align="center"><?php Print $info['Data']; ?></td>
							<td width="10%" align="center"><?php Print $info['Temp']; ?></td>
							<td width="15%" align="center"><?php Print $info['Gaz']; ?></td>
							<td width="15%" align="center"><?php Print $info['Alcool']; ?></td>
							<td width="15%" align="center"><?php Print $info['Inclinare']; ?></td>
						 </tr>
						<?php
						}
					?>
				</table>                                                         
			</div>
		</div>
	</div>
	<div id="footer">
		<ul id="featured" class="wrapper clearfix">
			<li>
				<a href="control.php">
				<img src="images/Control.jpg" alt="Img" height="180" width="220"></a>
				<h3><a href="control.php">Control</a></h3>
				<p>
					Interfata de control este realizata in HTML cu PHP. Se utilizeaza o structura de
					cadru pentru transportul datelor.
				</p>
			</li>
			<li>
				<a href="documents/Hardware.pdf" target="_blank">
				<img src="images/Hardware.jpg" alt="Img" height="180" width="220"></a>
				<h3><a href="documents/Hardware.pdf" target="_blank">Hardware</a></h3>
				<p>
					Arduino Uno, senzori de temperatura, fum, alcool si giroscop.
					Bluetooth cu parametrii 9600,8,1,N.
				</p>
			</li>
			<li>
				<a href="documents/Software.pdf" target="_blank">
				<img src="images/Software.jpg" alt="Img" height="180" width="220"></a>
				<h3><a href="documents/Software.pdf" target="_blank">Software</a></h3>
				<p>
					Programe pentru Arduino Uno. Interfata HTML si PHP. Baza de date mySQL in
					root localhost.
				</p>
			</li>
			<li>
				<a href="documents/Proiect.pdf" target="_blank">
				<img src="images/Placa_Dezvoltare.jpg" alt="Img" height="180" width="220"></a>
				<h3><a href="documents/Proiect.pdf" target="_blank">Proiectul meu</a></h3>
				<p>
					O buna metoda de a invata electronica si a pune in practica cunostintele 
					de informatica din liceu.
				</p>
			</li>
		</ul>
		<div class="body">
			<div class="wrapper clearfix">
				<div id="links">
					<div>
						<h4>Social</h4>
						<ul>
							<li>
								<a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank">Google +</a>
							</li>
						</ul>
					</div>
			<div class="wrapper clearfix">
				<div id="links">
					<div>
						<h4></h4>
						<ul>
							<li>
								<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank">Facebook</a>
							</li>
						</ul>
					</div>
			<div class="wrapper clearfix">
				<div id="links">
					<div>
						<h4></h4>
						<ul>
							<li>
								<a href="http://freewebsitetemplates.com/go/youtube/" target="_blank">Youtube</a>
							</li>
						</ul>
					</div>
				</div>
				<p class="footnote">
					© Copyright © 2016.Richard Andronache
				</p>
			</div>
		</div>
	</div>
</body>
</html>