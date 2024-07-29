function displayItiem(res) {
    let items = res.data;
    console.log(items);
    let html = " ";
    for (let item of items) {
        console.log(item.title);
        html += `
            <tr>
                <td>${item.title}</td>
                <td>${item.price}</td>

                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" >+ Add</button>
                    <button class="btn btn-danger btn-primary" onclick="deleteItem('${item.id}')">Delete</button>
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
    document.querySelector("tbody").innerHTML = html;
}

axios
    .get("/database/items.json")
    .then(displayItiem)
    .catch(error => console.log(error));