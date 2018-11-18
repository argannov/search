<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <title></title>
    <link rel="stylesheet" href="<? $_SERVER['DOCUMENT_ROOT']?>/css/style.css">
    <script src="<? $_SERVER['DOCUMENT_ROOT']?>/js/script.js"></script>
    <script src="<? $_SERVER['DOCUMENT_ROOT']?>/js/like.js"></script>

</head>

<body>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
               <?
                if (empty($_SESSION['login']) || empty($_SESSION['id'])) {
                ?>
                  <form action="/php/personal/autorization.php" method="POST" role="form">
                    <legend>Авторизация</legend>

                    <div class="form-group">
                        <label for="">Логин</label>
                        <input type="text" class="form-control" name="login" placeholder="Логин">
                    </div>
                    <div class="form-group">
                        <label for="">Пароль</label>
                        <input type="password" class="form-control" name="password" placeholder="Пароль">
                    </div>


                    <button type="submit" class="btn btn-primary">Войти</button>
                </form>
                <?} else {?>
                <nav class="navbar navbar-inverse" role="navigation">
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

                        <ul class="nav navbar-nav">
                            <li><a href="<? $_SERVER['DOCUMENT_ROOT']?>/index.php">Домой</a></li>
                            <li><a href="#">Статьи</a></li>
                        </ul>

                           <form class="navbar-form navbar-left" role="search" id="search_form">
                            <div class="form-group">
                                <input type="text" name="referal" placeholder="Живой поиск" value="" class="who" autocomplete="off">
                                <div class="search_result"></div>
                            </div>
                            <button type="submit" class="btn btn-primary">Найти</button>
                        </form>
                        Вы авторизированы как:
                <? echo $_SESSION['login']; ?>
                <a href="<? $_SERVER['DOCUMENT_ROOT']?>/php/personal/exit.php">Выйти</a>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </div>
<? } ?>
