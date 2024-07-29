class Point {
    x: number;
    y: number;
    constructor(x: number, y: number) {
        this.x = x;
        this.y = y;
    }
    isEqualTo(other: Point): boolean {
        return this.x == other.x && this.y == other.y;
    }
}


let point1 = new Point(40, 30);
let point2 = new Point(40, 30);
console.log(point1.isEqualTo(point2));

