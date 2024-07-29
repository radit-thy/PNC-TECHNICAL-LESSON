// TODO
// Get URL https://reqres.in/api/users?page=2

function afterRespone(response) {
    console.log(response);

    for(let value of  response.data.data) {
    let ul = document.createElement('ul');
    let pName = document.createElement('li');
    pName.textContent = value.last_name;
    let pEmail = document.createElement('li');
    pEmail.textContent = value.email;
    ul.appendChild(pName);
    ul.appendChild(pEmail);

    document.body.appendChild(ul);
    };
}
function afterError(error) {
    console.log(error);
};

let btn = document.querySelector('button');
btn.addEventListener('click',function(){
    let request = "https://reqres.in/api/users?page=2";
    axios.get(request).then(afterRespone).catch(afterError);
});
