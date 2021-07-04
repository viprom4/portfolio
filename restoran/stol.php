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
        <link rel="stylesheet" href="css/stol.css">
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
                        <li class="menuText color">Аренда</li>
                    </a>
                    <a href="address.php">
                        <li class="menuText">Адрес</li>
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

            <section id="bron">
                <p class="textbron">Бронь столика</p>
                <nav>
                    <ul class="text textBronstol">
                        <li>Выберете ресторан</li>
                        <li class="textBronstol2">Ул. Вятская дом 27 с. 7</li>
                    </ul>
                    <ul class="text textBronstol">
                        <li>Дата визита</li>
                        <li class="textBronstol2">Выберете дату</li>
                    </ul>
                    <ul class="text textBronstol">
                        <li>Время визита</li>
                        <li>
                            <input autocomplete="off" type="time" id="appt" name="appt" class="time textBronstol2">
                        </li>
                    </ul>
                    <ul class="text textBronstol">
                        <li>Количество гостей</li>
                        <li>
                            <input autocomplete="off" type="number" id="quantity" name="quantity" min="1" max="99" class="gost textBronstol2 border" placeholder="от 1 до 99">
                        </li>
                    </ul>
                    <ul class="text textBronstol">
                        <li>Имя</li>
                        <li>
                            <input autocomplete="off" type="text" class="name textBronstol2 border" placeholder="Максим">
                        </li>
                    </ul>
                    <ul class="text textBronstol">
                        <li>Телефон</li>
                        <li>
                            <input autocomplete="off"  id="phone1" type="text" class="form-control textBronstol2 border"  placeholder="+7(977)533-66-13">
                        </li>
                    </ul>
                    <ul class="text textBronstol">
                        <li>Эл. почта</li>
                        <li>
                            <input autocomplete="off" type="email" class="email textBronstol2 border"  placeholder="123a56z5@gmail.com">
                        </li>
                    </ul>
                    <ul class="text textBronstol">
                        <li>Пожелания к брони</li>
                        <li>
                            <input autocomplete="off" type="text" class="wishes textBronstol2 border" placeholder="Хотелось бы...">
                        </li>
                    </ul>
                </nav>
            </section>
                
            <section id="block2">
                <ul class="text">
                    <li class="textStolBlock2">Нажимая на кнопку вы даете согласие на обработку своих персональных данных</li>
                    <li class="button">Отправить</li>
                </ul>
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