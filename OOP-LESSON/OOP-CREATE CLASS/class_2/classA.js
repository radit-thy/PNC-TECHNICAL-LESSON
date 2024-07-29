var Point = /** @class */ (function () {
    function Point(x, y) {
        this.x = x;
        this.y = y;
    }
    Point.prototype.isEqualTo = function (other) {
        return this.x == other.x && this.y == other.y;
    };
    return Point;
}());
var point1 = new Point(40, 30);
var point2 = new Point(40, 30);
console.log(point1.isEqualTo(point2));
