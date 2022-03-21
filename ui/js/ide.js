let editor;

function setTheme(){
    sessionStorage.getItem('theme') && toggleTheme()
}
setTheme()

window.onload = function() {
    editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/python");
}

// function changeLanguage() {

//     let language = $("#languages").val();

//     if(language == 'c' || language == 'cpp')editor.session.setMode("ace/mode/c_cpp");
//     else if(language == 'php')editor.session.setMode("ace/mode/php");
//     else if(language == 'python')editor.session.setMode("ace/mode/python");
//     else if(language == 'node')editor.session.setMode("ace/mode/javascript");
// }

function executeCode() {

    $.ajax({

        url: "/online-ide/app/compiler.php",

        method: "POST",

        data: {
            language: 'python',
            code: editor.getSession().getValue()
        },

        success: function(response) {
            if (response.toLowerCase().includes('error')){
                $(".output").text("Синтаксистик қате!");
                return;    
            }
            $(".output").text(response)
        }
    })
}

let burgerMenu = document.querySelector('.burgerMenu');
let secondaryMenu = document.querySelector('.secondaryMenu')
burgerMenu.addEventListener('click', () => {
    secondaryMenu.classList.toggle('contentHeight')
})

function openPage(page){
    location.assign(document.location.origin + document.location.pathname + `?page=${page}`)
}
function openSubPage(page){
    let hrefStr = document.location.href
    let hrefStr2 = (hrefStr.indexOf('&') == -1) ? hrefStr : hrefStr.slice(0, hrefStr.indexOf('&'))
    location.assign(hrefStr2 + `&subpage=${page}`)
}
function toggleTheme(){
    if(document.documentElement.hasAttribute("theme")){
        document.documentElement.removeAttribute("theme");
        sessionStorage.removeItem('theme')
        document.getElementById('moon').classList.toggle('hide');
        document.getElementById('sun').classList.toggle('hide');
    }
    else{
        document.documentElement.setAttribute("theme", "dark");
        sessionStorage.setItem('theme', 'dark')
        document.getElementById('moon').classList.toggle('hide');
        document.getElementById('sun').classList.toggle('hide');
    }
}

