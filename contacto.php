
	<!--==================================================-->
	<!----- Start Techno Main Menu Area ----->
	<!--==================================================-->

	<?php include 'cabecera.php' ?>
	
	<!--==================================================-->
	<!----- End Techno Main Menu Area ----->
	<!--==================================================-->
	
	<!-- ============================================================== -->
	<!-- Start Techno Breatcome Area -->
	<!-- ============================================================== -->
	<div class="breatcome_area d-flex align-items-center" style="background-image:url(assets/images/slider-10.jpg)";>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breatcome_title">
						<div class="breatcome_title_inner pb-2">
							<h2 style="text-shadow: 0.1em 0.1em #213612">Contacto</h2>
						</div>
						<div class="breatcome_content">
							<ul>
								<li><a href="file:///Users/macniacos/Desktop/webelayu/info.php">Inicio >></a><span><a href="file:///Users/macniacos/Desktop/webelayu/contacto.php"> Contacto</a></span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Techno Breatcome Area -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
	<!-- Start Techno Contact Address Area -->
	<!-- ============================================================== -->
	
	<div class="contact_address_area pt-80 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title text_center mb-55">
						<div class="section_sub_title uppercase mb-3">
							<h6>AQUÍ TIENES NUESTRO CONTACTO</h6>
						</div>
						<div class="section_main_title">
							<h1>¿Podemos ayudarte?</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_contact_address text_center mb-30">
						<div class="contact_address_icon pb-3">
							<i class="fas fa-map" style="color: #70B53C; font-size: 40px; margin-top: 14px; margin-left: 10px;margin-right: 10px;"></i>
						</div>
						<div class="contact_address_title pb-2">
							<h4>Dirección</h4>
						</div>
						<div class="contact_address_text">
                            <a href="https://g.page/elayudantees?share"><p>C/Floranes 23 entlo, 39010<br>Santander, Cantabria<br></p></a><br></i>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_contact_address text_center mb-30">
						<div class="contact_address_icon pb-3">
							<i class="fas fa-clock" style="color: #70B53C; font-size: 40px; margin-top: 14px; margin-left: 10px;margin-right: 10px;"></i>
						</div>
						<div class="contact_address_title pb-2">
							<h4>Horario</h4>
						</div>
						<div class="contact_address_text">
							<p>De Lunes a Viernes:<br>9:00am - 14:00<br>16:00 - 19:00</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_contact_address text_center mb-30">
						<div class="contact_address_icon pb-3">
							<i class="fas fa-volume-up" style="color: #70B53C; font-size: 40px; margin-top: 14px; margin-left: 10px;margin-right: 10px;"></i>
						</div>
						<div class="contact_address_title pb-2">
							<h4>Contacto</h4>
						</div>
						<div class="contact_address_text">
							<p><i class="fas fa-phone"></i><a href="phone:+34942408570"> 942408570</a><br><i class="fab fa-whatsapp"></i><a href="https://api.whatsapp.com/send?phone=+34622391230"> 622391230</a><br><i class="fas fa-at"></i><a href="mailto:info@elayudante.es"> info@elayudante.es</a></p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Techno Contact Address Area -->
    <!-- ============================================================== -->
    
    <!--==================================================-->
	<!----- Start Techno Contact Area ----->
	<!--==================================================-->
	<div class="main_contact_area app pt-80 bg_fixed " style="background-image:url(assets/images/slider/slider14.jpg)";>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="single_contact_abs_thumb">
						<video width="640" height="480" id="mivideo">
							<source src="assets/videos/avion.mp4" type="video/mp4">
						</video>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section_title white mb-4">
						<div class="section_sub_title uppercase mb-3">
							<h6>DA VIDA A TUS IDEAS</h6>
						</div>
						<div class="section_main_title">
							<h1>Te Ayudamos</h1>
						</div>
					</div>
					<div class="contact_from">
						<form id="contact_form" action="mail.php" method="post">
							<div class="row">
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" id="name" name="name"  placeholder="Nombre" pattern=[A-Z\sa-z]{3,20} required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" id="lastname" name="lastname" placeholder="Apellido" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="number" id="phone" name="phone" placeholder="Telefóno" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="email" id="email" name="email" placeholder="Email" required>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form_box mb-30">
										<textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
									</div>
									<div class="quote_btn">
										<button class="btn" name="submit" type="submit">Enviar</button>
									</div>
								</div>
							</div>
						</form>
						<p class="form-message"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Contact Area ----->
	<!--==================================================-->
    
    <!--==================================================-->
	<!----- End Techno Map Area ----->
	<!--==================================================-->
	<div class="google_map_area">
		<div class="row-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: -8px;">
				<div class="google_map_area">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2875.9788300684945!2d-3.822862881728344!3d43.46095574304391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd494bd489fb6673%3A0x3a68d2f091429a19!2sElAyudante!5e0!3m2!1ses!2ses!4v1612861072601!5m2!1ses!2ses" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>		
				</div>
			</div>				
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Map Area ----->
	<!--==================================================-->

    <!--==================================================-->
	<!----- Start Techno Footer Middle Area ----->
	<!--==================================================-->
	<?php include 'footer.php' ?>
	<!--==================================================-->
	<!----- End Techno Footer Middle Area ----->
	<!--==================================================-->