<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//echo $header;
//echo "<pre>";
//var_dump($news_item);
//echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>APL do leite - Santan do Livramento</title>

        <!-- Bootstrap -->
        <link href="<?php echo $this->config->config['base_url'] ?>css/bootstrap.min.css" rel="stylesheet">

        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->config->config['base_url'] ?>css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->config->config['base_url'] ?>css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->config->config['base_url'] ?>css/component.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->config->config['base_url'] ?>css/styles.css" />

        <link rel="stylesheet" type="text/css" href="<?php echo $this->config->config['base_url'] ?>css/estilo.css" />


        <script src="<?php echo $this->config->config['base_url'] ?>js/modernizr.custom.js"></script>

    </head>
    <body style="background-image: url(<?php echo $this->config->config['base_url'] ?>img/bkg-page.png);">

        <?php
        require_once 'header.php';
        ?>
        <br><br><br>
        <div class="container marketing">
            <div class="featurette arrumado2">
                <img alt="Sketch Logo" class="featurette-image img-thumbnail img-responsive pull-left" src="<?php echo $this->config->config['base_url'] ?>img/new1.jpg">
                <h2 class="featurette-heading arrumado"><?php echo $news_item['news_title'] ?> <span class="text-muted"><small><?php echo $news_item['news_subtitle'] ?></small></span></h2>
                <p class="lead arrumado"><?php echo $news_item['news_text'] ?></p>
            </div>
            <hr class="featurette-divider">
            <h2 class="featurette-heading arrumado"><small>Veja também</small></span></h2>
            <hr class="featurette-divider">
            <div class="row colnot">
                <div class="col-md-4 text-center">
                    <img class="img-circle" src="<?php echo $this->config->config['base_url'] ?>img/column01.jpg">
                    <h2>Lactose</h2>
                    <p>A intolerância à lactose, também conhecida como deficiência de lactase, é a incapacidade que o corpo tem de digerir lactose.</p>
                    <p><a class="btn btn-accent btn-small" href="#">Ver detalhes »</a></p>
                </div>
                <div class="col-md-4 text-center">
                    <img class="img-circle" src="<?php echo $this->config->config['base_url'] ?>img/column02.jpg">
                    <h2>Produtores Rurais na Ativa</h2>
                    <p>Financiamento para pequenos e médios produtores rurais.</p>
                    <p><a class="btn btn-accent btn-small" href="#">Ver detalhes »</a></p>
                </div>
                <div class="col-md-4 text-center">
                    <img class="img-circle" src="<?php echo $this->config->config['base_url'] ?>img/column03.jpg">
                    <h2>Alimentação Balanceada</h2>
                    <p>A alimentação é um assunto muito sério. Manter uma dieta saudável e balanceada não é nada complicado.</p>
                    <p><a class="btn btn-accent btn-small" href="#">Ver detalhes »</a></p>
                </div>
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
        <script src="<?php echo $this->config->config['base_url'] ?>js/bootstrap.min.js"></script>
        <script src="<?php echo $this->config->config['base_url'] ?>js/classie.js"></script>
        <script src="<?php echo $this->config->config['base_url'] ?>js/gnmenu.js"></script>
        <script>
            new gnMenu(document.getElementById('gn-menu'));
        </script>
    </body>
</html>