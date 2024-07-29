class Person {
    name: string;
    address: string;
    constructor(name: string, address: string) {
        this.name = name;
        this.address = address;
    }
}

class Employee extends Person {
    salary: number;

    constructor(name: string, address: string, salary: number) {
        super(name, address);
        this.salary = salary;
    }
}

class Departement extends  Person{
   departmentName :string ;
   constructor(name: string, address: string, departmentNme: string){
    super(name, address);
    this.departmentName= departmentNme;
   }

    

    
}

let radit = new Employee("radit", "Cambodia", 2000);

let Ddit = new Departement("OOP Department", "Phnom Penh","IT");
console.log(radit);
console.log(Ddit);

