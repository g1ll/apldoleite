<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>      
<script type="text/javascript">
    window.addEventListener('load', function () {
        document.getElementById('dash').className = 'active';
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
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Painel de Controle</a>
                        </li>
                    </ol>
                    <h1 class="page-header">
                        Blank Page
                        <small>Subheading</small>
                    </h1>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


