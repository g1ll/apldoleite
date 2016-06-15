<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>APL do leite - Santan do Livramento</title>
        <meta name="description" content="Gamma Gallery - A Responsive Image Gallery Experiment"/>
        <meta name="keywords" content="html5, responsive, image gallery, masonry, picture, images, sizes, fluid, history api, visibility api"/>
        <meta name="author" content="Codrops"/>
        <!--<link rel="shortcut icon" href="../favicon.ico">--> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css2/style7.css"/>
		<script src="<?php echo base_url()?>js2/modernizr.custom.70736.js"></script>
		<noscript><link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css2/noJS.css"/></noscript>
		
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
	
        <!-- Bootstrap -->
        <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">

        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/component.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/styles.css" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/set2.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/estilo.css" />
        <style>
	  .main{
	    margin-top: 50px;
	  }
	  
        </style>
    </head>
    <body style="background-image: url(<?php echo base_url()?>images/bkg-page.png);">
		<!-- Início da navbar -->
        <?php
        require_once 'header.php';
        ?>
		<!-- Fim Navbar -->
        <br><br><br>
		<div class="container">
			<div class="row">
				<h2 class="featurette-heading headtxt">Galeria - APL do Leite - Santana do Livramento</h2>
				<h1 class="lead headtxt">Albuns de fotos APL.</h1>
			</div>
			<hr class="featurette-divider">
			<div class="grid gal">
				<figure class="effect-jazz">
					<img src="<?php echo base_url()?>img/120.jpg" alt="img120"/>
					<figcaption>
						<h2>Album <span>Um</span></h2>
						<p>Album de fotos.</p>
						<a href="<?php echo base_url()?>gallery/album">Veja mais</a>
					</figcaption>			
				</figure>
				<figure class="effect-jazz">
					<img src="<?php echo base_url()?>img/2.jpg" alt="img2"/>
					<figcaption>
						<h2>Album <span>Dois</span></h2>
						<p>Album de fotos.</p>
						<a href="<?php echo base_url()?>album_jssor.html">Veja mais</a>
					</figcaption>			
				</figure>
				<figure class="effect-jazz">
					<img src="<?php echo base_url()?>img/100.jpg" alt="img100"/>
					<figcaption>
						<h2>Album <span>Tres</span></h2>
						<p>Album de fotos.</p>
						<a href="album_jssor.html">Veja mais</a>
					</figcaption>			
				</figure>
				<figure class="effect-jazz">
					<img src="<?php echo base_url()?>img/15.jpg" alt="img15"/>
					<figcaption>
						<h2>Album <span>Quatro</span></h2>
						<p>Album de fotos.</p>
						<a href="album_jssor.html">Veja mais</a>
					</figcaption>			
				</figure>
				<figure class="effect-jazz">
					<img src="<?php echo base_url()?>img/110.jpg" alt="img110"/>
					<figcaption>
						<h2>Album <span>Cinco</span></h2>
						<p>Album de fotos.</p>
						<a href="album_jssor.html">Veja mais</a>
					</figcaption>			
				</figure>
				<figure class="effect-jazz">
					<img src="<?php echo base_url()?>img/18.jpg" alt="img18"/>
					<figcaption>
						<h2>Album <span>Seis</span></h2>
						<p>Album de fotos.</p>
						<a href="album_jssor.html">Veja mais</a>
					</figcaption>			
				</figure>
				<figure class="effect-jazz">
					<img src="<?php echo base_url()?>img/22.jpg" alt="img22"/>
					<figcaption>
						<h2>Album <span>Sete</span></h2>
						<p>Album de fotos.</p>
						<a href="album_jssor.html">Veja mais</a>
					</figcaption>			
				</figure>
				<figure class="effect-jazz">
					<img src="<?php echo base_url()?>img/23.jpg" alt="img23"/>
					<figcaption>
						<h2>Album <span>Oito</span></h2>
						<p>Album de fotos.</p>
						<a href="album_jssor.html">Veja mais</a>
					</figcaption>			
				</figure>
			</div>
			<br><br>
		</div><!--/main-->
			<hr class="featurette-divider">
            <!-- Footer -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">

                            <address>
                                <strong>IFSul, RS.</strong><br> 795 Terra do nunca, 600<br> Nárnia, CA 94107<br> <abbr title="Phone">Telefone:</abbr> (123) 456-7890
                            </address>
                        </div>
                        <div class="col-md-3">
                            <ul>
                                <li>
                                    Lorem ipsum dolor sit amet
                                </li>
                                <li>
                                    Consectetur adipiscing elit
                                </li>
                                <li>
                                    Integer molestie lorem at massa
                                </li>
                                <li>
                                    Facilisis in pretium nisl aliquet
                                </li>
                                <li>
                                    Nulla volutpat aliquam velit
                                </li>
                                <li>
                                    Faucibus porta lacus fringilla vel
                                </li>
                                <li>
                                    Aenean sit amet erat nunc
                                </li>
                                <li>
                                    Eget porttitor lorem
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ol>
                                <li>
                                    Lorem ipsum dolor sit amet
                                </li>
                                <li>
                                    Consectetur adipiscing elit
                                </li>
                                <li>
                                    Integer molestie lorem at massa
                                </li>
                                <li>
                                    Facilisis in pretium nisl aliquet
                                </li>
                                <li>
                                    Nulla volutpat aliquam velit
                                </li>
                                <li>
                                    Faucibus porta lacus fringilla vel
                                </li>
                                <li>
                                    Aenean sit amet erat nunc
                                </li>
                                <li>
                                    Eget porttitor lorem
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-3">
                            <blockquote>
                                <p>
                                    “Doubt thou the stars are fire, doubt that the sun doth move, doubt truth to be a liar, but never doubt I love."
                                </p> <small>William Shakespeare <cite>Hamlet, Act 2, Scene 2, Page 5.</cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
			<footer>
			<p class="pull-right"><a href="#">Voltar ao topo</a></p>
			<p>Layout criado a partir dos plugins e definições do Bootstrap. · <a href="#">Alejo Bordon</a></p>
		</footer>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="<?php echo base_url()?>js2/jquery.masonry.min.js"></script>
		<script src="<?php echo base_url()?>js2/jquery.history.js"></script>
		<script src="<?php echo base_url()?>js2/js-url.min.js"></script>
		<script src="<?php echo base_url()?>js2/jquerypp.custom.js"></script>
		<script src="<?php echo base_url()?>js2/gamma.js"></script>
		<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>js/classie.js"></script>
		<script src="<?php echo base_url()?>js/gnmenu.js"></script>
		<script>
		    new gnMenu(document.getElementById('gn-menu'));
		</script>
	</body>
</html>
