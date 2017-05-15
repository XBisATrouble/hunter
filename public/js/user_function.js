(function search_listener() {
	document.querySelector('.search_button_trigger').addEventListener('click', () => {
		document.querySelector('.serach_button_submit').click();
	});
})();

(function check_box_function() {
	var trigger = document.querySelector('.checkcube');

	trigger.addEventListener('click', (e) => {
		if (e.target.className = "checkcube") {
			e.target.className = "checkcube checkcube_checked";
		}else{
			e.target.className = "checkcube";
		}
	});
})();