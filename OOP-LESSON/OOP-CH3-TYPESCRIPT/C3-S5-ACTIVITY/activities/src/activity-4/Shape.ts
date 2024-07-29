class Point {
  constructor(public x: number, public y: number) {}

  /**
   * @param other the other point
   * @returns true if the given point is equal to current point
   */
  isEqual(other: Point): boolean {
    return this.x === other.x && this.y === other.y;
  }
  
  translate(x: number, y:number) : Point {
		// TODO create a new Point translated of (x, y)
    return new Point(this.x, this.y);

  }
}

class Line {
  constructor(
    public point1: Point,
    public point2: Point,
    public color: string
  ) {}

  isEqual(other: Line): boolean {
    return (
      this.color === other.color &&
      this.point1.isEqual(other.point1) &&
      this.point2.isEqual(other.point2)
    );
  }
 
  translate(x: number, y:number) : Line {
		// TODO create a new line translated of (x, y)
    return new Line(
      this.point1.translate(x, y),
      this.point2.translate(x, y),
      this.color
    );
  }
   
}

class Graphic2D {
  private lines: Line[] = [];

  contains(newLine: Line): boolean {
    for (let line of this.lines) {
      if (line.isEqual(newLine)) {
        return true;
      }
    }
    return false;
  }

  addLine(newLine: Line) {
    if (!this.contains(newLine)) {
      this.lines.push(newLine);
    }
  }
}

let p1 = new Point(10, 15);
let p2 = new Point(50, 15);
let p3 = new Point(10, 15);
let p4 = new Point(50, 15);
let l1 = new Line(p1, p2, "red");
let l2 = new Line(p3, p4, "red");

let myGraphic = new Graphic2D();
myGraphic.addLine(l1);
myGraphic.addLine(l2);

console.log(myGraphic);
