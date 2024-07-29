
import { Shape } from "../Shape";

class Triangle extends  Shape {
    private rightX: number;
    private topY: number;
    constructor(leftX:number, bottomY:number,rightX:number,topY:number){
       super(leftX, bottomY)
       this.rightX=rightX
       this.topY=topY
    }
}