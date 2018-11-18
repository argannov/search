<? include_once $_SERVER['DOCUMENT_ROOT']."/header.php";?>

<div class="container-fluid">
    <div class="container">
        <div class="row">
             <?
                if (empty($_SESSION['login']) || empty($_SESSION['id'])) {
                ?>
                <?} else {?>
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

                        <form id="addlike" method="post" action="<? echo "".$url.""; ?>">
                           <? $postlike = $row['like'] + 1; ?>
                            <input type="text"  name="kolvolike" class="hidden" id="kolvolike" value="<? echo "".$postlike.""; ?>">
                            <input type="text"  name="id_statii" class="hidden" id="id_statii" value="<? echo "".$row['id_statii'].""; ?>">
                            <input type="text" name="url_statii" class="hidden" id="url_statii" value="<? echo "".$url.""; ?>">
                        <?
    $like = $_POST['kolvolike'];
    $id_statii =$_POST['id_statii'];
    $host = 'localhost'; // адрес сервера
$database = 'searchajax'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
$link = mysqli_connect($host, $user, $password, $database)
                    or die("Ошибка " . mysqli_error($link));

$sql1 = "UPDATE `searchajax`.`statii` SET `like`='$like' WHERE `id_statii`='$id_statii'";
    mysqli_query($link, $sql1);
?>
<button id="likepost">
                            <i class="glyphicon glyphicon-heart" aria-hidden="true"></i></button><div id="likes"><? echo "".$row['like'].""; ?></div>
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
<? } ?>
