let button = document.getElementById('create');
let ul = document.querySelector('ul');
let cardName = document.querySelector('#cardName')
function create(event){

    let li = document.createElement('li');
    let btn = document.createElement('button');
    btn.setAttribute('class','show');
    btn.textContent = 'show'
    let nameFruit = event.target.previousSibling.previousSibling;
    if (nameFruit.value === '') {
        alert ('Please Enter Fruit Name')
        return false;
    }
    li.textContent = nameFruit.value;

    li.appendChild(btn)
    ul.appendChild(li);
    nameFruit.value = ''

    let shows = document.querySelectorAll('.show');
    for (const show of shows) {
        show.addEventListener('click',function show(event){
            console.log(event.target.previousSibling.textContent);
            console.log(cardName.textContent = event.target.previousSibling.textContent);
        })
    }
}
button.addEventListener('click',create)
