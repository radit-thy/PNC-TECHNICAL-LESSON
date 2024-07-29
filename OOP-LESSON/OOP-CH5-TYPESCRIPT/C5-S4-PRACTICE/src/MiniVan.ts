import { Vehicle } from "./Vehicle";

class MiniVan extends Vehicle{
    isBatmanHere: boolean;
    getSpeed(): number {
        throw new Error("Method not implemented.");
    }
    numberCustomers: number;
    numberLuggage: number;

    constructor(plateID:string, weight:number) {
        super(plateID, weight);
        this.isBatmanHere = true;
 
    }
}