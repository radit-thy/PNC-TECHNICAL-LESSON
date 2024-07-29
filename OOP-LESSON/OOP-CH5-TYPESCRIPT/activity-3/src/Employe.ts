// class Contract {}

// class Employee {
//   private contracts: Contract[] = []; // this is intresting  only for commercials
//   private teamMembers: Employee[] = []; // this is intresting  only for managers
//   private skills: String[] = []; // this is intresting  only for develeppers

//   /**
//    * @param name  employee name
//    * @param employeeType can be either "DEVELOPPER" or "MANAGER" or "COMERCIAL"
//    */
//   constructor(private name: string, private employeeType: string) {}

//   getSalary(): number {
//     if (this.employeeType === "COMERCIAL") {
//       return this.contracts.length * 400;
//     } else if (this.employeeType === "MANAGER") {
//       return this.teamMembers.length * 600;
//     } else if (this.employeeType === "DEVELOPPER") {
//       let salary = this.skills.length * 500;

//       if (this.skills.includes("OOP")) {
//         salary += 2000;
//       }
//       return salary;
//     }
//     return 0; // Else we don't know
//   }
// }
