<!DOCTYPE HTML>
<html>
	<head>
		<title>Arbalo AG</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
        <script type="text/javascript">
		$(function() {
		  $('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html,body').animate({
				  scrollTop: target.offset().top
				}, 1000);
				return false;
			  }
			}
		  });
		});	
		$(function() {
			$.each($('.email'), function(){
				var email = $(this).text();
				email = email.replace('[affe]','@');	
				email = email.replace('[punto]','.');	
				$(this).text(email);
				});
			});		
		function checkform(){
			if($("#name").val()!="" && $("#email").val()!="" && $("#subject").val()!="" && $("#message").val()!="") $("#contactform").submit();
			else $("#formmsg").show();
		}
		</script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css?Ver=V1c" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<?php 
		$n=isset($_GET["n"])?$_GET["n"]:"";
		$e=isset($_GET["n"])?$_GET["e"]:"";
		$s=isset($_GET["n"])?$_GET["s"]:"";
		$m=isset($_GET["n"])?$_GET["m"]:"";
		?>		
	</head>
	<body class="homepage">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
						
				<!-- Header -->
					<div id="header" class="container">
						
						<!-- Logo -->
	                         <div class="logo" onclick="top.location.href='index.php'">Arbalo</div>
                             <div class="logo_byline" onclick="top.location.href='index.php'">the digital company</div>
						
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="index.php">Home</a></li>
                                    <li><a href="#DigitalOffice">Digitalisierung</a></li>
                                    <li><a href="#Aboutus">Speaker</a></li>
                                    <li><a href="#Contact">Anmeldung</a></li>
								</ul>
							</nav>

					</div>

			</div>

		<!-- Main Wrapper -->
			<div id="main-wrapper">

				<!-- Main -->
					<div id="banner-wrapper">
						<section id="banner" class="container">
							<div class="row">
								<div id="content" class="12u">

									<header class="major">
										
										<h2>
										<?php
										if(isset($_GET["formsent"])){
											echo "$n,<br>vielen Dank für Ihre Anmeldung zur ";
											}
										?>
										Lancierung Arbalo Digital Office</h2>
										<p>Intelligente Lösungen vernetzt</p>
										<br>
										<p>
										<span class="icon fa-clock-o"></span> Donnerstag, 27.08.2015, 18:00 - 19:30<br>
										<span class="icon fa-home"></span> Zugerberg Finanz AG, Lüssiweg 47, 6300 Zug<br>
										<span class="icon fa-info-circle"></span> Türöffnung 17:30, mit Nachtessen ab 19:30<br>
										<a href="20150827arbaloEvent.ics"><span class="icon fa-calendar"></span></a><br />								
										</p>
										<a href="#Contact" class="button alt">Jetzt anmelden</a>
									</header>


									<span id="DigitalOffice"></span>
								</div>
							</div>
						</section>
					</div>



				<!-- Main -->
					<div id="page" class="container" style="margin-top:100px">					
						<!-- Main Content -->
							<div id="main">
								<div class="row">
									<!-- Sidebar -->
										<div id="sidebar" class="4u">
											<section class="section-padding">
												<header>
													<h2>Arbalo Digital Office</h2>
												</header>
												<p>
												Wir von der Arbalo AG wissen, dass alle relevanten Informationen vorhanden sind - jedoch liegen sie verstreut an verschiedenen Orten: 
                                                in der Mail-Ablage, auf dem Server, im Internet, in Präsentationen etc.<br><br>
                                               Wir bringen die Daten zusammen, verknüpfen Informationen - und plötzlich lassen sie sich auswerten, ansehen, begreifen. 
												</p>
												<p>Das Arbalo Digital Office ist modular aufgebaut und erleichtert  das Arbeiten mit digitalen Informationen.</p>
												<footer>
													<!--<a href="#" class="button small alt2">Weitere Module</a>-->
												</footer>
											</section>											
										</div>

									<!-- Content -->
										<div class="8u skel-cell-important">
											<article>
												<header>
													<h2>Intelligente Lösungen vernetzt</h2>
												</header>
												<a href="#" class="image featured"><img src="images/events/digitalisierung.jpg" alt=""></a>
												<h3>Der nächste Effizienzsprung  durch vernetzte Daten</h3>
												<p>
													Die Arbalo AG wurde im Dezember 2014 zur Entwicklung und Umsetzung des Digital Offices gegründet und möchte Ansatz und Nutzen ihrer Lösung erstmals öffentlich vorstellen. 
												</p>
												<p>
													Die Zugerberg Finanz AG ist ein aktiver, unabhängiger Vermögensverwalter und stellt uns für die Lancierung von Arbalo Digital Office ihren tollen Geschäftssitz am Lüssiweg 47 in Zug zur Verfügung.  
												</p>
												<p>
													Im Rahmen der Lancierung stellen sich die beiden Firmen vor und betrachten das Thema Digitalisierung aus verschiedenen Blickwinkeln. 
												</p>
												<p>
													Digitalisierung bewegt. Nicht nur Medien, Bundesstellen und Hochschulen, nein auch Unternehmen und Privatpersonen: wer kennt sie nicht, die unnütze Zeitverschwendung für die Suche von Informationen und Dokumenten, den grossen manuellen Pflegeaufwand verschiedenster digitaler Insel Lösungen oder der verschiedenen Bruchstellen zwischen Papier und Informatik.
												</p>
												<p>
													Wir sind überzeugt, dass Informatik - intelligent zum Nutzen des Verwenders eingesetzt -  anders aussieht: deshalb  Arbalo Digital Office!
												</p>																								
											</article>
										</div>

								</div>
							</div>
						<!-- Main Content -->

					</div>
				<!-- Main -->

		</div>


		<!-- Featured Wrapper -->
			<div id="featured-wrapper">
				<!-- Featured -->
					<section id="featured" class="container">
						<div class="title" id="Aboutus"><span>&laquo;Jedes Geschäft ist ein digitales Geschäft&raquo;</span></div>
						<div class="row">
							<div class="6u">
								<header>
									<h2>Speaker</h2>
								</header>
								<p>
									Von der Zugerberg Finanz AG werden die beiden geschäftsführenden Partner Timo Dainese und Prof. Dr. Maurice Pedergnana ihr Unternehmen vorstellen und einige Aspekte der Digitalisierung aus der Sicht eines Vermögensverwalters beleuchten.  <br><br>									
                                
                                </p>
								<footer>
									<!--<a href="images/logo/arbalo_big.png" target="_blank" class="button">Unternehmenspräsentation</a>-->
								</footer>
							</div>

							<div class="6u">
								<h3>Zugerberg Finanz AG</h3>
								<ul class="style1 three">
									<li>
										<div class="row">
											<div class="4u">
												<a href="#" class="image fit"><img src="images/events/TimoDainese.jpg" alt="" /></a>
											</div>
											<div class="8u">
												<h3>Timo Dainese</h3>
												<p>Gründer und Geschäftsführender Partner,
												Mitglied des Stiftungsrates der Zugerberg Freizügigkeitsstiftung und der Zugerberg 3a Vorsorgestiftung                                              
                                                </p>
											</div>
										</div>
									</li>   
									<li>
										<div class="row">
											<div class="4u">
												<a href="#" class="image fit"><img src="images/events/MauricePedergana.jpg" alt="" /></a>
											</div>
											<div class="8u">
												<h3>Prof. Dr. Maurice Pedergnana</h3>
												<p>Geschäftsführender Partner<br>
                                                Professor für Banking & Finance an der Hochschule Luzern, Finanzexperte, Dr. oec. HSG (Universität St. Gallen)<br>                                                
                                                </p>
											</div>
										</div>
									</li> 				
								</ul>	
							</div>
							<div class="6u">	
								<p>									
									Seitens Arbalo AG geben der Verwaltungsratspräsident Thomas Huber und der Geschäftsführer Bruno Kaiser Einblicke in Hintergründe und Lösungsansätze des Arbalo Digital Office.  
                                
                                </p>
								<footer>
									<!--<a href="images/logo/arbalo_big.png" target="_blank" class="button">Unternehmenspräsentation</a>-->
								</footer>
							</div>	
							<div class="6u">								
								<h3>Arbalo AG</h3>
								<ul class="style1 three">
									<li class="first">
										<div class="row">
											<div class="4u">
												<a href="#" class="image fit"><img src="images/ThomasHuber.jpg" alt="" /></a>
											</div>
											<div class="8u">
												<h3>Thomas Huber</h3>
												<p>Verwaltungsrat<br>
                                                Ehemaliger Partner bei PwC, diverse Verwaltungsratsmandate<br>
                                                </p>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="4u">
												<a href="#" class="image fit"><img src="images/BrunoKaiser.jpg" alt="" /></a>
											</div>
											<div class="8u">
												<h3>Bruno Kaiser</h3>
												<p>Verwaltungsrat, CEO<br>
                                                Ehemaliges Geschäftsleitungsmitglied und CSO der AdNovum Informatik<br> 
                                                </p>
											</div>
										</div>
									</li>                                                                     
								</ul>
							</div>

						</div>
					</section>

			</div>

		<!-- Footer Wrapper -->
			<div id="footer-wrapper">

				<!-- Footer -->
					<div id="footer" class="container">
					
						<div class="title" id="Contact"><span>Business & IT Expertise</span></div>
						
						<div class="row">
						
							<!-- Form -->
								<section class="12u">
									<header>
										<h2>Anmeldung</h2>										
										<p>
											Wir freuen uns darauf, Sie an der Lancierung des Arbalo Digital Office begrüssen zu dürfen.<br>
											Bitte füllen Sie die Anmeldung bis Ende Juli aus und reservieren Sie sich Ihren Platz am Anlass.
										</p>
									<?php
									if(isset($_GET["formsent"])){
										echo "<h2>$n, vielen Dank für Ihre Anmeldung.</h2>";
										}									
									?>										
									</header>
									<div id="formmsg" style="display:none"><span class="fa fa-times"></span> Bitte Angaben korrigieren/ergänzen</div>
									<form name="contactform" id="contactform" method="post" action="form.php" enctype="application/x-www-form-urlencoded">
										<input type="hidden" name="event" value="1">
										<div class="row half collapse-at-2">
											<div class="6u">
												<input type="text" name="name" id="name" placeholder="Name" value="<?php if($n!="") echo $n;?>"/>
											</div>
											<div class="6u">
												<input type="text" name="email" id="email" placeholder="Email" value="<?php if($e!="") echo $e;?>"/>
											</div>
										</div>
										<div class="row half">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Nachricht"><?php if($m!="") echo $m;?></textarea>
											</div>
										</div>
										<div class="row half">
											<div class="12u">
												<ul class="actions">
													<li><a href="javascript:void(0)" onclick="checkform()" class="button alt2">Senden</a></li>
													<li><a href="javascript:void(0)" onclick="$('#contactform')[0].reset()" class="button alt">Zurücksetzen</a></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
						
						</div>
						
					</div>

			</div>

		<!-- Copyright -->
			<div id="copyright">
				&copy; 2014 - 2015 Arbalo AG
			</div>

	</body>
</html>