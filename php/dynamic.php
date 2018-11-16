<? include_once $_SERVER['DOCUMENT_ROOT']."/header.php";?>


<div class="container-fluid">
    <div class="container">
        <div class="row">
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
                        <form id="addlike">
                            <input type="text" class="hidden" name="kolvolike" value="<? echo "".$row['like'].""; ?>">
                        </form>
                    </div>
                </div>
                <?}
                    ?>
            </div>
        </div>
    </div>
</div>
<? include_once $_SERVER['DOCUMENT_ROOT']."/footer.php";?>
