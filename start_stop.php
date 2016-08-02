<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<?php 
	$conn = mysqli_connect('localhost', 'root', '', 'monitorizare') or   die('Could not connect: ' . mysqli_connect_error());;
	$user = mysqli_query($conn, "SELECT * FROM user");	
	mysqli_close($conn);
?> 
<html>
<head>
	<meta charset="UTF-8">	
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
		<div class="body clearfix">
			<div class="click-here">
				<h1>Download program</h1>
				<a href="documents/documents.rar" class="btn2">Click aici !</a>
			</div>			
			<p color="white">	
			<form action="start_stop.php" method="get">			
					<h1>Port COM:
					<input type="text" name="COM" id="COM" maxlength="3" size="3" height="30px" width="20">
					<?php 
					 $row=mysqli_fetch_assoc($user);					 
					 if (($row['buton']==0) && ($row['simulator']==0))
					  {?>
						<input type="submit" name="COM_Start" value="Start">
						<input type="submit" name="COM_Stop" value="Stop" disabled></p><?php ;
					  }
					 if (($row['buton']==1) && ($row['simulator']==0)) 
					  {?>
						<input type="submit" name="COM_Start" value="Start" disabled>
						<input type="submit" name="COM_Stop" value="Stop"></p><?php ;
					  }
					 if (($row['buton']==0) && ($row['simulator']==1)) 
					  {?>
						<input type="submit" name="COM_Start" value="Start" disabled>
						<input type="submit" name="COM_Stop" value="Stop" disabled></p><?php ;
					  }
					?>
					Simulator:
					<input type="text" name="Simulator" maxlength="3" size="3" height="30px" width="20" style="background-color:yellow" disabled>
					<?php 
					 if (($row['buton']==0) && ($row['simulator']==0))
					  {?>
						<input type="submit" name="SIM_Start" value="Start">
						<input type="submit" name="SIM_Stop" value="Stop" disabled></p><?php ;
					  }
					 if (($row['buton']==0) && ($row['simulator']==1)) 
					  {?>
						<input type="submit" name="SIM_Start" value="Start" disabled>
						<input type="submit" name="SIM_Stop" value="Stop"></p><?php ;
					  }
					 if (($row['buton']==1) && ($row['simulator']==0)) 
					  {?>
						<input type="submit" name="SIM_Start" value="Start" disabled>
						<input type="submit" name="SIM_Stop" value="Stop" disabled></p><?php ;
					  }					  
					?></h1>
			</form>		
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

<?php
    if(isset($_GET['COM_Start'])) 	{COM_Start();}
    if(isset($_GET['COM_Stop']))	{COM_Stop();}
    if(isset($_GET['SIM_Start'])) 	{SIM_Start();}
    if(isset($_GET['SIM_Stop']))	{SIM_Stop();}
	
	function COM_Start() 
	{
		$conn = mysqli_connect('localhost', 'root', '', 'monitorizare') or   die('Could not connect: ' . mysqli_connect_error());;
		$user = mysqli_query($conn,"UPDATE user SET buton = '1' WHERE Nr = '1'");
		mysqli_close($conn);
		$COM = "start /B Sistem_Monitorizare.bat COM".$_GET['COM'];
		header('Refresh: 1; url=start_stop.php');
		pclose(popen($COM, "r")); die();
	}
	function COM_Stop() 
	{
		$conn = mysqli_connect('localhost', 'root', '', 'monitorizare') or   die('Could not connect: ' . mysqli_connect_error());;
		$user = mysqli_query($conn,"UPDATE user SET buton = '0' WHERE Nr = '1'");
		mysqli_close($conn);
		header('Refresh: 1; url=start_stop.php');
	}
	function SIM_Start() 
	{
		$conn = mysqli_connect('localhost', 'root', '', 'monitorizare') or   die('Could not connect: ' . mysqli_connect_error());;
		$user = mysqli_query($conn,"UPDATE user SET simulator = '1' WHERE Nr = '1'");
		mysqli_close($conn);
		header('Refresh: 1; url=start_stop.php');
		pclose(popen("start /B Sistem_Monitorizare.bat", "r")); die();
	}
	function SIM_Stop() 
	{
		$conn = mysqli_connect('localhost', 'root', '', 'monitorizare') or   die('Could not connect: ' . mysqli_connect_error());;
		$user = mysqli_query($conn,"UPDATE user SET simulator = '0' WHERE Nr = '1'");
		mysqli_close($conn);
		header('Refresh: 1; url=start_stop.php');
	}
?>	

</body>
</html>