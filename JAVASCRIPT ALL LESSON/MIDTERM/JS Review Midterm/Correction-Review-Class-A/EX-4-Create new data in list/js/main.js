let button = document.getElementById('create');
let ul = document.querySelector('ul');

function create(event){
    console.log(event.target.previousSibling.previousSibling.value);

    let li = document.createElement('li');
    let nameFruit = event.target.previousSibling.previousSibling;
    if (nameFruit.value === '') {
        alert ('Please Enter Fruit Name')
        return false;
    }
    li.textContent = nameFruit.value;

    ul.appendChild(li);
    nameFruit.value = ''
}
button.addEventListener('click',create)