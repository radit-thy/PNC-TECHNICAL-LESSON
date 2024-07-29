import { MenuItem } from "./MenuItem";
import { Order } from "./Order";
import { Customer } from "./Customer";

export class Restaurant{
    private menu: MenuItem[];
    private orders: Order[];

    constructor(menu: MenuItem[], orders: Order[]){
        this.menu = menu;
        this.orders = orders;


    }

    //add Item
    addItem(item: MenuItem): void{
        this.menu.push(item);
    }

    //order 
    placeOrder(customer: Customer, items: MenuItem[]): void{
        // this.orders.push(new Order(customer, items));
        
    }

    //get order by customer
    getOrdersByCustomer(customer: Customer): Order[]{
        return this.orders;
    }
 

}