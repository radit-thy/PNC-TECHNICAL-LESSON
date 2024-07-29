
class drinks {
    private name:string;
    protected price:number;
    constructor(name:string, price:number) {
        this.name= name;
        this.price = price;
        
    }
}

class coffee extends drinks {
    private sugar:number;
    constructor(name:string, price:number,sugar:number) {
        super(name, price);
        this.sugar = sugar;
        
    }
}

class oranges extends drinks {
    private orange: number;
    constructor(name:string, price:number,orange:number) {
        super(name, price);
        this.orange = orange;
        
    }
}