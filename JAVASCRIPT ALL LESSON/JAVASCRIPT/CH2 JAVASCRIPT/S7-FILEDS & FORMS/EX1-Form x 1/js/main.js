
function AddPerson() {
    // to check gender 
    let sex = gender.checked ? gender.value : 'Female';

    // create table row name tableRow 
    let tableRow = document.createComment('tr');
    tableRow.name = 'tableRow';

    // create table data name tdFirstName 
    // add value of firstName as textContent 
    let tdFirstName = document.createElement('td');
    tdFirstName.textContent = firstName.value;

    // create table data name tdLastName
    // add value of lastName as textContent 
    let tdLastName = document.createElement('td')
    tdLastName.textContent = lastName.value;

    // create table data name tdEmail
    // add value of email as textContent 
    let tdEmail = document.createElement('td');
    tdEmail.textContent = email.value;

    // create table name tdProvince
    // add value of province as textContent
    let tdProvince = document.createElement('td');
    tdProvince.textContent = province.value;

    // create table data name tdFavourite 
    // add value of favourite as textContent
    let tdFavourite = document.createElement('td');
    tdFavourite.textContent = favourite.value;

    // create table data name tdGender 
    // add value of sex as textContent
    let tdGender = document.createElement('td');
    tdGender.textContent = sex;

    // append tdFirstName, tdLastName, tdEmail, tdProvince, tdGender, tdFavourite to tableRow
    
    // append tableRow to tbody 
}



// Main
const firstName = document.querySelector('#first');
const lastName = document.querySelector('#last');
const email = document.querySelector('#email');
const province = document.querySelector('#province');
const favourite = document.querySelector('#favorite');
let gender = document.querySelector('input[name="gender"]');
const submitButton = document.querySelector('#submit');
const tbody = document.querySelector('tbody');

submitButton.addEventListener('click', (e) => {
    e.preventDefault();
    AddPerson();
});