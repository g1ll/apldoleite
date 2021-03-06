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
                            <i class="fa fa-file"></i> <a href="<?php echo base_url() ?>admin/login">Login</a>
                        </li>     
                    </ol>
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
                <div class="col-lg-4"></div>
                <div class="col-lg-4">                   

                    <div class="panel panel-primary">
                        <div class="panel-heading ">
                            <h3 class="panel-title">Login</h3> 
                        </div>
                        <div class="panel-body">                          
<!--                            <div class=" row col-md-12">
                                <h3 class="page-header">Entrar no Sistema</h3>
                            </div>-->
                            <div class="row col-md-12">
                                <?php echo form_open(base_url() . 'admin/login'); ?>
                                <div class="form-group">
                                    <?php
                                    echo form_label("Usuário: ", "user");
                                    echo form_input(array(
                                        "name" => "user",
                                        "id" => "user",
                                        "class" => "form-control"
                                    ));
                                    ?>
                                </div>                            
                                <div class="form-group">
                                    <?php
                                    echo form_label("Senha: ", "password");
                                    echo form_input(array(
                                        "name" => "password",
                                        "id" => "password",
                                        "type" => "password",
                                        "class" => "form-control"
                                    ));
                                    ?>
                                </div>
                                <div class="col-lg-4"></div>
                                <div class="form-group">
                                    <?php
                                    echo form_submit(array(
                                        "value" => 'Entrar',
                                        "class" => "btn btn-primary",
                                        "name" => "submit"
                                    ));
                                    echo form_close();
                                    ?>
                                </div>
                                <div class="col-lg-4"><?php echo validation_errors(); ?></div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
            <!-- /.row -->


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

