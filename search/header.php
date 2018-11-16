<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title></title>
    <link rel="stylesheet" href="<? $_SERVER['DOCUMENT_ROOT']?>/css/style.css">
    <script src="<? $_SERVER['DOCUMENT_ROOT']?>/js/script.js"></script>
</head>

<body>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<? $_SERVER['DOCUMENT_ROOT']?>/index.php">Мини-социалка</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
<!--
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                        </ul>
-->
                        <form class="navbar-form navbar-left" role="search" id="search_form">
                            <div class="form-group">
                                <input type="text" name="referal" placeholder="Живой поиск" value="" class="who" autocomplete="off">
                                <div class="search_result"></div>
                            </div>
                            <button type="submit" class="btn btn-primary">Найти</button>
                        </form>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </div>
