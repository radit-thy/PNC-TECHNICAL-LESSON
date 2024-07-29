const users = {
  page: 2,
  per_page: 6,
  total: 12,
  total_pages: 2,
  data: [
    {
      id: 7,
      email: "michael.lawson@reqres.in",
      first_name: "Michael",
      last_name: "Lawson",
      avatar: "https://reqres.in/img/faces/7-image.jpg",
    },
    {
      id: 8,
      email: "lindsay.ferguson@reqres.in",
      first_name: "Lindsay",
      last_name: "Ferguson",
      avatar: "https://reqres.in/img/faces/8-image.jpg",
    },
    {
      id: 9,
      email: "tobias.funke@reqres.in",
      first_name: "Tobias",
      last_name: "Funke",
      avatar: "https://reqres.in/img/faces/9-image.jpg",
    },
    {
      id: 10,
      email: "byron.fields@reqres.in",
      first_name: "Byron",
      last_name: "Fields",
      avatar: "https://reqres.in/img/faces/10-image.jpg",
    },
    {
      id: 11,
      email: "george.edwards@reqres.in",
      first_name: "George",
      last_name: "Edwards",
      avatar: "https://reqres.in/img/faces/11-image.jpg",
    },
    {
      id: 12,
      email: "rachel.howell@reqres.in",
      first_name: "Rachel",
      last_name: "Howell",
      avatar: "https://reqres.in/img/faces/12-image.jpg",
    },
  ],
  support: {
    url: "https://reqres.in/#support-heading",
    text: "To keep ReqRes free, contributions towards server costs are appreciated!",
  },
};

// your code here
function displayTable() {
    for (let user of users.data) {
        let tr = document.createElement("tr");
        let tdID = document.createElement("td");
        let tdFName = document.createElement("td");
        let tdLName = document.createElement("td");
        let tdEmail = document.createElement('td');
        let tdAvatar = document.createElement('td');
        let avatar = document.createElement('img');
        avatar.src = user.avatar;
        
        tdID.textContent = user.id;
        tdFName.textContent = user.first_name;
        tdLName.textContent = user.last_name;
        tdEmail.textContent = user.email;
        tdAvatar.appendChild(avatar)

        tr.appendChild(tdID);
        tr.appendChild(tdFName);
        tr.appendChild(tdLName);
        tr.appendChild(tdEmail);
        tr.appendChild(tdAvatar);

        tbody.appendChild(tr);
    }
}


// main
const tbody = document.querySelector('tbody');
displayTable();