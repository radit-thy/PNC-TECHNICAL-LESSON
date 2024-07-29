
abstract class Animal {
    constructor(protected name: string) {
        
    }
    abstract playSound(): void;
}

class Cat extends Animal {
    constructor(name:string) {
        super(name)
        
    }
    playSound(): void{
        console.log("Hello Good morning");
    }
}