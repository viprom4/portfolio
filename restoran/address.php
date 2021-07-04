<?php
    require_once("php/database123.php");
    require_once("php/functions.php");
?>
<!DOCTYPE html>
<html lang="en" class="theme-light">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/aileron" type="text/css"/>
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/font-hover.css">
        <link rel="stylesheet" href="css/reg-log.css">
        <link rel="stylesheet" href="css/root.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/address.css">
        <title>WiteRose</title>
    </head>
    <body>
    <header>
            <a href="index.php">
                <p class="logo">White<span>Rose</span></p>
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
                                    <input min="3" max="9" required name="name" autocomplete="off" type="text" placeholder="Введите ваше имя (Максим)">
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
            <section id="menu">
                <ul class="text">
                    <a href="index.php">
                        <li class="menuText">О нас</li>
                    </a>
                    <a href="menu.php">
                        <li class="menuText">Меню</li>
                    </a>
                    <a href="stol.php">
                        <li class="menuText">Аренда</li>
                    </a>
                    <a href="address.php">
                        <li class="menuText color">Адрес</li>
                    </a>
                    <nav class="kontact">
                        <ul class="topmenu text">
                            <li>
                                <a href="" class="down"><p class="menuText">Контакты</p></a>
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
                <p class="textbron">Адрес</p>
                <nav>
                    <ul>
                        <img src="img/adress.jpg">
                        <ul class="text">
                            <li class="textadress">Ул. Вятская дом 27 с. 7</li>
                            <li class="textadress"><span>Телефон:</span>  +7(977)533-66-13</li>
                        </ul>
                        <ul class="text">
                            <li class="textadressTime">Режим работы:</li>
                            <li class="textadress">Пн—Чт, Вс с 12:00 до 00:00</li>
                            <li class="textadress">Пт, Сб с 12:00 до 03:00</li>
                        </ul>
                    </ul>
                    <ul>
                        <img src="img/adress2.jpg">
                        <ul class="text">
                            <li class="textadress">Ул. Вятская дом 27 с. 7</li>
                            <li class="textadress"><span>Телефон:</span>  +7(977)533-66-13</li>
                        </ul>
                        <ul class="text">
                            <li class="textadressTime">Режим работы:</li>
                            <li class="textadress">Пн—Чт, Вс с 12:00 до 00:00</li>
                            <li class="textadress">Пт, Сб с 12:00 до 03:00</li>
                        </ul>
                    </ul>
                    <ul>
                        <img src="img/adress3.jpg">
                        <ul class="text">
                            <li class="textadress">Ул. Профсоюзная, 61А, этаж 2, Москва</li>
                            <li class="textadress"><span>Телефон:</span>  +7(977)533-66-13</li>
                        </ul>
                        <ul class="text">
                            <li class="textadressTime">Режим работы:</li>
                            <li class="textadress">Пн—Чт, Вс с 12:00 до 00:00</li>
                            <li class="textadress">Пт, Сб с 12:00 до 03:00</li>
                        </ul>
                    </ul>
                </nav>
            </section>

            <section id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6628.5752025316615!2d151.219!3d-33.830693!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12aebd7ef1f62f%3A0x122cedc0ad227cbe!2sThe%20Oaks!5e0!3m2!1sru!2sru!4v1624187069725!5m2!1sru!2sru" allowfullscreen="" loading="lazy"></iframe>
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
</html>