// Start this project 
// and have a look in the 'Console' and the 'Network' tab in chrome
const studentsContainer = document.getElementById("studentsContainer");

function afterStudentRequest(response) {
  // TODO: Display the list of students in the DOM
  for(index of response.data){
    let table = document.createElement('table');
    let thead = document.createElement('thead');
    let th1 = document.createElement('th');
    th1.textContent = "name";
    let th2 = document.createElement('th');
    th2.textContent = "nickname";
    let th3 = document.createElement('th');
    th3.textContent = "class";

    thead.appendChild(th1);
    thead.appendChild(th2);
    thead.appendChild(th3);
    table.appendChild(thead);

    let tbody = document.createElement('tbody');
    let tr = document.createElement('tr');
    let td1 = document.createElement('td');
    let td2 = document.createElement('td');
    let td3 = document.createElement('td');

    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    tbody.appendChild(tr);

    table.appendChild(thead);
    table.appendChild(tbody);
    console.log(table);

    return index;
  }
  let container = document.createElement('body');
  container.appendChild(table);
  console.log(container);

}


// The URL of the data we want to get
const STUDENT_URL = "data/students.json";

// We use Axios library to do a HTTP request to the server
// Request a GET on STUDENT_URL to get the data from the JSON
// Once done the function 'afterStudentRequest' will be called
axios.get(STUDENT_URL).then(afterStudentRequest);
