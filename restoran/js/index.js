function setTheme(themeName) {
    localStorage.setItem('theme', themeName);
    document.documentElement.className = themeName;
}

function toggleTheme() {
    if (localStorage.getItem('theme') === 'theme-dark') {
        setTheme('theme-light');
    } else {
        setTheme('theme-dark');
    }
}

(function () {
    if (localStorage.getItem('theme') === 'theme-dark') {
        setTheme('theme-dark');
        document.getElementById('slider').checked = false;
    } else {
        setTheme('theme-light');
      document.getElementById('slider').checked = true;
    }
})();


let reg = document.querySelector('.button_input');
let createAccBtn = document.querySelector('.create_account_button');
let loginAccBtn = document.querySelector('.login_account_button');
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

closeForm1.addEventListener('click', function (e) {
	if (!e.target.closest('.qwerty')) {
		document.getElementById('login_form').style.display = 'none';
		document.getElementById('dark_background').style.display = "none";
		document.getElementById('register_form').style.display = 'none';
	}
});

$('.carousel').carousel({
    interval: 6000
});
