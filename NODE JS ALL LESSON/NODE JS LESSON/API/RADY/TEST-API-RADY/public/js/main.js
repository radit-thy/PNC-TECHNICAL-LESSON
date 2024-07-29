
function displayItem(res){
    let items = res.data.item;
    console.log(items);

    let html = " ";
    for(let item of items){
        console.log(item.name);
        html += `
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
                        <input type="text" class="form-control" value="${item.name}" id="title-${item.id}" />
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
        `
    }
    document.querySelector("tbody").innerHTML = html;
}

axios
    .get("http://localhost:3000/api/v1/items")
    .then(displayItem)
    .catch(error => console.log(error));