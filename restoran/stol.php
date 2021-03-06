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
                                    <li class="menuText2"><a href="https://www.instagram.com/whiterose.bauzer/">??????????????</a></li>
                                    <li class="menuText2"><a href="https://vk.com/vrom.vine">??????????????</a></li>
                                    <li class="menuText2"><button  class="menuButton" type="submit">??????????</button></li>
                                </ul>
                            </li>
                        </ul>
                    </form>
                    <?php else: ?>
                        <div class="button_input open_form"><p id="authButton">??????????</p></div>
                    <?php endif;?>


                    <!-- <button class="button_input open_form">??????????</button> -->
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
                                    <li class="text-reg">??????????????????????:</li>
                                    <li class="text-form">
                                        <a class="create_account_button href" href="#">????????????????????????????</a>
                                    </li>
                                </ul>
                                <li>
                                    <input min="3" max="9" required name="name" autocomplete="off" type="text" placeholder="?????????????? ???????? ?????? (????????????)">
                                </li>
                                <li>
                                    <input required name="email" autocomplete="off" type="email" placeholder="?????????????? email">
                                </li>
                                <li>
                                    <input required name="password" autocomplete="off" type="password" placeholder="???????????????????? ????????????">
                                </li>
                                <li>
                                    <input required name="confirm" autocomplete="off" type="password" placeholder="?????????????????? ????????????">
                                </li>
                                <button required name="button" type="submit" class="text-button button_input">????????????????????????????????????</button>
                            </ul>
                        </form>
                    </div>
                    <div id="register_form" class="div">
                        <form action="php/php.php" method="POST">
                            <input type="hidden" name="form" value="log">
                            <a href="#" class="close"></a>
                            <ul class="text">
                                <ul class="text">
                                    <li class="text-reg">??????????????????????:</li>
                                    <li class="text-form">
                                        <a class="login_account_button href" href="#">????????????????????????????????????</a>
                                    </li>
                                </ul>
                                <li>
                                    <input required name="email" autocomplete="off" type="text" placeholder="?????????????? email">
                                </li>
                                <li>
                                    <input required name="password" autocomplete="off" type="password" placeholder="?????????????? ????????????">
                                </li>
                                <button required name="button" type="submit" class="text-button button_input">????????????????????????????</button>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <section id="menu">
                <ul class="text">
                    <a href="index.php">
                        <li class="menuText">?? ??????</li>
                    </a>
                    <a href="menu.php">
                        <li class="menuText">????????</li>
                    </a>
                    <a href="stol.php">
                        <li class="menuText color">????????????</li>
                    </a>
                    <a href="address.php">
                        <li class="menuText">??????????</li>
                    </a>
                    <nav class="kontact">
                        <ul class="topmenu text">
                            <li>
                                <a href="" class="down"><p class="menuText">????????????????</p></a>
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
                <!-- <button class="btn_basket">??????????????</button> -->
            </section>

            <section id="bron">
                <p class="textbron">?????????? ??????????????</p>
                <nav>
                    <ul class="text textBronstol">
                        <li>???????????????? ????????????????</li>
                        <li class="textBronstol2">????. ?????????????? ?????? 27 ??. 7</li>
                    </ul>
                    <ul class="text textBronstol">
                        <li>???????? ????????????</li>
                        <li class="textBronstol2">???????????????? ????????</li>
                    </ul>
                    <ul class="text textBronstol">
                        <li>?????????? ????????????</li>
                        <li>
                            <input autocomplete="off" type="time" id="appt" name="appt" class="time textBronstol2">
                        </li>
                    </ul>
                    <ul class="text textBronstol">
                        <li>???????????????????? ????????????</li>
                        <li>
                            <input autocomplete="off" type="number" id="quantity" name="quantity" min="1" max="99" class="gost textBronstol2 border" placeholder="???? 1 ???? 99">
                        </li>
                    </ul>
                    <ul class="text textBronstol">
                        <li>??????</li>
                        <li>
                            <input autocomplete="off" type="text" class="name textBronstol2 border" placeholder="????????????">
                        </li>
                    </ul>
                    <ul class="text textBronstol">
                        <li>??????????????</li>
                        <li>
                            <input autocomplete="off"  id="phone1" type="text" class="form-control textBronstol2 border"  placeholder="+7(977)533-66-13">
                        </li>
                    </ul>
                    <ul class="text textBronstol">
                        <li>????. ??????????</li>
                        <li>
                            <input autocomplete="off" type="email" class="email textBronstol2 border"  placeholder="123a56z5@gmail.com">
                        </li>
                    </ul>
                    <ul class="text textBronstol">
                        <li>?????????????????? ?? ??????????</li>
                        <li>
                            <input autocomplete="off" type="text" class="wishes textBronstol2 border" placeholder="???????????????? ????...">
                        </li>
                    </ul>
                </nav>
            </section>
                
            <section id="block2">
                <ul class="text">
                    <li class="textStolBlock2">?????????????? ???? ???????????? ???? ?????????? ???????????????? ???? ?????????????????? ?????????? ???????????????????????? ????????????</li>
                    <li class="button">??????????????????</li>
                </ul>
            </section>
        </main>
        <footer>
            <ul class="text textFooter">
                <li>?? 2020 ?????? ?????????? ????????????????<li>
                <div class="vlFooter"></div>
                <a href="">
                    <li>?????????????? ??????????????????????????</li>
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