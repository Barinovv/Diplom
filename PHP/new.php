<?php
require "../includs/db.php";
    $data = $_POST;

//если кликнули на button
if ( isset($data['do_new']) )
{

        //ошибок нет, теперь регистрируем
        $message = R::dispense('board');
        $message->img = $data['img'];
        $message->name = $data['name'];
        $message->disc = $data['disc'];
        $message->discription = $data['discription'];
        $message->price = $data['price'];
        $message->category = $data['category'];

        R::store($board);
        $_SESSION['logged_board'] = $board;
        echo 'Сообщение отправлено';

        $id = $_SESSION['logged_user']->id;
        $user = R::load('users', $id);
                $user->blank = '1';
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../CSS/all.css">
    <link rel="stylesheet" type="text/css" href="../CSS/head.css">
    <link rel="stylesheet" type="text/css" href="../CSS/body.css">
    <link rel="stylesheet" type="text/css" href="../CSS/rightcollon.css">
    <link rel="stylesheet" type="text/css" href="../CSS/footer.css">
    <link rel="stylesheet" type="text/css" href="../CSS/bodyblocks.css">
    <link rel="stylesheet" type="text/css" href="../CSS/item.css?1">
    <link rel="stylesheet" type="text/css" href="../CSS/sign.css?1">
</head>
<header>
               <div class="wrapper-head">
                  
                    <a class="logo" href="">
                      <span>К</span>
                      <span>У</span>
                      <span>П</span>
                      <span>И</span>
                    </a>
                    <br>
                    <br>
                    <a class="logo" href="">
                          <span>П</span>
                          <span>Р</span>
                          <span>О</span>
                          <span>Д</span>
                          <span>А</span>
                          <span>Й</span>
                        </a>
                    <div class="nav-toggle"><span></span></div>
                  
                    <ul id="menu">
                    <?php
                    if( isset($_SESSION['logged_user'])) : ?>
                    <li>Авторизован, <?php echo $_SESSION['logged_user']->login;?></li>
                    <li><a href="logout.php"> Выйти </a></li>
                    <li><a href="parlor.php"> Мои объявления </a></li>
                    <?php else : ?>
                    <li><a href="login.php">Вход</a></li>
                    <li><a href="signup.php">Регистрация</a></li>
                    <?php endif ; ?>
                    </ul>
                  
                </div>
        </header>

<form class="transparent" action="new.php" method="POST">  
    <div class="form-inner">
        <h3>Добавить объявение</h3>
        <br>
    <label for="img">Введите путь к файлу</label>
    <input type="text" name="img" value="<?php echo @$data['img']; ?>"><br>
 <p>
    <label for="name">Название</label>
    <input type="text" name="name" value="<?php echo @$data['name']; ?>"><br>

    <label for="disc">Краткое описание</label>
    <input type="text" name="disc" value="<?php echo @$data['disc']; ?>"><br>
    <label for="name">Описание</label>
    <input type="text" name="discription" value="<?php echo @$data['discription']; ?>"><br>
    <label for="name">Цена</label>
    <input type="text" name="price" value="<?php echo @$data['price']; ?>"><br>
    <label for="name">Категория</label>
    <input type="text" name="category" value="<?php echo @$data['category']; ?>"><br>
    <button type="submit" name="do_new">Подать объявление</button>
</p>
    </div>
</form>
</body>