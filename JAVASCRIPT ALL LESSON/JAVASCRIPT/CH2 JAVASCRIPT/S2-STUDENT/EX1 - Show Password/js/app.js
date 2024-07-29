function viewPassword() {
    let passwords = document.querySelectorAll('.pwd');
    for (let password of passwords) {
        // TODO 
        // Use password.type to change the visible and invisible password
        if (password.type === "password"){
            password.type = "text"
        }else{
            password.type = "password"
        }
    }
}

let view = document.querySelector('#view_pwd');
view.addEventListener('click', viewPassword);

