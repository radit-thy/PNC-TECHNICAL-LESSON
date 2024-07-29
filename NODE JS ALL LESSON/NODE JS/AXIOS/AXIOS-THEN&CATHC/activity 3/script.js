function afterSuccess(response) {
  // log the data from the response
  console.log(response);
  let table = document.createElement('table');
  let thead = document.createElement('thead');
  let tbody = document. createElement('tbody');
  
  let tr1 = document.createElement('tr');
  let th1 = document.createElement('th');
  th1.textContent = 'ID';
  let th2 = document.createElement('th');
  th2.textContent = 'Name';
  let th3 = document.createElement('th');
  th3.textContent = 'Username';
  let th4 = document.createElement('th');
  th4.textContent = 'Email'
  let th5 = document.createElement('th');
  th5.textContent = 'Phone';
  let th6 = document.createElement('th');
  th6.textContent = 'Website';
  let th7 = document.createElement('th');
  th7.textContent = 'Comapany';

  thead.appendChild(tr1);
  tr1.appendChild(th1);
  tr1.appendChild(th2);
  tr1.appendChild(th3);
  tr1.appendChild(th4);
  tr1.appendChild(th5);
  tr1.appendChild(th6);
  tr1.appendChild(th7);

  table.appendChild(thead);

  response.data.forEach(user => {
    let tr2 = document.createElement('tr');
    let td1 = document.createElement('td');
    td1.textContent = user.id;
    let td2 = document.createElement('td');
    td2.textContent = user.name;
    let td3 = document.createElement('td');
    td3.textContent = user.username;
    let td4 = document.createElement('td');
    td4.textContent = user.email;
    let td5 = document.createElement('td');
    td5.textContent = user.phone;
    let td6 = document.createElement('td');
    td6.textContent = user.website;
    let td7 = document.createElement('td');
    td7.textContent = user.company['name'];

    tbody.appendChild(tr2);
    tr2.appendChild(td1);
    tr2.appendChild(td2);
    tr2.appendChild(td3);
    tr2.appendChild(td4);
    tr2.appendChild(td5);
    tr2.appendChild(td6);
    tr2.appendChild(td7);
    
    table.appendChild(tbody);
  });
  document.body.appendChild(table);
}

function afterFailed(error) {
  // 2 - TODO log the error message
  console.log(error);
}

// 1 - TODO change the request to produce an ERROR
let request = "https://jsonplaceholder.typicode.com/users";
axios.get(request).then(afterSuccess).catch(afterFailed);
