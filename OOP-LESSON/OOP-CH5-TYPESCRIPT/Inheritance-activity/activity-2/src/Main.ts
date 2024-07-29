import { ColoredPoint } from "./ColoredPoint";
import { Point } from "./Point";

let p1 = new Point(10, 20);
let p2 = new ColoredPoint(10, 20, "red");

console.log(p1.getInfo());
console.log(p2.getInfo());
