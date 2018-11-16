<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title></title>
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../js/script.js"></script>
    <script src="../js/like.js"></script>
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
                        <a class="navbar-brand" href="#">Title</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search" id="search_form">
                            <div class="form-group">
                                <input type="search" name="search_input" id="input" onkeyup="zapros()" class="form-control header-search">
                                <div class="result-search hidden"></div>
                            </div>
                            <button type="submit" class="btn btn-primary">Найти</button>
                        </form>

                    </div><!-- /.navbar-collapse -->
                </nav>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 block_result_search">
                    <?php
                    require_once 'bd.php'; // подключаем скрипт

                    $url = $_SERVER["REQUEST_URI"];
                    // выполняем операции с базой данных
                    $query ="SELECT * from statii WHERE url='$url'";
                    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                    while($row = mysqli_fetch_array($result))
                    {?>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                        <? echo "<img src=".$row['image'].">"; ?>

                    </div>

                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

                        <? echo "<h1>".$row['title_statii']."</h1>"; ?>

                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 hidden-xs"></div>

                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

                        <? echo "".$row['content'].""; ?><br>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 like">
                           <button id="like" onclick="like()">
                            <i class="glyphicon glyphicon-heart" aria-hidden="true"></i></button>
                            <? echo "".$row['like'].""; ?>
                        </div>
                    </div>
                    <?}
                    ?>
                </div>

            </div>
        </div>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

</html>
