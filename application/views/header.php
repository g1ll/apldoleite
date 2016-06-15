<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!-- Início da navbar -->
        <div class="container navbar-fixed-top">
            <ul id="gn-menu" class="gn-menu-main">
                <li class="gn-trigger">
                    <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                    <nav class="gn-menu-wrapper">
                        <div class="gn-scroller">
                            <ul class="gn-menu">
                                <li class="gn-search-item">
                                    <input placeholder="Procurar" type="search" class="gn-search">
                                    <a class="gn-icon gn-icon-search"><span>Procurar</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>legislation" class="gn-icon gn-icon-download">Legislação</a>

                                </li>
                                <li><a href="<?php echo base_url()?>governance" class="gn-icon gn-icon-cog">Governança/Gestores</a></li>
                                <li><a href="<?php echo base_url()?>about" class="gn-icon gn-icon-help">O que é APL?</a></li>
                                <li>
                                    <a href="<?php echo base_url()?>articles" class="gn-icon gn-icon-archive">Artigos Cinetíficos</a>
                                <li><a href="<?php echo base_url()?>news" class="gn-icon gn-icon-article">Notícias</a></li>
                                <li><a href="<?php echo base_url()?>gallery" class="gn-icon gn-icon-pictures">Galeria</a></li>
                                <li><a href="<?php echo base_url()?>videos" class="gn-icon gn-icon-videos">Vídeos</a></li>
                            </ul>
                        </div><!-- /gn-scroller -->
                    </nav>
                </li>
                <li><a href="<?php echo $this->config->config['base_url']?>">APL do Leite</a></li>
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle codrops-icon gn-icon-archive" data-toggle="dropdown">Parceiros</a>
                        <!--                    <a href="#"><span>Parceiros</span></a>-->
                        <ul class="dropdown-menu gn-menu">
                            <li>
                                <a href="#">Alguma coisa</a>
                            </li>
                            <li>
                                <a href="#">Alguma coisa</a>
                            </li>
                            <li>
                                <a href="#">Alguma coisa aqui</a>
                            </li>
                            <li>
                                <a href="#">Algo</a>
                            </li>
                            <li>
                                <a href="#">Alguma coisa aqui</a>
                            </li>
                        </ul>
                </li>
<!--                <li><a class="codrops-icon gn-icon-archive" href="#"><span>Contato</span></a></li>-->
            </ul>
        </div>
		<!-- /Fim da navbar -->