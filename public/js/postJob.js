var job_level_1 = document.querySelector('.job_level_1'),
    job_level_2 = document.querySelector('.job_level_2'),
    job_level_3 = document.querySelector('.job_level_3'),
    post_job_button = document.querySelector('.post_job_button');

// function demo() {
//     console.log($('.job_province option:selected').text());
// }


function getJobType1() {
    var xml = new XMLHttpRequest(),
        resData = "",
        resJson = "";
    job_level_1 = document.querySelector('.job_level_1');

    xml.open('GET', '/api/jobType', true);
    xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xml.send(null);

    xml.onreadystatechange = function() {
        if (xml.readyState === 4 && xml.status === 200) {
            resJson = JSON.parse(xml.responseText);
            for (var i = 0; i < resJson.length; i++) {
                resData = resData + "<option value='" + resJson[i].id + "'>" + resJson[i].name + "</option>";
            }
            job_level_1.innerHTML = job_level_1.innerHTML + resData;
            job_level_1.addEventListener("change", getJobType2);
        }
    }
};

function getJobType2() {
    var xml = new XMLHttpRequest(),
        resData = "",
        resJson = "",
        job_level_2 = document.querySelector('.job_level_2'),
        job_level_3 = document.querySelector('.job_level_3');
    job_level_2.innerHTML = "<option selected='selected'>职能分类</option>";

    xml.open('GET', '/api/jobType/' + $('.job_level_1 option:selected').val(), true);
    xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xml.send(null);

    xml.onreadystatechange = function() {
        if (xml.readyState === 4 && xml.status === 200) {
            resJson = JSON.parse(xml.responseText);
            for (var i = 0; i < resJson.length; i++) {
                resData = resData + "<option value='" + resJson[i].id + "'>" + resJson[i].name + "</option>";
            }
            job_level_2.innerHTML = job_level_2.innerHTML + resData;
            job_level_2.addEventListener("change", getJobType3);
        }
    }
}

function getJobType3() {
    var xml = new XMLHttpRequest(),
        resData = "",
        resJson = "",
        job_level_3 = document.querySelector('.job_level_3');
    job_level_3.innerHTML = "<option selected='selected'>具体工作</option>";


    xml.open('GET', '/api/jobSection/' + $('.job_level_2 option:selected').val(), true);
    xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xml.send(null);

    xml.onreadystatechange = function() {
        if (xml.readyState === 4 && xml.status === 200) {
            resJson = JSON.parse(xml.responseText);
            for (var i = 0; i < resJson.length; i++) {
                resData = resData + "<option value='" + resJson[i].id + "'>" + resJson[i].name + "</option>";
            }
            job_level_3.innerHTML = job_level_3.innerHTML + resData;
        }
    }
}

window.addEventListener("load", getJobType1);

post_job_button.addEventListener('click', () => {

    var job_input_list = document.querySelectorAll('.job_input'),
        job_select_list = document.querySelectorAll('.job_select');

    var input_flag = false,
        select_flag = false;

    for (var input of job_input_list) {
        if (input.value === "") {
            input.style.setProperty('border', '1px solid rgba(255,0,72,1)');
            input.style.setProperty('box-shadow', '0 0 1px 1px rgba(255,0,72,.2)');
            input_flag = false;
        } else if (input.value !== "") {
            input.style.setProperty('border', '');
            input.style.setProperty('box-shadow', '');
            input_flag = true;
        }
    }
    for (var select of job_select_list) {
        if (select.value === "选择省份" 
            || select.value === "选择城市" 
            || select.value === "职能大类" 
            || select.value === "职能分类" 
            || select.value === "具体工作" 
            || select.value === "工作经验要求" 
            || select.value === "学历要求") {

            select.style.setProperty('border', '1px solid rgba(255,0,72,1)');
            select.style.setProperty('box-shadow', '0 0 1px 1px rgba(255,0,72,.2)');
            select_flag = false;
        }
        else if (select.value !== "选择省份" 
            || select.value !== "选择城市" 
            || select.value !== "职能大类" 
            || select.value !== "职能分类" 
            || select.value !== "具体工作" 
            || select.value !== "工作经验要求" 
            || select.value !== "学历要求") {

            select.style.setProperty('border', '');
            select.style.setProperty('box-shadow', '');
            select_flag = true;
        }
    }

    if (select_flag === true && input_flag === true) {
        document.querySelector('.post_job_submit_button').click();
    }
    
});