(function() {
	var trigger_button = document.querySelector('div.delete_button');
	console.log(trigger_button);
	trigger_button.addEventListener('click', () => {
		document.querySelector('.delete_function_button').click();
	})
})();