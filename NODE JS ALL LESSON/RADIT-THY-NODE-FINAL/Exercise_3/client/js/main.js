const URL = 'http://localhost:3000';
function getTodo(res) {
   // TODO
   let items = res.data.item;
   console.log(items);
   let output = " ";
   for(let item of items){
      output += `
      <tr>
      <td>${item.user_id}</td>
      <td>${item.title}</td>
      <td>${item.description}</td>
      <td>${item.isCompleted[true]}<span class="badge bg-success">DONE</span></td>
      <td>${item.isCompleted[false]}<span class="badge bg-danger">TODO</span></td>
      `
   }
   document.querySelector("tbody").innerHTML = html;
   
}

// TODO : request axios.get(...)...
axios
   .get("./database/todos.json")
   .then(getTodo)
   .catch(error => console.error(error))