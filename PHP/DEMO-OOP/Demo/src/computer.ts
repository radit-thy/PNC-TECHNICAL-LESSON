export abstract class Computer{
    constructor(protected name:string,protected color:string,protected price:number){
        this.name = name;
        this.color = color;
        this.price = price;
    }
    abstract getPrice():number;
}