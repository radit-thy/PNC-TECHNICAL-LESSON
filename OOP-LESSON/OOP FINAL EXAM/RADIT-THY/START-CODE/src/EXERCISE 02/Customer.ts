
export class Customer{
    private name: string;
    private ID:number;
    private listOfOrders:number;
    
    constructor(name:string, ID:number, listOfOrders:number){
        this.name = name;
        this.ID = ID;
        this.listOfOrders = listOfOrders;
    }
}      