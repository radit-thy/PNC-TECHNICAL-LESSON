
class Contract{};

abstract class Employee {
    protected name:string;
    constructor(name:string) {
        this.name = name;
        
    }
    abstract getSalary(): number;
}
class COMERCIAL extends Employee {
    private contracts: Contract[];
    constructor(name:string, contracts:Contract[]) {
        super(name);
        this.contracts = contracts;
        
    }
    getSalary(): number {
        return this.contracts.length * 400;
      }
}

class MANAGER extends Employee {
    private teamMembers:Employee[];
    constructor(name:string, teamMembers:Employee[]) {
        super(name)
        this.teamMembers=teamMembers;
        
    }
    getSalary(): number {
        return this.teamMembers.length * 600;
      }
}

class DEVELOPPER extends Employee {
    private skills:string[];
    constructor(name:string, skills:string[]) {
        super(name)
        this.skills = skills;
        
    }
    getSalary(): number {
        let salary = this.skills.length * 500;
    
        if (this.skills.includes("OOP")) {
          salary += 2000;
        }
    
        return salary;
      }
}

// 
const commercialEmployee = new COMERCIAL("Radit", [new Contract(), new Contract()]);
const managerEmployee = new MANAGER("Rado", [new DEVELOPPER("Koko", ["JavaScript", "TypeScript", "OOP"])]);
const developerEmployee = new DEVELOPPER("Rady", ["Python", "Java"]);

console.log(commercialEmployee.getSalary()); 
console.log(managerEmployee.getSalary());    
console.log(developerEmployee.getSalary());  

