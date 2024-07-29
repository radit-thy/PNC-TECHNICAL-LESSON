const rows = document.querySelectorAll('tbody tr');

let firstname = [];
let lastname = [];
let email = [];
let phone = [];

for (let row of rows ){
    firstname.push(row.children[0].textContent);
    lastname.push(row.children[1].textContent);
    email.push(row.children[2].textContent);
    phone.push(row.children[3].textContent);
}
console.log(firstname);
console.log(lastname);
console.log(email);
console.log(phone);