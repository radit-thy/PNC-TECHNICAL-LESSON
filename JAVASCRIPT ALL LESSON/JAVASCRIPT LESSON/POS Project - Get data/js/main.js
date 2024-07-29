//CREATE DATA BY ARRAY
let data = [

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
let main_card = document.querySelector('.main_card');
function display_card() {
    let i = 0;
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
        btn.id = i;
        btn.textContent = 'Add to card';
        btn.addEventListener('click', addTocard);

        let img1 = document.createElement('img');
        img1.src = 'img/T_2_front-600x600.jpg';

        card.appendChild(img1);
        card.appendChild(h2);
        card.appendChild(p1);
        card.appendChild(p2);
        card.appendChild(btn);
        main_card.appendChild(card);
        container.appendChild(main_card);

        i++;
        // console.log(btn.target)
    }
}
//ADD ORDER PROUCT
let add_product = document.querySelector('.add_info_product');
let main_box_product = document.querySelector('.main_box_product');
function addTocard(event) {
    let productNotExist = true;

    for (myProduct of main_box_product.children) {
        if (myProduct.children[0].textContent === add_product.children[1].children[0].children[0].textContent){
            productNotExist = false;

            let sumOfQuality= parseInt(myProduct.children[2].children[0].textContent);
            myProduct.children[2].children[0].textContent = sumOfQuality + 1;

            console.log(sumOfQuality)
        }
        // myProduct.children[1].textContent = 
        console.log(myProduct.children[1].textContent);
    }

    if (productNotExist) {
        // Get index from card of product
        let indexOfProduct = event.target.id;
        console.log(event.target.id);

        // Get product from data structure
        let productAddTocard = data[indexOfProduct];

        // Create card to display
        let box_product = document.createElement('div');
        box_product.className = 'add_card';

        let span_product = document.createElement('span');
        span_product.textContent = event.target.parentElement.children[1].textContent;

        // let span_ofPrice = document.createElement('span');
        // span_ofPrice.textContent = 'Price :'

        let p_product = document.createElement('p');
        p_product.textContent = event.target.parentElement.children[3].textContent;

        let span_quality = document.createElement('span');
        span_quality.textContent = 'Quantity:';

        let number_quality = document.createElement('span');
        number_quality.textContent = '1';

        span_quality.appendChild(number_quality);
        box_product.appendChild(span_product);
        box_product.appendChild(p_product);
        box_product.appendChild(span_quality);
        main_box_product.appendChild(box_product);
        add_product.appendChild(main_box_product);

        console.log(p_product.textContent = event.target.parentElement.children[3].textContent)
    }

}
load();
display_card();
