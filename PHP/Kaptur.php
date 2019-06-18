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
  <link rel="stylesheet" type="text/css" href="../CSS/bodyblocks.css">
  <link rel="stylesheet" type="text/css" href="../CSS/item.css?1">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

</head>
<body>
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
                      <li><a href="">Вход</a></li>
                      <li><a href="">Регистрация</a></li>
                    </ul>
                  
                </div>
        </header>
            <div class="container">
              
                <div class="post-wrap wrapper-fullads">

                        
<div class="wrapper-item">
        <div class="ads__fullads">


<?php
  $id = 1;
  $row = R::load('board', $id);
?>
"<img class="ads__imgs">
<?php
echo "<img src='$row[img]'>"."<br>";
            ?>
            <div class="ads__head">
                <div class="ads__titlee">            
<?php
echo $row['name']."<br>";
            ?></div>
                <div class="ads__texxt">
<?php  echo  $row['disc']."<br>"?></div>
            </div>
            <div class="ads__textarea">
<?php
echo $row['discription']."<br>";
            ?>
                <strong><?php
echo $row['price']."<br>";
?> </strong>

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
                            <li><a href="Electronics.html">Электроника</a> </li>
                          </ul>
                        </div>
                        <div class="widget">
                          <h3 class="widget-title">Свежие объявления</h3>
                          <ul class="widget-posts-list">
                            <li>
                              <div class="post-image-small">
                                    
                                <img src="../images/s1.jpg"></a>
                              </div>
                              <a href="Vaz.htnl"  >  <h4 class="widget-post-title">ВАЗ 2110</h4></a>
                            </li>
                            <li>
                                    <div class="post-image-small">
                                          
                                      <img src="../images/s2.jpg"></a>
                                    </div>
                                    <a href="Cleaning.php"  >  <h4 class="widget-post-title">Клининг фирма</h4></a>
                                  </li>
                                  <li>
                                        <div class="post-image-small">
                                              
                                          <img src="../images/s3.jpg"></a>
                                        </div>
                                        <a href="Mercedec.html"  >  <h4 class="widget-post-title">MERCEDES S Class</h4></a>
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