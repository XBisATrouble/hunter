(function click_function() {
	var main_banner = document.querySelector('.main_banner'),
		main_l_page = document.querySelector('.main_l_page'),
		main_r_page = document.querySelector('.main_r_page'),
		user = document.querySelector('.user'),
		company = document.querySelector('.company'),
		user_input = document.querySelectorAll('.user_input'),
		company_input = document.querySelectorAll('.company_input'),
		main_user_input_banner = document.querySelector('.main_user_input_banner'),
		main_company_input_banner = document.querySelector('.main_company_input_banner'),
		user_button_banner = document.querySelector('.user_button_banner'),
		company_button_banner = document.querySelector('.company_button_banner');

	main_l_page.addEventListener('click', (e) => {
		if (e.target.className === "main_l_page main_page" || e.target.className === "company" || e.target.className === "main_l_tan main_tan") {

			company.style.setProperty('opacity', '1');
			user.style.setProperty('opacity', '0');
			user.style.setProperty('z-index', '-1');
			company.style.setProperty('z-index', '0');

			main_l_page.style.setProperty('width', '30%');
			main_r_page.style.setProperty('width', '70%');

			for (var i = 0; i < user_input.length; i++) {
				user_input[i].style.setProperty('opacity', '0');
				user_input[i].style.setProperty('right', '100%');
			}
			for (var i = 0; i < company_input.length; i++) {
				company_input[i].style.setProperty('opacity', '1');
				company_input[i].style.setProperty('right', '0');
			}

			user_button_banner.style.setProperty('opacity', '0');
			user_button_banner.style.setProperty('right', '125%');
			company_button_banner.style.setProperty('opacity', '1');
			company_button_banner.style.setProperty('right', '0');
		}
	});

	main_r_page.addEventListener('click', (e) => {
		if (e.target.className === "main_r_page main_page" || e.target.className === "user" || e.target.className === "main_r_tan main_tan") {

			company.style.setProperty('opacity', '0');
			user.style.setProperty('opacity', '1');
			user.style.setProperty('z-index', '0');
			company.style.setProperty('z-index', '-1');

			main_l_page.style.setProperty('width', '70%');
			main_r_page.style.setProperty('width', '30%');

			for (var i = 0; i < user_input.length; i++) {
				user_input[i].style.setProperty('opacity', '1');
				user_input[i].style.setProperty('right', '0');
			}
			for (var i = 0; i < company_input.length; i++) {
				company_input[i].style.setProperty('opacity', '0');
				company_input[i].style.setProperty('right', '-100%');
			}

			user_button_banner.style.setProperty('opacity', '1');
			user_button_banner.style.setProperty('right', '0');
			company_button_banner.style.setProperty('opacity', '0');
			company_button_banner.style.setProperty('right', '-125%');

		}
	});

	user_button_banner.addEventListener('click' , (e)=>{
		if (e.target.className === "user_input_submit_button input_button login user_button" || e.target.className === "user_input_submit_button input_button signin user_button reg") {
			document.querySelector('.user_submit').click();
		}
	});

	company_button_banner.addEventListener('click', (e)=>{
		if (e.target.className ==="company_input_submit_button input_button login company_button" || e.target.className === "company_input_submit_button input_button signin company_button reg") {
			document.querySelector('.company_submit').click();
		}
	});
}());