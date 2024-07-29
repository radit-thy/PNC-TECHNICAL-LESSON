
/*
 INSTRUCTIONS
  1 -  Create a type  `Person` with the following properties:
         - name			(string)
         - nationality	(string)
         - salary			(string)

  2 -  For all the functions : add the parameter types and return type

  3 -  Create 2 objects of type personn (like you want) and  test the 3 functions

*/
type person = {
  name: string;
  nationality: string;
  salary: string;
}

let person1:person = {name:"Radit", nationality:"USA",salary:"500"}
let person2:person = {name:"Radit", nationality:"USA",salary:"500"}

function getName(person) {
  return person.name;
}

function sumSalaries(person1, person2) {
  return person1.salary + person2.salary;
}

function isFrench(person) {
  return person.nationality == "French";
}
