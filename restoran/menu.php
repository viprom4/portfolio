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
        <link rel="stylesheet" href="css/menu.css">
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
                        <li class="menuText color">Меню</li>
                    </a>
                    <a href="stol.php">
                        <li class="menuText">Аренда</li>
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

            <section id="nachalo">
                <ul class="text">
                    <li class="textNachalo">White Rose</li>
                    <div class="Vl-spisok-menu"></div>
                    <li class="textNachalo">From 2020</li>
                </ul>
                <div></div>
            </section>
            
            <section id="spisok-menu">
                <nav>
                    <div class="list">
                        <li class="TextHeadingSpisok-menu">ХОЛОДНЫЕ ЗАКУСКИ</li>
                        <ul>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Закуска "Рафаэлки"</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">250₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Сыр - 200 г, Яйца - 4 шт., Чеснок - 3-4 зубчика (20 г), Крабовые палочки - 1 упаковка (200 г), Майонез - 3 ст. л. (100 г).</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Закуска из лаваша с курицей и плавленым сыром</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">350₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Грудка куриная (филе) - 200 г, Сыр плавленый сливочный - 200 г, Лаваш тонкий (размером 30х30 см) - 2 шт., Майонез - 2 ст. ложки, Зелень петрушки - 1 пучок, Масло растительное - для жарки.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Яичные блинчики с крабовыми палочками и сыром</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">300₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Яйца - 3 шт., Крабовые палочки - 3 шт., Сыр твёрдый - 100 г, Майонез - 2 ст. ложки, Укроп свежий - 4-5 веточек (10 г), Масло растительное (для жарки) - 1 ст. ложка.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Закуска "Рафаэлки"</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">250₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Сыр - 200 г, Яйца - 4 шт., Чеснок - 3-4 зубчика (20 г), Крабовые палочки - 1 упаковка (200 г), Майонез - 3 ст. л. (100 г).</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Закуска "Рафаэлки"</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">250₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Сыр - 200 г, Яйца - 4 шт., Чеснок - 3-4 зубчика (20 г), Крабовые палочки - 1 упаковка (200 г), Майонез - 3 ст. л. (100 г).</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Закуска "Рафаэлки"</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">250₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Сыр - 200 г, Яйца - 4 шт., Чеснок - 3-4 зубчика (20 г), Крабовые палочки - 1 упаковка (200 г), Майонез - 3 ст. л. (100 г).</li>
                                </ul>
                            </li>
                        </ul>
                        <a>
                            <div class="Vl-spisok-menu"></div>
                            <button class="TextFooterSpisok-menu" value="1" data-show="Читать дальше" data-hide="Свернуть">Читать дальше</button>
                            <div class="Vl-spisok-menu"></div>
                        </a>
                    </div>
                    <div class="list">
                        <li class="TextHeadingSpisok-menu">СУПЫ</li>
                        <ul>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Жульен с грибами и курицей, в тарталетках</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">300₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Куриное филе - 180 г, Шампиньоны - 120 г, Сыр твёрдый - 70 г, Сметана (жирностью 20%) - 150 г, Молоко - 150 мл, Масло сливочное - 40 г</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Порционный киш с курицей </li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">380₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Тесто слоеное (готовое, размороженное) - 250 г, Филе куриное (половинки грудки) - 4 шт., Бекон - 100 г, Лук репчатый - 1 шт., Помидор - 1 шт., Яйца - 2 шт., Сливки 30% - 220 мл, Соль, Перец черный молотый</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Брускетта</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">220₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Багет - 1 шт., Сыр Моцарелла - 150 г, Лук репчатый - 1 шт., Помидор - 3 шт., Базилик - 1 пуч., Соль - по вкусу, Перец черный молотый - по вкусу, Сахар - 1/2 ч.л., Чеснок - 2 зуб.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Башенки из баклажанов и помидоров с сыром</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">250₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Баклажан - 1 шт. (примерно 200 г), Помидоры средние - 2 шт. (300-350 г), Минибагет - 1 шт. (примерно 12 кусочков), Сыр - 100 г, Яйцо - 1 шт., Масло растительное - 50-70 г.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Жареные куриные крылышки в соево-пивной глазури</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">290₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Куриные крылышки - 1 кг (10 шт.), Пиво (светлое) - 200 мл, Соевый соус - 50 мл, Масло подсолнечное - 30 мл (2 ст. ложки), Сахар - 2 ст. ложки, Имбирь молотый - 0,5 ч. ложки, Корица молотая - 0,5 ч. ложки.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Башенки из баклажанов и помидоров с сыром</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">250₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Баклажан - 1 шт. (примерно 200 г), Помидоры средние - 2 шт. (300-350 г), Минибагет - 1 шт. (примерно 12 кусочков), Сыр - 100 г, Яйцо - 1 шт., Масло растительное - 50-70 г.</li>
                                </ul>
                            </li>
                        </ul>
                        <a>
                            <div class="Vl-spisok-menu"></div>
                            <button class="TextFooterSpisok-menu" value="1" data-show="Читать дальше" data-hide="Свернуть">Читать дальше</button>
                            <div class="Vl-spisok-menu"></div>
                        </a>
                    </div>
                    <div class="list">
                        <li class="TextHeadingSpisok-menu">САЛАТЫ</li>
                        <ul>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">"Мимоза" классический</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">210₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Рыбные консервы в масле — 200 Грамм, Картофель — 300 Грамм, Морковь — 200 Грамм, Лук — 100 Грамм, Сыр — 150 Грамм, Майонез — 250 Грамм, Яйца — 4 Штуки, Зелень — 50 Грамм.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">"Ёжик"</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">300₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">ГКолбаса копченая - 100 г, Сыр твердый - 100 г, Яйца вареные - 3 шт., Кукуруза консервированная - 140 г, Чеснок - 1 зубчик, Майонез - 80 г.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">"Моя прекрасная леди"</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">290₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Капуста пекинская - 1 кочан, Ветчина - 150-200 г, Кукуруза консервированная - 1 баночка, Майонез - 150-200 г, Сухарики - 2 пачки (150 г).</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">"Мимоза" классический</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">210₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Рыбные консервы в масле — 200 Грамм, Картофель — 300 Грамм, Морковь — 200 Грамм, Лук — 100 Грамм, Сыр — 150 Грамм, Майонез — 250 Грамм, Яйца — 4 Штуки, Зелень — 50 Грамм.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">"Ёжик"</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">300₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">ГКолбаса копченая - 100 г, Сыр твердый - 100 г, Яйца вареные - 3 шт., Кукуруза консервированная - 140 г, Чеснок - 1 зубчик, Майонез - 80 г.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">"Моя прекрасная леди"</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">290₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Капуста пекинская - 1 кочан, Ветчина - 150-200 г, Кукуруза консервированная - 1 баночка, Майонез - 150-200 г, Сухарики - 2 пачки (150 г).</li>
                                </ul>
                            </li>
                        </ul>
                        <a>
                            <div class="Vl-spisok-menu"></div>
                            <button class="TextFooterSpisok-menu" value="1" data-show="Читать дальше" data-hide="Свернуть">Читать дальше</button>
                            <div class="Vl-spisok-menu"></div>
                        </a>
                    </div>
                </nav>
                <nav>
                    <div class="list">
                        <li class="TextHeadingSpisok-menu">ГОРЯЧИЕ БЛЮДА</li>
                        <ul>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Жульен с грибами и курицей, в тарталетках</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">300₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Куриное филе - 180 г, Шампиньоны - 120 г, Сыр твёрдый - 70 г, Сметана (жирностью 20%) - 150 г, Молоко - 150 мл, Масло сливочное - 40 г</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Порционный киш с курицей </li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">380₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Тесто слоеное (готовое, размороженное) - 250 г, Филе куриное (половинки грудки) - 4 шт., Бекон - 100 г, Лук репчатый - 1 шт., Помидор - 1 шт., Яйца - 2 шт., Сливки 30% - 220 мл, Соль, Перец черный молотый</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Брускетта</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">220₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Багет - 1 шт., Сыр Моцарелла - 150 г, Лук репчатый - 1 шт., Помидор - 3 шт., Базилик - 1 пуч., Соль - по вкусу, Перец черный молотый - по вкусу, Сахар - 1/2 ч.л., Чеснок - 2 зуб.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Башенки из баклажанов и помидоров с сыром</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">250₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Баклажан - 1 шт. (примерно 200 г), Помидоры средние - 2 шт. (300-350 г), Минибагет - 1 шт. (примерно 12 кусочков), Сыр - 100 г, Яйцо - 1 шт., Масло растительное - 50-70 г.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Жареные куриные крылышки в соево-пивной глазури</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">290₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Куриные крылышки - 1 кг (10 шт.), Пиво (светлое) - 200 мл, Соевый соус - 50 мл, Масло подсолнечное - 30 мл (2 ст. ложки), Сахар - 2 ст. ложки, Имбирь молотый - 0,5 ч. ложки, Корица молотая - 0,5 ч. ложки.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Башенки из баклажанов и помидоров с сыром</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">250₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Баклажан - 1 шт. (примерно 200 г), Помидоры средние - 2 шт. (300-350 г), Минибагет - 1 шт. (примерно 12 кусочков), Сыр - 100 г, Яйцо - 1 шт., Масло растительное - 50-70 г.</li>
                                </ul>
                            </li>
                        </ul>
                        <a>
                            <div class="Vl-spisok-menu"></div>
                            <button class="TextFooterSpisok-menu" value="1" data-show="Читать дальше" data-hide="Свернуть">Читать дальше</button>
                            <div class="Vl-spisok-menu"></div>
                        </a>
                    </div>
                    <div class="list">
                        <li class="TextHeadingSpisok-menu">ГАРНИРЫ</li>
                        <ul>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Закуска "Рафаэлки"</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">250₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Сыр - 200 г, Яйца - 4 шт., Чеснок - 3-4 зубчика (20 г), Крабовые палочки - 1 упаковка (200 г), Майонез - 3 ст. л. (100 г).</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Закуска из лаваша с курицей и плавленым сыром</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">350₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Грудка куриная (филе) - 200 г, Сыр плавленый сливочный - 200 г, Лаваш тонкий (размером 30х30 см) - 2 шт., Майонез - 2 ст. ложки, Зелень петрушки - 1 пучок, Масло растительное - для жарки.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Яичные блинчики с крабовыми палочками и сыром</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">300₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Яйца - 3 шт., Крабовые палочки - 3 шт., Сыр твёрдый - 100 г, Майонез - 2 ст. ложки, Укроп свежий - 4-5 веточек (10 г), Масло растительное (для жарки) - 1 ст. ложка.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Закуска "Рафаэлки"</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">250₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Сыр - 200 г, Яйца - 4 шт., Чеснок - 3-4 зубчика (20 г), Крабовые палочки - 1 упаковка (200 г), Майонез - 3 ст. л. (100 г).</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Закуска "Рафаэлки"</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">250₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Сыр - 200 г, Яйца - 4 шт., Чеснок - 3-4 зубчика (20 г), Крабовые палочки - 1 упаковка (200 г), Майонез - 3 ст. л. (100 г).</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Закуска "Рафаэлки"</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">250₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Сыр - 200 г, Яйца - 4 шт., Чеснок - 3-4 зубчика (20 г), Крабовые палочки - 1 упаковка (200 г), Майонез - 3 ст. л. (100 г).</li>
                                </ul>
                            </li>
                        </ul>
                        <a>
                            <div class="Vl-spisok-menu"></div>
                            <button class="TextFooterSpisok-menu" value="1" data-show="Читать дальше" data-hide="Свернуть">Читать дальше</button>
                            <div class="Vl-spisok-menu"></div>
                        </a>
                    </div>
                    <div class="list">
                        <li class="TextHeadingSpisok-menu">ДЕСЕРТЫ</li>
                        <ul>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">"Баунти" (без выпечки)</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">150₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Для "теста": Печенье магазинное, не сухое - 300 г, Какао-порошок - 3 ст. ложки, Сахар - 0,5 стакана, Вода - 0,5 стакана. Для крема: Масло сливочное, комнатной температуры - 150 г, Сахарная пудра - 100 г, Кокосовая стружка - 40 г.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Шоколадный кекс</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">190₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Для "теста": Печенье магазинное, не сухое - 300 г, Какао-порошок - 3 ст. ложки, Сахар - 0,5 стакана, Вода - 0,5 стакана. Для крема: Масло сливочное, комнатной температуры - 150 г, Сахарная пудра - 100 г, Кокосовая стружка - 40 г.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">"Баунти" (без выпечки)</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">150₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Для "теста": Печенье магазинное, не сухое - 300 г, Какао-порошок - 3 ст. ложки, Сахар - 0,5 стакана, Вода - 0,5 стакана. Для крема: Масло сливочное, комнатной температуры - 150 г, Сахарная пудра - 100 г, Кокосовая стружка - 40 г.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Шоколадный кекс</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">190₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Для "теста": Печенье магазинное, не сухое - 300 г, Какао-порошок - 3 ст. ложки, Сахар - 0,5 стакана, Вода - 0,5 стакана. Для крема: Масло сливочное, комнатной температуры - 150 г, Сахарная пудра - 100 г, Кокосовая стружка - 40 г.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">"Баунти" (без выпечки)</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">150₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Для "теста": Печенье магазинное, не сухое - 300 г, Какао-порошок - 3 ст. ложки, Сахар - 0,5 стакана, Вода - 0,5 стакана. Для крема: Масло сливочное, комнатной температуры - 150 г, Сахарная пудра - 100 г, Кокосовая стружка - 40 г.</li>
                                </ul>
                            </li>
                        </ul>
                        <a>
                            <div class="Vl-spisok-menu"></div>
                            <button class="TextFooterSpisok-menu" value="1" data-show="Читать дальше" data-hide="Свернуть">Читать дальше</button>
                            <div class="Vl-spisok-menu"></div>
                        </a>
                    </div>
                </nav>
            </section>
            <section id="spisok-menu2">
                <nav>
                    <div class="list">
                        <li class="TextHeadingSpisok-menu">НАПИТКИ</li>
                        <ul>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Чай</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">50₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Вода - 200мг., Сахар,. Лимон - 5г,, Завареный чай на выбор.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Кофе</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">100₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Вода - 150мг. Сахар на усмотрение., Кофе на выор.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Пина колада</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">200₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Светлый ром30 мл. Ананасовый сок90 мл. Кокосовое молоко30 мл. Лед</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Кофе</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">100₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Вода - 150мг. Сахар на усмотрение., Кофе на выор.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="text">
                                    <li>
                                        <ul class="text head">
                                            <li class="TextHeadSpisok-menu">Пина колада</li>
                                            <div class="Vl-spisok-menu"></div>
                                            <li class="TextHeadSpisok-menu">200₽</li>
                                        </ul>
                                    </li>
                                    <li class="TextManiSpisok-menu">Светлый ром30 мл. Ананасовый сок90 мл. Кокосовое молоко30 мл. Лед</li>
                                </ul>
                            </li>
                        </ul>
                        <a>
                            <div class="Vl-spisok-menu"></div>
                            <button class="TextFooterSpisok-menu" value="1" data-show="Читать дальше" data-hide="Свернуть">Читать дальше</button>
                            <div class="Vl-spisok-menu"></div>
                        </a>
                    </div>
                </nav>
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
    <script src="js/main.js"></script>	
</html>