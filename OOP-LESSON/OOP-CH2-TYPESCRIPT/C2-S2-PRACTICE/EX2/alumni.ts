class Skills {
    VeuJs: number;
    NodeJs: number;
    OOP:boolean;

    constructor(VeuJs:number, NodeJs:number,OOP:boolean){
        this.VeuJs = VeuJs;
        this.NodeJs = NodeJs;
        this.OOP = OOP;
    }
    getSalary(){
        if (this.VeuJs<1 && this.NodeJs<1 && !this.OOP) {
            return 250;

        }else if(this.VeuJs>1 && this.NodeJs<1 && !this.OOP) {
            return 350; 

        }else if(this.VeuJs>1 && this.NodeJs>1 && !this.OOP) {
            return 450;  

        }else if(this.VeuJs>1 && this.NodeJs>1 && this.OOP) {
            return 1000; 

        }
    }
}
let Alumni1 = new Skills(0.5, 0.5, false);
let Alumni2 = new Skills(2, 0.5, false);
let Alumni3 = new Skills(2, 2, false);
let Alumni4 = new Skills(2, 2, true);

console.log("Alumni1 salary",Alumni1.getSalary());
console.log("Alumni2 salary",Alumni2.getSalary());
console.log("Alumni3 salary",Alumni3.getSalary());
console.log("Alumni4 salary",Alumni4.getSalary());





