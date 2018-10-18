 <?php include('includes/header.php'); ?>

 <!--Page Title-->
    <section class="page-title_professional" style="background-image:url(images/background/4.jpg);">
    	<div class="auto-container">
        	<h1>Formulario de contacto</h1>
        </div>
    </section>
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer_professional">
    	<div class="auto-container">
        </div>
    </div>
    <!--End Page Title-->
    
    <!--Contact Form Section-->
    <section class="contact-form-section">
    	<div class="auto-container">
            <div class="sec-title centered">
                <h2>¡Estas a solo un paso!</h2>
                <div class="separator"></div>
            </div>
        	<div class="row clearfix">
            	<!--Form Column-->
                <div class="form-column col-md-8 col-sm-8 col-xs-12 pull-right">
                	
                    <!-- contact Form -->
                    <div class="contact-form">
                            
                        
                        <!--contact Form-->
                        <form method="post" action="sendemail.php" id="contact-form">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="username" placeholder="Nombre" required>
                                </div>
                                
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="subject" placeholder="Asunto">
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" placeholder="Mensaje"></textarea>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Enviar</button>
                                </div>
                                
                            </div>
                        </form>
                            
                    </div>
                    <!--End Contact Form -->
                    
                </div>
                <!--image column-->
                <div class="contact-section col-md-4 col-sm-4 col-xs-12 pull-left">
                    <h4>Información de contacto</h4>
                	<ul class="contact-info">
                        <li><div class="icon-box"><span class="fa fa-phone"></span></div>Chile: +56930216998. <br> Argentina: +5493435134624. </li>
                        <li><div class="icon-box"><span class="fa fa-envelope-o"></span></div>contacto@tu-sistema.com</li>
                        <li><div class="icon-box"><span class="fa fa-map-marker"></span></div>Santiago de Chile | Paraná (Argentina).</li>
                    </ul>
                </div>
                
            </div>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>