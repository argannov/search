<? header('Location: login.php');
include_once $_SERVER['DOCUMENT_ROOT']."/header.php";?>

<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/php/bd.php";?>


<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <? session_destroy();

    exit;?>
                </div>
        </div>
    </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT']."/footer.php";?>
