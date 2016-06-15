<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>      
<script type="text/javascript">
    window.addEventListener('load', function () {
        document.getElementById('news').className = 'active';
    }, false);
</script>
<div id="wrapper">

    <?php $this->load->view('admin/admin_nav') ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url() ?>admin">Painel de Controle</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Notícias
                        </li>
                    </ol>
                    <h1 class="page-header">
                        Editorial de Notícias<br>
                        <small>Publique as últimas novidades sobre o APL do Leite</small>
                    </h1>
                </div>
                <div class="col-lg-12">                   
                    <div class="panel panel-primary">
                        <div class="panel-heading ">
                            <h3 class="panel-title"> Notícia Publicadas</h3> 
                        </div>
                        <div class="panel-body">    
                            <div class=" row text-center center-block">                                
                                <div class="col-md-2">
                                    <a href="<?php echo base_url() ?>admin/news_add" class="btn btn-primary btn-small" role="button"><i class="fa fa-fw fa-plus-circle"></i>Nova Notícia</a>
                                </div>                                
                                <div class="col-md-6"></div>
                                <div class="col-md-4">
                                    <div class="form-group input-group">                                         
                                        <input id="searchNews" type="text" class="form-control col-md-1" value="Pesquisar Notícias">
                                        <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
                                    </div>
                                </div>
                            </div>
                            <div class=" row col-md-12">
                                <h3 class="page-header">Notícias Publicadas!</h3>                        
                            </div>                           
                            <?php $c = 0 ?>
                            <?php foreach ($news as $new): ?>
                                <?php if ($c % 3 == 0): ?><!--Coloca as notícioas em três colunas-->
                                    <div class="row">
                                    <?php endif; ?>
                                    <div class="col-md-4 text-center">
                                        <img class="img-circle" src="<?php echo base_url() ?>img/column01.jpg">
                                        <h2><?php echo $new['news_subtitle']; ?></h2>
                                        <p><?php echo substr($new['news_text'], 0, 200) . " ..."; ?></p>
                                       <p><a class="btn btn-accent btn-small" href="<?php echo base_url() ?>admin/news_edit/<?php echo $new['idnews']; ?>" title="Editar"><i class="fa fa-fw fa-edit fa-2x"></i></a>
                                        <a class="btn btn-accent btn-small" href="<?php echo base_url() ?>news/news_remove/<?php echo $new['idnews']; ?>" title="Remover"><i class="fa fa-fw fa-trash-o fa-2x"></i></a></p>
</div>
                                    <?php $c++; ?>
                                    <?php if ($c % 3 == 0||$c == count($news)): ?>
                                    </div>                   
                                <?php endif; ?>                
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


