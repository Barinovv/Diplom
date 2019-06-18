<?php
require "../includs/db.php";
if ( isset($data['do_delete'])){
$id = $_SESSION['logged_user']->id;
$back = R::load('board', $id);
R::trash($back);
}
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Купи-продай</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../CSS/all.css">
  <link rel="stylesheet" type="text/css" href="../CSS/head.css">
  <link rel="stylesheet" type="text/css" href="../CSS/body.css">
  <link rel="stylesheet" type="text/css" href="../CSS/rightcollon.css">
  <link rel="stylesheet" type="text/css" href="../CSS/footer.css">
  <link rel="stylesheet" type="text/css" href="../CSS/bodyblocks.css">
  <link rel="stylesheet" type="text/css" href="../CSS/item.css?1">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

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
        <body>
<div>
<?php	
$id = $_SESSION['logged_user']->id;
$back = R::load('board', $id);
$blank->back['blank'];
?>			   
				<div class="container">
        <div class="post-wrap wrapper-fullads">
        <div class="wrapper-item">
        <div class="ads__fullads">
           <?php
           if($blank>0){
            $row = R::load('board', $id);
            echo "<img src='$row[img]'>"."<br>";
            echo $row['name']."<br>";
            echo  $row['disc']."<br>"?></div>
            ?>
            <div class="ads__textarea">
              <?php
                echo $row['discription']."<br>";
              ?>
                <strong>
              <?php
              echo $row['price']."<br>";
              ?>

                </strong>
                <br>
                <a href="delete.php" class = "knopka"><input type="submit" name="do_delete">Удалить объявление</a>
                <br>
<?php
}
?>
            </div>
				        <a href="new.php" class = "knopka"> Добавить объявление</a>
               </div>   
               </div>  
</div>

                       
              <footer>
                <div class="container">
                        <div class="footer-col"><span>© 2019 Доска объявлений "Купи-продай" | Баринов Антон 15ИТ18</span></div>
                  </div>
                </div>                
              </footer>
        </body>
</html>
