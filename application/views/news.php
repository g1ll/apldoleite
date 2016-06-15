<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>APL do leite - Santan do Livramento</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/component.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/styles.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/estilo.css" />
        <script src="<?php echo base_url() ?>js/modernizr.custom.js"></script>
    </head>
    <body style="background-image: url(<?php echo base_url() ?>img/bkg-page.png);">

        <?php
        require_once 'header.php';
        ?>
        <br><br><br>
        <div class="container">
            <div class="row">
                <h2 class="featurette-heading headtxt">Notícias - APL do Leite - Santana do Livramento</h2>
                <h1 class="lead headtxt">Notícias e novidades do arranjo produtivo local.</h1>
            </div>
            <hr class="featurette-divider">
            <?php $c = 0 ?>
            <?php foreach ($news as $new): ?>
                <?php if ($c % 2 == 0): ?><!--Coloca as notícioas em três colunas-->
                    <div class="row">
                    <?php endif; ?>
                    <div class="col-md-6 text-center">
                        <img class="img-circle" src="<?php echo base_url() ?>img/column01.jpg">
                        <h2><?php echo $new['news_subtitle']; ?></h2>
                        <p><?php echo substr($new['news_text'], 0, 400) . " ..."; ?></p>
                        <p><a class="btn btn-accent btn-small" href="<?php echo base_url() ?>news/news_view/<?php echo $new['idnews']; ?>">Ver detalhes »</a></p>
                    </div>
                    <?php $c++; ?>
                    <?php if (($c % 2 == 0)||$c == count($news)): ?>
                    </div>                   
                <?php endif; ?>                
            <?php endforeach; ?>
            <div class="row ">
                <center>
                    <div class="view">
                        <ul class="pagination" >
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </center>
            </div>      
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
            <footer>
                <p class="pull-right"><a href="#">Voltar ao topo</a></p>
                <p>Layout criado a partir dos plugins e definições do Bootstrap. · <a href="#">Alejo Bordon</a></p>
            </footer>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>js/classie.js"></script>
        <script src="<?php echo base_url() ?>js/gnmenu.js"></script>
        <script>
            new gnMenu(document.getElementById('gn-menu'));
        </script>
    </body>
</html>