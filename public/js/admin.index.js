{
	let list = document.querySelector('.main_compnay_left_nav');

	let resume_modeul = document.querySelector(".resumes_modeul");
	let jobs_modeul = document.querySelector(".jobs_modeul");
	// let interviews_modeul = document.querySelector(".interviews_modeul");

	list.addEventListener('click', (e) => {
		if (e.target.className === "all_trigger") {
			resume_modeul.style.setProperty('display', 'block');
			jobs_modeul.style.setProperty('display', 'block');
			// interviews_modeul.style.setProperty('display', 'block');
		}
		if (e.target.className === "resumes_trigger") {
			resume_modeul.style.setProperty('display', 'block');
			jobs_modeul.style.setProperty('display', 'none');
			// interviews_modeul.style.setProperty('display','none');
		}
		if (e.target.className === "jobs_trigger") {
			jobs_modeul.style.setProperty('display', 'block');
			resume_modeul.style.setProperty('display', 'none');
		}
		if (e.target.className === "interviews_trigger") {
			//interviews_modeul.style.setProperty('display','block');
			resume_modeul.style.setProperty('display', 'none');
			jobs_modeul.style.setProperty('display', 'none');
		}
	})
}