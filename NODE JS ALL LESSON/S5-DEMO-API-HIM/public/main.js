
let URL = "http://localhost:3000";

//function delete data//
function deleteStudent(e){
    let id = e.target.id;
    axios.delete(URL + "/student/delete/" + id).then((res)=>{
        if(res.status == 200){
            displayStudents();
            location.reload();
        }
    });
}

//function edit data//
function editStudent(e){
    let id = e.target.id;
    axios.put(URL + "/student/edit/" + id).then((res)=>{
        if(res.status == 200){
            displayStudents();
            location.reload();
        }
    });
}

//function display data//
function displayStudents(){
    axios.get(URL+ "/students").then((res)=>{
        let data = res.data.data;
        let ol = document.querySelector('#students-list');
        let id = 0;
        data.forEach(student => {
            let li = document.createElement('li');
            li.textContent = student.name;

            let btnDelete = document.createElement("button");
            btnDelete.addEventListener("click",deleteStudent);
            btnDelete.textContent = "Delete";
            btnDelete.id = id;

            let btnEdit = document.createElement("button");
            btnEdit.addEventListener("click",editStudent);
            btnEdit.textContent = "Edit";
            btnEdit.id = id;
            
            ol.appendChild(li);
            ol.appendChild(btnDelete);
            ol.appendChild(btnEdit);
            id+=1;
        });
    });
}
displayStudents();

//function add data//
function addNewStudent() {
    let studentName = document.querySelector("#student").value;
    let student = { "name": studentName };
    axios.post(URL + "/student/create", student).then((res) => {
        if (res.data.status == 200) {
            displayStudents();
        }
    });
}

let btnAdd = document.querySelector("#add");
btnAdd.addEventListener('click', addNewStudent);

