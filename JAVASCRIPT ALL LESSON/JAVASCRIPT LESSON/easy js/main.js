// let products = [
//     {product : 'Book', stock : 100, price : '5$'},
//     {product : 'pen', stock : 2000, price : '3$'},
//     {product : 'Computer', stock : 1000, price : '400$'},
//     {product : 'IPhone 15pro', stock : 100, price : '2000$'},
//     {product : 'Mouse pad', stock : 100, price : '1$'},
//     {product : 'Keyborad', stock : 100, price : '12$'},
//     {product : 'Keyborad Light', stock : 100, price : '20$'},
// ]
let number = 0;
let calculator = '';
let store;
let quantity;
let total;
let priceP;
let col = document.querySelector('.col')
function saveProduct() {
    localStorage.setItem('products', JSON.stringify(products));
}
function loadData() {
    return JSON.parse(localStorage.getItem('products'));
}
// saveProduct()
loadData()

function createCard(element) {
    let card = document.createElement('div');
    card.className = 'card p-3 mt-3 product border-danger border-2'
    let h3 = document.createElement('h3');
    h3.textContent = element.product;
    let pOne = document.createElement('p');
    pOne.textContent = 'Number in Stock: ' + element.stock;
    let pTwo = document.createElement('p');
    pTwo.textContent = 'Price : ' + element.price;

    let btn = document.createElement('button');
    btn.textContent = 'Add to card';
    btn.className = 'bg-info';
    btn.addEventListener('click', booking)
    card.appendChild(h3)
    card.appendChild(pOne)
    card.appendChild(pTwo)
    card.appendChild(btn)
    col.appendChild(card)
}
function displayCard() {
    products = loadData()
    for (let product of products) {
        createCard(product)
    }
}
displayCard()
function booking(event) {
    number = 0
    let data = event.target.closest('.card');
    event.target.removeEventListener('click', booking)
    event.target.addEventListener('click', clickToAdd)
    let card_result = document.createElement('div');
    card_result.className = 'card p-3 mt-3 flex-row justify-content-between border-danger border-2 select'
    let h5 = document.createElement('h5');
    h5.style.width = '150px'
    h5.textContent = data.firstElementChild.textContent;
    let price = document.createElement('p');
    price.textContent = data.children[2].textContent;
    price.className = 'price'





    let i_decre = document.createElement('i');
    i_decre.className = 'bi bi-file-minus-fill fs-4 lh-1 minus-icon';
    i_decre.addEventListener('click', decreProduct)
    let result = document.createElement('p');
    result.textContent = '0'
    result.className = 'number'
    let i_incre = document.createElement('i');
    i_incre.className = "bi bi-file-plus-fill fs-4 lh-1 plus-icon";
    i_incre.addEventListener('click', increProduct)
    let total = document.createElement('p');
    total.textContent = 'total : 0.00$';
    total.className = 'total'
    let image = document.createElement('img');
    image.src = 'delete.png';
    image.style.width = '25px'
    image.style.height = '25px'
    image.addEventListener('click', function () {
        if (confirm('Are you sure to remove order?')) {
            image.parentElement.remove()
            for (let card of listCard){
                card.addEventListener('click', booking)
            }
            number = 0;
            res = 0
        }
    })
    card_result.appendChild(h5)
    card_result.appendChild(price)
    card_result.appendChild(i_decre)
    card_result.appendChild(result)
    card_result.appendChild(i_incre)
    card_result.appendChild(total)
    card_result.appendChild(image)
    right_info.appendChild(card_result)
}
let right_info = document.querySelector('.showInfo');
function clickToAdd(event){
    let cardResult = document.querySelectorAll('.select')
    let EX = event.target.parentElement;
    console.log(cardResult)
    console.log(EX)
}
function increProduct(event) {
    store = event.target.parentElement;
    quantity = store.children[3];
    total = store.children[5]
    priceP = store.children[1].textContent
    number += 1
    quantity.textContent =  number;
    total.textContent = 'Total : ' + totalMoney(priceP, number) + '$'
}
function decreProduct(event) {
    store = event.target.parentElement;
    quantity = store.children[3];
    total = store.children[5];
    priceP = store.children[1].textContent
    if (quantity.textContent > 0){
        number -= 1
        quantity.textContent =  number;
    }
    total.textContent = 'Total : ' + totalMoney(priceP, number) + '$'
}
function totalMoney(price, number) {
    let isRun = false;
    let res = ''
    for (let i = 0; i < price.length; i++) {
        if (price[i] === ':') {
            isRun = true;
        } else if (isRun && price[i] !== '$') {
            res += price[i]
        }
    }
    return parseInt(res) * number
}