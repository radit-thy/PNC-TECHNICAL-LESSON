class Store {
    name: string;
    products: Product[] = [];
    customers: Customer[] = [];
    constructor(name: string) {
        this.name = name;
    }

    addProduct(product: Product) {
        this.products.push(product);
    }

    addCustomer(customer: Customer) {
        this.customers.push(customer);
    }

    getProductLessThan(price: number): Product[] {
        return this.products.filter(product => product.price < price);
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

// Example usage

let myStore = new Store("Radit store");

let product1 = new Product("Rose", 10);
let product2 = new Product("Lavender", 40);
myStore.addProduct(product1);
myStore.addProduct(product2);

let productsLessThanTwenty = myStore.getProductLessThan(20);
console.log(productsLessThanTwenty); // This will log products with prices less than 20

let myProduct = new Product("Radit", 20);
let feedback1 = new Feedback("Radit looks very nice", 1);
let feedback2 = new Feedback("Yes, very good", 2);
myProduct.addFeedback(feedback1);
myProduct.addFeedback(feedback2);
console.log(myProduct);

let customer1 = new Customer("Radit", "Thy");
let customer2 = new Customer("Rada", "Thy");
myStore.addCustomer(customer1);
myStore.addCustomer(customer2);
console.log(myStore);
