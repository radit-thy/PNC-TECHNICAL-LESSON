

//===================Delete row====================

let btn = document.querySelectorAll('.btn-danger');

for (let button of btn) {
    button.addEventListener('click', (event) => {
        event.target.parentElement.parentElement.remove()
    });
}

console.log(btn)