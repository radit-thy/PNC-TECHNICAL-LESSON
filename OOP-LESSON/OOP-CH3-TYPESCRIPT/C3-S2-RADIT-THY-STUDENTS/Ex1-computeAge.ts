

class Person {
    private name:string;
    private yearOfBirth:number;
    constructor(name:string,yearOfbirth:number) {
        this.name = name;
        this.yearOfBirth= yearOfbirth;
        
    }
    //getName
    getName(): string{
        return this.name;
    }
    //getYearOfbirth
    getYearOfbirth(): number{
        return this.yearOfBirth;
    }
    
}

class Calendar {
    public currentYear = 2024;

    //get current year
    getCurrentYear(): number{
        return this.currentYear;    
    }
    //get age person
    computeAge(person:Person):number {
        return this.currentYear - person.getYearOfbirth();
    }
    
}

//
let person = new Person("Radit Thy",2004);
let personName = person.getName();

let calendar = new Calendar();
let agePerson = calendar.computeAge(person);
console.log(personName,agePerson,"Year");




