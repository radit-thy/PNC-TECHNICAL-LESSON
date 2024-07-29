
abstract class Animal {
    constructor(protected weight: number) {
        
    }
}

class Dog extends Animal {
    constructor(weight: number) {
        super(weight);
    }
}

let dog = new Dog(48);
console.log(dog.weight);
