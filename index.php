<? include_once $_SERVER['DOCUMENT_ROOT']."/header.php";?>

<div class="container-fluid">
    <div class="container">
        <div class="row">
          <?
                if (empty($_SESSION['login']) || empty($_SESSION['id'])) {
                ?>
                <?} else {?>
           <?php
                    require_once 'php/bd.php'; // подключаем скрипт

                    $url = $_SERVER["REQUEST_URI"];
                    // выполняем операции с базой данных
                    $query ="SELECT * from statii";
                    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                    while($row = mysqli_fetch_array($result))
                    {?>
            <div class="col-sm-6 col-md-4 block-news">
                <div class="thumbnail block-news-content">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <? echo "<img src=".$row['image'].">"; ?>

                </div>
                    <div class="caption">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <h3><? echo "<h1>".$row['title_statii']."</h1>"; ?></h3>

                </div>
                        <p><? echo "".$row['content'].""; ?><br></p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                    </div>
                </div>
            </div>
                <?}
                    ?>
        </div>
    </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT']."/footer.php";?>
<? } ?>
