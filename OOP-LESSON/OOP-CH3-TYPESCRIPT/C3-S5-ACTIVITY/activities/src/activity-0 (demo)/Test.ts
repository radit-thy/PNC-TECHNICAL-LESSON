class Student {
  
  constructor(private name) {}

  isEqual(other: Student) {
    return this.name == other.name;
  }
}

let student1 = new Student("hak");
let student2 = new Student("hak");

console.log(student1.isEqual(student2));
