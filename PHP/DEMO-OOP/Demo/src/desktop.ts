import { Computer } from "./computer";
export class Desktop extends Computer{
    constructor(name: string,color: string,price: number,private model: string){
        super(name,color,price);
        this.model=model
    }
    getPrice(): number {
        return this.price
    }
}