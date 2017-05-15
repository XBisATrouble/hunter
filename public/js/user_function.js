(function search_listener() {
	document.querySelector('.search_button_trigger').addEventListener('click', () => {
		document.querySelector('.serach_button_submit').click();
	});
})();

(function check_box_function() {

	var trigger = document.querySelectorAll('.checkcube');
	for (temp of trigger) {
		temp.onclick = (e) => {
			if (e.target.classList.length == 1) {
				e.target.classList.add('checkcube_checked');
			} else {
				e.target.classList.remove('checkcube_checked');
			}
		};
	}
})();