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
		<?php 
		$n=isset($_GET["n"])?$_GET["n"]:"";
		$e=isset($_GET["n"])?$_GET["e"]:"";
		$s=isset($_GET["n"])?$_GET["s"]:"";
		$m=isset($_GET["n"])?$_GET["m"]:"";
		?>
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
	</head>
	<body class="homepage">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
						
				<!-- Header -->
					<div id="header" class="container">
						
						<!-- Logo -->
	                         <div class="logo">Arbalo</div>
                             <div class="logo_byline">the digital company</div>
						
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="index.php">Home</a></li>
                                    <li><a href="#DigitalOffice">Arbalo Digital Office</a></li>
                                    <li><a href="#Aboutus">Über uns</a></li>
                                    <li><a href="#Contact">Kontakt</a></li>
									<!--<li>
										<span>Sprachen <i class="fa fa-angle-down"></i></span>
										<ul>
											<li><a href="#">Deutsch</a></li>
											<li><a href="#">Englisch</a></li>
										</ul>
									</li>-->
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
                                            <h2>The Digital Company</h2>
                                            <p>Nutzen Sie die Power von vernetzten Daten</p>

									</header>
									
									<ul class="pennants">
										<li>
											<a href="#" class="pennant"><span class="icon fa-laptop"></span></a>
											<header>
												<h3>Digital Business</h3>
											</header>
											<p>Jedes Geschäft arbeitet mit Daten und Informationen - unsere Kernkompetenz</p>
										</li>
										<li>
											<a href="#" class="pennant"><span class="icon fa-cog"></span></a>
											<header>
												<h3>Modularer Aufbau</h3>
											</header>
											<p>Unsere Software-Lösungen sind einzeln auf Ihre Bedürfnisse zugeschnitten einsetzbar</p>
										</li>
										<li>
											<a href="#" class="pennant"><span class="icon fa-line-chart"></span></a>
											<header>
												<h3>Fokus auf Kernaufgaben</h3>
											</header>
											<p>Sie konzentrieren sich auf Ihr Geschäft und Ihre Kunden - wir machen den Rest</p>
										</li>
										<li>
											<a href="#" class="pennant"><span class="icon fa-cloud"></span></a>
											<header>
												<h3>Cloud statt Hardware</h3>
											</header>
											<p>Unsere Lösungen nutzen Sie bequem über den Browser - kleine Kosten inklusive</p>
										</li>
									</ul>
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
												<p>Das Arbalo Digital Office besteht aus mehreren Komponenten, welche das Arbeiten mit digitalen Informationen erleichtert.</p>
												<ul class="style2">
													<li>Leistungserfassung</li>
													<li>Kunden- und Adressverwaltung (CRM)</li>
													<li>Datenablage (DMS)</li>
												</ul>
												<footer>
													<!--<a href="#" class="button small alt2">Weitere Module</a>-->
												</footer>
											</section>											
										</div>

									<!-- Content -->
										<div class="8u skel-cell-important">
											<article>
												<header>
													<h2>Der nächste Effizienzsprung  durch vernetzte Daten</h2>
												</header>
												<a href="#" class="image featured"><img src="images/pic04.jpg" alt=""></a>
												<h3>Unsere Vision: Sie erhalten die Macht Ihrer vernetzten Daten</h3>
												<p>Wir glauben, dass alle relevanten Informationen vorhanden sind - jedoch liegen sie verstreut an verschiedenen Orten: 
                                                in der Mail-Ablage, auf dem Server, im Internet, in Präsentationen etc. 
                                                Diese Informationen können Sie nicht nutzen, ausser Sie suchen sie einzeln zusammen und werten sie manuell aus.<br> <br>
                                                Der Ansatz von Arbalo ist es, alle Daten zentral zusammenzubringen. 
                                                Erfassen Sie Kundendaten am selben Ort, wo Sie auch die Verträge ablegen. Und Ihre Leistungen auf den Kunden aufschreiben und Rechnung stellen. 
                                                Und Ihre Kundenmeetings planen und protokollieren. Und auf einmal sind Informationen verknüpft - lassen sich auswerten, ansehen, begreifen. 
                                                Nutzen Sie die Macht der vernetzten Daten. 
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
						<div class="title" id="Aboutus"><span>&laquo;Every Business is a Digital Business&raquo;</span></div>
						<div class="row">
							<div class="6u">
								<header>
									<h2>Über uns</h2>
									<p>Arbalo - IT und Business Expertise</p>
								</header>
								<p>Wir kombinieren langjährige Erfahrungen aus Informatik und Wirtschaft. Dadurch verstehen wir Sie als Unternehmen und sprechen die gleiche Sprache, kennen Ihre Probleme. 
                                Wir sind in Start-ups, KMUs und internationalen Konzernen gross geworden. 
                                Wir unterhalten ein starkes Netzwerk, sind in mehreren Verwaltungsräten präsent. Kurz: Wir sind Unternehmer durch und durch. <br><br>
                                Gleichzeitig sind wir auch technologisch stark, bauen auf einer zukunftsgerichteten Architektur auf, haben kleine als auch grosse IT-Projekte umgesetzt. 
                                Wir entwickeln selber, greifen aber auf ein grosses Netz an Programmiererfahrung zurück. 
                                Kurz: Wir sind Tekkies mit Herz und Seele. 
                                </p>
								<footer>
									<!--<a href="images/logo/arbalo_big.png" target="_blank" class="button">Unternehmenspräsentation</a>-->
								</footer>
							</div>

							<div class="6u">
								<ul class="style1 three">
									<li class="first">
										<div class="row">
											<div class="4u">
												<a href="#" class="image fit"><img src="images/ThomasHuber.jpg" alt="" /></a>
											</div>
											<div class="8u">
												<h3><i class="fa fa-suitcase"></i> Thomas Huber</h3>
												<p>Verwaltungsrat<br>
                                                Ehemaliger Partner bei PwC, diverse Verwaltungsratsmandate<br>
                                                <span class="label">Governance</span>
                                                <span class="label">Compliance</span>
                                                <span class="label">Risk Management</span>
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
												<h3><i class="fa fa-laptop"></i> Bruno Kaiser</h3>
												<p>Verwaltungsrat, CEO<br>
                                                Ehemaliges Geschäftsleitungsmitglied und CSO der AdNovum Informatik<br> 
		                                        <span class="label">Software-Architektur</span>
                                                <span class="label">Sicherheit</span>
                                                <span class="label">Programmierung</span>
                                                </p>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="4u">
												<a href="#" class="image fit"><img src="images/WernerFroidevaux.jpg" alt="" /></a>
											</div>
											<div class="8u">
												<h3><i class="fa fa-laptop"></i> Werner Froidevaux</h3>
												<p>CTO<br>
                                                Inhaber Omex AG und Betreiber des Open Source CRM openCRX<br>
		                                        <span class="label">Backend</span>
                                                <span class="label">Datenbanken</span>
                                                <span class="label">Open Source</span>                                                
                                                </p>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="4u">
												<a href="#" class="image fit"><img src="images/PeterWindemann.jpg" alt="" /></a>
											</div>
											<div class="8u">
												<h3><i class="fa fa-laptop"></i> Peter Windemann</h3>
												<p>CMO<br>
                                                Ehemaliger Business Development Manager bei PwC, Inhaber artoogle GmbH<br>
		                                        <span class="label">Frontend</span>
                                                <span class="label">Skriptsprachen</span>
                                                <span class="label">Design</span>                                                
                                                </p>
											</div>
										</div>
									</li>   
									<li>
										<div class="row">
											<div class="4u">
												<a href="#" class="image fit"><img src="images/MarcHofer.jpg" alt="" /></a>
											</div>
											<div class="8u">
												<h3><i class="fa fa-suitcase"></i> Marc Hofer</h3>
												<p>COO<br>
                                                Ehemaliger Group Financial Controller Newscope Group, Leiter Backoffice Penta Group AG<br>
		                                        <span class="label">Business Organisation</span>
                                                <span class="label">Controlling</span>
                                                <span class="label">Accounting</span>                                                
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
								<section class="8u">
									<header>
										<h2>Kontaktformular</h2>
									</header>
									<div id="formmsg" style="display:none"><span class="fa fa-times"></span> Bitte Angaben korrigieren/ergänzen</div>
									<form name="contactform" id="contactform" method="post" action="form.php" enctype="application/x-www-form-urlencoded">
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
												<input type="text" name="subject" id="subject" placeholder="Titel"  value="<?php if($s!="") echo $s;?>"/>
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

							<!-- Other -->
								<section class="4u">
									<header>
										<h2>Kontakt</h2>
									</header>
									<ul class="icons">
										<li class="icon fa-envelope">
											<span class="email">info[affe]arbalo[punto]ch</span>
										</li>
										<li class="icon fa-phone">
											<span>+41 (0)41 780 71 71 </span>
										</li>
										<li class="icon fa-home">
											<span>
												Chamerstrasse 42a<br />
												6331 Hünenberg<br />
												Schweiz
											</span>
										</li>
									</ul>
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