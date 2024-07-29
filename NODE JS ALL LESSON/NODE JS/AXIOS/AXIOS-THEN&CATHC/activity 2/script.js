function afterSuccess(response) {
  // log the data from the response
  console.log(response);
}

function afterFailed(error) {
  // 2 - TODO log the error message
  console.log(error);
}

// 1 - TODO change the request to produce an ERROR
let request = "https://jsonplaceholder.typicode.com/users";
axios.get(request).then(afterSuccess).catch(afterFailed);
