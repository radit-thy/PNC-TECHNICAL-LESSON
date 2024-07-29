class Point {
  constructor(public x: number, public y: number) {}

  /**
   * @param other the other point
   * @returns true if the given point is equal to current point
   */
  isEqual(other: Point): boolean {
    return this.x === other.x && this.y === other.y;
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
}

class Graphic2D {
  private lines: Line[] = [];

  contains(newLine: Line): boolean {
    // TODO :  return True if this line is already on the graphic, false otherwise
    for (const line of this.lines) {
      if(line.isEqual(newLine)) {
        return true;
      }
    }
    return false;
  }

  addLine(newLine: Line) {
     // TODO :  return add the line ONLY if the new line is NOT on th graphic2D
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
myGraphic.addLine(l2);		// should not be added

console.log(myGraphic);		// only l should be here
