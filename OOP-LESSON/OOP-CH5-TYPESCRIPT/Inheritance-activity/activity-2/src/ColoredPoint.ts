import { Point } from "./Point";

export class ColoredPoint extends Point {
  private color: string;

  constructor(x: number, y: number, color: string) {
    super(x, y);
    this.color = color;
  }

  /**
   * @returns information about the colored point
   */
  getInfo(): string {
    // TODO : must get the info from point and add the color
    //======Ways 1======
    // const PointInfo = super.getInfo();
    // return `${PointInfo}, Color: ${this.color}`; //return from Point

    //======Way 2 ======
    return super.getInfo() +" Color: "+this.color;//return from ColoredPoint
  }
}
