import { Computer } from "./computer"
class Shop {
    private item :Computer[];
    constructor(private name:string) {
        this.name = name;
        
        
    }
    public addComputer(computer:Computer){
        this.item.push(computer);
    }

}

const shop1 = new Shop("shop1");
console.log(JSON.stringify(shop1));
