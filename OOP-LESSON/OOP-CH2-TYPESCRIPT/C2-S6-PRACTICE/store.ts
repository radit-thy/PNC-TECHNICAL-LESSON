
class Store {
    name: string;
    Products: Product[] = [];
    customers: Customer[] = [];
    constructor(name: string) {
        this.name = name;

    }
    //add product funtion
    addProduct(product: Product) {
        this.Products.push(product);
    }
    //add customer to the  store function
    addCustomer(customer: Customer) {
        this.customers.push(customer);
    }
    //get product less than given price
    getProductLessThan(price: number) {
        let PriceOfProduct: Product[] = [];
        for (let values of this.Products) {
            if (values.price < price) {
                PriceOfProduct.push(values);
            }
        }
        return PriceOfProduct;
    }
    //get all feedback of any product
    getFeedbackContaining(){
        for(let products of this.Products){
            for(let comments of products.feedbacks){
                console.log(comments.comment);
                
                
            }
        }

    }
    
}

class Product {
    name: string;
    price: number;
    feedbacks: Feedback[] = [];
    constructor(name: string, price: number) {
        this.name = name;
        this.price = price;

    }
    //add feedback to the product
    addFeedback(feedback: Feedback) {
        this.feedbacks.push(feedback);
    }

}

class Customer {
    firstname: string;
    lastname: string;
    constructor(firstname: string, lastname: string) {
        this.firstname = firstname;
        this.lastname = lastname;

    }
}

class Feedback {
    comment: string;
    evaluation: number;
    constructor(comment: string, evaluation: number) {
        this.comment = comment;
        this.evaluation = evaluation;

    }
}

//add product to the store
let myStore = new Store("Radit store");
let product1 = new Product("Rose", 10);
let product2 = new Product("Lavendar", 40);
myStore.addProduct(product1);
myStore.addProduct(product2);
// console.log(myStore);


//add feedback to the prodct
let myProduct = new Product("Radit", 20);
let feedback1= new Feedback("Yes every good", 10);
myProduct.addFeedback(feedback1);
// console.log(myProduct);


//add customer to the store
let customer1 = new Customer("Radit", "Thy");
let customer2 = new Customer("Rada", "Thy");
myStore.addCustomer(customer1);
myStore.addCustomer(customer2);
// console.log(myStore);
myStore.getFeedbackContaining();




