

function getItems(res) {
    let items = res.data;
   let output = "";
   for(let item of items) {
        output += `
      <tr>
        <td>${item.name}</td>
        <td>${item.price}</td>
        <td>
            <button class="btn btn-danger btn-sm" onclick="deleteItem('${item.id}')">Remove</button>
            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#item-${item.id}" >Edit</button>
        </td>
    </tr>
    <div class="modal fade" id="item-${item.id}">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Item</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" class="form-control" value="${item.title}" id="title-${item.id}" />
                    </div>

                    <div class="mb-3">
                        <input type="number" class="form-control" value="${item.price}" id="price-${item.id}" />
                    </div>
                    <div class="mb-3 d-grid gap-2">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="updateItem('${item.id}')">Update Now</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
      `;
   }
   document.querySelector("tbody").innerHTML = output;
}
// delete item
function deleteItem(id) {
  // delete item
  let isDelete = window.confirm("Are you sure?");
  if (isDelete) {
    axios.delete('/api/items/' + id)
    .then(res => {
      $.notify("Item deleted successfully", "success");
    })
    .catch(error =>{
      $.notify("Cannot delete item", "error");
    });
  } else {
    $.notify("You canncel delete item", "info");
  }
}
// update
function updateItem(id) {
  // get value from input
  let title = document.getElementById("title-" + id);
  let description = document.getElementById("description-" + id);
  let price = document.getElementById("price-" + id);
  let upateItem = {
    "title": title.value,
    "description": description.value,
    "price": price.value
  }
  axios.put('/api/items/' + id, upateItem)
  .then((res) => {
    $.notify(res.data.message, "success");
  })
  .catch((error) => {
    $.notify("Cannot update item!", "error");
  })
}
function createItem() {
    // Get value input
    let title = document.getElementById("title");
    let description = document.getElementById("description");
    let price = document.getElementById("price");

    let newItem = {
      "title": title.value,
      "description": description.value,
      "price": price.value
    }
    axios.post('/api/items', newItem)
    .then((res) => {
      $.notify(res.data.message, "success");
    })
    .catch((error) => { 
      $.notify("Cannot create Item!", "error");
    });

    // clear input
    title.value = "";
    description.value = "";
    price.value = "";
}
// btn create
document.querySelector("#btn-create").addEventListener("click", createItem);

// get
axios.get("/api/items")
.then(getItems)
.catch(error => console.log(error));


