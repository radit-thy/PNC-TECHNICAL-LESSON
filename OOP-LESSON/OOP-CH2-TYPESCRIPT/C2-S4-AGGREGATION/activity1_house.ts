//class house
class House {
    numberDoor: number;
    owner: string;
    trees:Tree[] = [];

    constructor(numberDoor: number, owner:string) {
        this.numberDoor = numberDoor;
        this.owner = owner;
        
    }
    //function add trees
    setTree(tree:Tree){
        this.trees.push(tree)

    }
}
//class trees
class Tree {
    size: number;
    constructor(size:number) {
        this.size = size;
        
    }
}


let myHouse= new House(3,"Radit");
let trees1 = new Tree(50);
let trees2 = new Tree(70);
let trees3 = new Tree(100);

//add to function
myHouse.setTree(trees1);
myHouse.setTree(trees2);    
myHouse.setTree(trees3);

console.log(myHouse);