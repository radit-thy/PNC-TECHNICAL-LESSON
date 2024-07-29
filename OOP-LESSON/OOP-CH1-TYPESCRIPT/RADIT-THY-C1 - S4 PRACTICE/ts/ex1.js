var person1 = { name: "Radit", nationality: "USA", salary: "500" };
var person2 = { name: "Radit", nationality: "USA", salary: "500" };
function getName(person) {
    return person.name;
}
function sumSalaries(person1, person2) {
    return person1.salary + person2.salary;
}
function isFrench(person) {
    return person.nationality == "French";
}
