import { Computer } from "./computer";
export class shop{
    private items?:Computer[]=[]
    constructor(private name:string){
        this.name = name;
    }
    public addComputer(computer:Computer){
        this.items.push(computer);
    }
}

