<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <?php if ($this->session->userdata("logged_user")): ?>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <?php endif ?>
        <a class="navbar-brand" href="<?php echo $this->config->config['base_url'] ?>"><i class="fa fa-fw fa-home"></i>Página Inicial do APL</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li>
            <?php if ($this->session->userdata("logged_user")): ?>                
                <a><i class="fa fa-fw fa-user"></i> Bem Vindo <?php echo $this->session->userdata("user")->login ?> !!!</a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>admin/logout"><i class="fa fa-fw fa-sign-in"></i> Sair</a>
            <?php endif ?>
        </li>
        <!--        <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-sign-in"></i> Entrar</a>
                        </li>
                    </ul>
                </li>-->
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <?php if ($this->session->userdata("logged_user")): ?>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li id="dash">
                    <a href="<?php echo base_url() ?>admin"><i class="fa fa-fw  fa-gear"></i> Painel de Controle</a>
                    <!--                <a>
                                        <i class="fa fa-fw  fa-arrows-v"></i>
                                        <i class="fa fa-fw  fa-bar-chart-o"></i>
                                        <i class="fa fa-fw  fa-bell"></i>
                                        <i class="fa fa-fw  fa-caret-down"></i>
                                        <i class="fa fa-fw  fa-clock-o"></i>
                                        <i class="fa fa-fw  fa-dashboard"></i>
                                        <i class="fa fa-fw  fa-desktop"></i>
                                        <i class="fa fa-fw  fa-edit"></i>
                                        <i class="fa fa-fw  fa-envelope"></i>
                                        <i class="fa fa-fw  fa-file"></i>
                                        <i class="fa fa-fw  fa-fw fa-video-camera"></i>
                                        <i class="fa fa-fw  fa-power-off"></i>
                                        <i class="fa fa-fw  fa-table"></i>
                                        <i class="fa fa-fw  fa-user"></i>
                                        <i class="fa fa-fw  fa-wrench"></i>
                                        <i class="fa fa-fw  fa-archive"></i>
                                        <i class="fa fa-fw  fa-ambulance"></i>
                                        <i class="fa fa-fw  fa-arrow-circle-down"></i>
                                        <i class="fa fa-fw  fa-arrow-circle-o-down"></i>
                                        <i class="fa fa-fw  fa-arrow-circle-up"></i>
                                        <i class="fa fa-fw  fa-upload"></i>
                                        <i class="fa fa-fw  fa-university"></i>
                                        <i class="fa fa-fw  fa-newspaper-o"></i>
                                        <i class="fa fa-fw  fa-file"></i>
                                        <i class="fa fa-fw  fa-users"></i>
                                        <i class="fa fa-fw  fa-instagram"></i>
                                        <i class="fa fa-fw  fa-plus-square-o"></i>
                                        <i class="fa fa-fw  fa-minus-circle-o"></i>
                                        <i class="fa fa-fw  fa-map-marker"></i>
                                        <i class="fa fa-fw  fa-trash-o"></i>
                                        <i class="fa fa-fw  fa-eraser"></i>
                                        <i class="fa fa-fw  fa-undo"></i>
                                    </a>-->
                </li>
                <li id="news" >
                    <a href="<?php echo base_url() ?>admin/news"> <i class="fa fa-fw  fa-newspaper-o "></i> Notícias</a>
                </li>                        
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-play"></i> Multimídia <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        <li id="pageBlank">
                            <a href="<?php echo base_url() ?>admin"><i class="fa fa-fw fa-picture-o"></i> Galeria de Fotos</a>
                        </li>
                        <li id="pageBlank">
                            <a href="<?php echo base_url() ?>admin"><i class="fa fa-fw fa-video-camera"></i> Coleção de Vídeos</a>
                        </li>
                    </ul>
                </li>                        
            </ul>
        </div>
    <?php endif ?>
    <!-- /.navbar-collapse -->
</nav>
