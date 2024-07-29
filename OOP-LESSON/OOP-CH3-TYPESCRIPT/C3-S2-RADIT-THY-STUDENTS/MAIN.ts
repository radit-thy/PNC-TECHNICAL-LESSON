class Student {
    private firstName: string;
    private lastName: string;
  
    constructor(firstName: string, lastName: string) {
      this.firstName = firstName;
      this.lastName = lastName;
    }
  
    getFullName() {
      return this.firstName + " " + this.lastName;
    }
  }
  
  class Classroom {
    private name: string;
    private school: School;
    private students: Student[] = [];
  
    constructor(school: School, name: string) {
      this.school = school;
      this.name = name;
    }
  
    addStudent(student: Student) {
      this.students.push(student);
    }
  
    getNumberOfStudents(): number {
      return this.students.length;
    }
  }
  
  class School {
    private name: string;
    private classrooms: Classroom[] = [];
  
    constructor(name: string) {
      this.name = name;
    }
  
    addClassroom(classroomName: string): Classroom {
      let newCLassroom = new Classroom(this, classroomName);
      this.classrooms.push(newCLassroom);
      return newCLassroom;
    }
  }
  
let school1= new  School("School 1");
let school2= new School("School 2");


let  student1= new  Student ("Radit", "Thy");
let  student2 =new   Student("Dit","Ra");
let  student3 =new   Student("Dy","Ra");
let  student4 =new   Student("Da","Ra");


let classroom1 = school1.addClassroom("WebA");
let classroom2 = school2.addClassroom("WebB");


console.log(classroom1.getNumberOfStudents());
console.log(classroom2.getNumberOfStudents());
