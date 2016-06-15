<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('form');
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
                            <i class="fa fa-file"></i> <a href="<?php echo base_url() ?>admin/news">Notícias</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Cadastrar
                        </li>
                    </ol>
                    <h1 class="page-header">
                        Editorial de Notícias<br>
                        <small>Publique as últimas novidades sobre o APL do Leite</small>
                    </h1>
                </div>
                <?php if (isset($insert)): ?>
                    <div class=" row col-md-12">
                        <?php if ($insert): ?>
                            <div  class=" alert alert-success">Notícia Cadastrada com Sucesso!!!</div>                        
                        <?php else: ?>
                            <div class="alert alert-warning">Ocorreu algum erro ao cadastrar nova notícia!!!</div>                        
                        <?php endif; ?> 
                    </div>
                <?php endif; ?> 
                <div class="col-lg-12">                   

                    <div class="panel panel-primary">
                        <div class="panel-heading ">
                            <h3 class="panel-title"> Cadastrar Notícia</h3> 
                        </div>
                        <div class="panel-body">    

                            <div class=" row col-md-12">
                                <h3 class="page-header">Cadastrar Notícia</h3>                        
                            </div>
                            <?php echo form_open(base_url().'admin/news_add'); ?>
                            <div class="form-group">
                                <?php
                                echo form_label("Título: ", "title");
                                echo form_input(array(
                                    "name" => "title",
                                    "id" => "title",
                                    "class" => "form-control"
                                ));
                                ?>
                            </div>                            
                            <div class="form-group">
                                <?php
                                echo form_label("Subtítulo: ", "subtitle");
                                echo form_input(array(
                                    "name" => "subtitle",
                                    "id" => "subtitle",
                                    "class" => "form-control"
                                ));
                                ?>
                            </div>
                            <div class="form-group">
                                <?php
                                echo form_label("Texto: ", "text");
                                echo form_textarea(array(
                                    "name" => "text",
                                    "id" => "text",
                                    "class" => "form-control textarea",
                                    "placeholder" => "Digite aqui o texto na notícia...",
                                    "rows" => 3
                                ));
                                ?>
                            </div>
                            <div class="form-group">
                                <?php
                                echo form_submit(array(
                                    "value" => 'Publicar Notícia',
                                    "class" => "btn btn-primary",
                                    "name" => "submit"
                                ));
                                echo form_close();
                                ?>
                            </div>                                               
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

