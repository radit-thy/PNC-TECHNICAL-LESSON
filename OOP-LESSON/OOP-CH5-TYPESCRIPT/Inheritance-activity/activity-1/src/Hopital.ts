class Person {
  name: string;
  address: string;
  dateBirth: string;
  constructor(name: string, address: string, dateBirth: string) {
    this.name = name;
    this.address = address;
    this.dateBirth = dateBirth;
  }
}

class Employee extends Person{
  // name: string;
  // address: string;
  // dateBirth: string;
  salary: number;
  constructor(
    name: string,
    address: string,
    dateBirth: string,
    salary: number
  ) {
    super(name, address, dateBirth);
    this.salary = salary;
  }
}

class Doctor extends Employee {
  // name: string;
  // address: string;
  // dateBirth: string;
  // salary: number;
  medicalBranch: string;

  constructor(
    name: string,
    address: string,
    dateBirth: string,
    salary: number,
    medicalBranch: string
  ) {
    super(name, address, dateBirth,salary)
    this.medicalBranch = medicalBranch;
  }
};

class Manager  extends Doctor{
  // name: string;
  // address: string;
  // dateBirth: string;
  // salary: number;
  // medicalBranch: string;
  skill:string;

  constructor(
    name: string,
    address: string,
    dateBirth: string,
    salary: number,
    skill: string
  ) {
    // this.name = name;
    // this.address = address;
    // this.dateBirth = dateBirth;
    // this.salary = salary;
    // this.medicalBranch = skill;
    super(name,address,dateBirth,salary,skill)
  }
}

let doctor = new Doctor("Tata", "Paris", "103", 120, "Panadol");
let manager = new Manager("Tutu", "Paris", "3030", 300, "IT");
console.log(doctor);
console.log(manager);
