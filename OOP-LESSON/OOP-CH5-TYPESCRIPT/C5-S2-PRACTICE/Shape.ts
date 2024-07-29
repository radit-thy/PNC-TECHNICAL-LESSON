
export abstract class Shape {
    protected leftX: number;
    protected bottomY: number;
    constructor(leftX:number, bottomY:number) {
        this.leftX = leftX;
        this.bottomY = bottomY;
        
    }
    abstract getWidth():number;
    abstract getHeight():number;
    abstract getArea():number;

}


