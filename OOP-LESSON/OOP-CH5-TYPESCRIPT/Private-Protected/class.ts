
class Person {
    private name:string;
    protected address:string;
    constructor(name:string, address:string) {
        this.name = name;
        this.address= address;
        
    }
}

class Student extends Person{
    test:string;
    constructor(name:string,address:string,test:string) {
        super(name,address);
        this.test = test;
        this.name
        

    }
}