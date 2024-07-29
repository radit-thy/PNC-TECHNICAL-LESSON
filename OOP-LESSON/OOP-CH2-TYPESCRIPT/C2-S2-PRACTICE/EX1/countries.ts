class Country {
    name:string;
    population: number;
    capital: string;
    currency: string;
    
    constructor(name:string, population:number, capital:string, currency:string){
        this.name = name;
        this.population =  population;
        this.capital= capital;
        this.currency = currency;
    }
    getInformation():string{
        return `welcome to, ${this.name}, ${this.population}, ${this.capital}, ${this.currency}`
    
    }

}
let Cambodia = new Country("Cambodia",2000000, "Phnom Penh","Riel");
// let France = new Country("French",4000000, "Paris","Bart");
// let Thai = new Country("Thai",10000000, "Bangkok","Dollar");h

console.log(Cambodia.getInformation());


