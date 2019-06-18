<?php
    require "../includs/db.php";

    $data = $_POST;
 
//если кликнули на button
if ( isset($data['do_signup']) )
{
// проверка формы на пустоту полей
    $errors = array();
    if ( trim($data['login']) == '' )
    {
        $errors[] = 'Введите логин';
    }
 
    if ( trim($data['email']) == '' )
    {
        $errors[] = 'Введите Email';
    }
 
    if ( $data['password'] == '' )
    {
        $errors[] = 'Введите пароль';
    }
 
    if ( $data['password_2'] != $data['password'] )
    {
        $errors[] = 'Повторный пароль введен не верно!';
    }
 
    //проверка на существование одинакового логина
    if ( R::count('users', "login = ?", array($data['login'])) > 0)
    {
        $errors[] = 'Пользователь с таким логином уже существует!';
    }
 
//проверка на существование одинакового email
    if ( R::count('users', "email = ?", array($data['email'])) > 0)
    {
        $errors[] = 'Пользователь с таким Email уже существует!';
    }
 
    if ( empty($errors) ){
        //ошибок нет, теперь регистрируем
        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT); 
        //пароль нельзя хранить в открытом виде, 
        //мы его шифруем при помощи функции password_hash для php > 5.6
        R::store($user);
        $_SESSION['logged_user'] = $user;
        echo '<div style="color:green;">Вы успешно зарегистрированы! Добро пожаловать на <a href = "main.php"> главную страницу</a> </div><hr>';
    }else{
        echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
    }
 
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
    <title>Регистрация</title>
</head>
                <div class="wrapper-head">
                  
                    <a class="logo" href="Main.html">
                      <span>К</span>
                      <span>У</span>
                      <span>П</span>
                      <span>И</span>
                    </a>
                    <br>
                    <br>
                    <a class="logo" href="Main.html">
                          <span>П</span>
                          <span>Р</span>
                          <span>О</span>
                          <span>Д</span>
                          <span>А</span>
                          <span>Й</span>
                        </a>
                    <div class="nav-toggle"><span></span></div>
                  
                    <ul id="menu">
                      <li><a href="login.php">Вход</a></li>
                      <li><a href="signup.php">Регистрация</a></li>
                    </ul>
                  
                </div>
</header>
<body>
<form class="transparent" action="signup.php" method="POST">
    <div class="form-inner">
        <h3>Регистрация</h3>
        <br>
    <p>
    <label for="login">Имя пользователя</label>
    <input type="text" name="login" value="<?php echo @$data['login']; ?>"><br>
    </p>
    <p>
    <label for="email">Email</label>
    <input type="email" name="email" value="<?php echo @$data['email']; ?>"><br>
    </p>
    <p>
    <label for="password">Пароль</label>
    <input type="password" name="password" value="<?php echo @$data['password']; ?>"><br>
    </p>
    <p>
    <label for="password">Повторите пароль</label>
    <input type="password" name="password_2" value="<?php echo @$data['password_2']; ?>"><br>
    </p>

    <button type="submit" name="do_signup">Зарегестироваться</button>
</form>
</body>
</html>