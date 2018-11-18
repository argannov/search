<? include_once $_SERVER['DOCUMENT_ROOT']."/header.php";?>

<?php
    //require_once $_SERVER['DOCUMENT_ROOT']."/php/bd.php";?>

                <?php
                    $connection = mysqli_connect('localhost', 'root', '', 'searchajax') or die(mysqli_error());

                    if (empty($_POST['login'])) {
                        $info_input = 'Вы не ввели логин';
                        }
                    elseif (empty($_POST['password'])) {
                        $info_input = 'Вы не ввели пароль';
                        }
                    else {
                        $login = $_POST['login'];
                        $password = $_POST['password'];
                        $user = mysqli_query($connection, "SELECT `id` FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
                        $id_user = mysqli_fetch_array($user);

                    if (empty($id_user['id'])) {
                        $info_input = 'Введенные данные не верны';
                    }
                    else {
                        $_SESSION['password'] = $password;
                        $_SESSION['login'] = $login;
                        $_SESSION['id'] = $id_user['id'];

                        $info_input = 'Вы успешно вошли в систему как: '.$_SESSION['login'];
                        }
                    }


                    $info_input = isset($info_input) ? $info_input : NULL;
                    ?>

<? include_once $_SERVER['DOCUMENT_ROOT']."/footer.php";?>
<script type="text/javascript">

location.replace("../../index.php");

</script>
