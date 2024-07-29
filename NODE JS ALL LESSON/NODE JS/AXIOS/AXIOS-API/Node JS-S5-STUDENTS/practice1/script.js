// GET URL : https://reqres.in/api/unknown/2

function afterRespone(response) {
    // log the data from the response
    console.log(response);
    let p = document.querySelector('#theText');
    p.textContent = response.data.data.name;
    document.querySelector('#theText').style.backgroundColor = response.data.data.color;

    document.body.appendChild(p);
}
function afterError(error) {
    // 2 - TODO log the error message
    console.log(error);
}
let request = "https://reqres.in/api/unknown/2";
axios.get(request).then(afterRespone).catch(afterError);