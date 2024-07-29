//CREATE DATA BY ARRAY
let data = [
    { img: 'img/T_2_front-600x600.jpg', name: 'HTML', nb_stock: 1, price: '20$' },
    { name: 'CSS', nb_stock: 2, price: '200$' },
    { name: 'JAVASCRIPT', nb_stock: 3, price: '2000$' },
    { name: 'DATABASE', nb_stock: 4, price: '20000$' },
]

//FUNCTION SAVE DATA IN LOCALSTORAGE
function saveProduct() {
    localStorage.setItem("data", JSON.stringify(data));
}
// saveProduct()
//FUNCTION GET DATA FROM LOCALSTORAGE
function load() {
    data = JSON.parse(localStorage.getItem("data"));
}

//FUNCTION DISPLAY CARD OF PRODUCT
let container = document.querySelector('.container');
let main_card = document.querySelector('.main_card')
function display_card() {
    for (display of data) {
        let card = document.createElement('div');
        card.className = 'card';
        let h2 = document.createElement('h2');
        h2.textContent = display.name;
        let p1 = document.createElement('p');
        p1.textContent = 'name in stock: ' + display.nb_stock;
        let p2 = document.createElement('p');
        p2.textContent = 'price: ' + display.price;

        let btn = document.createElement('button');
        btn.textContent = 'Add to card'
        btn.addEventListener('click', addTocard)

        let img1 = document.createElement('img');
        img1.src = 'img/T_2_front-600x600.jpg'

        card.appendChild(img1);
        card.appendChild(h2);
        card.appendChild(p1);
        card.appendChild(p2);
        card.appendChild(btn)
        main_card.appendChild(card)
        container.appendChild(main_card);
    }
}
//ADD ORDER PROUCT
let add_product = document.querySelector('.add_info_product');
let main_box_product = document.querySelector('.main_box_product');
function addTocard(event) {
// ___________________________________________________
    // console.log(event.target.parentElement)
    let isProductNotExist = true;
    for (myProduct of main_box_product.children) {
        if (myProduct.children[0].textContent === add_product.children[1].children[0].children[0].textContent){
            isProductNotExist = false

            
            myProduct.children[2].textContent  = 

            console.log(myProduct.children[0].textContent)
            // console.log(add_product.children[1].children[0].children[0].textContent)
        }
        
    }
// _____________________________________________________

    if (isProductNotExist) {
        let box_product = document.createElement('div');
        box_product.className = 'add_card';

        let span_product = document.createElement('span');
        span_product.textContent = event.target.parentElement.children[1].textContent;
        let p_product = document.createElement('p');
        p_product.textContent = event.target.parentElement.children[3].textContent;

        let span_quality = document.createElement('span');
        span_quality.textContent = 'Quality:'

        let number_quality = document.createElement('span');
        number_quality.textContent = '1'
        span_quality.appendChild(number_quality)
        box_product.appendChild(span_product);
        box_product.appendChild(p_product);
        box_product.appendChild(span_quality)
        main_box_product.appendChild(box_product);
        add_product.appendChild(main_box_product);
        


        // console.log(add_product.children[1].children[0].children[0].textContent)
        // console.log(event.target.parentElement)
    }

}
load();
display_card();
