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
let closeBtn = document.querySelectorAll('.close_but');

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

closeBtn.addEventListener('click', () => {
	
	if(document.getElementById('login_form').style.display == 'flex'){
	document.getElementById('login_form').style.display = 'none';
	document.getElementById('dark_background').style.display = "none";

	}
	else if (document.getElementById('register_form').style.display == 'flex'){ 
		document.getElementById('register_form').style.display = 'none';
		document.getElementById('dark_background').style.display = "none";
	}
	else{
		console.log(1);
		return 0;
	}
})
