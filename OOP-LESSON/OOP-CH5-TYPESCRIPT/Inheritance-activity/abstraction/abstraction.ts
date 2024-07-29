
abstract class Animal {
    private name: string;
    constructor(theName: string) {
        this.name = theName;
        
    }
    getName(){
        return this.name;
    }
    //===========abstract method=============
    abstract playsound(sound:string):void  
}

class Dog extends Animal{
    constructor(name:string){
        super(name);

    }
    playsound(sound: string): void {
        console.log("Woof!"+ sound);
    }
}

class Cat extends Animal{
    constructor(name:string){
        super(name);

    }
    playsound(sound: string): void {
        console.log("Meow! " + sound);
    }
}

let dog1 = new Dog("Tom");
let cat1 = new Dog("Moaw!");

dog1.playsound("Hello Radit");  // Woof! Hello World
cat1.playsound("Hello Radit");  // Meow! Hello World

console.log(dog1);
console.log(cat1);



