
abstract class Shape {
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


class  Square  extends Shape {
    private size: number;
    constructor(leftX:number, bottomY:number, size:number){
        super(leftX, bottomY);
        this.size=size;

    } 
    getWidth(): number {
        return this.size;
    }
    getHeight(): number {
        return this.size;
    }
    getArea(): number {
        return this.size;
    }


}


class Circle extends Shape {
    private reduis: number;
    constructor(reduis: number, leftX:number, bottomY:number){
        super(leftX, bottomY);
        this.reduis = reduis;
    }
    getWidth(): number {
        return this.reduis;
    }
    getHeight(): number {
        return this.reduis;
    }
    getArea(): number {
        return this.reduis;
    }

}

class Triangle extends  Shape {
    private rightX: number;
    private topY: number;
    constructor(leftX:number, bottomY:number,rightX:number,topY:number){
       super(leftX, bottomY)
       this.rightX=rightX
       this.topY=topY
    }
    getWidth(): number {
        return this.rightX;
    }
    getHeight(): number {
        return this.rightX;
    }
    getArea(): number {
        return this.rightX;
    }
}
class Rectangle extends  Shape {
    private rightX: number;
    private topY: number;
    constructor(leftX:number, bottomY:number,rightX:number,topY:number){
       super(leftX, bottomY)
       this.rightX=rightX
       this.topY=topY
    }
    getWidth(): number {
        return this.rightX;
    }
    getHeight(): number {
        return this.rightX;
    }
    getArea(): number {
        return this.rightX;
    }
}