import { Customer } from "./Customer";
import { MenuItem } from "./MenuItem";

export class Order{
    private orderItem: string;
    private totalPrice:number;
    customer:Customer[] = [];
    menuItem:MenuItem[] = [];


    constructor(orderItem: string, totalPrice:number, customer:Customer[] = [], menuItem:MenuItem[] = []){
        this.orderItem = orderItem;
        this.totalPrice = totalPrice;
        this.customer = customer;
        this.menuItem = menuItem;
    }
}