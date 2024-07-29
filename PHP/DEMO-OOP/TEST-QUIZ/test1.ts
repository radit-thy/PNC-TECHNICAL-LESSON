
abstract class Animal {
    constructor(protected weight: number) {
        
    }
}

// class Dog extends Animal {
//     constructor(weight: number) {}
// }

let dog = new Animal(48);
console.log(dog.weight);
