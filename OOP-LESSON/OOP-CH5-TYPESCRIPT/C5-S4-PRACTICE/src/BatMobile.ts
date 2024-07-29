import { Vehicle } from "./Vehicle";

class BatMobile extends Vehicle{
    getSpeed(): number {
        throw new Error("Method not implemented.");
    }
    isBatmanHere:boolean;
    constructor(plateID:string, weight:number) {
        super(plateID, weight);
        this.isBatmanHere = true;
 
    }

}