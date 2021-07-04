function theme() {
	const toggleTheme = document.querySelector('.button_DarkTheme')

	let el = document.documentElement 

	toggleTheme.addEventListener('click', () => {
		if(el.hasAttribute('data-theme')) {
			el.removeAttribute('data-theme')
			localStorage.removeItem('theme')
			toggleTheme.innerText = "DarkTheme"
		} else {
			el.setAttribute('data-theme', 'dark')
			localStorage.setItem('theme', 'dark')
			toggleTheme.innerText = "LightTheme"
		}
	})

	if(localStorage.getItem('theme') !== null) {
		el.setAttribute('data-theme', 'dark')
		toggleTheme.innerText = "LightTheme"
	}
}

theme()

/*$('button').on('click', function(){
    $overlay.addClass('visible');
    $mainPopUp.addClass('visible');
    $signIn.addClass('active');
    $register.removeClass('active');
    $formRegister.removeClass('move-left');
    $formSignIn.removeClass('move-left');
});*/

let reg = document.querySelector('.button_input');
let createAccBtn = document.querySelector('.create_account_button');
let loginAccBtn = document.querySelector('.login_account_button');
let closeBtn1 = document.querySelector('.close_but1');
let closeBtn2 = document.querySelector('.close_but2');
let closeForm1 = document.querySelector('#dark_background');

reg.addEventListener('click', () => {
	document.getElementById('login_form').style.display = "flex";
	document.getElementById('dark_background').style.display = "flex";
})

createAccBtn.addEventListener('click', () => {
	document.getElementById('register_form').style.display = "flex";
	document.getElementById('login_form').style.display = "none";
})

loginAccBtn.addEventListener('click', () => {
	document.getElementById('register_form').style.display = "none";
	document.getElementById('login_form').style.display = "flex";
})

closeBtn1.addEventListener('click', () => {	
	document.getElementById('login_form').style.display = 'none';
	document.getElementById('dark_background').style.display = "none";
})

closeBtn2.addEventListener('click', () => {
	document.getElementById('register_form').style.display = 'none';
	document.getElementById('dark_background').style.display = "none";
})

closeForm1.addEventListener('click', function (e) {
	if (!e.target.closest('.obertka')) {
		document.getElementById('login_form').style.display = 'none';
		document.getElementById('dark_background').style.display = "none";
		document.getElementById('register_form').style.display = 'none';
	}
	
});

/* closeForm1.addEventListener('click', function (e) {

if (!e.target.closest('register_form')) {
	document.getElementById('register_form').style.display = 'none';
	document.getElementById('dark_background').style.display = "none";
}

}); */