const users = [
    {first_name:'Yon',last_name:'Yen',gmail:'yon@gmail.com',phone:'1234567'},
    {first_name:'Rady',last_name:'Y',gmail:'rady@gmail.com',phone:'12345627'},
    {first_name:'Him',last_name:'Hey',gmail:'him@gmail.com',phone:'12345627'},
]

function createTableRow(user) {
    console.log(user.first_name);
    let tr = document.createElement('tr');

    let first_name = document.createElement('td');
    first_name.textContent = user.first_name;

    let last_name = document.createElement('td');
    last_name.textContent = user.last_name;

    let gmail = document.createElement('td');
    gmail.textContent = user.gmail;

    let phone = document.createElement('td');
    phone.textContent = user.phone;

    let action = document.createElement('td');

    let button = document.createElement('button');
    button.textContent = "Delete"
    button.className = 'btn btn-danger'

    action.appendChild(button);
    tr.appendChild(first_name);
    tr.appendChild(last_name);
    tr.appendChild(gmail);
    tr.appendChild(phone);
    tr.appendChild(action);
    tbody.appendChild(tr);
}

let tbody = document.querySelector('tbody');
for (const user of users) {
    createTableRow(user)
}

