<?php
    include("php/database123.php");
    include("php/functions.php");
?>
<!DOCTYPE html>
<html lang="en" class="theme-light">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/aileron" type="text/css"/>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/font-hover.css">
        <link rel="stylesheet" href="css/reg-log.css">
        <link rel="stylesheet" href="css/root.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/adaptive.css">
        <title>WiteRose</title>
    </head>
    <body>
        <video autoplay muted loop id="myVideo">
            <source src="img/video.mp4" type="video/mp4">
        </video>
        <div class="test">
            <header>
                <a href="index.php">
                    <p class="logoIndex wite">White<span>Rose</span></p>
                </a>
                <ul class="text">
                    <li class="language White">ru</li>
                    <li class="language White">en</li>
                    <li class="button_DarkTheme">
                        <label id="switch" class="switch">
                            <input type="checkbox" onchange="toggleTheme()" id="slider">
                            <span class="slider round"></span>
                        </label>
                    </li>

                    <?php if(checkAuth()):
                        $sql = "SELECT users.user_name FROM tokens JOIN users ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
                        $query = $pdo->prepare($sql);
                        $query->execute(array(
                        "token" => $_SESSION["token"],
                        "session" => session_id()
                        ));
                        $row = $query->fetch(PDO::FETCH_OBJ);    
                    ?>

                    <form class="kontact" action="php/out.php" method="post">
                        <ul class="topmenu text">
                            <li>
                                <a href="" class="down"><p class="menuText name3"><?=$row->user_name?></p></a>
                                <ul class="submenu text">
                                    <li class="menuText2"><a href="https://www.instagram.com/whiterose.bauzer/">Профиль</a></li>
                                    <li class="menuText2"><a href="https://vk.com/vrom.vine">корзина</a></li>
                                    <li class="menuText2"><button  class="menuButton" type="submit">Выйти</button></li>
                                </ul>
                            </li>
                        </ul>
                    </form>
                    <?php else: ?>
                        <div class="button_input open_form"><p id="authButton">Войти</p></div>
                    <?php endif;?>
                    
                    <!-- <button class="button_input open_form">Войти</button> -->
                </ul>
            </header>
            <section id="menu">
                <ul class="text menuText">
                    <a href="index.php">
                        <li class="color">О нас</li>
                    </a>
                    <a href="menu.php">
                        <li class="White">Меню</li>
                    </a>
                    <a href="stol.php">
                        <li class="White">Аренда</li>
                    </a>
                    <a href="address.php">
                        <li class="White">Адрес</li>
                    </a>
                    <nav class="kontact">
                        <ul class="topmenu text">
                            <li>
                                <a href="" class="down"><p class="menuText White">Контакты</p></a>
                                <ul class="submenu text">
                                    <li class="menuText2"><a href="https://www.instagram.com/whiterose.bauzer/">Instagram</a></li>
                                    <li class="menuText2"><a href="https://vk.com/vrom.vine">Vk</a></li>
                                    <li class="menuText2"><a href="https://www.youtube.com/channel/UCnPxZg9v7dTQJlO_G1P-vkw">YouTube</a></li>
                                    <li class="menuText2"><a href="">123a56z5@gmail.com</a></li>
                                </ul>
                            </li>
                         </ul>
                    </nav>
                </ul>
                <!-- <button class="btn_basket">Корзина</button> -->
            </section>
            <section id="block1">
                <ul class="text">
                    <li class="textBlock1">White Rose</li>
                    <hr>
                    <li class="textBlock1-footer">Ресторан Белая Роза</li>
                </ul>
            </section>
        </div>
        <main>
            <div id="dark_background" class="div">
                <div class="qwerty form div">
                    <div id="login_form" class="form div">
                        <form action="php/php.php" method="POST">
                            <input type="hidden" name="form" value="reg">
                            <a href="#" class="close"></a>
                            <ul class="text">
                                <ul class="text">
                                    <li class="text-reg">Регистрация:</li>
                                    <li class="text-form">
                                        <a class="create_account_button href" href="#">Авторизоваться</a>
                                    </li>
                                </ul>
                                <li>
                                    <input min="2" max="9" required name="name" autocomplete="off" type="text" placeholder="Введите ваше имя (Максим)">
                                </li>
                                <li>
                                    <input required name="email" autocomplete="off" type="email" placeholder="Введите email">
                                </li>
                                <li>
                                    <input required name="password" autocomplete="off" type="password" placeholder="Придумайте пароль">
                                </li>
                                <li>
                                    <input required name="confirm" autocomplete="off" type="password" placeholder="Повторите пароль">
                                </li>
                                <button required name="button" type="submit" class="text-button button_input">Зарегистрироваться</button>
                            </ul>
                        </form>
                    </div>
                    <div id="register_form" class="div">
                        <form action="php/php.php" method="POST">
                            <input type="hidden" name="form" value="log">
                            <a href="#" class="close"></a>
                            <ul class="text">
                                <ul class="text">
                                    <li class="text-reg">Авторизация:</li>
                                    <li class="text-form">
                                        <a class="login_account_button href" href="#">зарегистрироваться</a>
                                    </li>
                                </ul>
                                <li>
                                    <input required name="email" autocomplete="off" type="text" placeholder="Введите email">
                                </li>
                                <li>
                                    <input required name="password" autocomplete="off" type="password" placeholder="Введите пароль">
                                </li>
                                <button required name="button" type="submit" class="text-button button_input">Авторизоваться</button>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <section id="block2">
                <nav>
                    <ul>
                        <li class="text textHeadBlock2">О нас</li>
                    </ul>
                    <div class="vl"></div>
                    <ul class="text">
                        <li class="text-bl2">Ресторан White Rose</li>
                        <li class="textBlock2">«White Rose» берет свое название от знаменитой площади в Стамбуле и ностальгического трамвайчика, который курсирует по этой площади. Красный трамвай является официальным символом сетей ресторанов «WiteRose» и каждый из филиалов непременно использует эту трамвайную символику. Все дело в том, что где бы мы ни были, мы пытаемся донести до людей атмосферу Стамбула и площади Таксим. Основная концепция нашего ресторана — доставить нашим клиентам удовольствие от вкусной турецкой кухни во всем ее разнообразии.</li>
                        
                    </ul>
                </nav>
                <nav>
                    <ul>
                        <li class="text textHeadBlock2">Наш шеф-повар</li>
                    </ul>
                    <div class="vl"></div>
                    <ul class="text">
                        <li class="text-bl2">Турецкий шеф-повар</li>
                        <li class="textBlock2">Нашим шеф-поваром является турецкий специалист с 15-летним стажем работы Вурал. Шеф-повар Вурал уделяет особое внимание приготовлению всех мясных блюд, которые предоставляются клиентам в нашем ресторане. Разнообразие и великолепие турецкой кухни, представленное в нашем меню: от мясных блюд до сладостей — все приготовлено под строжайшим контролем шефа и при его непосредственном участии для того, чтобы Вы получали удовольствие приходя в наш ресторан.</li>
                    </ul>
                </nav>
            </section>

            <section id="block3">
                <wrapper class="qwerty">
                    <div id="dws-slider" class="carousel slide" data-ride="carousel">
                        <!--Показатели-->
                        <ol class="carousel-indicators">
                            <li data-target="#dws-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#dws-slider" data-slide-to="1"></li>
                            <li data-target="#dws-slider" data-slide-to="2"></li>
                        </ol>
                
                        <!--Обертка для слайдов-->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active"><img src="img/block3.jpg" alt="Картинка 1">
                                <div class="carousel-caption">
                                    <h3 class="TextHeadBlock3">Ресторан на Савёловской</h3>
                                    <hr>
                                    <p class="TextmaniBlock3">Ул. Вятская дом 27 с. 7</p>
                                </div>
                            </div>
                            <div class="item"><img src="img/block3-2.jpg" alt="Картинка 2">
                                <div class="carousel-caption">
                                    <h3 class="TextHeadBlock3">Ресторан на Биберево</h3>
                                    <hr>
                                    <p class="TextmaniBlock3">Ул. Плещеева, 1, Москва</p>
                                </div>
                            </div>
                            <div class="item"><img src="img/block3-3.jpg" alt="Картинка 3">
                                <div class="carousel-caption">
                                    <h3 class="TextHeadBlock3">Ресторан на Калужской</h3>
                                    <hr>
                                    <p class="TextmaniBlock3">Ул. Профсоюзная, 61А, этаж 2, Москва</p>
                                </div>
                            </div>
                        </div>
                
                        <!--Элементы управления-->
                        <a class="left carousel-control" href="#dws-slider" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#dws-slider" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </wrapper>
            </section>
        </main>
        <footer>
            <ul class="text textFooter">
                <li>© 2020 Все права защищены<li>
                <div class="vlFooter"></div>
                <a href="">
                    <li>Условия использования</li>
                </a>
            </ul>
            <ul class="text contentFotter">
                <a href="https://www.instagram.com/whiterose.bauzer/"><li class="Inst"></li></a>
                <a href="https://vk.com/vrom.vine"><li class="vk"></li></a>
                <a href="https://www.youtube.com/channel/UCnPxZg9v7dTQJlO_G1P-vkw"><li class="YouTube"></li></a>
            </ul>
        </footer>
    </body>
    <script src="js/index.js"></script>	
    <script src="js/bootstrap.js"></script>
</html>