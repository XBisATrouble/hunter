//search_listener
{
	document.querySelector('.search_button_trigger').addEventListener('click', () => {
		document.querySelector('.serach_button_submit').click();
	});
}

//checkbox_function
{
	let trigger_top = document.querySelectorAll('.resume_model_edit_list li');

	for (temp of trigger_top) {
		temp.onclick = (e) => {
			if (e.target.nodeName === "LI" && e.target.children.length != 0) {
				e.target.children[0].click();
			}
		}
	}

	let trigger = document.querySelectorAll('.checkcube');
	for (temp of trigger) {
		temp.onclick = (e) => {
			if (e.target.classList.length == 1) {
				e.target.classList.add('checkcube_checked');

				if (e.path[1].innerText === "教育经历") {
					document.querySelector('.resume_user_edu_info_banner').style.setProperty('display', 'block');
				}

				if (e.path[1].innerText === "工作经历") {
					document.querySelector('.resume_user_company_info_banner').style.setProperty('display', 'block');
				}

				if (e.path[1].innerText === "校内经历") {
					document.querySelector('.resume_user_schoolexp_info_banner').style.setProperty('display', 'block');
				}

				if (e.path[1].innerText === "项目经历") {
					document.querySelector('.resume_user_project_info_banner').style.setProperty('display', 'block');
				}

				if (e.path[1].innerText === "求职意向") {
					document.querySelector('.resume_user_hope_info_banner').style.setProperty('display', 'block');
				}

				if (e.path[1].innerText === "获奖情况") {
					document.querySelector('.resume_user_price_info_banner').style.setProperty('display', 'block');
				}

				if (e.path[1].innerText === "个人技能") {
					document.querySelector('.resume_user_skill_info_banner').style.setProperty('display', 'block');
				}

				if (e.path[1].innerText === "自我评价") {
					document.querySelector('.resume_user_self_info_banner').style.setProperty('display', 'block');
				}

				if (e.path[1].innerText === "论文发表") {
					document.querySelector('.resume_user_essay_info_banner').style.setProperty('display', 'block');
				}

			} else {
				e.target.classList.remove('checkcube_checked');

				if (e.path[1].innerText === "教育经历") {
					document.querySelector('.resume_user_edu_info_banner').style.setProperty('display', 'none');
				}

				if (e.path[1].innerText === "工作经历") {
					document.querySelector('.resume_user_company_info_banner').style.setProperty('display', 'none');
				}

				if (e.path[1].innerText === "校内经历") {
					document.querySelector('.resume_user_schoolexp_info_banner').style.setProperty('display', 'none');
				}

				if (e.path[1].innerText === "项目经历") {
					document.querySelector('.resume_user_project_info_banner').style.setProperty('display', 'none');
				}

				if (e.path[1].innerText === "求职意向") {
					document.querySelector('.resume_user_hope_info_banner').style.setProperty('display', 'none');
				}

				if (e.path[1].innerText === "获奖情况") {
					document.querySelector('.resume_user_price_info_banner').style.setProperty('display', 'none');
				}

				if (e.path[1].innerText === "个人技能") {
					document.querySelector('.resume_user_skill_info_banner').style.setProperty('display', 'none');
				}

				if (e.path[1].innerText === "自我评价") {
					document.querySelector('.resume_user_self_info_banner').style.setProperty('display', 'none');
				}

				if (e.path[1].innerText === "论文发表") {
					document.querySelector('.resume_user_essay_info_banner').style.setProperty('display', 'none');
				}
			}
		}
	}

	let button = document.querySelector('.submit_resume_button_trigger');

	button.onclick = () => {
		document.querySelector('.submit_resume_button').click();
	}
}
//pic_submit_function
{
	let trigger = document.querySelector('.resume_user_pic');

	let submit = document.querySelector('.resume_user_pic_submit');

	trigger.onclick = ()=>{
		submit.click();
	}
}