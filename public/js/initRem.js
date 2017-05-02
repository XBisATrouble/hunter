window.addEventListener("resize", initViewport);
window.addEventListener("load", initViewport);

function initViewport() {
	var main_banner = document.querySelector('.main_banner'),
		main_l_tan = document.querySelector('.main_l_tan'),
		main_r_tan = document.querySelector('.main_r_tan'),
		main_user_input_banner = document.querySelector('.main_user_input_banner');


	if (window.innerWidth >= 800) {
		main_banner.style.setProperty('height', window.innerHeight + "px");
		main_banner.style.setProperty('width', window.innerWidth + "px");
	}
	if (window.innerWidth < 800) {
		main_r_tan.style.setProperty('opacity', '0');
		main_l_tan.style.setProperty('opacity', '0');
	}
	if (window.innerHeight >= 800) {
		main_r_tan.style.setProperty('border-width', '0 0 ' + 0.5 * window.innerHeight + 'px' + ' 100px');
		main_l_tan.style.setProperty('border-width', 0.5 * window.innerHeight + 'px' + ' 100px 0 0');
	} else {
		main_r_tan.style.setProperty('opacity', '0');
		main_l_tan.style.setProperty('opacity', '0');
	}
};