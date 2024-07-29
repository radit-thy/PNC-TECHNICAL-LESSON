
let Data = [
    { first: 'Radit', lastname: 'Thy', email: '@dit' },
    { first: 'Rada', lastname: 'Thy', email: '@da' },
    { first: 'Rado', lastname: 'Thy', email: '@do' },
    { first: 'Rady', lastname: 'Thy', email: '@dy' },
    { first: 'Rady', lastname: 'Thy', email: '@dy' },
    { first: 'Rady', lastname: 'Thy', email: '@dy' }

]

let container = document.querySelector('.container');

let table = document.querySelector('.table');

let thead = document.createElement('thead');

let tbody = document.createElement('tbody');

let trthead = document.createElement('tr');

let ththead = document.createElement('th');

let trtbody = document.createElement('tr');

let thtbody = document.createElement('th');

let tdtbody = document.createElement('td');


container.appendChild(table)
table.appendChild(thead)
thead.appendChild(trthead)
trthead.appendChild(ththead)

table.appendChild(tbody)
tbody.appendChild(trtbody)
trtbody.appendChild(tdtbody)

console.log(container)