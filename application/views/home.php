<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$news = array('<img class="featurette-image img-circle img-responsive pull-right" src="img/thumb_01.jpg">
                <h2 class="featurette-heading">Vacas <span class="text-muted">em seu habitat natural.</span></h2>
                <p class="lead">Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa Facilisis in pretium nisl aliquet Nulla volutpat aliquam velit Faucibus porta lacus fringilla vel Aenean sit amet erat nunc Eget porttitor lorem.</p>',
                ' <img class="featurette-image img-circle img-responsive pull-left" src="img/thumb_02.jpg">
                <h2 class="featurette-heading">A temperatura <span class="text-muted">e como isso afeta na criação.</span></h2>
                <p class="lead">Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa Facilisis in pretium nisl aliquet Nulla volutpat aliquam velit Faucibus porta lacus fringilla vel Aenean sit amet erat nunc Eget porttitor lorem.</p>',
                 ' <img class="featurette-image img-circle img-responsive pull-right" src="img/thumb_03.jpg">
                <h2 class="featurette-heading">Local para descanso <span class="text-muted">e como cuidar da lactação.</span></h2>
                <p class="lead">Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa Facilisis in pretium nisl aliquet Nulla volutpat aliquam velit Faucibus porta lacus fringilla vel Aenean sit amet erat nunc Eget porttitor lorem.</p>'       
                );
$carousel = array('<div class="item active"><img class="first-slide" src="img/car_1.jpeg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Qualidade do Leite</h1>
                            <p>O leite é o alimento que fornece naturalmente maior quantidade de lactose, por isso, pessoas com deficiência de lactase podem ter sintomas de intolerância à lactose após o seu consumo.</p>
                            <p><a class="btn btn-fill btn-small movimento" href="#" role="button">Clique aqui para saber mais</a></p>
                        </div>
                    </div></div>',
					'<div class="item"><img class="second-slide" src="img/car_2.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Vacas em Lactação</h1>
                            <p>O estágio da lactação afeta a produção e composição do leite, o consumo de alimentos e mudanças no peso vivo do animal.</p>
                            <p><a class="btn btn-fill btn-small movimento" href="#" role="button">Saiba mais</a></p>
                        </div>
                    </div></div>',
					'<div class="item"><img class="third-slide" src="img/car_3.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Manejo da vaca leiteira</h1>
                            <p>A vaca leiteira para ter um desempenho ideal
                                durante as fases produtiva e reprodutiva deve ter um
                                manejo cercado de cuidados, ainda no útero da mãe.</p>
                            <p><a class="btn btn-fill btn-small movimento" href="#" role="button">Mais Informações</a></p>
                        </div>
                    </div></div>');
$gover_ent = array('<div class="row">
					<div class="col-md-3">
						<img class="img-square img-responsive arrumado3" src="img/logo-agdi.png">
					</div>
					<div class="col-md-3">
						<img class="img-square img-responsive arrumado3" src="img/logo.png">
					</div>
					<div class="col-md-3">
						<img class="img-square img-responsive arrumado3" src="img/logo.png">
					</div>
					<div class="col-md-3">
						<img class="img-square img-responsive arrumado3" src="img/if-logo2.png">
					</div>	
				</div>',
					'<div class="row">
					<div class="col-md-3">
						<img class="img-square img-responsive arrumado3" src="img/logo-agdi.png">
					</div>
					<div class="col-md-3">
						<img class="img-square img-responsive arrumado3" src="img/logo.png">
					</div>
					<div class="col-md-3">
						<img class="img-square img-responsive arrumado3" src="img/logo.png">
					</div>
					<div class="col-md-3">
						<img class="img-square img-responsive arrumado3" src="img/if-logo2.png">
					</div>	
				</div>');
$header = '<div class="featurette arrumado2">
			<img alt="Sketch Logo" class="featurette-image img-square img-responsive pull-left movimento" src="img/logo.png">
            <h2 class="featurette-heading arrumado">APL DO LEITE <span class="text-muted"><small>Santana do Livramento ! </small></span></h2>
            <p class="lead arrumado">Os Arranjos Produtivos Locais constitui-se numa nova abordagem de planejamento territorial com base na cooperação entre entidades públicas, privadas e não governamentais. O APL tem como ideia central a inovação dos processos de produção, comercialização e na articulação dos atores sociais locais (produtivos e institucionais) de forma coletiva a partir de uma visão sistêmica da atividade econômica.</p>
			</div>
			<hr class="featurette-divider">';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>APL do leite - Santan do Livramento</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
		
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        

        <script src="js/modernizr.custom.js"></script>

    </head>
    <body style="background-image: url(img/bkg-page.png);">

       <?php
        require_once 'header.php';
        ?>
		
        <!-- Início do header -->
        <?php
			echo $header;
		?>


        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicadores -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                
            <?php
			for($i=0;$i<count($carousel);$i++){
				echo "$carousel[$i]";
			}
			?>
                
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br><br>        
		
         <!-- Começo dos Featurettes -->
         <?php
         for($i=0;$i<count($news);$i++){
			echo '<hr class="featurette-divider"><div class="featurette">'.$news[$i]."</div>";
         }
         ?> 
         <!-- /Fim dos Featurettes -->

            <hr class="featurette-divider">
            <h2 class="featurette-heading arrumado"><small>Governança - Entidades</small></span></h2>
            <hr class="featurette-divider">

            <!-- Logos entidades -->
			<?php
			for($i=0;$i<count($gover_ent);$i++){
				echo "$gover_ent[$i]";
			}
			?> 

            <hr class="featurette-divider">

            <!-- Footer -->
            <br><br>
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
            <br><br>
            <footer>
                <p class="pull-right"><a href="#">Voltar ao topo</a></p>
                <p>Layout criado a partir dos plugins e definições do Bootstrap. · <a href="#">Alejo Bordon</a></p>
            </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/gnmenu.js"></script>
        <script>
            new gnMenu(document.getElementById('gn-menu'));
        </script>
    </body>
</html>
