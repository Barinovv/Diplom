
<?php
require "../includs/db.php";

?>
<!DOCTYPE html>
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
  <link rel="stylesheet" type="text/css" href="../CSS/ads.css"> 
  <link rel="stylesheet" type="text/css" href="../CSS/bodyblocks.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

</head>
<body>
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
                    <li><a href="parlor.php"> Личный кабинет</a></li>
                    <?php else : ?>
                    <li><a href="login.php">Вход</a></li>
                    <li><a href="signup.php">Регистрация</a></li>
                    <?php endif ; ?>
                    </ul>
                  
                </div>
        </header>
            <div class="container">
              
                <div class="post-wrap main">

                        <div class="post-item">
                                
                            <div class="item-content">
                                <div class="item-icon auto"> <img src="../images/icocar.png" alt="">  </div>
                                <div class="item-body">
                                    <h3>Автомобили</h3>
                                    <p>Большой выбор новых и подержаных автомобилей!</p>
                                </div>
                                <div class="item-footer">
                                    <a href="Automobile.html" class="link"><span>Подробнее</span></a>
                                </div>
                            </div>
                        </div>
                    
                        <div class="post-item">
                            <div class="item-content">
                                <div class="item-icon house"> <img src="../images/icohouse.png"> </div>
                                <div class="item-body">
                                    <h3>Недвижимость</h3>
                                    <p>Уютные дома, большие гаражи и многое другое!</p>
                                </div>
                                <br>
                                <div class="item-footer">
                                    <a href="Property.html" class="link"><span>Подробнее</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="post-item">
                            <div class="item-content">
                                <div class="item-icon goods"> <img src="../images/goods.png"></div>
                                <div class="item-body">
                                    <h3>Товары для дома</h3>
                                    <p>Все, что нужно вашему дому, от людей-людям!</p>
                                </div>
                                <div class="item-footer">
                                    <a href="House.html" class="link"><span>Подробнее</span></a>
                                </div>
                            </div>
                        </div>
                    
                        <div class="post-item">
                            <div class="item-content">
                                <div class="item-icon electronics"> <img src="../images/electronics.png"></div>
                                <div class="item-body">
                                    <h3>Электроника</h3>
                                    <p>Наушники, телевизоры, компьютеры, ноутбуки! БУ и новые!</p>
                                </div>
                                <div class="item-footer">
                                    <a href="Electronics.html" class="link"><span>Подробнее</span></a>
                                </div>
                            </div>
                        </div>
                    
                    </div>

                <aside>
                        <div class="widget">
                          <h3 class="widget-title">Категории</h3>
                          <ul class="widget-category-list">
                            <li><a href="Automobile.html">Автомобили</a> 
                            
                            </li>
                            <li><a href="Property.html">Недвижимость</a> </li>
                            <li><a href="House.html">Товары для дома</a> </li>
                            <li><a href="">Электроника</a> </li>
                          </ul>
                        </div>
                        <div class="widget">
                          <h3 class="widget-title">Свежие объявления</h3>
                          <ul class="widget-posts-list">
                            <li>
                              <div class="post-image-small">
                                    
                                <img src="../images/s1.jpg">
                              </div>
                              <a href="VAZ.html"  >  <h4 class="widget-post-title">ВАЗ 2110</h4></a>
                            </li>
                            <li>
                                    <div class="post-image-small">
                                          
                                      <img src="../images/s2.jpg">
                                    </div>
                                    <a href="Cleaning.html" >  <h4 class="widget-post-title">Клининг фирма</h4></a>
                                  </li>
                                  <li>
                                        <div class="post-image-small">
                                              
                                          <img src="../images/s3.jpg">
                                        </div>
                                        <a href="Mercedes.html"  >  <h4 class="widget-post-title">MERCEDES S Class</h4></a>
                                      </li>
                          </ul>
                        </div>
                        
                      </body>
              <footer>
                <div class="container">
                  <div class="footer-col"><span>© 2019 Доска объявлений "Купи-продай" | Баринов Антон 15ИТ18</span></div>
                             
                  </div>
                </div>                
              </footer>
</html>