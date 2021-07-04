<!DOCTYPE html>
<html>
	<head>
		<head lang="RU">
		<meta charset="utf-8">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu&subset=cyrillic,latin' rel='stylesheet' type='text/css'/> <!--подключение шрифта-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> <!--подключение Animate.css-->
		<link rel="stylesheet" type="text/css" href="css\index.css">
		<title>BackSide</title>
		<script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
	</head>
	
	<body class="">
		<header>
			<nav>
				<a href="index.php">
					<p class="header_text">Back<span>Side</span></p>
				</a>
				<ul>
					<li class="button_DarkTheme">DarkTheme</li>
					<a href="mertch.html">
						<li class="header_text1">Мерч</li>
					</a>
					<a href="https://discord.gg/BmxhmZ3">
						<li class="button">Discord</li>
					</a>
					<div class="vl"></div>

					
						<a href="#input">
							<li class="button_input">Вход\Регистрация</li>
						</a>
					
				</ul>
			</nav>
		</header>

		<main>
			<div id="dark_background">
				<div class="obertka authorization_main">
				<div class="authorization authorization_main form_text" id="login_form">
					<form action="php/reg-log.php" method="post">
						<input type="hidden" name="form" value="log">
						<ul>
							<li class="form_blok1">
								<div class="form_heading">Вход:</div>
								<div class="form_footering"></div>
								<div id="close_button" class="close_but1"><u>Закрыть</u></div>
							<li>
								<label for="email_log">Email:</label>
                				<input name="email_log" required maxlength="32" type="email">
							</li>
							<li>
								<label for="password_log">Пароль:</label>
                				<input name="password_log" required maxlength="16" type="password">
							</li>
							<li class="form_blok3">
								<button type="submit" class="button_text">Войти</button>
								<div class="form_footering">
									<a class="create_account_button" href="#">
										<u>Создать аккаунт</u>
									</a>
								</div>
							</li>
						</ul>
						<p>или</p>
						<ul class="authorization_footer">
							<li>Войти через:</li>
							<li><img src="img/google.svg"></li>
							<li><img src="img/vk.svg"></li>
							<li><img src="img/steam.svg"></li>
						</ul>
					</form>
				</div>
				<div class="reg reg_main form_text" id="register_form">
					<form action="php/reg-log.php" method="post" class='formi'>
						<input type="hidden" name="form" value="reg">
						<ul>	
							<li class="form_blok1">
								<div class="form_heading">Регистрация:</div>
								<div id="close_button" class="close_but2"><u>Закрыть</u></div>
							</li>
							<li>
								<input name="name" required maxlength="128" type="text" placeholder="Введите Никнейм">
							</li>
							<li>
								<input name="email" required maxlength="32" type="email" placeholder="Введите ваш email">
							</li>
							<li>
								<input name="password" required maxlength="16" type="password" placeholder="Придумайте пароль">
							</li>
							<li>
								<input name="confirm" required maxlength="16" type="password" placeholder="Повторите пароль">
							</li>
							<li class="form_blok3">
								<button type="submit" class="button_text">Зарегистрироваться</button>
								<div class="form_footering">
									<a href="#">
										<u class="login_account_button">Войти в аккаунт</u>
									</a>
								</div>
							</li>
						</ul>
						<p>или</p>
						<ul class="reg_footer">
							<li>Зарегистрироваться через:</li>
							<li><img src="img/google.svg"></li>
							<li><img src="img/vk.svg"></li>
							<li><img src="img/steam.svg"></li>
						</ul>
					</form>
				</div>
				</div>		
			</div>

			<section id="blok1">
				<ul class="location1 text animate__animated animate__fadeIn wow" data-wow-duration = "2s">
					<p class="heading">Кто же мы?</p>
					<li class="main_text">Прежде всего мы - крупное сообщество, которое любит весело проводить время в разных играх.<br>Так же мы крайне общительные и хотим видеть как можно больше людей на нашем сервере! </li>
					<ul class="img">
						<li class="scale2">
							<img class="img_wide img_radius" src="img\Hunt5.jpg">
						</li>
						<li class="scale2">
							<img class="img_narrow2 img_radius"src="img\Hunt2.jpg">
						</li>
					</ul>
				</ul>
				<ul class="location2 text animate__animated animate__fadeIn wow" data-wow-duration = "2s">
					<ul class="img scale">
						<li class="scale">
							<img class="img_narrow"src="img\cs.jpg">
						</li>
						<li class="scale">
							<img class="img_narrow"src="img\GTA5.jpg">
						</li>
						<li class="scale">
							<img class="img_narrow"src="img\Six_Siege.jpg">
						</li>
						<li class="scale">
							<img class="img_narrow"src="img\Rust.jpg">
						</li>
					</ul>
					<p class="heading">Во что мы играем?</p>
					<li class="main_text">Список игр может длиться бесконечно, но скажем топ 4 любимых игр:<br>Tom Clancy's Rainbow Six® Siege, Counter-Strike: Global Offensive, GTA5, Rust.</li>
				</ul>
				<ul class="location3 text animate__animated animate__fadeIn wow" data-wow-duration = "2s">
					<p class="heading">Как к нам попасть?</p>
					<li class="main_text">Друг, тут всё крайне просто, тебе не нужно сдавать какие-то экзамены или что то подобное. Просто кликай на наш <a href="https://discord.gg/BmxhmZ3"><span>Discord!</span></a></li>
					<ul class="img scale">
						<li class="scale2">
							<img class="img_narrow2 img_radius" src="img\theCrewLogo.jpg">
						</li>
						<li class="scale2">
							<img class="img_wide img_radius"src="img\theCrew2.jpg">
						</li>
					</ul>
				</ul>
			</section>
			
			<section id="blok2">
				<h1 class="blok2-heading animate__animated animate__fadeInUp wow" data-wow-offset="150">История <blok-span>Back</blok-span><blok-span2>Side</blok-span2></h1>
				<nav>
					<ul class="test-text1 location1 main_text">
						<li class="main_text-white animate__animated animate__fadeInLeft wow" data-wow-offset="50">Изначально <blok-span>Back</blok-span><blok-span2>Side</blok-span2> был создан как киберспортивная команда, предназначена для игры Counter-Strike: Global Offensive.</li>
						<li></li>
						<li class="main_text-white animate__animated animate__fadeInLeft wow" data-wow-offset="50">Первая площадка, где создавалась команда <blok-span>Back</blok-span><blok-span2>Side</blok-span2>, являлась steam площадка.  После это всё переросло в <a href="https://discord.gg/BmxhmZ3"><blok-span>Discord</blok-span></a>.</li>
						<li class="main_text-white animate__animated animate__fadeInLeft wow" data-wow-offset="50">Чуть позже мы покорили такие площадки, как: <blok-span>Ubisoft</blok-span>; <blok-span>Rockstar Games</blok-span>; <blok-span>Origin</blok-span>; <blok-span>Youtube</blok-span>; <blok-span>ВКонтакте</blok-span>. В этот момент мы начали понимать, что <blok-span>Back</blok-span><blok-span2>Side</blok-span2> не просто небольшая компания.</li>
					</ul>
					<ul class="test-text2 location3 main_text">
						<li class="animate__animated animate__fadeInRight wow" data-wow-offset="50">Затем к нам начали приходить люди из разных игр, и мы начали проводить время не только в Counter-Strike: Global Offensive.</li>
						<li></li>
						<li class="animate__animated animate__fadeInRight wow" data-wow-offset="50">Этот шаг открыл нашему проекту новый уровень. И с каждым днём нас становилась всё больше и больше.</li>
						<li class="animate__animated animate__fadeInRight wow" data-wow-offset="50">У которой были одиноковые увлечения, а мы уже стали “<blok-span>Семьёй</blok-span>” и готовы принять к нам каждого. Ведь чем нас больше, тем веселее и интереснее!</li>
					</ul>
				</nav>
			</section>

			<section id="blok3">
				<nav class="animate__animated animate__zoomIn wow" data-wow-offset="100">
					<a href="yt.html">
						<img src="img/yt.jpg">
						<ul class="main_text-white">
							<li class="margin1">Со временим мы захотели делать красивые видео, по игре <blok-span>Counter-Strike: Global Offensive</blok-span>. И начали приходить так называемые “<blok-span>Едитеры</blok-span>”. С их приходом некоторые начали обучать интересующих и подсказывать всякие классные эффекты и тому подобное.</li>
							<li class="margin2">Нажимай <blok-span>присоединиться!</blok-span></li>
						</ul>
					</a>
				</nav>
				<nav class="animate__animated animate__zoomIn wow" data-wow-offset="100">
					<a href="https://steamcommunity.com/groups/BACKSIDEPOVER">
						<img src="img/st.jpg">
						<ul class="main_text-white">
							<li class="margin1">Всё началось именно со steam, эта площадка положила начало нашей “<blok-span>Семьи</blok-span>”.</li>
							<li class="margin2">Нажимай <blok-span>присоединиться!</blok-span></li>
						</ul>
					</a>
				</nav>
				<nav class="animate__animated animate__zoomIn wow" data-wow-offset="100">
					<a href="https://discord.gg/BmxhmZ3">
						<img src="img/ds.jpg">
						<ul class="main_text-white">
							<li class="margin1">Историю тут коротка, чем нас больше становилось тем не удобнее было общаться, и мы решили покорить такую площадку, как <blok-span>Discord</blok-span>. С этого момента мы начали проводить ещё больше времени со всем и к нам приходил всё больше и больше людей. Если ты думаешь, что для тебя не найдётся местечка, то ты ошибаешься!</li>
							<li class="margin2">Нажимай <blok-span>присоединиться!</blok-span></li>
						</ul>
					</a>
				</nav>
			</section>
		</main>

		<footer>
			<ul>
				<li class="text text-footer">Онлайн на нашем сервере в Discord: <span>100</span></li>
				<li class="button">Discord</li>
			</ul>
        </footer>
	</body>
	<script src="js\index.js"></script>	
</html>