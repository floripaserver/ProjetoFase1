<?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 02/07/14
 * Time: 21:15
 */

?>

<section class="content-header">
    <h1>
        Erro
        <small>Pagina de erro</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="."><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Erro</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <section class="col-lg-6 connectedSortable">
            <?php
            if ($erro) {
                echo $erro;
            } else {
                echo "Erro desconhecido!";
            }
            ?>
        </section>
    </div>
</section>


