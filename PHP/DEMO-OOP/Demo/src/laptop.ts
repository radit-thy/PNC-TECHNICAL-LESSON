import { Computer } from "./computer";
export class Laptop extends Computer{
    constructor(name: string,color: string,price: number,private model: string,private screen: string){
        super(name,color,price);
        this.model=model
        this.screen=screen
    }
    getPrice(): number {
        return this.price
    }
}