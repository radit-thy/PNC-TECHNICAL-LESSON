
import { Shape } from "../Shape";

class Circle extends Shape {
    private reduis: number;
    constructor(reduis: number, leftX:number, bottomY:number){
        super(leftX, bottomY);
        this.reduis = reduis;
    }
}