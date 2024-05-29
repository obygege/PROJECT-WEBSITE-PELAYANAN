const loginbox = document.getElementById('loginform');
const registerbox = document.getElementById('regiterform');
const password = document.querySelector('.password')
const show = document.getElementById('show')
const hide = document.getElementById('hide')

function regis(){
    loginbox.style.right = "-300px";
    registerbox.style.left = "15%";
}
function login(){
    loginbox.style.right = "15%";
    registerbox.style.left = "-300px";
}

function showhide(){
    if(password.type === 'password'){
        password.type = 'text';
        show.style.opacity = '0'
        hide.style.opacity = '1'
    }else{
        password.type = 'password';
        show.style.opacity = '1'
        hide.style.opacity = '0'
    }
}



