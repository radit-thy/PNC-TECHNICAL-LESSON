
import { Shape } from "../Shape";

class  Square  extends Shape {
    size: number;
    constructor(leftX:number, bottomY:number, size:number){
        super(leftX, bottomY);
        this.size=size;
    }   
}