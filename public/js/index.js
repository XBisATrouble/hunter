var job_level_1 = document.querySelector('.job_level_1'),
    job_level_2 = document.querySelector('.job_level_2'),
    job_level_3 = document.querySelector('.job_level_3');

function demo() {
    console.log($('.job_province option:selected').text());
}


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


    xml.open('GET', '/api/jobSection/'+$('.job_level_2 option:selected').val(), true);
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