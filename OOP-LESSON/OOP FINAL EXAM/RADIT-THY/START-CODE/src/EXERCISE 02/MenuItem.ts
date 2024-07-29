import { Customer } from "./Customer";

export class MenuItem{
    private name:string;
    private price:number;
    private description:string;

    constructor(name:string, price:number, description:string){
        this.name = name;
        this.price = price;
        this.description = description;
    }
}