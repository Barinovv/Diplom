<?php
    require "../includs/db.php";
    $data = $_POST;
    if ( isset($data['do_login']) ){
        $user = R::findOne('users', 'login = ?', array($data['login']));
        if ( $user ){
        //логин существует
            if ( password_verify($data['password'], $user->password) ){
            //если пароль совпадает, то нужно авторизовать пользователя
                $_SESSION['logged_user'] = $user;
                echo '<div style="color:dreen;">Вы авторизованы!<br> 
                Можете перейти на <a href="main.php">главную</a> страницу.</div><hr>';
        }else{
            $errors[] = 'Неверно введен пароль!';
        }
        }
 
    }else{
        $errors[] = 'Пользователь с таким логином не найден!';
    }
     
    if ( ! empty($errors) ){
        //выводим ошибки авторизации
        echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
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
<heder>
            <header>
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
</heder>
<body>

<form class="transparent" action="login.php" method="POST">  
    <div class="form-inner">
        <h3>Вход</h3>
        <br>
    <label for="login">Логин</label>
    <input type="text" name="login" value="<?php echo @$data['login']; ?>"><br>
 <p>
    <label for="password">Пароль</label>
    <input type="password" name="password" value="<?php echo @$data['password']; ?>"><br>
 
    <button type="submit" name="do_login">Войти</button>
</p>
    </div>
</form>
</body>

