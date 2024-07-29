const container = document.querySelector('#container');
function getUsers(res) {
    let users = res.data.data;
    let html = '';
    for(let user of users) {
        html += `
        <div class="card mb-2">
            <div class="card-body d-flex justify-content-between">
                <h5 class="card-title">${user.name}</h5>
                <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#user-${user.id}">View</button>
            </div>
        </div>
   

        <div class="modal fade" id="user-${user.id}">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">User Detail</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <ul>
                    <li>Name: ${user.name}</li>
                    <li>Email: ${user.email}</li>
                    <li>University: ${user.education[0].university}</li>
                    <li>City: ${user.education[0].location[0].city}</li>
                    <li>Country: ${user.education[0].location[0].country}</li>
                    <li>Social Media: ${user.education[0].social[0].name}</li>
                </ul>
            </div>

            </div>
        </div>
        </div>
        `;
    }
    container.innerHTML = html; 
}
axios
.get('/api/users')
.then(getUsers)
.catch((error) => {console.log(error);})