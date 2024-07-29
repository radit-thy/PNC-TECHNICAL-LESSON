export class Point {
  private x: number;
  private y: number;

  constructor(x: number, y: number) {
    this.x = x;
    this.y = y;
  }

  public isEqual(other: Point): boolean {
    //return it by using following
    return this.x == other.x && this.y === other.y;
  }
}

let p1 = new Point(10, 20);
let p2 = new Point(10, 20);
let p3 = new Point(88, 88);

console.log(p1 === p2); // should be false
console.log(p1.isEqual(p2)); // should be true
console.log(p1.isEqual(p3)); // should be false
